<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Trabaja con nosotros - ROCMIN - Servicios mineros</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">
  <script src='https://www.google.com/recaptcha/api.js'></script>

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
            <a href="#" class="nactive">Trabaja con nosotros</a>
          </li>
          <li>
            <a href="contact.php">Contacto</a>
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
    <header class="trabaja">
        <div class="container-fluid overlay-black">
          <div class="row">
            <div class="col-xs-12">
              <h1>Trabaja con nosotros</h1>
            </div>
          </div>
        </div>
    </header>

    <!-- formulario contacto -->
    <form action="enviarTrabaja.php" method="POST" id="contactoTrabaja" enctype="multipart/form-data">
    <div class="container-fluid form-contacto">
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <div class="material-form-field">
            <input type="text" required name="nombre" id="nombre"/>
            <label class="material-form-field-label" for="nombre">Nombre Completo*</label>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="material-form-field">
            <input type="tel" required name="telefono" id="telefono"/>
            <label class="material-form-field-label" for="telefono">Teléfono*</label>
          </div>
        </div>
        </div>
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <div class="material-form-field">
            <input type="email" required name="email" id="email"/>
            <label class="material-form-field-label" for="email">Email*</label>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="material-form-field">
            <input type="text" required name="cargo" id="cargo"/>
            <label class="material-form-field-label" for="cargo">Seleccione cargo*</label>
            <ul class="material-dropdown" >
              <li onclick="seleccion('Item 1')">Item 1</li>
              <li onclick="seleccion('Item 2')">Item 2</li>
              <li onclick="seleccion('Item 3')">Item 3</li>
              <li onclick="seleccion('Item 4')">Item 4</li>
              <li onclick="seleccion('Item 5')">Item 5</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <div class="material-form-field">
            <input type="file" required name="archivo" id="cv"/>
            <label class="material-form-field-label" for="cv" style="top:0;">Adjuntar CV</label>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="material-form-field">
            <input type="text" required name="perfil" id="perfil"/>
            <label class="material-form-field-label" for="perfil">Perfil de LinkedIn</label>
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
          <button class="btn btn-orange" onclick="validar();">Envíar</button>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-5 m-t">
          <?php
           if (isset($_GET['res'])){
              if ($_GET['res']=='ok'){ ?> <div class="alert alert-success" role="alert">Tu mensaje ha sido enviado con éxito. ¡En breve nos contactaremos contigo! </div> <?php }
              if ($_GET['res']=='err'){ ?> <div class="alert alert-error" role="alert">Ha ocurrido un error al enviar tu mensaje, por favor intenta más tarde.</div> <?php }
              if ($_GET['res']=='recap'){ ?> <div class="alert alert-error" role="alert">No ha pasado la validacion de Recaptcha.</div> <?php }
              if ($_GET['res']=='size'){ ?> <div class="alert alert-error" role="alert">El archivo no puede ser de mas de 5MB.</div> <?php }
              if ($_GET['res']=='type'){ ?> <div class="alert alert-error" role="alert">El archivo debe ser formato .pdf o .docx.</div> <?php }
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
    function seleccion(item)
    {
      document.getElementById('cargo').value = item;
    }
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
        //Validar cargo
        if (document.formulario.cargo.value.length==0) {
            alert("Ingrese su cargo");
            document.formulario.cargo.focus();
            return 0;
        }

        //Validar perfil
        if (document.formulario.perfil.value.length==0) {
            alert("Ingrese su perfil");
            document.formulario.perfil.focus();
            return 0;
        }

        document.formulario.submit();
    }

  </script>
</body>
</html>
