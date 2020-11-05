<!DOCTYPE html>
<html lang="en">

<!-- Head --> 
<?php include("layout/head.php"); ?>

<!-- <?php include("layout/nav.php"); ?> -->

<body id="page-top">

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <img src="assets/img/mmp.png" width="300px">
      <br><br><br>
      <h3 class="mb-1" style="color: white"> Solicitud de nuevos desarrollos</h3>
      <h3 class="mb-5">
        <!-- <em style="color: white;">Una forma diferente de comprar</em>-->
      </h3>
      <a class="btn btn-primary btn-sm js-scroll-trigger" href="#about">Acceder</a>
    </div>
    <div class="overlay"></div>
  </header>
 

  <!-- About -->
  <section class="content-section" id="about">
    <div class="container">        
      <div class="row"> 
        <div class="offset-md-2 col-md-8 p2">
          <div class="text-center">
              <div class="alert alert-success" role="alert">
                <h4>A continuación le vamos a solicitar los datos requeridos para realizar el sistema y/o aplicación que deseas.</h4>
                <p><a class="btn btn-primary" href="#" role="button">Continuar</a></p>                
              </div>
          </div>          
          <br>
          <br>
          <form action="enviarmail.php" method="post" style="background-color: #00000014;">
            
            <div class="alert ">
              <div class="form-group">
                <label>Área que solicita el proyecto: </label>
                <input type="text" class="form-control" id="area" name="area" required>
              </div>
              <div class="form-group">
                <label>Responsable: </label>
                <input type="text" class="form-control" id="responsable" name="responsable" required>
              </div> 
              <div class="form-group">
                <label>Correo Electrónico: </label>
                <input type="text" class="form-control" id="mail" name="mail" required>
              </div> 
              <div class="form-group">
                <label>Número de teléfono: </label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
              </div> 
              <div class="form-group">
                <label>Fecha estimada de su implementación y/o lanzamiento: </label>
                <input type="date" class="form-control" id="fechaimplementacion" name="fechaimplementacion" required>
              </div>                             
              <div class="form-group">
                <label>Tipo de aplicación: </label>
                <select class="form-control" id="tipoapp" name="tipoapp">
                  <option>Seleccionar</option>
                  <option>Aplicación de Gestión</option>
                  <option>Comercio Electrónico</option>
                  <option>Comunicación interna</option>
                  <option>Mensajería Instantánea</option>
                  <option>Fidelización de Usuarios</option>
                  <option>Servicio a clientes</option>
                </select>
              </div>
              <div class="form-group">
                <label>Nombre de la aplicación</label>
                <input type="text" class="form-control" id="nombreapp" name="nombreapp" required>
              </div>

              <div class="form-group">
                <label>Breve descripción del proyecto:</label>
                <textarea class="form-control" id="descripcionapp" name="descripcionapp"></textarea>
              </div>
            </div>


            <div class="alert ">
              <h4>Algunos datos más</h4>
              <br>
              <div class="form-group">
                <label>Los usuarios podrán almacenar datos en su aplicación? </label>
                <select class="form-control" id="almacenainfo" name="almacenainfo">
                  <option>Seleccionar</option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                  <option value="no lo se todavia">No lo sé todavia</option>
                </select>
              </div>
              <div class="form-group">
                <label>Los usuarios recibirán notificaciones? </label>
                <select class="form-control" id="recibenotificacion" name="recibenotificacion">
                  <option>Seleccionar</option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                  <option value="no lo se todavia">No lo sé todavia</option>
                </select>
              </div>
              <div class="form-group">
                <label>Que nivel de desarrollo estás buscando? </label>
                <select class="form-control" id="nivelapp" name="nivelapp">
                  <option>Seleccionar</option>
                  <option value="si">Baja</option>
                  <option value="no">Media</option>
                  <option value="rapido">Rápido</option>
                </select>
              </div>
              <div class="form-group">
                <label>Tu aplicación debe estar integrado con otro sitio web y/o servicio municipal? </label>
                <select class="form-control" id="integrarapp" name="integrarapp">
                  <option>Seleccionar</option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                  <option value="no lo se todavia">No lo sé todavia</option>
                </select>
              </div>
              <div class="form-group">
                <label>Los usuarios deben tener sus propios perfiles y poder administrar su propia información? </label>
                <select class="form-control" id="perfilesapp" name="perfilesapp">
                  <option>Seleccionar</option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                  <option value="no lo se todavia">No lo sé todavia</option>
                </select>
              </div>

              <div class="form-group">
                <label>Tu aplicación necesita un panel de administración para cargar datos y/o visualizar información? </label>
                <select class="form-control" id="panelapp" name="panelapp">
                  <option>Seleccionar</option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                  <option value="no lo se todavia">No lo sé todavia</option>
                </select>
              </div>
              
              <div class="form-group">
                <label>Defina el esquema de colores de su sitio o aplicación? </label>
                <textarea class="form-control" id="esquemacolores" name="esquemacolores"></textarea>
              </div>
              
              <div class="form-group">
                <label>Su sitio o aplicación necesitará un menú?. Describa cuáles son los elementos del menú en caso de necesitarlo </label>
                <textarea class="form-control" id="elementosmenu" name="elementosmenu"></textarea>
              </div>

              <div class="form-group">
                <label>Que datos le solicitará a los visitantes de su sitio web o aplicación? </label>
                <textarea class="form-control" id="datossolicitados" name="datossolicitados"></textarea>
              </div>
            </div>

            <div class="alert "> 
              <div class="form-group">
                <label>Envienos un comentario: </label>
                <textarea class="form-control" id="comentario" name="comentario" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-success btn-block">Enviar Solicitud</button>
            </div>
                      
          </form>
        </div>        
      </div>
    </div>
  </section> 
  <div class="text-center">
    <a href="../index.php"><i class="fa fa-arrow-circle-left" style="font-size: 40px"></i></a>
  </div>

  <?php include("layout/footer.php"); ?>

  <?php include("layout/script.php"); ?>

</body>

</html>