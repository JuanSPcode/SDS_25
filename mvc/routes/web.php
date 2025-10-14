<?php
use lib\Route;
use app\controllers\HomeController;
use app\models\Persona;

Route::get("/", [HomeController::class, "index"]);
Route::get("/calendario",[HomeController::class, "calendario"]);
Route::get("/mostrar", [HomeController::class, "mostrarPersonas"]);
Route::get("/crear", [HomeController::class,"crear"]);
Route::post("/guardar", [HomeController::class, "guardar"]);

Route::get("/eliminar/:id", [HomeController::class,"eliminar"]);

Route::get("/editar/:id", [HomeController::class,"editar"]);

Route::post("/actualizar", [HomeController::class,"actualizar"]);

Route::dispatch();

?>
