<?php

namespace App\Action\Admin;

use App\Action\Action as Action;

final class PrincipalAction extends Action{
    public function index($request,$response){
        $vars['page'] = 'principal'; 
        return $this->view->render($response,'admin/template.phtml',$vars);
    }

}