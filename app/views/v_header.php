<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$dadosView["tituloPagina"]?></title>
    
    <link rel="shortcut icon" href="<?=BASE_URL."/assets/img/logo.svg"?>" type="image/x-icon">
    <link rel="stylesheet" href="<?=BASE_URL."/assets/css/bootstrap.min.css"?>">
    <link rel="stylesheet" href="<?=BASE_URL."/assets/css/hover-min.css"?>">
</head>
<body>
    <header class="bg-primary">
        <div class="container bg-primary">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12">
                    <div class="row">
                        <div class="col-sm-4">
                            <a class="navbar-brand" href="<?=BASE_URL?>">
                                <img src="<?=BASE_URL."/assets/img/logo.svg"?>" alt="Logo" width="80px">
                                <span class="text-white font-weight-bold">MEU E-COMMERCE</span>
                            </a>
                            <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="col-sm-7 mt-sm-0 mt-3">
                            <form">
                                <p class="text-white text-center mb-0"><small>Nossa lojas | Tenha sua loja | Regulamentos Acessibilidade | Guia de segurança</small></p>
                                <input class="form-control mr-sm-2" type="search" placeholder="Procure por código, nome, marca..." aria-label="Procure por código, nome, marca...">
                            </form>
                        </div>
                        <div class="col-sm-1 mt-3 text-center">
                            <a href="#">
                                <a href="<?=BASE_URL."/carrinho"?>"><img src="<?=BASE_URL."/assets/img/shopping-cart.svg"?>" alt="Carrinho" width="50px"></a>
                                <p class="p-0 m-0"><span class="badge badge-pill badge-success">0</span></p>
                            </a>
                        </div>
                        <div class="col-12">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?=BASE_URL?>">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Ofertas do dia</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Celulares</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Notebooks</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Smart TV</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Móveis</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Eletrodomésticos</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row mt-5">