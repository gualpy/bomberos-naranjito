<?= $this->extend('layouts/template_view') ?>
<?= $this->section('contenido') ?>  <!--========================================================
                            CONTENT
  =========================================================-->
  <main>
   <div class="thumb-box10">
        <div class="container">
            <h2 class="wow fadeIn">CBN donde usted nos necesite.. </h2>
            <div class="thumb-pad7 wow fadeInUp">
                <div class="thumbnail">
                    <div class="row">
                <td><iframe  src="assets/Slicebox/index.html"frameborder="0" width="100%" height="500px" scrolling="No" ></iframe></td>
                    
    <div class="thumb-box10">
        <div class="container">
                       
            <div class="row">
                <td><iframe  src="assets/Slicebox/index1.html"frameborder="0" width="100%" height="500px" scrolling="No" ></iframe></td>
				<div class="thumb-box10">
        <div class="container">
                   <div class="row">
                <td><iframe  src="assets/Slicebox/index2.html"frameborder="0" width="100%" height="500px" scrolling="No" ></iframe></td>
				<div class="row">
				<a href="https://www.instagram.com/bomberosnaranjito/" class="btn2">mas galerias >></a>
				</div>
          </div>
        </div>
      </div>
	  </div>
          </div>
        </div>
      </div>
	  </div>
      </div>
	   </div>
    </section>
  
      </main>
	  	 <section class="well1 links">
      <div class="container">
        <h2>Enlaces Rapidos</h2>
        <div class="row">
          <div class="col-xs-12 col-sm-3">
            <h3>LOCAL</h3>
            <ul class="list">
              <li><a href="contactenos">Nuestra Estación</a></li>
              <li><a href="#">Nuestro Personal</a></li>
                            <li><a href="prevencion.html">Educacion y capacitación</a></li>
              <li><a href="noticias.php">info de Evacuación </a></li>
             
              <li><a href="http://www.ministeriointerior.gob.ec/"><img src="img/logo-min.png" alt=""/></a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-3">
            <h3>PONGASE AL DIA</h3>
            <ul class="list">
              <li><a href="#">Noticias y Alertas</a></li>
              
              <li><a href="http://www.facebook.com/bomberos.naranjito"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/cbnaranjito"> <i class="fa fa-twitter aria-hidden="true"></i></a></li>
              <li><a href="https://www.youtube.com/watch?v=m5eT_xGXWrs"><i class="fa fa-youtube aria-hidden="true"></i></a></li>
             
                          <li><a href="http://www.gestionderiesgos.gob.ec/"><img src="img/logp-sng.png" alt=""/></a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-3">
            <h3>PREVENCION</h3>
            <ul class="list">
              <li><a href="<?= base_url('/ayuda')?>">Campañas de Prevención</a></li>
              <li><a href="<?= base_url('/permiso-funcionamiento')?>">Inspecciones</a></li>
              <li><a href="<?= base_url('/prevencion')?>">Capacitacion a Empresas</a></li>
             
              <li><a href="<?= base_url('/contactenos')?>">Servicios de Emergencia</a></li>
              <li><a href="http://www.ecu911.gob.ec/"><img src="img/page-1_img08.png" alt=""/></a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-3">
            <h3>NOSOTROS</h3>
            <ul class="list">
            
              <li><a href="<?= base_url('/institucion')?>">Nuestra Institución</a></li>
                    <li><a href="<?= base_url('/institucion')?>">Historia</a></li>
			  <li><a href="<?= base_url('/galeria')?>">Galerias</a></li>
			    <li><a href="<?= base_url('/contactenos')?>">Contactenos</a></li>
              <li><a href="#"><img src="assets/img/102.png" alt=""/></a></li>
              
            </ul>
          </div>
		  
        </div>
      </div>
    </section>
        
  </main>
  <?= $this->endSection()?>