<?php
namespace App\Controllers;

use App\Models\Usuario;

class Autenticacao extends ControllerCore {

    public function __construct() {}

    public function entrar() {
        //var_dump($_POST["nome"]);

        $usuario = new Usuario(
            $_POST["nome"],
            $_POST["senha"]
        );

        if ($usuario->getNome() == "klaus" && $usuario->getSenha() == "123") {

            $this->addDadosView("tituloPagina", "Área autenticada");
            //$this->addDadosView("usuario", $usuario);
            $this->carregarView("area_autenticada");

            $_SESSION["usuario"] = serialize($usuario);

        } else {
            $_SESSION["erro_autenticacao"] = "Login incorreto";

            header("Location:".BASE_URL);
        }
    }

    public function sair() {
        unset($_SESSION["usuario"]);
        header("Location:".BASE_URL);
    }
}