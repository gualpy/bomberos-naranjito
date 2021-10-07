<?= $this->extend('layouts/template_view') ?>
<?= $this->section('contenido') ?><main>
    <section class="well1">
      <div class="container">
          <h3 class="text-center">Últimas Noticias</h3>
          <div class="row">
              <?php if (isset($BlogModel) && !empty($BlogModel)):?>
                  <?php $i = 0;?>
                  <?php foreach ($BlogModel as $item):?>
                      <div class=" row-xs-4 row-md-4">
                          <div id="<?php echo $item['id']?>">
                              <h3>
                                  <?php echo $item['titulo'];?>
                              </h3>
                          </div>
                          <p><?php echo $item['created_at'];?></p>
                          <p><?php echo $item['contenido'];?></p>
                          <hr>
                      </div>
                  <?php endforeach; ?>
              <?php else:?>
                  <h2>Actualmente no existen Noticias</h2>
              <?php endif;?>
          </div>
      </div>
    </section> 
    
    <section class="well1 bg1">
      <div class="container wow fadeInUp">
        <h2>PERMISOS Y TRÁMITES</h2>
        <h6>Conoce los servicios ofrecidos por la Jefatura Técnica del CBN</h6>
        <div class="row">
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-4">
            <img src="img/permi-1.jpg" alt="">
            <h4>Permiso Anual de Funcionamiento </h4>
            <p>Es obligación cumplir con los requerimientos mínimos necesarios para la prevención y mitigación de incendios – Comercio;
– Industria y fabriles;
– Servicios;
– Salud;
– Oficinas públicas y privadas;
– Fundaciones;
– Instalaciones especiales;
– Concentración de público;
– Almacenamiento;
– Instituciones educativas públicas y privadas; y,
– Complejos turísticos y otros.</p> 
<a href="contactenos.html" class="btn2">saber mas >></a>
          </div>
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-4">
            <img src="img/permi-2.jpg" alt="">
            <h4>Permisos de Transporte de Combustible</h4>
            <p>Es la autorización que el CBN emite para que los vehículos que transportan GLP puedan operar luego de haber pasado una inspección por parte del pesronal asignado para el efecto, asi como de haberse receptado los itinerarios de transito y operación en el medio urbano y rural de nuestra comunidad.
</p><a href="contactenos.html" class="btn2">saber mas >></a>
          </div>
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-4">
            <img src="img/planes-e.jpg" alt="">
            <h4>Aprobación de Planes de Emergencia</h4>
            <p>Consiste en la supervisión, fiscalización y control de la mitigación de factores de riesgo cualitativos y cuantitativos conforme lo determina el art. 249 y 257 del Reglamento de Prevención, Mitigación y Protección contra incendios.</p><a href="contactenos.html" class="btn2">saber mas >></a>
          </div>          
        </div>
      </div>
    </section>
	 <section class="well1 bg1">
      <div class="container wow fadeInUp">
        
        <div class="row">
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-4">
            <img src="img/permi-5.jpg" alt="">
            <h4>Permiso Ocasional de Funcionamiento</h4>
            <p>Es la autorización que el CBN emite para la realización de actividades no permanente, su validez será determinada al momento de su emisión, de acuerdo al art. 353 del Reglamento de Prevención, Mitigación y Protección contra incendios.</p> <a href="contactenos.html" class="btn2">saber mas >></a>

          </div>
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-4">
            <img src="img/permi-4.jpg" alt="">
            <h4>Aprobación de Planos</h4>
            <p>Es la autorización que el CBN emite para que los vEs el aval técnico, en cuanto en la prevención, y seguridad contra incendios, que el CBN emite sobre un proyecto de construcción, de acuerdo a lo que establece el Art. 53 de Ley de Defensa Contra Incendios.
