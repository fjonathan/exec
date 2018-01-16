<?php

class IndexModel {

    public function getList(){

        $getList = App::db()->table('data')->select('name','email')->get();
        return $getList;

    }

    public function registUser(){

        $uName = $_POST['name'];
        $uEmail = $_POST['email'];

        // Insert DB
        App::db()->table('data')->insert(array(
            'name' => $uName,
            'email' => $uEmail
        ));
    }

}