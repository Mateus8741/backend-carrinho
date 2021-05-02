<?php
namespace App\Controllers;

class ControladorCore {

    private $dadosView = array();
    private $limiteOciosidade = 3600; // segundos

    public function __construct() {
        $this->verificarOciosidade();
    }

    protected function carregarPagina($nomeView) {
        $dadosView = $this->dadosView;
        require_once PATH_VIEW."v_header.php";
        require_once PATH_VIEW."$nomeView.php";
        require_once PATH_VIEW."v_footer.php";
        
    }
    
    /* INÍCIO CONTROLE DE VARIÁVEIS NAS VIEWS */

    protected function addTituloPagina($valor) {
        $this->dadosView['tituloPagina'] = $valor;
    }

    protected function addDadosPagina($nomeVariavel, $valor) {
        $this->dadosView[$nomeVariavel] = $valor;
    }

    /* FINAL CONTROLE DE VARIÁVEIS NAS VIEWS */


    /* INÍCIO CONTROLE DE LOGIN */

    protected function logarUsuario($usuario) {
        session_regenerate_id();
        $_SESSION['usuario-sistema'] = serialize($usuario);
        $_SESSION['ultimo-acesso'] = time();
    }
    
    protected function deslogarUsuario() {
        unset($_SESSION['usuario-sistema']);
        unset($_SESSION['ultimo-acesso']);
        session_destroy();
    }

    protected function estaLogado() {
        return isset($_SESSION['usuario-sistema']) ? true : false;
    }

    private function verificarOciosidade() {
        if ($this->estaLogado()) {
            $tempoOcioso = time() - $_SESSION["ultimo-acesso"];

            if ($tempoOcioso > $this->limiteOciosidade) {
                $this->deslogarUsuario();

            } else {
                $_SESSION["ultimo-acesso"] = time();
            }
        }
    }

    /* FINAL CONTROLE DE LOGIN */
}