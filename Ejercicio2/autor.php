
<?php
class Autor
{

    private $NombreCompleto;

    public function crearAutor($Apellido, $Nombre)
    {
        $this->NombreCompleto = $Apellido . " " . $Nombre;
    }

    public function GetAutor()
    {
        return  $this->NombreCompleto;
    }
}
?>