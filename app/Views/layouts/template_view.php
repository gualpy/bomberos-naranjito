
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Cuerpo de Bomberos de Naranjito</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="Cuerpo de Bomberos del Cantón Naranjito, Guayas, Ecuador" />
    <meta name="google-site-verification" content="R4nAQcWDTTSiCpY7k4Bk9s9W0vavn5lJNONOgNh998w" />
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

    <META NAME="keywords"
        CONTENT="bomberos naranjito, cuerpo, bomberos, naranjito, canton, cuerpo de bomberos de naranjito, guayas, ecuador ">

    <META NAME="description" CONTENT="Cuerpo de Bomberos del Cantón Naranjito, Guayas, Ecuador">
    <link rel="icon" href="<?= base_url('assets/img/favicon.ico');?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/grid.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/search.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/camera.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.fancybox.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css'); ?>">




    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]> 
  <html class="lt-ie9">
  <div style=' clear: both; text-align:center; position: relative;'>
    <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
      <img src="img/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
           alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
    </a>
  </div>
  <script src="js/html5shiv.js"></script>
  <![endif]-->

    <script src='assets/js/device.min.js'></script>
</head>

<body>
    <div class="page">
        <!--========================================================
                            HEADER
  =========================================================-->
        <header>
            <div id="stuck_container" class="stuck_container">
                <div class="brand"> <a href="<?php echo base_url('/')?>"><img src="assets/img/logo-naranjito.png" alt="" /></a> </div>
                <div class="header-right">
                    <nav class="nav">
                        <ul class="sf-menu" data-type="navbar">
                            <li class="active">
                                <a href="<?php echo base_url('/')?>">principal</a>

                            <li>
                                <a href="">institucion</a>
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url('/institucion');?>">Institucion</a>
                                    </li>
                                    <li>
                                        <a href="#">servicios</a>
                                        <ul>
                                            <li>
                                                <a href="<?= base_url('/permiso-funcionamiento')?>">Permisos de Funcionamiento</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('/permiso-funcionamiento')?>">Inspecciones</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('/permiso-funcionamiento')?>">Atencion de emergencias</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('/noticias')?>">Noticias</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('/galeria')?>">Galerias</a>
                                    </li>
                                    <li>
                                        <a href="/panel_ley_transparecia/ingreso_admin.php">Admin</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Prevencion</a>
                                <ul>
                                    <li>
                                        <a href="<?= base_url('/ayuda')?>">Acción Comunitaria</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('/prevencion')?>">Siempre Listos</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('/contactenos')?>">Atencion de emergencias</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?= base_url('/leydetransparencia')?>">ley de transparencia</a>
                            </li>
                            <li>
                                <a href="<?= base_url('/contactenos')?>">Contactos</a>
                            </li>
                        </ul>
                    </nav>


                    <a class="search-form_toggle" href="#"></a>

                    <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
                        <label class="search-form_label">
                            <input class="search-form_input" type="text" name="s" autocomplete="off"
                                placeholder="Search.." />
                            <span class="search-form_liveout"></span>
                        </label>
                        <button class="search-form_submit fa-search" type="submit"></button>
                    </form>
                </div>
            </div>
        </header>
        <!--========================================================
                            CONTENT
  =========================================================-->

  <?= $this->renderSection('contenido') ?>

        <!--========================================================
                            FOOTER
  =========================================================-->
        <footer>

            <div class="container tc">
                <p class="copy"><span class="primary">Bomberos Cantón Naranjito</span> © <span
                        id="copyright-year"></span> <a href="http://www.ecuatorianaweb.com/principal.php">Desarrollado
                        por<img src="assets/img/ecuatorianaweb_logo.png" alt="" /></a></p>

            </div>
        </footer>
    </div>
    <script src="assets/js/superfish.js"></script>
    <script src="assets/js/jquery.rd-navbar.js"></script>
    <script src="assets/js/jquery.rd-parallax.js"></script>
    <script src="assets/js/TMSearch.js"></script>
    <script src="assets/js/camera.js"></script>
    <script src="assets/js/tmstickup.js"></script>
    <script src="assets/js/jquery.ui.totop.js"></script>
    <script src="assets/js/jquery.responsive.tabs.js"></script>
    <script src="assets/js/jquery.equalheights.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/jquery.fancybox-media.js"></script>
    <script src="assets/js/jquery.fancybox-buttons.js"></script>
    <script src="assets/js/maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/jquery.rd-google-map.js"></script>
    <script src="assets/js/wow.js"></script>
<!--    <script src="assets/js/mailform/jquery.form.min.js"></script>-->
<!--    <script src="assets/js/mailform/jquery.rd-mailform.min.js"></script>-->
<!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
    <script src="assets/js/script.js"></script>
</body>

</html>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim || (function(d, s) {
    var z = $zopim = function(c) {
            z._.push(c)
        },
        $ = z.s =
        d.createElement(s),
        e = d.getElementsByTagName(s)[0];
    z.set = function(o) {
        z.set.
        _.push(o)
    };
    z._ = [];
    z.set._ = [];
    $.async = !0;
    $.setAttribute('charset', 'utf-8');
    $.src = '//v2.zopim.com/?2Vk1JnpyKsTogaXhM3uU2MmtVU0pv8sM';
    z.t = +new Date;
    $.
    type = 'text/javascript';
    e.parentNode.insertBefore($, e)
})(document, 'script');
</script>
<!--End of Zopim Live Chat Script-->