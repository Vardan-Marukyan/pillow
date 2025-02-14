<?php



class Router
{
    private $routes;

    public function __construct()
    {
        $routersPath = ROOT."/config/route.php";
        $this->routes = include $routersPath;
    }

    public function isAjax()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
    }
    public function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();
        $uriSplit = explode("/", $uri);;

        foreach ($this->routes as $patternUri => $routesUri) {
            if (preg_match("~$patternUri~", $uri)) {
                $split = explode("/", $routesUri);

                $controllerName = ucfirst($split[0]) . 'Controller';
                $actionName = 'action' . ucfirst($split[1]);

                $controllerPath = ROOT . "/controllers/" . $controllerName . ".php";

                if (file_exists($controllerPath)) {
                    include_once $controllerPath;
                }

                $controller = new $controllerName;
                $result = $controller->$actionName(end($uriSplit));
                if($result != null){
                    break;
                }
            }
        }
    }
}