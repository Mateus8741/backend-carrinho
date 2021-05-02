<section class="col-12">
    <?php
    if (!empty($carrinho)):?>
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">Seu carrinho está vazio</h4>
            <hr>
            <p class="mb-0">Vá para a página inicial ou procure no site os produtos que vão te deixar feliz. Quando encontrá-los, clique no botão adicionar ao carrinho ;)</p>
        </div>
    <?php
    else:?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th class="d-sm-block d-none">Produto</th>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center d-sm-block d-none">
                            <img src="<?=BASE_URL."/assets/img/guitar.jpg"?>" alt="prod" width="150px" class="img-thumbnail">
                        </td>
                        <td style="width:50%">
                            Sumidouro de palheta Marca X 1889 EXCLUSIVO! Só tem esse, compre logo que vai acabar!
                        </td>
                        <td style="width:10%">
                            <form action="<?=BASE_URL."/nova-qtd-produto/url-produto"?>" method="POST">
                                <div class="form-group">
                                    <input type="number" name="qtd-produto" class="form-control" min="1"/>
                                </div>
                            </form>
                        </td>
                        <td class="text-success text-center">
                            R$ 849,99
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center d-sm-block d-none">
                            <img src="<?=BASE_URL."/assets/img/guitar.jpg"?>" alt="prod" width="150px" class="img-thumbnail">
                        </td>
                        <td>
                            Sumidouro de palheta Marca X 1889 EXCLUSIVO! Só tem esse, compre logo que vai acabar!
                        </td>
                        <td>
                            <form action="<?=BASE_URL."/nova-qtd-produto/url-produto"?>" method="POST">
                                <div class="form-group">
                                    <input type="number" name="qtd-produto" class="form-control" min="1"/>
                                </div>
                            </form>
                        </td>
                        <td class="text-success text-center">
                            R$ 849,99
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card bg-light">
            <div class="card-body text-right">
                <h5 class="card-title mb-0"><strong>Total</strong> (10 itens)</h5>
                <p class="card-text text-muted"><small>(Em até 12x de R$ 119,00 com muito juros)</small></p>
                <a href="#" class="btn btn-success">Continuar</a>
                <p class="card-text text-muted"><small>Tem cupom ou vale compra? Você poderá utilizá-lo na etapa de pagamento</small></p>
            </div>
        </div>
    <?php
    endif;?>
</section>