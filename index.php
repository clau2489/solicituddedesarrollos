<!DOCTYPE html>
<html lang="en">

<!-- Head --> 
<?php include("layout/head.php"); ?>

<!-- <?php include("layout/nav.php"); ?> -->

<body id="page-top">

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <!--<img src="assets/img/cuariblanco.png" width="300px"> -->
      <!--<h1 class="mb-1">Compro en mi Pueblo</h1> -->
      <!--<h3 class="mb-5">
        <em style="color: white;">Una forma diferente de comprar</em>
      </h3>
      <a class="btn btn-success btn-sm js-scroll-trigger" href="#about">Accedé al programa</a> -->
    </div>
    <div class="overlay"></div>
  </header>
 

  <!-- About -->
  <section class="content-section" id="about">
    <div class="container">        
      <div class="row"> 
        <div class="offset-md-2 col-md-8 p2">
          <div class="text-center">
            <!-- <img src="assets/img/logo.png" width="300px;">-->
          </div>          
          <br>
          <br>
          <form action="procesarreclamo.php" method="post">
            
            <div class="alert ">
              <div class="alert alert-success" role="alert">
                <h1>Estos son los datos solicitados para el desarrollo de una nueva aplicacion y/o sistema</h1>
                <p>...</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>                
              </div>
              <br>
              <div class="form-group">
                <label>Area del Proyecto: </label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
              </div>
              <div class="form-group">
                <label>Responsable: </label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
              </div> 
              <div class="form-group">
                <label>Correo Electrónico: </label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
              </div> 
              <div class="form-group">
                <label>Número de teléfono: </label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
              </div> 
              <div class="form-group">
                <label>Fecha estimada de su implementacion y/o lanzamiento: </label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
              </div>                             
              <div class="form-group">
                <label>Tipo de aplicación: </label>
                <select class="form-control" id="tipoapp" name="tipoapp">
                  <option>Seleccionar</option>
                  <option>Aplicacion de gestion</option>
                  <option>Comercio Electronico</option>
                  <option>Comunicacion interna</option>
                  <option>Mensajeria instantanea</option>
                  <option>Fidelizacion de Usuarios</option>
                  <option>Servicio a clientes</option>
                </select>
              </div>
              <div class="form-group">
                <label>Nombre de la aplicación</label>
                <input type="text" class="form-control" id="documento" name="documento" required>
              </div>

              <div class="form-group">
                <label>Breve descripcion del proyecto:</label>
                <textarea class="form-control"></textarea>
              </div>
            </div>


            <div class="alert ">
              <h4>Algunos datos más</h4>
              <br>
              <div class="form-group">
                <label>Los usuarios podran almacenar datis en su aplicacion? </label>
                <select class="form-control" id="tipoapp" name="tipoapp">
                  <option>Seleccionar</option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                  <option value="no lo se todavia">No lo sé todavia</option>
                </select>
              </div>
              <div class="form-group">
                <label>Los usuarios recibiran notificaciones? </label>
                <select class="form-control" id="tipoapp" name="tipoapp">
                  <option>Seleccionar</option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                  <option value="no lo se todavia">No lo sé todavia</option>
                </select>
              </div>
              <div class="form-group">
                <label>Que nivel de desarrollo estas buscando? </label>
                <select class="form-control" id="tipoapp" name="tipoapp">
                  <option>Seleccionar</option>
                  <option value="si">Baja</option>
                  <option value="no">Media</option>
                  <option value="rapido">Rápido</option>
                </select>
              </div>
              <div class="form-group">
                <label>Tu aplicacion debe estar integrado con otro sitio web y/o servicio municipal? </label>
                <select class="form-control" id="tipoapp" name="tipoapp">
                  <option>Seleccionar</option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                  <option value="no lo se todavia">No lo sé todavia</option>
                </select>
              </div>
              <div class="form-group">
                <label>Los usuarios deben tener sus propios perfiles y poder administrar su propia informacion? </label>
                <select class="form-control" id="tipoapp" name="tipoapp">
                  <option>Seleccionar</option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                  <option value="no lo se todavia">No lo sé todavia</option>
                </select>
              </div>

              <div class="form-group">
                <label>Tu aplicacion necesita un panel de administracion para cargar datos y/o visualizar informacion? </label>
                <select class="form-control" id="tipoapp" name="tipoapp">
                  <option>Seleccionar</option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                  <option value="no lo se todavia">No lo sé todavia</option>
                </select>
              </div>
              
              <div class="form-group">
                <label>Defina el esquema de colores de su sitio o aplicacion? </label>
                <textarea class="form-control"></textarea>
              </div>
              
              <div class="form-group">
                <label>Su sitio o aplicacion necesitara un menu?. Describa cuales son los elementos del menu en caso de necesitarlo </label>
                <textarea class="form-control"></textarea>
              </div>

              <div class="form-group">
                <label>Que datos le solicitará a los visitantes de su sitio web o aplicacion? </label>
                <textarea class="form-control"></textarea>
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