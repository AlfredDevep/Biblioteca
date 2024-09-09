<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        require_once 'classes/class__libro.php';
        require_once 'classes/class__biblioteca.php';
        require_once 'classes/class__usuario.php';

        //$bilbio = new Biblioteca();

        //$usuario = new Usuario("123", "Criss", "Mart", "josea@gmail.com", 23456657, "123fjhslk jfhlkjfh");

        //$usuario->agregarUsuario();
        //$usuario->mostrarUsuarios();

        $biblioteca = new Biblioteca("2345", "El principito","Gabriel García Márquez", "Terror", "true",
        "Juan Perez", "2020-10-10", "2020-10-20", "Prestado", "1", "1", "1", "1", "1", "1", "1");

        //$biblioteca->buscarLibroBiblioteca("El principito", "Gabriel Garc\u00eda M\u00e1rquez", "Terror");

        // $biblioteca->agregarLibro("2345", "El principito","Gabriel García Márquez", "Terror", "true",
        // "Juan Perez", "2020-10-10", "2020-10-20", "Prestado", "1", "1", "1", "1", "1", "1", "1")

        //$biblioteca->editarLibroBiblioteca("58080a28391affe7d071470c5c6afcfe", "El cipitio", "Gabriel García Márquez", "Terror", "true",
        //"Juan Perez", "2020-10-10", "2020-10-20", "Prestado", "1", "1", "1", "1", "1", "1", "1");

        //$biblioteca->eliminarLibroBiblioteca("58080a28391affe7d071470c5c6afcfe"); 

        
        $usuario = new Usuario("123", "criss","art", "asjljhlkjh@gmail.com", "213143413", "hkfj ewhe    we");
        
        $usuario->prestarLibro( $biblioteca, $idLibro, $fechaPrestamo, $fechaDevolucion, $estado)
        
        //$biblioteca->agregarLibro("2345", "El principito","Gabriel García Márquez", "Terror", "true",




        
        // $libro = new Libro("2345", "El principito","Gabriel García Márquez", "Terror", "true",
        // "Juan Perez", "2020-10-10", "2020-10-20", "Prestado", "1", "1", "1", "1", "1", "1", "1");
        // // $libro->eliminarLibro(1);
        // $libro->agregarLibro();
        // $libro->editarLibro(1, "El principito", "Gabriel García Márquez", "Terror", "true",
        // "Juan Perez", "2020-10-10", "2020-10-20", "Prestado", "1", "1", "1", "1", "1", "1", "1");
        // $libro->mostrarLibros();

        // $libro->agregarLibro("2345", "El principito","Gabriel García Márquez", "Terror", "true",
        // "Juan Perez", "2020-10-10", "2020-10-20", "Prestado", "1", "1", "1", "1", "1", "1", "1");
       // $libro->eliminarLibro("9c516ec93a0f7c1030c38e2881cf95f1");
    ?>
</body>
</html>