<!DOCTYPE html>
    <html>
    <head>
    <title>EJERCICIO </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){ 
    $("#cursoA").change(function(){ 
      var opcion = $(this).val(); 
      var dataString = "data="+ opcion;
      $.ajax({ 
        type: "POST", 
        url: "Ejercicio1.1.php",
        data: dataString,
        success: function(result){ 
          $("#contA").html(result); 
        }
      });
    });
  }); 
  $(document).ready(function(){ 
    $("#cursoB").change(function(){ 
      var opcion = $(this).val(); 
      var dataString = "data="+ opcion; 
      $.ajax({
        type: "POST",
        url: "Ejercicio1.2.php", 
        data: dataString,
        success: function(result){
          $("#contB").html(result); 
        }
      });
    });
  }); 
  $(document).ready(function(){ 
    $("#cursoC").change(function(){ 
      var opcion = $(this).val(); 
      var dataString = "data="+ opcion; 
      $.ajax({ 
        type: "POST", 
        url: "Ejercicio1.3.php", 
        data: dataString, 
        success: function(result){ 
          $("#contC").html(result); 
        }
      });
    });
  }); 
</script>
    <meta charset="utf-8" />
    </head>
    <body>
<label for="standard-select">Seleccionar un curso de idiomas  (LITERAL A)</label>
<div class="select">
<select   id="cursoA" name="curso">
  <option value="Ingles">Ingles</option>    
  <option value="Frances">Frances</option>    
  <option value="Aleman">Aleman</option>    
  <option value="Ruso">Ruso</option>    
  <option value="Chino Mandarin">Chino Mandarin</option>   
</select>
  <span class="focus"></span>
</div>
<div id="contA">
  
</div>
<label for="standard-select">Seleccionar un curso de idiomas  (LITERAL B)</label>
<div class="select">
<select   id="cursoB" name="curso">
  <option value=0>Ingles</option>    
  <option value=1>Frances</option>    
  <option value=2>Aleman</option>    
  <option value=3>Ruso</option>    
  <option value=4>Chino Mandarin</option>   
</select>
  <span class="focus"></span>
</div>
<div id="contB">
</div>
<label for="standard-select">Seleccionar un curso de idiomas (LITERAL C)</label>
<div class="select">
<select   id="cursoC" name="curso">
  <option value=0>Ingles</option>    
  <option value=1>Frances</option>    
  <option value=2>Aleman</option>    
  <option value=3>Ruso</option>    
  <option value=4>Chino Mandarin</option>   
</select>
  <span class="focus"></span>
</div>
<div id="contC">
</div>
    </body>
    </html>