</p><a href="contactenos.html" class="btn2">saber mas >></a>
          </div>
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-4">
            <img src="img/bobo.jpg" alt="">
            <h4>Permiso de Ocupación y habitabilidad</h4>
            <p>Una vez concluida la obra de edificación con el sistema de prevención aprobado en el plano y debidamente instalado y listo para operar, la persona interesada o profesional de la obra debe presentar en el CBN, la solicitud de permiso de ocupación.</p><a href="contactenos.html" class="btn2">saber mas >></a>
          </div>          
        </div>
      </div>
    </section>
	<section class="well1 bg1">
      <div class="container wow fadeInUp">
        
        <div class="row">
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-4">
            <img src="img/bobo2.jpg" alt="">
            <h4>Permisos de Factibilidad para la implantación del Sistema de Operación con Gas Licuado de Petróleo</h4>
            <p>Es el aval técnico que el CBN emite sobre un proyecto de implantación del sistema de operación con gas licuado de petróleo, para hacer cumplir los requisitos mínimos de seguridad de acuerdo a lo que establece el art. 55 del Reglamento de Prevención, Mitigación y Protección contra incendios.</p> <a href="contactenos.html" class="btn2">saber mas >></a>

          </div>
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-4">
            <img src="img/bobo3.jpg" alt="">
            <h4>Modificación de planos del sistema de prevención y control de incendios aprobados</h4>
            <p>Es el aval técnico, en cuanto en la prevención, y seguridad contra incendios, que el CBN emite sobre un proyecto de construcción previamente aprobado, de acuerdo a lo que establece el Art. 53 de Ley de Defensa Contra Incendios.
</p><a href="contactenos.html" class="btn2">saber mas >></a>
          </div>
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-4">
            <img src="img/bobo5.jpg" alt="">
            <h4>Autorización para detonación de explosivos</h4>
            <p>Las personas interesadas en contratar los servicios para excavaciones o perforaciones utilizando Explosivos, están obligados a solicitar la inspección de rigor al Cuerpo de Bomberos. Esta diligencia se realiza de conformidad al Art. 35 de la Ley de Defensa Contra Incendios Únicamente se emite informe favorable cuando las condiciones son seguras.</p><a href="contactenos.html" class="btn2">saber mas >></a>
          </div>          
        </div>
      </div>
    </section>
    <section class="well3">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-8">
            <div class="resp-tabs">
              <ul class="resp-tabs-list">
                <li>Sismos</li>
                <li>Inundaciones</li>
                <li>Incendios</li>
              </ul>
              <div class="resp-tabs-container">
                <div>
                  <div class="tab-box">
                    <div class="tab-box_aside">
                      <img src="img/alerta2.jpg" alt="">
                    </div>
                    <div class="tab-box_cnt__no-flow">
                      <h4>QUE HACER DURANTE UN SISMO:</h4>
                      <p>No corra hacia las puertas - Aléjese de las repisas que contengan objetos que puedan caerle - Un carro en movimiento: Pare tan rápido como sea posible y quédese dentro del vehículo hasta que pase el temblor -  Evite detenerse cerca o debajo de edificios, árboles, puentes o cables eléctricos.- No corras, no grites, no empujes - Sigue las instrucciones del personal responsable ante la emergencia - Apaga cigarros o cualquier objeto que pueda causar un incendio - No uses elevadores ni escaleras.</p>
                      <a href="prevencion.html" class="btn2">ver mas >></a>
                    </div>
                  </div>
                </div>
                <div>
                 <div class="tab-box">
                    <div class="tab-box_aside">
                      <img src="img/alerta.jpg" alt="">
                    </div>
                    <div class="tab-box_cnt__no-flow">
                    <h4>Antes de una Inundación</h4>
                    <p>Llene recipientes con agua limpia, por si acaso el agua de la llave llega a contaminarse.-
Mueva al segundo piso o a un lugar alto los elementos de más valor.-
Esté preparado para evacuar su hogar.-
Identifique una ruta de evacuación, y otras vías alternativas.-
Investigue si su propiedad está en una zona de posibles inundaciones o si se ha inundado con anterioridad.
Tenga a mano el kit para emergencias.-
Establezca un punto de reunión, por si la familia se encuentra dispersa.-
Todos en la familia deben saber cómo actuar, cómo cortar el suministro de gas, luz y agua.
Ubique los elementos tóxicos (venenos) en gabinetes cerrados y fuera del alcance del agua.
Guarde en un buen lugar algo de comida, agua y ropa.-
Coloque documentos importantes en una bolsa de plástico para que no se destruyan con el agua.-
Observe y no olvide donde guardan en la casa la lámpara o linterna y asegúrese que tenga pilas. Manténgase informado, escuche las noticias con atención. </p>
                    <a href="prevencion.html" class="btn2">ver mas >></a>
                  </div>
                </div>
				                </div>
                <div>
                  <div class="tab-box">
                    <div class="tab-box_aside">
                      <img src="img/alerta3.jpg" alt="">
                    </div>
                    <div class="tab-box_cnt__no-flow">
                      <h4>QUE HACER EN CASO DE INCENDIO</h4>
                      <p>Si hay fuego en casa y no puede salir
