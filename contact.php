<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contacto - ROCMIN - Servicios mineros</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <style media="screen">
  textarea::after,
  textarea::before
  {
    box-sizing: border-box;
  }

  .form-group-text {
    position: relative;
    margin-top: 2.25rem;
    margin-bottom: 2.25rem;
  }

  .form-inline > .form-group-text,
  .form-inline > .btn {
    display: inline-block;
    margin-bottom: 0;
  }

  .form-help {
    margin-top: 0.125rem;
    margin-left: 0.125rem;
    color: #b3b3b3;
    font-size: 0.8rem;
  }
   .form-group-text .form-help {
    position: absolute;
    width: 100%;
  }

  .form-group-text textarea {
    resize: none;
  }

  .form-group-text .control-label {
    position: absolute;
    top: 0.25rem;
    pointer-events: none;
    padding-left: 0.125rem;
    z-index: 1;
    font-weight: normal;
    -webkit-transition: all 0.28s ease;
    transition: all 0.28s ease;
    font-size: 18px;
    color: #000;
  }
  .form-group-text .bar {
    position: relative;
    border-bottom: 1px solid #d4d4d4;
    display: block;
  }
  .form-group-text .bar::before {
    content: '';
    height: 3px;
    width: 0;
    left: 50%;
    bottom: -0.0625rem;
    position: absolute;
    background: #fcb421;
    -webkit-transition: left 0.28s ease, width 0.28s ease;
    transition: left 0.28s ease, width 0.28s ease;
    z-index: 2;
  }

  .form-group-text textarea {
    display: block;
    background: none;
    padding: 0.125rem 0.125rem 0.0625rem;
    border-width: 0;
    border-color: transparent;
    line-height: 1.9;
    width: 100%;
    color: transparent;
    -webkit-transition: all 0.28s ease;
    transition: all 0.28s ease;
    box-shadow: none;
  }


  .form-group-text textarea:focus,
  .form-group-text textarea:valid,
  .form-group-text textarea.form-file,
  .form-group-text textarea.has-value {
    color: #333;
  }

  .form-group-text textarea:focus ~ .control-label,
  .form-group-text textarea:valid ~ .control-label,
  .form-group-text textarea.form-file ~ .control-label,
  .form-group-text textarea.has-value ~ .control-label {
    font-size: 12px;
    color: gray;
    top: -1rem;
    left: 0;
  }

  .form-group-text textarea:focus {
    outline: none;
  }

  .form-group-text textarea:focus ~ .control-label {
    color: #fcb421;
  }

  .form-group-text textarea:focus ~ .bar::before {
    width: 100%;
    left: 0;
  }
  </style>
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-transparent navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.html">
          <img class="img-responsive" src="img/logos/rocmin-logo.png" alt="">
        </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="home.html">inicio</a>
          </li>
          <li>
            <a href="company.html">Compañía</a>
          </li>
          <li>
            <a href="services.html">Servicios</a>
          </li>
          <li>
            <a href="workWithUs.php">Trabaja con nosotros</a>
          </li>
          <li>
            <a href="#" class="nactive">Contacto</a>
          </li>
          <li>
            <a href="#">ENG</a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="stickyFoot">
    <!-- Header -->
    <header class="contacto">
        <div class="container-fluid overlay-black">
          <div class="row">
            <div class="col-xs-12">
              <h1>Contáctanos</h1>
            </div>
          </div>
        </div>
    </header>

    <!-- formulario contacto -->
    <form action="enviar.php" method="POST" id="contacto" name="formulario">
    <div class="container-fluid form-contacto">
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <div class="material-form-field">
            <input type="text" required name="nombre" id="nombre" required/>
            <label class="material-form-field-label" for="nombre">Nombre Completo*</label>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="material-form-field">
            <input type="tel" required name="telefono" id="telefono" required/>
            <label class="material-form-field-label" for="telefono">Teléfono*</label>
          </div>
        </div>
        </div>
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <div class="material-form-field">
            <input type="email" required name="email" id="email" required/>
            <label class="material-form-field-label" for="email">Email*</label>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="material-form-field">
            <input type="text" required name="asunto" id="asunto" required/>
            <label class="material-form-field-label" for="asunto">Asunto*</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group-text">
            <textarea id="mensaje" name="mensaje"required="required"></textarea>
            <label class="control-label" for="textarea">Mensaje*</label><i class="bar"></i>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 m-b-lg">
            <div class="g-recaptcha" data-sitekey="6LcAJS0UAAAAAKSXdRLCT4uj12iOCgNGRuOpOrSe" style="width:305px;display:block;margin:auto;"></div>
        </div>
      </div>
    </form>
      <div class="row">
        <div class="col-xs-12">
          <button class="btn btn-orange" onclick="validar()">Envíar</button>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-5 m-t">
          <?php
           if (isset($_GET['res'])){
              if ($_GET['res']=='ok'){ ?> <div class="alert alert-success" role="alert">Tu mensaje ha sido enviado con éxito. ¡En breve nos contactaremos contigo! </div> <?php }
              if ($_GET['res']=='err'){ ?> <div class="alert alert-error" role="alert">Ha ocurrido un error al enviar tu mensaje, por favor intenta más tarde.</div> <?php }
              if ($_GET['res']=='recap'){ ?> <div class="alert alert-error" role="alert">No ha pasado la validacion de Recaptcha.</div> <?php }

           }
          ?>
        </div>
      </div>
    </div>
    <div class="push"></div>
  </div>

  <footer>
    <div class="container-fluid footer">
      <div class="row">
        <div class="col-xs-12">
          <h5>&#9400; 2017 ROCMIN Servicios Mineros SpA</h5>
          <div class="visible-xs">
            <p>Don Luis N° 428, Valle Grande Lampa, Santiago - Chile</p>
            <p>Avda. Industrial N° 8090, Antofagasta - Chile</p>
            <p>Calle Amincha N° 2067, Calama - Chile</p>
          </div>
          <p class="hidden-xs"><span class="m-r-md">Don Luis N° 428, Valle Grande Lampa, Santiago - Chile</span> - <span class="m-h-md">Avda. Industrial N° 8090, Antofagasta - Chile</span> - <span class="m-l-md">Calle Amincha N° 2067, Calama - Chile</span></p>
          <div class="visible-xs">
            <p>Email: <a href="mailto:contacto@rocmin.cl">contacto@rocmin.cl</a> - <a href="mailto:rrhh@rocmin.cl">rrhh@rocmin.cl</a></p>
            <p>Tel: <a href="tel:+560552556884">Tel: +56 055 255 6884</a></p>
          </div>
          <p class="hidden-xs"><span class="m-r-md">Email: <a href="mailto:contacto@rocmin.cl">contacto@rocmin.cl</a> - <a href="mailto:rrhh@rocmin.cl">rrhh@rocmin.cl</a> </span>- <span class="m-l-md">Tel: <a href="tel:+560552556884">+56 055 255 6884</a></span></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
  <script src="js/index.js"></script>
  <script type="text/javascript">
    function validar() {
        //validar nombre
        if (document.formulario.nombre.value.length==0) {
            alert("Ingrese su nombre");
            document.formulario.nombre.focus();
            return 0;
        }
        //Validar telefono
        if (document.formulario.telefono.value.length==0) {
            alert("Ingrese su teléfono");
            document.formulario.telefono.focus();
            return 0;
        }
        //validar correo
        if (document.formulario.email.value.length==0) {
            alert("Ingrese su correo");
            document.formulario.email.focus();
            return 0;
        }else{
            var patron = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/;
            if (!patron.test(document.formulario.email.value)) {
                alert("Correo no válido por favor ingresar nuevamente");
                document.formulario.email.focus();
                return 0;
            }
        }
        //Validar asunto
        if (document.formulario.asunto.value.length==0) {
            alert("Ingrese su asunto");
            document.formulario.asunto.focus();
            return 0;
        }
        //Validar mensaje
        if (document.formulario.mensaje.value.length==0) {
            alert("Ingrese su mensaje");
            document.formulario.mensaje.focus();
            return 0;
        }
        document.formulario.submit();
    }

  </script>

</body>
</html>
