<?php
class Core {

    protected $controller = 'Views'; // Valor por defecto
    protected $method = 'inicio';     // Valor por defecto
    protected $parameters = [];

    public function __construct() {
        $url = $this->getUrl();

        // Comprobar si existe el controlador
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            // Si existe, se establece como controlador
            $this->controller = ucwords($url[0]);
            // Se elimina la parte del controlador del array
            unset($url[0]);
        }

        // Requerir el controlador
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Comprobar la segunda parte de la URL (método)
        if (isset($url[1])) {
            // Comprobar si el método existe en el controlador
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                // Eliminar la parte del método del array
                unset($url[1]);
            }
        }

        // Obtener los parámetros restantes
        $this->parameters = $url ? array_values($url) : [];

        // Llamar a un callback con array de parámetros
        call_user_func_array([$this->controller, $this->method], $this->parameters);
    }

    public function getUrl() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
