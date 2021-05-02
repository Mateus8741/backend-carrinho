<?php
namespace App\Controllers;

use App\Controllers\ControladorCore;

class Paginas extends ControladorCore {
    
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->addTituloPagina("Página Inicial");
        $this->carregarPagina("v_home");
    }

    public function produto() {
        $this->addTituloPagina("Página Produto");
        $this->carregarPagina("v_produto");
    }

    public function carrinho() {
        $this->addTituloPagina("Página Carrinho");
        $this->carregarPagina("v_carrinho");
    }

    public function produtos() {
        if (!$this->estaLogado()) {
            header("Location:".BASE_URL);

        } else {
            $this->addTituloPagina("Listar Produtos");
            
            $this->addDadosPagina(
                "produtos",
                array("Monitor", "Placa mãe", "Memória RAM")
            );

            $this->carregarPagina("produtos");
        }
    }
    
    public function sobre() {
        echo __FUNCTION__;
    }

    public function erro404() {
        $this->carregarPagina("v_erro404");
    }
}
