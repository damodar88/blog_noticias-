<?php session_start();?>
<?php  include 'Default/head.php';?>

<?php
if(isset($_SESSION["usuario"]["nombreUsuario"]) && isset($_SESSION["usuario"]["administrador"])==1){
?>

<?php include 'Default/menu.php' ?>

<div class="satarter-template">
  <br>
  <br>
  <br>
  <div class="jumbotron">
    <div class="container text-center">
      <h1><strong>Bienevenido</strong> usuario  <?php echo $_SESSION["usuario"]["nombreUsuario"];?></h1>

        <p>panel de control | <span class="label label-info"><?php echo $_SESSION["usuario"]["administrador"] == '1'  ? "Admin":"Cliente";?></span></p>

        <p>
          <a href="../Helper/CerarSesion.php" class="btn btn-primary btn-lg">Cerrar Sesion</a>
        </p>

    </div>

  </div>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include 'Default/footer.php' ?>

<?php }  else{
	echo "no se puede ver";
}
?>
