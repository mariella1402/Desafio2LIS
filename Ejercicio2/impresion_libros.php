<?php

 //Añadiendo las clases 
 include './Autor.php';
 include './Libros.php';
    session_start();


    if(isset($_SESSION['libros']) && $_GET['consulta_libros']){
        $consulta = $_SESSION['libros'];
///AQUI INICIO DE LA TABL
echo "<table class=\"table table-striped table-bordered\">
<thead class=\"bg-success\">
  <tr>
    <th scope=\"col\">AUTOR</th>
    <th scope=\"col\">TÍTULO DEL LIBRO</th>
    <th scope=\"col\">NÚMERO DE EDICIÓN</th>
    <th scope=\"col\">LUGAR DE LA PUBLICACIÓN</th>
    <th scope=\"col\">EDITORIAL</th>
    <th scope=\"col\">AÑO DE LA EDICIÓN</th>
    <th scope=\"col\">NÚMERO DE PÁGINAS</th>
    <th scope=\"col\">NOTAS</th>
    <th scope=\"col\">ISBN</th>
  </tr>
</thead>
<tbody>";
        foreach( $consulta as $elemento){
            get_object_vars($elemento);
             echo  $elemento-> GetLibros();  
         }
//AQUI FINAL DE LA TABLA 
echo "</tbody></table>";

    }
