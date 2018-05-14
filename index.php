<!doctype html>
<html lang="es">
  <!-- HEAD -->
  <head>
    <title>Infoproducto</title>
      <?php include 'inc/head_common.php'; ?>

      <link rel="stylesheet" href="/css/workshops.css">  <meta charset="utf-8">
      <link rel="stylesheet" href="./css/bootstrap.css">
      <script src="./js/bootstrap.min.js"></script>
      <script src="./js/jquery-1.11.1.js" type="text/javascript"></script> 
      
  </head>

<body>

  <?php include 'inc/header.php'; ?>
  
        <div id="page-wrap" class="container">

          <div id="contenedor" class="row">
            <div id="contenedor_c" class="col-xs-3" >
              
              <br><br><br><br>
              <h3>CATEGORIAS</h3> <hr>

                <a href="#" id="salud" class="enlace">Salud</a><br>
                <a href="#" id="cocina">Cocina</a><br>
                <a href="#" id="idiomas" >Idiomas</a><br>
                <a href="#" id="desarrollopersonal" >Desarrollo Personal</a><br>
                <a href="#" id="negocios">Negocios</a><br>
                <a href="#" id="viajes">Viajes</a>
            </div>

            
            <div id="principal" class="col-xs-9" >
                 Aquí se cargará el contenido de cada página del menú a la que invoques en cada link 
                                 <!-- 1. SALUD -->
                <!-- Primera Linea -->
                <div class="row" >
                    <br><br><br>
                  <h3> SALUD </h3>
                  <hr>

                  <div id="producto" class="col-xs-4 ">
                    <!-- Imagen -->
                    <link href="#"><img class="image-custom"src="img/salud1.jpg" alt=""></link>

                    <ul id="descripcion-producto">
                      <b>TALLER DE EJERCITACION DIARIA </b>
                      <p>Precio: $49.00</p>
                    </ul>

                  </div>
                  <div id="producto" class="col-xs-4">
                    <!-- Imagen -->
                    <link href="#"><img class="image-custom" src="img/salud2.png" alt=""></link>
                    <ul id="descripcion-producto">
                      <b>RUTINA PARA OBTENER ABDOMINALES </b>
                      <p> Precio: $29.00 </p> 
                    </ul>

                  </div>
                  <div id="producto" class="col-xs-4">
                    <!-- Imagen -->
                    <link href="#"><img class="image-custom" src="img/salud3.jpg" alt=""></link>
                    <ul id="descripcion-producto">
                      <b>ALIMENTACION SANA Y SALUDABLE </b>
                      <p>Precio: $39.00 </p>
                    </ul>
                  </div>
                </div>
                
                <!-- Segunda Linea -->
                <div class="row" >
                  <div id="producto" class="col-xs-4 ">
                    <!-- Imagen -->
                    <link href="#"><img class="image-custom" src="img/salud4.jpg" alt=""></link>
                    <ul id="descripcion-producto">
                      <b>APRENDE A COMER SANO </b>
                      <p>Precio: $49.00 </p>
                    </ul>

                  </div>
                  <div id="producto" class="col-xs-4">
                    <!-- Imagen -->
                    <link href="#"><img class="image-custom" src="img/salud5.jpg" alt=""></link>
                    <ul id="descripcion-producto">
                      <b>APRENDE A PREPARAR DELICIOSOS JUGOS SALUDABLES </b>
                      <p>Precio: $29.00</p>
                    </ul>

                  </div>
                  <div id="producto" class="col-xs-4">
                    <!-- Imagen -->
                  </div>
                </div>
                
            </div>

            

          </div>        

        </div>
</body>

  <?php include 'inc/footer.php'; ?>
  <?php include 'inc/footer_common.php'; ?>

    <script type="text/javascript">
      $(document).ready(function() { 
        $("#salud").click(function(event) { $("#principal").load('html/salud.html'); }); 
        $("#cocina").click(function(event) { $("#principal").load('html/cocina.html'); }); 
        $("#idiomas").click(function(event) { $("#principal").load('html/idiomas.html'); }); 
        $("#desarrollopersonal").click(function(event) { $("#principal").load('html/desarrollopersonal.html'); }); 
        $("#negocios").click(function(event) { $("#principal").load('html/negocios.html'); }); 
        $("#viajes").click(function(event) { $("#principal").load('html/viajes.html'); }); 

        $("#c_salud").click(function(event) { $("#principal").load('html/salud.html'); }); 
        $("#c_cocina").click(function(event) { $("#principal").load('html/cocina.html'); }); 
        $("#c_idiomas").click(function(event) { $("#principal").load('html/idiomas.html'); }); 
        $("#c_desarrollopersonal").click(function(event) { $("#principal").load('html/desarrollopersonal.html'); }); 
        $("#c_negocios").click(function(event) { $("#principal").load('html/negocios.html'); }); 
        $("#c_viajes").click(function(event) { $("#principal").load('html/viajes.html'); }); 
      }); 
    </script>

</html>



























































