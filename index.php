<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RedAcuicola.cl | Portada Principal</title>
    <meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/demo.css">
  </head>
  <body class="no-scroll">
    <div class="site-wrapper">
      <!-- Main wrapper-->
      <div class="top-bar dark tiny">
        <div class="container">
          <nav class="nav">
            <div class="brand-logo pull-left">
              <!-- Site logo--><a href="#home" class="smooth-scrolling"><img src="assets/images/logo-light.png" alt="Logo"></a>
            </div>
            <ul class="list-inline pull-right">
              <!-- Navigation-->
              <li><a href="#home" class="smooth-scrolling">Inicio</a></li>
              <li><a href="#categorias" class="smooth-scrolling">Categorias</a></li>
			  <li><a href="#noticias" class="smooth-scrolling">Noticias</a></li>
              <li><a href="#qsomos" class="smooth-scrolling">¿Quienes Somos?</a></li>
              <li><a href="#subscribe" class="smooth-scrolling">Subscribir</a></li>
              <!-- <li><a href="#team" class="smooth-scrolling">Team</a></li> -->
              <li><a href="#contacts" class="smooth-scrolling">Contactar</a></li>
            </ul>
            <button class="fa fa-bars open-mobile-menu"></button>
          </nav>
        </div>
      </div>
      <header id="home" class="header full-page">
        <!-- Header begin-->
        <div class="header-section">
          <div class="full-page-slider flexslider" style="height:580px;">
            <ul class="slides">
			<li style="background-image: url(assets/images/full-page-slide-3.jpg)" class="slide">
                <div class="container vertical-align">
                  <div class="slide-content tada">
                    <div class="text-center"><button onclick="window.location.href='categoria.html'" class="btn text-uppercase" style="margin:15px;">Servicios</button><button onclick="window.location.href='categoria.html'" class="btn text-uppercase" style="margin:15px;">Arriendos</button><button onclick="window.location.href='categoria.html'" style="margin:15px;" class="btn text-uppercase">Ventas</button></div>
                  </div>
                </div>
              </li>
              <li style="background-image: url(assets/images/full-page-slide-1.jpg)" class="slide">
                <div class="container vertical-align">
                  <div class="slide-content tada">
                    <div class="text-center"><button onclick="window.location.href='categoria.html'" class="btn text-uppercase" style="margin:15px;">Servicios</button><button onclick="window.location.href='categoria.html'" class="btn text-uppercase" style="margin:15px;">Arriendos</button><button onclick="window.location.href='categoria.html'" style="margin:15px;" class="btn text-uppercase">Ventas</button></div>
                  </div>
                </div>
              </li>
              <li style="background-image: url(assets/images/full-page-slide-2.jpg)" class="slide">
                <div class="container vertical-align">
                  <div class="slide-content bounce-in">

					<button onclick="window.location.href='categoria.html'" class="btn text-uppercase" style="margin:15px;">Servicios</button><button onclick="window.location.href='categoria.html'" class="btn text-uppercase" style="margin:15px;">Arriendos</button><button onclick="window.location.href='categoria.html'" style="margin:15px;" class="btn text-uppercase">Ventas</button>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </header>

	 <section class="section gray" style="padding: 3px 0 20px;">
        <div class="container vertical-align">
                  <div class="slide-content tada">
                    <div class="text-center">
					<a href="#" style="margin:5px;" class="btn btn-default"><span style="font-size:26px;" class="icon fa fa-sun-o"></span> Estado de puertos</a>
					<a href="#" style="margin:5px;" class="btn btn-default"><span style="font-size:26px;" class="icon fa fa-briefcase"></span> Bolsa de trabajo</a>
					<a href="#" style="margin:5px;" class="btn btn-default"><span style="font-size:26px;" class="icon fa fa-check-circle"></span> Licitación</a>
					<a href="#" style="margin:5px;" class="btn btn-default"><span style="font-size:26px;" class="icon fa fa-search-plus"></span> Buscar</a>
                  </div>
                </div>
      </section>

	   <section data-stellar-background-ratio="0.9" class="section">
        <!-- Section begin-->
        <div class="container">
          <h2 class="section-title">Empresas Asociadas</h2>
          <div class="row">

              <div class="slide"><img src="assets/images/img_asociados/marcas_acuicola.png" class="img-fluid" style="height: 411px; width: 100%; alt="logo 1">
              </div>

            </div>
            </div>
          </div>
        </div>
      </section>





      <div id="map" style="display:none;" class="embed-responsive embed-responsive-16by9 map"></div>
	  <section id="works" class="section" style="padding: 3px 0 20px;">
        <!-- Section begin-->
        <div class="container">
		<div class="row">
			<h2 data-sr="enter right move 100px" class="text-uppercase">Busqueda de tiempo</h2>
                    <form onSubmit="return vertiempo();" target='_blank'  data-sr="enter left move 100px" class="contacts row">
                      <div class="col-sm-10">
                        <input type="text" style="font-size:18px;color:#000;font-weight:400;" placeholder="Buscar por ciudad, ejemplo: Santiago, Concepcion y Puerto Montt." id="q" name="q" class="form-control">

                      </div>
					  <div class="col-sm-2">
					  <input type="submit" class="btn text-uppercase" value="Buscar" />
					  </div>
                    </form>
		</div>
          <div class="row">
            <div class="col-sm-4 step">

              <div class="text-center">
				<img src="https://www.tiempo.com/wimages/foto3e274ec5390c503107cd34741bd16250.png" class="img-fluid" style="height: 246px; width: 100%;" alt="Responsive image">
              </div>
            </div>
            <div class="col-sm-4 step">

              <div class="text-center">
                <img src="https://www.tiempo.com/wimages/foto2a6c8ae98864d98e11f5c75dc9304eed.png" class="img-fluid" style="height: 246px; width: 100%;" alt="Responsive image">
              </div>
            </div>
            <div class="col-sm-4 step">

              <div class="text-center">
                <img src="https://www.tiempo.com/wimages/foto185bd73e274dc1c011d74d082e1903c1.png" class="img-fluid" style="height: 246px; width: 100%;" alt="Responsive image">
              </div>
            </div>
          </div>
        </div>
        <!-- Section end-->
      </section>
      <section id="works" class="section gray" style="padding: 3px 0 20px;">
        <!-- Section begin-->
        <div class="container">
          <div class="row">
            <div class="col-sm-4 step">

              <div class="text-center">
				<img src="assets/images/publicidad-inferior.jpg" class="img-fluid" style="height: 120px; width: 100%;" alt="Responsive image">
              </div>
            </div>
            <div class="col-sm-4 step">

              <div class="text-center">
                <img src="assets/images/publicidad-inferior.jpg" class="img-fluid" style="height: 120px; width: 100%;" alt="Responsive image">
              </div>
            </div>
            <div class="col-sm-4 step">

              <div class="text-center">
                <img src="assets/images/publicidad-inferior.jpg" class="img-fluid" style="height: 120px; width: 100%;" alt="Responsive image">
              </div>
            </div>
          </div>
        </div>
        <!-- Section end-->
      </section>
	   <section class="section">
        <div class="container">
          <!-- Sub-Section begin-->
          <h2 class="section-title">¿Donde nos encuentras?</h2>
          <div class="row info">
            <div class="col-xs-6 col-sm-3 text-center">
              <div class="icon fa fa-map-marker"></div>
              <h3>Direccion de oficina</h3>
              <p>New York NY 4765, United States.</p>
            </div>
            <div class="col-xs-6 col-sm-3 text-center">
              <div class="icon fa fa-mobile"></div>
              <h3>Telefono</h3>
              <p>1-234-567-890</p>
            </div>
            <div class="col-xs-6 col-sm-3 text-center">
              <div class="icon fa fa-envelope-o"></div>
              <h3>Email</h3>
              <p><a href="mailto:redacuicola@gmail.com">redacuicola@gmail.com</a></p>
            </div>
            <div class="col-xs-6 col-sm-3 text-center">
              <div class="icon fa fa-clock-o"></div>
              <h3>Horario de atencion</h3>
              <p>Lun - Vie 10:00 - 18:00</p>
            </div>
          </div>
          <!-- Sub-Section end-->
        </div>
      </section>
      <footer class="footer">
        <!-- Footer begin-->
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <ul class="list-inline text-center">
                <li><a href="#" class="social"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="social"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="social"><i class="fa fa-linkedin-square"></i></a></li>
                <li><a href="#" class="social"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="social"><i class="fa fa-youtube"></i></a></li>
              </ul>
              <p class="copy">Copyright © 2017 Novored.cl</p>
            </div>
          </div>
        </div>
        <!-- Footer end-->
      </footer>
    </div>
    <div class="loader">
      <!-- Loader-->
      <div class="spinner"></div>
    </div>
    <!-- Scripts-->
<script src="assets/js/vendors/jquery.min.js"></script>
<script src="assets/js/vendors/bootstrap.min.js"></script>
<script src="assets/js/vendors/jquery.stellar.min.js"></script>
<script src="assets/js/vendors/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/vendors/scrollReveal.min.js"></script>
<script src="assets/js/vendors/baguetteBox.min.js"></script>
<script src="assets/js/vendors/slick.min.js"></script>
<script src="assets/js/vendors/jquery.flexslider-min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyD5F78fi6sImCyTgrdZ9Evu0yiRcXcw8KY"></script>
<script src="assets/js/main.js"></script>
<script>
  function vertiempo(){
      var response = document.getElementById('q').value;
      if (response)
		  window.open('https://www.google.cl/search?q=tiempo+en+' + response,'_blank');
	  else
		  window.open('https://www.google.cl/search?q=tiempo','_blank');
      return false;
  }
</script>
</body>
</html>
