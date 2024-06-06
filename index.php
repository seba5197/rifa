<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="public/css/mystyle.css">
<?php



    date_default_timezone_set("America/Santiago");
    require 'public/header.php';
    $header=new header();
    echo $header->header();
    $contenido=file_get_contents('slider.html');
?>
<style>

</style>
        
    <script>

var countDownDate = new Date("Sep 5, 2022 15:37:25").getTime();

var x = setInterval(function() {


  var now = new Date().getTime();
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("conteo").innerHTML ="Fecha de lanzamiento: "+ days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("conteo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
    </head>
    <body>
        
        
        <div class='comprar'>
            <button class="btn btn-dark rounded cerrar" onclick="cerrar();"">X</button>
            
            <div class="row">
                <div class="col-md-12 titulo"></div>
                <div class="col-6 tickets"></div>
                <div class="col-6 total"></div>
                
            </div>
            
            
        </div>
        <div> <?php 
              echo $contenido;
             ?> 
        </div>
        <div class="inicio bg-dark text-white"><center><h1>Ejemplo rifa</h1>
                <div id="conteo"></div>    
            <div class="img">
            
                <hr>
                <button class='btn btn-danger' onclick="muestradiv();">Comprar</button>
                <button class='btn btn-success' onclick="aleatoreo();">numero azar</button>
                
            </div>                 
                </CENTER>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class='col-md-2'></div>
                <div class='col-md-8'>
        <div class="container-fluid">
            <div class="row numeros">
                
                <label> ingresa cantidad de numeros
                <input type="number" class="form-control num" placeholder="cant numeros">        
                </label>
                
                <label> ingresa valor de numeros
                <input type="number" class="form-control valor" placeholder="valor">        
                </label>
                
                <button class="btn btn-dark" onclick="generar();">Generar</button>
                
           
      
                <hr>
              
                 </div>
             <div class='col-md-2'>
                 </div>
            <div class="col-md-12">
                <hr>
                <center>Diseñado por Sebastian Martinez <hr><a href="https://promarketing.cl">
                        
                       
</a>   
                    
                    </center>
                
            </div>
                 </div>
           </div>
                 </div>
           </div>
        
        <script  src="public/js/slider.js" ></script>
        
       
        
    </body>
    
    <footer class="text-center mt-5 footbg" >
        <div class="container">
            <div class="row">
                <div class="col"><a  class="textoblanco" href="https://promarketing.cl" target="_blank">
                    <img src="LOGO-PROMARKETING_1.png"  height="80px;" alt="Descripción de la imagen" class="img-fluid"> </a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                <p  class="textoblanco"> <span id="year" class="textoblanco"></span> Diseño hecho por <a  class="textoblanco" href="https://promarketing.cl" target="_blank">Promarketing.cl</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
    
</html>
