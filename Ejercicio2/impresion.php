
<?php

//Añadiendo las clases 
include './Autor.php';
include './Libros.php';
session_start();


if (isset($_SESSION['autores']) && $_GET['consulta']) {
    $consulta = $_SESSION['autores'];
    echo "<table class=\"table table-striped table-bordered\">
<thead class=\"bg-info\">
 <tr>
   <th scope=\"col\">AUTOR</th>
 </tr>
</thead>
<tbody>  ";
    foreach ($consulta as $elemento) {
        echo " <tr><td>" . $elemento->GetAutor() . "</td></tr>";
    }
    echo "</tbody></table>";
}
?>