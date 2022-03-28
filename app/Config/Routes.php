<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->match(['get', 'post'], '/login', 'Login::index');
$routes->match(['get', 'post'], '/logout', 'Login::logout');
$routes->match(['get', 'post'], '/validar', 'Login::validar_usuario');
$routes->match(['get', 'post'], '/menu', 'Menu::index');
$routes->match(['get', 'post'], '/formul1', 'Menu::validar1');
$routes->match(['get', 'post'], '/formul2', 'Menu::validar2');
$routes->match(['get', 'post'], '/formul3', 'Menu::validar3');
$routes->match(['get', 'post'], '/formul4', 'Menu::validar4');
$routes->match(['get', 'post'], '/formul5', 'Menu::validar5');
$routes->match(['get', 'post'], '/formul6', 'Menu::validar6');
$routes->match(['get', 'post'], '/formul7', 'Menu::validar7');
$routes->get("sistema", "Sistema::index", ["namespace" => "App\Controllers\Systems"]);


/*SISTEMA*/
$routes->get("sistema", "Sistema::index", ["namespace" => "App\Controllers\Systems"]);

$routes->get("tipo", "Tipo::index", ["namespace" => "App\Controllers\Systems"]);

$routes->get("area", "Area::index", ["namespace" => "App\Controllers\Systems"]);

$routes->get("reclamo", "Reclamo::index", ["namespace" => "App\Controllers\Systems"]);

$routes->get("empleado", "Empleado::index", ["namespace" => "App\Controllers\Systems"]);
/*SEGURIDAD*/
$routes->get("rol", "Rol::index", ["namespace" => "App\Controllers\Tools"]);

$routes->get("usuario", "Usuario::index", ["namespace" => "App\Controllers\Tools"]);

$routes->get("grupo", "Grupo::index", ["namespace" => "App\Controllers\Tools"]);
$routes->get("opcion", "Opcion::index", ["namespace" => "App\Controllers\Tools"]);
$routes->get("persona", "Persona::index", ["namespace" => "App\Controllers\Tools"]);
$routes->get("usurol", "Usurol::index", ["namespace" => "App\Controllers\Tools"]);


$routes->match(['get', 'post'], "/agregar_area", "Area::agregar", ["namespace" => "App\Controllers\Systems"]);
$routes->match(['get', 'post'], "/agregar_tipo", "Tipo::agregar", ["namespace" => "App\Controllers\Systems"]);
$routes->match(['get', 'post'], "/agregar_sistema", "Sistema::agregar", ["namespace" => "App\Controllers\Systems"]);
$routes->match(['get', 'post'], "/agregar_empleado", "Empleado::agregar", ["namespace" => "App\Controllers\Systems"]);
$routes->match(['get', 'post'], "/jefe_area", "Jefe_area::index", ["namespace" => "App\Controllers\Systems"]);
$routes->match(['get', 'post'], "/agregrar_jefe_area", "Jefe_area::agregar", ["namespace" => "App\Controllers\Systems"]);
$routes->match(['get', 'post'], "/horario", "Horario::index", ["namespace" => "App\Controllers\Systems"]);
$routes->match(['get', 'post'], "/agregar_horario", "Horario::agregar", ["namespace" => "App\Controllers\Systems"]);
$routes->match(['get', 'post'], "/reclamo", "Reclamo::index", ["namespace" => "App\Controllers\Systems"]);
$routes->match(['get', 'post'], "/agregar_reclamo", "Reclamo::agregar", ["namespace" => "App\Controllers\Systems"]);
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
