<?php
$app->get('/','App\Action\PrincipalAction:index');
$app->get('/practica','App\Action\PrincipalAction:practica');
$app->get('/contacto','App\Action\PrincipalAction:contacto');

$app->group('/admin',function(){
    $this->get('','App\Action\Admin\PrincipalAction:index');

    $this->get('/practica','App\Action\Admin\PracticaAction:index');
    $this->get('/practica/{id}/view','App\Action\Admin\PracticaAction:view');
    $this->get('/practica/email','App\Action\Admin\PracticaAction:search');
});

