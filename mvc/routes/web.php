<?php
use lib\Route;
use app\controllers\HomeController;
use app\models\Persona;

Route::get("/", [HomeController::class, "index"]);
Route::get("/calendario",[HomeController::class, "calendario"]);
Route::get("/contacto",[HomeController::class, "contacto"]);
Route::get("/estadisticas",[HomeController::class, "estadisticas"]);

// MOSTRANDO LOS DIAS A DIAS
Route::get('/lunes', [HomeController::class,"lunes"]);
Route::get('/martes', [HomeController::class,"martes"]);
Route::get('/miercoles', [HomeController::class,"miercoles"]);
Route::get('/jueves', [HomeController::class,"jueves"]);
Route::get('/viernes', [HomeController::class,"viernes"]);
Route::get('/todo', [HomeController::class,"todo"]);

Route::post("/contacto", [HomeController::class, "agregarusuario"]);

Route::get("/mostrar", [HomeController::class, "mostrarPersonas"]);
Route::get("/crear", [HomeController::class,"crear"]);
Route::post("/guardar", [HomeController::class, "guardar"]);

Route::get("/eliminar/:id", [HomeController::class,"eliminar"]);

Route::get("/editar/:id", [HomeController::class,"editar"]);

Route::post("/actualizar", [HomeController::class,"actualizar"]);

Route::dispatch();

?>
