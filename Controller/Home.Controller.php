<?php
class Home
{
    public $smarty;

    public function __construct()
    {
        $this->smarty=new Smarty();
    }

    public function Inicio()
    {
        $this->smarty->assign('title','LOGIN');
        $this->smarty->display('Videoconsulta.tpl');
    }
}

?>