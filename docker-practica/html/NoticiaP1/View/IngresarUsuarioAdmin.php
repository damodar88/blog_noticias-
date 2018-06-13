<?php include('Default/head.php'); ?>

<?php include('Default/MenuAdmin.php') ?>

<div class="starter-template">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <!--Form de Region,Ciudad, Calle-->
            <form class="" action="AutentificarDireccion.php" method="POST">
              <!--Titulos tabla-->
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Region</th>
                  <th scope="col">Nº</th>
                  <th scope="col">Comuna</th>
              </thead>
              <tr>
                <td><?php echo $usuario["ID_USUARIO"] ?></td>
                <td><?php echo $usuario["nombreUsuario"] ?></td>
                <td class="bot"><a href="borrar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?>"> <input type="button" name="del"id="del" value="Eliminar"></a></td>
                <td class="bot"><a href="editar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?> & nom=<?php echo $usuario["nombreUsuario"]?>
                  & ape= <?php echo $usuario["apellidoPaternoUsuario"]?> & dir=<?php $usuario["apellidoMaternoUsuario"]?>"> <input type="button" name="up" id="up" value="actualizar"></a></td>
              </tr>
              <!--Input enviaran por submit-->
              <tr>
                <!--input Region-->
                <td><input type="text" name="txtnombreRegion" size="7" class="centrado"></td>
                <td><input type="text" name="txtnumeroRegion" size="7" class="centrado"></td>
                <td><input type="text" name="txtcomunaRegion" size="7" class="centrado"></td>
                <td class="bot"><button type="submit" class="btn btn-success" name="button">Insertar</button> </td>
              </tr>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="starter-template">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <!--Form de Region,Ciudad, Calle-->
            <form class="" action="AutentificarDireccion.php" method="POST">
              <!--Titulos tabla-->
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Ciudad</th>
                  <th scope="col">Localidad</th>
              </thead>
              <!--Input enviaran por submit-->
              <tr>
                <!--input Region-->
                <!--Input ciudad-->
                  <td><input type="text" name="txtnombreCiudad" size="7" class="centrado"></td>
                  <td><input type="text" name="txtlocalidadCiudad" size="7" class="centrado"></td>
                <td class="bot"><button type="submit" class="btn btn-success" name="button">Insertar</button> </td>
              </tr>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="starter-template">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <!--Form de Region,Ciudad, Calle-->
            <form class="" action="AutentificarDireccion.php" method="POST">
              <!--Titulos tabla-->
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Calle</th>
                  <th scope="col">Nº</th>
              </thead>
              <!--Input enviaran por submit-->
              <tr>
                <!--Input ciudad-->
                <td><input type="text" name="txtnombreEscuela" size="7" class="centrado"></td>
                <td><input type="text" name="txtnombrecodigoEscuela" size="7" class="centrado"></td>
              <td class="bot"><button type="submit" class="btn btn-success" name="button">Insertar</button> </td>
              </tr>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="starter-template">
  <br></br>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <!--Form de Region,Ciudad, Calle-->
            <form class="" action="AutentificarDireccion.php" method="POST">
              <!--Titulos tabla-->
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nombre Escuela</th>
                  <th scope="col">Codigo Escuela</th>
              </thead>
              <!--Input enviaran por submit-->
              <tr>
                <!--Input ciudad-->
                <td><input type="text" name="txtnombreCalle" size="7" class="centrado"></td>
                <td><input type="text" name="txtnumeroCalle" size="7" class="centrado"></td>
                <!--input escuela-->
                <td class="bot"><button type="submit" class="btn btn-success" name="button">Insertar</button> </td>
              </tr>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="starter-template">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-body">
          <!--Form envio de datos del usuario-->
          <form class="" action="index.html" method="POST">
            <!--Titulo tabla usuario-->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Administrador</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">ApellidoP.</th>
                  <th scope="col">ApellidoM.</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Password</th>
                  <th scope="col">fechaModif</th>
                  <th scope="col">Ocupacion</th>
                </tr>
              </thead>
              <!--Datos de lectura de la base datos-->
              <tbody>
                <tr>
                  <td><?php echo $usuario["ID_USUARIO"] ?></td>
                  <td><?php echo $usuario["administrador"] ?></td>
                  <td><?php echo $usuario["nombreUsuario"] ?></td>
                  <td><?php echo $usuario["apellidoPaternoUsuario"]?></td>
                  <td><?php echo $usuario["apellidoMaternoUsuario"]?></td>
                  <td><?php echo $usuario["usuarioUsuario"]?></td>
                  <td><?php echo $usuario["passwordUsuario"]?></td>
                  <td><?php echo $usuario["fechaModificacionUsuario"]?></td>
                  <td><?php echo $usuario["ocupacionUsuario"]?></td>
                  <td class="bot"><a href="borrar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?>"> <input type="button" name="del"id="del" class="btn btn-success" size="2" value="Eliminar"></a></td>
                  <td class="bot"><a href="editar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?> & nom=<?php echo $usuario["nombreUsuario"]?>& ape= <?php echo $usuario["apellidoPaternoUsuario"]?> & dir=<?php $usuario["apellidoMaternoUsuario"]?>"> <input type="button" name="up" class="btn btn-success" id="up" size="2" value="actualizar"></a></td>
                </tr>
              </tbody>
              <!--input envio de datos por submit-->
              <tr>
                <td></td>
                <td><input type="text" name="txtAdministrador" size="7" class="centrado"></td>
                <td><input type="text" name="txtNombre" size="7" class="centrado"></td>
                <td><input type="text" name="txtApellidoP" size="7" class="centrado"></td>
                <td><input type="text" name="txtApellidoM" size="7" class="centrado"></td>
                <td><input type="text" name="txtUsuario" size="7" class="centrado"></td>
                <td><input type="text" name="txtPassword" size="7" class="centrado"></td>
                <td><input type="text" name="txtFechaMod" size="7" class="centrado"></td>
                <td><input type="text" name="txtOcupacion" size="7" class="centrado"></td>
                <td class="bot"><button type="submit" class="btn btn-success" name="button">Insertar</button></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('Default/footer.php') ?>
