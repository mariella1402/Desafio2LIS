<?php
    //Añadiendo las clases 
    include './Autor.php';
    include './Libros.php';
    
    session_start();
    $errors_autor=[];
    $data =[];
   //Objeto autor
    $autor = new Autor();
    $libro = new Libros();

    //Declaracion de regex

    $regex_nombre= '/^([a-zA-Z \u00f1\u00d1]+)$/';

//VALIDACION PARA LOS CAMPOS 

if (empty($_POST['apellido'])) {
    $errors_autor['apellido'] = 'Apellido es obligatorio.';
}
elseif(!empty($_POST['apellido']) && !preg_match($regex_nombre,$_POST['apellido'])){
    $errors_autor['apellido'] = 'Apellido contiene caracteres especiales.';
}

if (empty($_POST['nombre'])) {
    $errors_autor['nombre'] = 'Nombre es obligatorio.';
}
elseif(!empty($_POST['nombre']) && !preg_match($regex_nombre,$_POST['nombre'])){
    $errors_autor['nombre'] = 'Nombre contiene caracteres especiales.';
}

if ( !empty($errors_autor)) {
    $data['success'] = false;
    $data['errors_autor']=$errors_autor;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}


if (isset($_POST['param1']))
    session_destroy();


    if(empty($errors_autor)){
    //Guardando autores  por medio de Sesion 
    $autor->crearAutor($_POST['apellido'],$_POST['nombre']);
    $_SESSION['autores'][] = $autor;

    }




echo json_encode($data);
