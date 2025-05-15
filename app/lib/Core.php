<?php

class Core
{

  protected $controller;
  protected $method;
  protected $parameters = [];
  public function __construct()
  {
    $url = $this->getUrl();

    $url = explode('/', $_SERVER['REQUEST_URI']);
    /* esta parte del codigo es super importante, basicamente lo que dice es si la URL no tiene ningun parametro despues de .com
    queremos que cargue la vista de inicio
    en cambio si despues encontramos un parametro que nuestro caso es un metodo
    queremos que cargue las vistas de cada metodo sin romper la logica de nuestro controlador */
    if (empty($url[1]) || $url[1] == '') {
      $url[1] = 'inicio';
    }

    $url[0] = 'views';
    //var_dump($url);
    if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
      $this->controller = ucwords($url[0]);
      unset($url[0]);
    }

    require_once '../app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;

    if (isset($url[1])) {
      //echo $url[1];
      if (method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      } else {
        require_once '../app/views/pages/error404.php';
        exit;
      }
    }

    $this->parameters = $url ? array_values($url) : [];
    call_user_func_array([$this->controller, $this->method], $this->parameters);
  }

  public function getUrl()
  {
    if (isset($REQUEST_URI['url'])) {

      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      return $url;
    }
  }
}
?>