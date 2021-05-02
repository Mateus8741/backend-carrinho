<?php
namespace App;

use App\Controllers\Paginas;

class ConfRotas {

    private array $rotas;

    public function __construct(array $rotas) {
        $this->rotas = $rotas;

        $segmentos = $this->getSegmentosUrl();
        
        $this->processarRotas($segmentos);
    }

    /**
     * Tratar a requisição
     */
    private function getSegmentosUrl() {
        $segmentos = $_SERVER["REQUEST_URI"];
        $segmentos = explode("/", $segmentos);

        foreach ($segmentos as $i => $valor) {
            if (empty($valor)) {
                unset($segmentos[$i]);
            }
        }
        array_shift($segmentos);

        return  implode("/", $segmentos);
    }

    /**
     * Definir qual controlador vai ser criado para responder a rota
     */
    private function processarRotas(string $segmentos) {

        foreach ($this->rotas as $confRota) {
            if ($confRota["rota"] == "/$segmentos") {
                $nomeClasse = $confRota["controller"];
                $controller = new $nomeClasse;

                $nomeFuncao = $confRota["funcao"];

                if (method_exists($controller, $nomeFuncao)) {
                    $controller->$nomeFuncao();
                    $rotaExiste = true;
                    break;

                } else {
                    echo "Método não existe";
                }
            }
        }
        if (empty($rotaExiste)) {
            (new Paginas())->erro404();
        }
    }
}