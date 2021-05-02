<?php
// Navegador -> index.php -> ConfRotas -> Controller -> Models -> (caminho reverso)

session_start();

require_once "vendor/autoload.php";
require_once "app/config/constantes.php";
require_once "app/config/rotas.php";

use App\ConfRotas;

new ConfRotas($rotas); // $rotas está em rotas.php