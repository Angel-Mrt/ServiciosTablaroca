<?php 
namespace Controllers;

use MVC\Router;

class PaginasController{

    public static function index(Router $router){
        $inicio = true;
        $router->render(('paginas/index'),[
            'titulo' => 'Incio',
            'inicio' => $inicio
        ]);
    }
    public static function servicios(Router $router)
    {
        $inicio = false;
        $router->render(('paginas/servicios'), [
            'titulo' => 'Mis Servicios',
            'inicio' => $inicio
        ]);
    }
    public static function proyectos(Router $router)
    {
        $inicio = false;
        $router->render(('paginas/proyectos'), [
            'titulo' => 'Mis Proyectos',
            'inicio' => $inicio
        ]);
    }
    public static function nosotros(Router $router)
    {
        $inicio = false;
        $router->render(('paginas/nosotros'), [
            'titulo' => 'Sobre Nosotros',
            'inicio' => $inicio
        ]);
    }
    public static function contacto(Router $router)
    {
        $inicio = false;
        $router->render(('paginas/contacto'), [
            'titulo' => 'Contactame',
            'inicio' => $inicio
        ]);
    }
}