<?php
/*1A*/
           $condicion = $_POST['data'];
$cursos = array (
    "Ingles"=> array(
        'Basico'=> 25,
        'Intermedio'=>15,
        'Avanzado'=>10,
    ),
    "Frances"=> array(
        'Basico'=> 10,
        'Intermedio'=>5,
        'Avanzado'=>2,
    ),
    "Aleman"=> array(
        'Basico'=> 8,
        'Intermedio'=>4,
        'Avanzado'=>1,
    ),
    "Ruso"=>array(
        'Basico'=> 12,
        'Intermedio'=>8,
        'Avanzado'=>4,
    ),
    "Chino Mandarin"=>array(
        'Basico'=> 30,
        'Intermedio'=>15,
        'Avanzado'=>10,
    ));
    
 
     function Recorrido($cursos, $condicion){
            echo " <div class=\"table-responsive\"><table class=\"table \"> <tbody>";
            foreach($cursos as $cursos => $nivel){
                if ($cursos==$condicion){
    
                    foreach($nivel as $nivel => $cantidad){
                        echo "<tr class=\"bg-success\">
                        <th scope=\"row\">$nivel </th>
                        <td >$cantidad</td>
                        </tr>";
                    } 
                }  
            }  
            echo "</tbody></table></div>";
        
        }     
        echo Recorrido($cursos,$condicion);
  
?>