Protéjase del fuego cerrando todas las puertas que pueda.-
Ponga ropa mojada en las rendijas de la puerta para impedir el paso del humo.-
Llame al 911 y asómese al balcón o a la ventana.- Guarda la calma
Evalúa la situación, trata de ver que se quema, en qué cantidad, el sitio donde está el fuego y si éste puede propagarse.-
Da la voz de alarma, primero a los bomberos y posteriormente a las personas más cercanas -
Trata de controlar la situación retirando a las personas a un lugar seguro o utilizando un extintor -
Si el incendio tiende a propagarse evacúa el área -
Baja por las escaleras de emergencia, no utilices los elevadores.-
Si no puedes bajar, intenta subir hasta la azotea; deja abierta la puerta de acceso a la misma para que el humo no se acumule en el cubo de las escaleras
No te encierres en baños o closets, ni te metas debajo de mesas, escritorio, cama etc., ya que el humo y el calor invadirán toda el área
Si está totalmente oscuro sigue una pared y no te separes de ella.-
Si quedas atrapado en una oficina, departamento o cuarto has lo siguiente:
Cierra la puerta 
Tapa cualquier entrada de humo utilizando toallas, cortinas o pedazos de alfombra de preferencia húmedos o mojados
Comunícate de ser posible por teléfono al conmutador del edificio y señala tu posición -
Comunícate de ser posible al cuerpo de bomberos o con cualquier servicio de emergencia e indícales tu posición</p>
                      <a href="prevencion.html" class="btn2">ver mas >></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
          <div class="col-xs-12 col-sm-4">
            <a class="" href="#">
              <img src="img/page-1_img08.png" alt="">
              <span>Siempre Listos</span>
            </a>
            <a class="" href="../panel_ley_transparecia/lista_bomberos/voluntarios_lista2.php">
              <img src="img/page-1_img09.png" alt="">
              <span>Llamenos</span>
            </a>
          </div>
        </div>
      </div>
    </section>
	<section class="well1 bg1">
      <div class="container wow fadeInUp">
        <h2>Siempre Listos</h2>
       
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="box">
              <span class="icon">
                <img src="img/page-4_img02.png" alt="">
              </span>
              <h5>Honor y Trabajo</h5>
              
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="box">
              <span class="icon">
                <img src="img/page-4_img03.png" alt="">
              </span>
              <h5>Respeto y Abnegación</h5>
              
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="box">
              <span class="icon">
                <img src="img/page-4_img04.png" alt="">
              </span>
              <h5>Amor a la Institución </h5>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    
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
              <li><a href="ayuda-comunitaria.html">Campañas de Prevención</a></li>
              <li><a href="permisoseinspecciones.html">Inspecciones</a></li>
              <li><a href="prevencion.html">Capacitacion a Empresas</a></li>
             
              <li><a href="contactenos.html">Servicios de Emergencia</a></li>
              <li><a href="http://www.ecu911.gob.ec/"><img src="img/page-1_img08.png" alt=""/></a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-3">
            <h3>NOSOTROS</h3>
            <ul class="list">
            
              <li><a href="institucion.html">Nuestra Institución</a></li>
                    <li><a href="institucion.html">Historia</a></li>
			  <li><a href="galerias.html">Galerias</a></li>
			    <li><a href="contactenos.html">Contactenos</a></li>
              <li><a href="#"><img src="img/102.png" alt=""/></a></li>
              
            </ul>
          </div>
		  
        </div>
      </div>
    </section>
  </main>
  <?= $this->endSection()?>