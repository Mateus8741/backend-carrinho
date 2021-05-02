<form action="<?=BASE_URL?>/login" method="post">
    <div><input type="text" name="nome"></div>
    <div><input type="password" name="senha"></div>
    <div><button type="submit">Entrar</button></div>
</form>

<p style="color:#f00"><?=$dadosView["erroLogin"] ?? ""?></p>