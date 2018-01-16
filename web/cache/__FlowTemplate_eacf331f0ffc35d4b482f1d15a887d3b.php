<?php
// index.html 2018-01-16 03:00:39 GMT
class __FlowTemplate_eacf331f0ffc35d4b482f1d15a887d3b extends \Flow\Template
{
    const NAME = 'index.html';

    public function __construct($loader, $helpers = [])
    {
        parent::__construct($loader, $helpers);
    }

    public function display($context = [], $blocks = [], $macros = [], $imports = [])
    {
        /* line 1 -> 15 */
        echo '<div class="carousel carousel-slider center fullscreen" data-indicators="true">
    <div class="carousel-item blue" href="#one!">
        <div class="form valign-wrapper">
                <div class="container">
                    <form method="post" name="registuser" id="registuser" enctype="multipart/form-data" class="center col s8">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="name" type="text" class="validate" parsley-trigger="change" data-parsley-minlength="9" data-parsley-maxlength="50" data-parsley-pattern="^[A-Z a-z á à â ã ä é è ê ë í ì î ï ó ò ô õ ö ú ù û ü ç Á À Â Ã Ä É È Ê Ë Í Ì Î Ï Ó Ò Ô Õ Ö Ú Ù Û Ü Ç]*$" required="" autocomplete="off">
                                <label class="active" for="name">Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate" required>
                                <label for="email">Email</label>
                            </div>
                        </div>

                    </form>
                    <button class="btn blue lighten-2 waves-effect waves-light" onclick="registUser()">Save
                        <i class="material-icons right">send</i>
                    </button>
                </div>
        </div>
    </div>
    <div class="carousel-item white" href="#two!">
        <div class="table valign-wrapper">
            <div class="container">
                <h2>Data</h2>
                <table class="centered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>

                    <tbody>
                    ';
        /* line 39 -> 55 */
        $this->pushContext($context, 'loop');
        $this->pushContext($context, 'user');
        foreach (($context['loop'] = $this->iterate($context, (isset($context['uList']) ? $context['uList'] : null))) as $context['user']) {
            /* line 39 -> 59 */
            echo '
                    <tr>
                        <td>';
            /* line 41 -> 63 */
            echo $this->helper('escape', $this->getAttr((isset($context['user']) ? $context['user'] : null), 'name', false));
            /* line 41 -> 65 */
            echo '</td>
                        <td>';
            /* line 42 -> 68 */
            echo $this->helper('escape', $this->getAttr((isset($context['user']) ? $context['user'] : null), 'email', false));
            /* line 42 -> 70 */
            echo '</td>
                    </tr>
                    ';
        }
        $this->popContext($context, 'loop');
        $this->popContext($context, 'user');
        /* line 44 -> 77 */
        echo '
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>';
    }

    protected static $lines = array(15=>1,55=>39,59=>39,63=>41,65=>41,68=>42,70=>42,77=>44,);
}
// end of index.html
