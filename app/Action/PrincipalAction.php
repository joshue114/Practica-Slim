<?php
namespace App\Action;

final class PrincipalAction extends Action{

    public function index($request,$response){
        $vars['page'] = 'principal';
        return $this->view->render($response,'templates.phtml',$vars);
    }

    public function practica($request,$response){
        $vars['page'] = 'practica';
        return $this->view->render($response,'templates.phtml',$vars);
    }

    public function contacto($request,$response){
        $vars['page'] = 'contacto';
        return $this->view->render($response,'templates.phtml',$vars);
    }
}