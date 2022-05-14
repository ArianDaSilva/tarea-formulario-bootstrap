<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <section class="d-flex justify-content-center align-items-center">

    <form>
    <br>

  <div class="card col-sm-10 p-3">

  <div class="mb-2">
      <h4>Formulario</h4>
      <i>Por favor, igrese sus datos...</i>
  </div>
  
  <label for="examplenombre" class="form-label">Nombre</label>
  <input type="nombre" class="form-control" id="exampleInputnombre" aria-describedby="sunombre" maxlength="15" placeholder="ej: Mario" >

  <label for="exampleapellido" class="form-label">Apellido</label>
  <input type="apellido" class="form-control" id="exampleInputapellido" aria-describedby="sunapellido" maxlength="15" placeholder="ej: Torres">

  <label for="exampleedad" class="form-label">Edad</label>
  <input type="edad" class="form-control" id="exampleInputedad" aria-describedby="suedad" maxlength="2" placeholder="ej: 18" >

    <label for="exampleInputEmail1" class="form-label">Dirección de correo electrónico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" maxlength="35" placeholder="ej: mario@dominio.com">
    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    <div id="passwordHelp" class="form-text">Recuede: debe ser unica.</div>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Términos y condiciones. <a href="https://docs.microsoft.com/en-us/office/developer-program/terms-and-conditions">Aquí</a>
  </label>
</div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
</section>
</body>
</html>