<!DOCTYPE html>
<html>

<head>
    <title>Biblioteca</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        //FUNCIONES AJAX
        $(document).ready(function() {
            $("#autores").click(function(event) {
                var apellido = $("#apellido").val();
                var nombre = $("#nombre").val();
                var dataString = "apellido=" + apellido + '&nombre=' + nombre;
                $.ajax({
                        type: "POST",
                        url: "gestor.php",
                        data: dataString,
                        success: function(result) {
                            /* GET THE TO BE RETURNED DATA */
                            //$("#resultado").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
                            LimpiarAutores();
                        }
                    })
                    .done(function(data) {
                        errores = JSON.parse(data);
                        console.log(errores);
                        if (!errores.success) {
                            if (errores.errors_autor.apellido) {
                                $("#apellido-group").addClass("form-control is-invalid");
                                $("#apellido-group").append(
                                    '<div class="text-danger">' + errores.errors_autor.apellido + "</div>"
                                );
                            }
                            if (errores.errors_autor.nombre) {
                                $("#nombre-group").addClass("form-control is-invalid");
                                $("#nombre-group").append(
                                    '<div class="text-danger ">' + errores.errors_autor.nombre + "</div>"
                                );
                            }
                        }
                    })
                $.ajax({
                    type: "GET",
                    url: "impresion.php",
                    data: {
                        consulta: true
                    },
                    success: function(result) {
                        $("#resultado").html(result)
                    }
                })
                event.preventDefault();
            });
        });
        $(document).ready(function() {
            $("#add_libros").click(function(event) {
                var titulo = $("#titulo").val();
                var numedicion = $("#numedicion").val();
                var lugarpub = $("#lugarpub").val();
                var a??oed = $("#a??oed").val();
                var numpag = $("#numpag").val();
                var notas = $("#notas").val();
                var isbn = $("#isbn").val();
                var editorial = $("#editorial").val();
                var dataLibros = "titulo=" + titulo + '&numedicion=' + numedicion + '&lugarpub=' + lugarpub +
                    '&lugarpub=' + lugarpub + '&a??oed=' + a??oed +
                    '&numpag=' + numpag + '&notas=' + notas + '&isbn=' + isbn + '&editorial=' + editorial;
                $.ajax({
                        type: "POST",
                        url: "gestor_libros.php",
                        data: dataLibros,
                        success: function(result) {
                            //  $("#resultado").html(  

                            //      result); 
                            LimpiarLibros();
                        }
                    })
                    .done(function(data) {
                        console.log(data);
                        errores = JSON.parse(data);
                        if (!errores.success) {
                            if (errores.errors.titulo) {
                                $("#titulo-group").addClass("form-control is-invalid");
                                $("#titulo-group").append(
                                    '<div class="text-danger">' + errores.errors.titulo + "</div>"
                                );
                            }
                            if (errores.errors.numedicion) {
                                $("#numedicion-group").addClass("form-control is-invalid");
                                $("#numedicion-group").append(
                                    '<div class="text-danger">' + errores.errors.numedicion + "</div>"
                                );
                            }
                            if (errores.errors.lugarpub) {
                                $("#lugarpub-group").addClass("form-control is-invalid");
                                $("#lugarpub-group").append(
                                    '<div class="text-danger">' + errores.errors.lugarpub + "</div>"
                                );
                            }
                            if (errores.errors.editorial) {
                                $("#editorial-group").addClass("form-control is-invalid");
                                $("#editorial-group").append(
                                    '<div class="text-danger">' + errores.errors.editorial + "</div>"
                                );
                            }
                            if (errores.errors.a??oed) {
                                $("#a??oed-group").addClass("form-control is-invalid");
                                $("#a??oed-group").append(
                                    '<div class="text-danger">' + errores.errors.a??oed + "</div>"
                                );
                            }
                            if (errores.errors.numpag) {
                                $("#numpag-group").addClass("form-control is-invalid");
                                $("#numpag-group").append(
                                    '<div class="text-danger">' + errores.errors.numpag + "</div>"
                                );
                            }
                            if (errores.errors.notas) {
                                $("#notas-group").addClass("form-control is-invalid");
                                $("#notas-group").append(
                                    '<div class="text-danger">' + errores.errors.notas + "</div>"
                                );
                            }
                            if (errores.errors.isbn) {
                                $("#isbn-group").addClass("form-control is-invalid");
                                $("#isbn-group").append(
                                    '<div class="text-danger">' + errores.errors.isbn + "</div>"
                                );
                            }
                        }
                    })
                event.preventDefault();
            });
        });
        $(document).ready(function() {
            $("#reiniciar").click(function(event) {
                $.ajax({
                    type: "POST",
                    url: "gestor.php",
                    data: {
                        param1: true
                    },
                    success: function(result) {
                        LimpiarLibros();
                        LimpiarAutores();
                    }
                })

                event.preventDefault();
            });

        });
        $(document).ready(function() {
            $("#mostrar_autor").click(function(event) {
                $.ajax({
                    type: "GET",
                    url: "impresion.php",
                    data: {
                        consulta: true
                    },
                    success: function(result) {
                        $("#resultado").html(result)
                    }
                })

                event.preventDefault();
            });

        });
        $(document).ready(function() {
            $("#mostrar_libros").click(function(event) {
                $.ajax({
                    type: "GET",
                    url: "impresion_libros.php",
                    data: {
                        consulta_libros: true
                    },
                    success: function(result) {
                        $("#div_libros").html(result)
                    }
                })

                event.preventDefault();
            });

        });

        function LimpiarAutores() {
            document.getElementById('nombre').value = '';
            document.getElementById("apellido").value = '';
            $("#apellido-group").removeClass("form-control is-invalid");
            $("#nombre-group").removeClass("form-control is-invalid");
            $('.text-danger').remove();
        }

        function LimpiarLibros() {
            document.getElementById('titulo').value = '';
            document.getElementById("numedicion").value = '';
            document.getElementById("lugarpub").value = '';
            document.getElementById("a??oed").value = '';
            document.getElementById("numpag").value = '';
            document.getElementById("notas").value = '';
            document.getElementById("isbn").value = '';
            document.getElementById("editorial").value = '';
            $("#titulo-group").removeClass("form-control is-invalid");
            $("#numedicion-group").removeClass("form-control is-invalid");
            $("#lugarpub-group").removeClass("form-control is-invalid");
            $("#a??oed-group").removeClass("form-control is-invalid");
            $("#numpag-group").removeClass("form-control is-invalid");
            $("#notas-group").removeClass("form-control is-invalid");
            $("#isbn-group").removeClass("form-control is-invalid");
            $("editorial-group").removeClass("form-control is-invalid");
            $('.text-danger').remove();
        }
    </script>
    <meta charset="utf-8" />
