<?php

namespace App\Action\Admin;

use App\Action\Action as Action;

final class PracticaAction extends Action{
    public function index($request,$response){
        $vars['title'] = 'Lista de Empleados';
        $vars['page'] = 'practica/list';

        $data = file_get_contents("data/employees.json");
        $products = json_decode($data, true);
        if(count($products) == 0){
            $vars['practica'] = $products;
        }

        return $this->view->render($response,'admin/template.phtml',$vars);
    }

    public function view($request,$response){
        $id = $request->getAttribute('id');
        if(!is_numeric($id)){
            return $response->withRedirect(PATH . '/admin/practica');
        }

        $data = file_get_contents("data/employees.json");
        $products = json_decode($data, true);
        $data1 = $products[1]['skills'];
       // echo "LISTA DE EMPLEADOS" . $data1[3]['skill'];

        if(count($products) == 0){
            return $response->withRedirect(PATH . '/admin/practica');
        }

        $vars['title'] = 'Vista de Empleados';
        $vars['page'] = 'practica/view';
        return $this->view->render($response,'admin/template.phtml',$vars);
    }

    public function search($request,$response){

        $vars['title'] = 'Detalles del Empleado Buscado';
        $vars['page'] = 'practica/email';
        return $this->view->render($response,'admin/template.phtml',$vars);
    }

}