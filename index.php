<?php 
	include("cabecalho.php");
	include("logica-usuario.php");
?>

<?php
if(isset($_GET["login"]) && $_GET["login"]==true) {
?>
<p class="alert-success">Logado com sucesso!</p>
<?php
}
?>
<?php
if(isset($_GET["login"]) && $_GET["login"]==false) {
?>
<p class="alert-danger">Usuário ou senha inválida!</p>
<?php
}
?>

<?php
if(isset($_GET["falhaDeSeguranca"])) {
?>
  <p class="alert-danger">Você não tem acesso a esta funcionalidade!</p>
<?php
}
?>

<?php
if(isset($_COOKIE["usuario_logado"])) {
?>
<p class="text-success">Você está logado como <?= $_COOKIE["usuario_logado"] ?></p>
<?php
} else {
?>
    <h1>Bem vindo!</h1>
	<h2>Login</h2>
        <form action="login.php" method="post">
            <table class="table">
                <tr>
                    <td>Email</td>
                    <td><input class="form-control" type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input class="form-control" type="password" name="senha"></td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-primary">Login</button></td>
                </tr>
            </table>
        </form>
<?php
}
?>
<?php include("rodape.php"); ?>