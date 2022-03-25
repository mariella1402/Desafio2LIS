<?php
/*1C*/
           $condicion = $_POST['data'];


    $listado = array(
        array(array('Basico'=> 25,'Intermedio'=>15,'Avanzado'=>10)),  //Ingles
        array(array('Basico'=> 10,'Intermedio'=>5,'Avanzado'=>2)),  //Frances
        array(array('Basico'=> 8,'Intermedio'=>4,'Avanzado'=>1)),   //Aleman
        array(array('Basico'=> 12,'Intermedio'=>8,'Avanzado'=>4)),   //Ruso
        array(array('Basico'=> 30,'Intermedio'=>15,'Avanzado'=>10)),  //Chino
    );
 
     function Recorrido($cursos, $condicion){
        echo " <div class=\"table-responsive\"><table class=\"table \"> <tbody>";
        foreach($cursos[$condicion] as $fila) {
                foreach($fila as $fila => $elemento){
                    echo "<tr class=\"bg-success\">
                    <th scope=\"row\">" .$fila. "</th>
                    <td>".$elemento."</td>
                    </tr>";
                }
             }
             echo "</tbody></table></div>";  
    } 
        echo Recorrido($listado,$condicion);
  
?>