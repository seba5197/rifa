/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



        function generar(){
           num = $(".num").val(); 
           valor = $(".valor").val(); 
            $( ".numeros" ).html( "data" );
            $.post( "public/dinamicos.php",{numeros:num,valor:valor} ,function( data ) {
            $( ".numeros" ).html( data );
            });    
        
        }    
            
        function comprar(){
        
       $id=$(event.target);
       $id.toggleClass("seleccionado");
            calcula();
        }
        
        function muestradiv(){
           
       $(".comprar").toggleClass("activo");   
        calcula();
        }
        
        function calcula(){
            $(".titulo").html("<center><h3>Numeros seleccionados</h3></center><hr>");
            $(".tickets").html("");
            $(".total").html("");

        var valorfinal=0;
    $(".seleccionado").each(function() {
        valor= $(this).attr('valor');
        numero= $(this).text();
        valorfinal=valorfinal+parseInt(valor);
        $(".tickets").append("Num Select: "+numero+"<br>");
  
    });

 $(".total").append("Valor total de numeros seleccionados: <b>$"+valorfinal+"</b><br> <button class='btn btn-success'>Pagar</button> ");
        }
        
        
        function aleatoreo(){
            calcula();
        var items = shuffle($(".xxx").not(".seleccionado")).slice(0, 1).toggleClass("seleccionado");;
          
        }
        
    function shuffle(array) {
  var m = array.length, t, i;

  // While there remain elements to shuffle…
  while (m) {

    // Pick a remaining element…
    i = Math.floor(Math.random() * m--);

    // And swap it with the current element.
    t = array[m];
    array[m] = array[i];
    array[i] = t;
  }

  return array;
}

function cerrar(){
    
    $(".comprar").toggleClass("activo");   
}
        
        