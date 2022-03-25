
<?php

class Libros extends Autor
{
    private $Titulo;
    public $Autor; //Crear clase autor
    private $Num_edicion;
    private $Lugar_pub;
    private $Año_edicion;
    private $Num_pag;
    private $ISBN;
    private $Notas;
    private $Editorial;
    private $AutorConc;


    function crearLibro($Titulo, $Num_edicion, $Lugar_pub, $Año_edicion, $Num_pag, $ISBN, $Notas, array $Autor, $Editorial)
    {
        $this->Titulo = $Titulo;
        $this->Num_edicion = $Num_edicion;
        $this->Lugar_pub = $Lugar_pub;
        $this->Año_edicion =  $Año_edicion;
        $this->Num_edicion = $Num_edicion;
        $this->Num_pag = $Num_pag;
        $this->ISBN = $ISBN;
        $this->Notas = $Notas;
        $this->Autor = $Autor;
        $this->Editorial = $Editorial;

        foreach ((array) $this->Autor  as $elemento => $nombre) {
            $this->AutorConc .= "" . $nombre->GetAutor() . "\n";
        }
    }

    function GetLibros()
    {

        $contenido = "
     <tr>
      <th scope=\"row\">" . $this->AutorConc . "</th>
      <td>" . $this->Titulo . "</td>
      <td>" . $this->Num_edicion . "</td>
      <td>" . $this->Lugar_pub . "</td>
      <td>" . $this->Editorial . "</td>
      <td>" . $this->Año_edicion . "</td>
      <td>" . $this->Num_pag . "</td>
      <td>" . $this->Notas . "</td>
      <td>" . $this->ISBN . "</td>
    </tr>
     ";


        echo $contenido;
    }



    /*FORMA DE TRAER LOS DATOS 
           $datos = "Titulo del libro " .$this->Titulo. " Editorial ".$this->Editorial. "";
            foreach((array) $this->Autor  as $elemento => $nombre){
                echo "Autores: " .$nombre->GetAutor()."";
            }
        echo $datos;
     */
}
?>