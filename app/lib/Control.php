<?php
class Control
{
  public function load_model($model)
  {
    require_once '../app/models/' . $model . '.php';

    return new $model;
  }

  public function load_view($view, $datos = [])
  {
    if(file_exists('../app/views/pages/' . $view . '.php'))
    {
      require_once '../app/views/pages/' . $view . '.php';
      
    }
    else
    {
      die("404 NOT FOUND");
    }
  }
}
//esto fue compliccado porque es una logica que nos facilita basntate la manera de gestionar los arhcivos por ejemplo anyadiendo el .php final para tener que solo poner el nombree de lo que quyeremos cargar
?> 