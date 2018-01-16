<?php

class Index extends App
{

    public function __construct()
    {
        $this->reference = 'Index';
        $this->slug = 'index';
        $this->model = $this->model('IndexModel');
    }

    public function index()
    {

        $uList = json_decode(json_encode($this->model->getList()), true);

        $this->view($this->slug, 'index', [
            'uList' => $uList
        ]);
    }

    public function regist()
    {

        if (empty($_POST)){die();}

        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'email' => array(
                'required' => true,
                'mailcheck' => true
            ),
            'name' => array(
                'required' => true,
                'alphabetic_accents' => true,
                'length_min' => 9
            )
        ));

        if($validation->passed()) {
           $this->model->registUser();
        }

        // WATCH ERRORS

        /*
        else {
            echo 'Validation errors:';
            echo '<ul>';
            foreach($validation->errors() as $error)
            {
                echo '<li>'.ucfirst($error).'</li>';
            }
            echo '</ul>';
        }
        */

    }
}
