<?php
/*1B*/
           $condicion = $_POST['data'];

           $listado = array(
            array(25,15,10),  //Ingles
            array(10,5,2),   //Frances
            array(8,4,1),   //Aleman
            array(12,8,4),   //Ruso
            array(30,15,10)  //Chino
        );
               
     function nivel($valor){
        switch ($valor) {
            case 0:
                return "Basico";
                break;
            case 1:
                return "Intermedio";
                break;
            case 2:
                return "Avanzado";
                break;
        }
     }

function Recorrido($listado, $condicion){
    echo " <div class=\"table-responsive\"><table class=\"table \"> <tbody>";
    for ($j=0; $j < 5; $j++) { 
        if ($j == $condicion){
        for ($i = 0; $i < 3; $i++) { 
            echo "<tr class=\"bg-success\">
            <th scope=\"row\">" .nivel($i). "</th>
            <td>".$listado[$j][$i]."</td>
            </tr>";
            }
        }

    } //FIN DE FOR
    echo "</tbody></table></div>";
     
}
                   echo Recorrido($listado, $condicion);
?>