</head>

<body>
    <div class="container .col-sm-6 col-sm-offset-3">
        <h1>Ingreso de libros para la biblioteca</h1>
        <form>
            <div id="apellido-group" class="form-group">
                <label for="apellido">Apellido de autor</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido del autor" />
            </div>
            <div id="nombre-group" class="form-group">
                <label for="nombre">Nombre de autor</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del autor" />
            </div>
            <h2>Autores a??adidos</h2>
            <div id="resultado"></div>
            <button type="submit" id="autores" class="btn btn-success">
                Agregar autor
            </button>
            <button type="submit" id="mostrar_autor" class="btn btn-success">
                Ver autores a??adidos
            </button>
            <br></br>
            <div id="titulo-group" class="form-group">
                <label for="titulo">T??tulo del libro</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="T??tulo del libro" />
            </div>
            <div id="numedicion-group" class="form-group">
                <label for="numedicion">N??mero de la edici??n</label>
                <input type="text" class="form-control" id="numedicion" name="numedicion" placeholder="N??mero de la edici??n" />
            </div>
            <div id="lugarpub-group" class="form-group">
                <label for="lugarpub">Lugar de la publicaci??n</label>
                <input type="text" class="form-control" id="lugarpub" name="lugarpub" placeholder="Lugar de la publicaci??n" />
            </div>
            <div id="editorial-group" class="form-group">
                <label for="editorial">Editorial</label>
                <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Editorial del libro" />
            </div>
            <div id="a??oed-group" class="form-group">
                <label for="lugarpub">A??o de la edici??n</label>
                <input type="text" class="form-control" id="a??oed" name="a??oed" placeholder="A??o de la edici??n" />
            </div>
            <div id="numpag-group" class="form-group">
                <label for="lugarpub">N??mero de p??ginas</label>
                <input type="number" class="form-control" id="numpag" min="1" name="numpag" placeholder="N??mero de p??ginas" />
            </div>
            <div id="notas-group" class="form-group">
                <label for="notas">Notas sobre el libro</label>
                <input type="text" class="form-control" id="notas" name="notas" placeholder="Informaci??n complementaria" />
            </div>
            <div id="isbn-group" class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" placeholder="978-1-4133-0454-1" />
            </div>

            <button type="submit" id="add_libros" class="btn btn-success">
                Agregar Libro
            </button>
            <button type="submit" id="mostrar_libros" class="btn btn-success">
                Ver libros a??adidos
            </button>
            <button type="submit" id="reiniciar" class="btn btn-success">
                Reiniciar aplicaci??n
            </button>
            <br></br>

            <h2>Libros a??adidos</h2>
        </form>
        <div class="container row" id="div_libros"></div>
    </div>
</body>

</html>