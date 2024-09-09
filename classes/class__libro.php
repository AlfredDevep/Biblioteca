<?php

/**
     * 1. Crear un proyecto en PHP utilizando programación orientada a objetos**: 
     * Esto implica organizar el código en clases y objetos, lo que facilita 
     * la reutilización del código, el mantenimiento y la escalabilidad del proyecto. 
     * Cada clase debería representar una entidad o un conjunto de funciones relacionadas 
     * dentro del sistema de gestión de libros de la biblioteca.

        2. Desarrollar un sistema para gestionar los libros de una biblioteca: 
        El sistema debe permitir operaciones como agregar, editar, eliminar y buscar libros. 
        Además, debe ser capaz de administrar la información sobre los autores, 
        las categorías y cualquier otra información relevante sobre los libros.

 

        3. Funcionalidades específicas del sistema:

-       Búsqueda de libros: Los usuarios deben poder buscar libros por título, autor o categoría.

-       Préstamos de libros: Los usuarios deberían poder solicitar el préstamo de un libro y, 
        si está disponible, el sistema debe permitirlo registrando la transacción 
        y actualizando el estado del libro.

        4. Implementar el uso de clases y métodos: Las clases deben estar bien estructuradas 
        y definir métodos que realicen tareas específicas. Por ejemplo, podría haber una clase 
        `Libro` con métodos para agregar, buscar y editar libros, y una clase 
        `Biblioteca` que maneje la gestión de libros y la interacción con los usuarios.

 

        5. Aplicar los pilares de la programación orientada a objetos (POO): 
        Los pilares de la POO incluyen la encapsulación, la herencia, el polimorfismo y la abstracción. 
        Es importante aplicar estos conceptos de manera adecuada para 
        garantizar un diseño sólido y mantenible del sistema.

 

        6. Buenas prácticas de programación: Esto incluye seguir convenciones de nomenclatura, 
        escribir un código limpio y legible, documentar el código cuando sea necesario 
        y seguir principios como el principio de responsabilidad única y el principio de mínimo acoplamiento.


     */



class Libro{
    private $id;
    private $titulo;
    private $autor;
    private $categoria;
    private $disponible;
    private $prestadoPor;
    private $fechaPrestamo;
    private $fechaDevolucion;
    private $estado;
    private $idBiblioteca;
    private $idUsuario;
    private $idCategoria;
    private $idAutor;
    private $idEditorial;
    private $idPrestamo;

    //We define the constructor method
    public function __construct($id, $titulo, $autor, $categoria, $disponible, $prestadoPor, $fechaPrestamo, $fechaDevolucion, $estado, $idBiblioteca, $idUsuario, $idCategoria, $idAutor, $idEditorial, $idPrestamo){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->disponible = $disponible;
        $this->prestadoPor = $prestadoPor;
        $this->fechaPrestamo = $fechaPrestamo;
        $this->fechaDevolucion = $fechaDevolucion;
        $this->estado = $estado;
        $this->idBiblioteca = $idBiblioteca;
        $this->idUsuario = $idUsuario;
        $this->idCategoria = $idCategoria;
        $this->idAutor = $idAutor;
        $this->idEditorial = $idEditorial;
        $this->idPrestamo = $idPrestamo;
    }

    //We define the getter and setter methods
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }
    public function getDisponible(){
        return $this->disponible;
    }
    public function setDisponible($disponible){
        $this->disponible = $disponible;
    }
    public function getPrestadoPor(){
        return $this->prestadoPor;
    }
    public function setPrestadoPor($prestadoPor){
        $this->prestadoPor = $prestadoPor;
    }
    public function getFechaPrestamo(){
        return $this->fechaPrestamo;
    }
    public function setFechaPrestamo($fechaPrestamo){
        $this->fechaPrestamo = $fechaPrestamo;
    }
    public function getFechaDevolucion(){
        return $this->fechaDevolucion;
    }
    public function setFechaDevolucion($fechaDevolucion){
        $this->fechaDevolucion = $fechaDevolucion;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function getIdBiblioteca(){
        return $this->idBiblioteca;
    }
    public function setIdBiblioteca($idBiblioteca){
        $this->idBiblioteca = $idBiblioteca;
    }
    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }
    public function getIdCategoria(){
        return $this->idCategoria;
    }
    public function setIdCategoria($idCategoria){
        $this->idCategoria = $idCategoria;
    }
    public function getIdAutor(){
        return $this->idAutor;
    }

    //Metodos estaticos para verificar si el archivo json existe

    public static function verificarArchivoJson() {
        $archivo = 'libros.json';
    
        // Verifica si el archivo existe y no está vacío
        if (file_exists($archivo) && filesize($archivo) > 0) {
            $contenido = file_get_contents($archivo);
            return json_decode($contenido, true) ?? [];
        }
    
        return []; // Retorna un array vacío si el archivo no existe o está vacío
    }    

    //Agregar libros al array libro...

    public function agregarLibro() {
        // Leer los libros existentes del archivo JSON
        $libros = self::verificarArchivoJson();
    
        // Generar un ID único usando hash
        $uniqueId = md5(uniqid((string)microtime(true), true));
    
        // Agregar el nuevo libro con el ID único
        $libros[] = [
            'id' => $uniqueId,
            'titulo' => $this->titulo,
            'autor' => $this->autor,
            'categoria' => $this->categoria,
            'disponible' => $this->disponible,
            'prestadoPor' => $this->prestadoPor,
            'fechaPrestamo' => $this->fechaPrestamo,
            'fechaDevolucion' => $this->fechaDevolucion,
            'estado' => $this->estado,
            'idBiblioteca' => $this->idBiblioteca,
            'idUsuario' => $this->idUsuario,
            'idCategoria' => $this->idCategoria,
            'idAutor' => $this->idAutor,
            'idEditorial' => $this->idEditorial,
            'idPrestamo' => $this->idPrestamo
        ];
    
        // Guardar los libros actualizados en el archivo JSON
        self::guardarLibros($libros);
    }
    

    //Metodo para guardar los libros en un archivo json
    public static function guardarLibros($libros){
        $archivo = 'libros.json';
        $information_libros = json_encode($libros, JSON_PRETTY_PRINT);
        file_put_contents($archivo, $information_libros);
    }

    //Delete libro from libros.json
    public static function eliminarLibro($id) {
        $libros = self::verificarArchivoJson();
        $libroEliminado = null;
        foreach($libros as $key => $libro){
            if($libro['id'] == $id){
                $libroEliminado = $libro;
                unset($libros[$key]);
                break;
            }
        }
        self::guardarLibros($libros);
        self::imprimirLibroEliminado($libroEliminado, $id);
    }

    public static function imprimirLibroEliminado($libroEliminado, $id) {
        if ($libroEliminado) {
            echo "Libro eliminado:\n";
            echo "Título: " . $libroEliminado['titulo'] . "\n";
            echo "Autor: " . $libroEliminado['autor'] . "\n";
            echo "Categoría: " . $libroEliminado['categoria'] . "\n";
        } else {
            echo "No se encontró el libro con ID: $id para eliminar.";
        }
    }

    //Edit libro from libros.json
    public static function editarLibro($id, $titulo, $autor, $categoria, $disponible, $prestadoPor, $fechaPrestamo, $fechaDevolucion, $estado, $idBiblioteca, $idUsuario, $idCategoria, $idAutor, $idEditorial, $idPrestamo) {
        $libros = self::verificarArchivoJson();
        $libroEditado = null;
        foreach($libros as $key => $libro){
            if($libro['id'] == $id){
                $libroEditado = [
                    'id' => $id,
                    'titulo' => $titulo,
                    'autor' => $autor,
                    'categoria' => $categoria,
                    'disponible' => $disponible,
                    'prestadoPor' => $prestadoPor,
                    'fechaPrestamo' => $fechaPrestamo,
                    'fechaDevolucion' => $fechaDevolucion,
                    'estado' => $estado,
                    'idBiblioteca' => $idBiblioteca,
                    'idUsuario' => $idUsuario,
                    'idCategoria' => $idCategoria,
                    'idAutor' => $idAutor,
                    'idEditorial' => $idEditorial,
                    'idPrestamo' => $idPrestamo
                ];
                $libros[$key] = $libroEditado;
                break;
            }
        }
        self::guardarLibros($libros);
        self::imprimirLibroEditado($libroEditado, $id);
    }

    public static function imprimirLibroEditado($libroEditado, $id) {
        if ($libroEditado) {
            echo "Libro editado:\n";
            echo "ID: " . $libroEditado['id'] . "\n";
            echo "Título: " . $libroEditado['titulo'] . "\n";
            echo "Autor: " . $libroEditado['autor'] . "\n";
            echo "Categoría: " . $libroEditado['categoria'] . "\n";
            echo "Disponible: " . ($libroEditado['disponible'] ? 'Sí' : 'No') . "\n";
            echo "Prestado Por: " . $libroEditado['prestadoPor'] . "\n";
            echo "Fecha de Préstamo: " . $libroEditado['fechaPrestamo'] . "\n";
            echo "Fecha de Devolución: " . $libroEditado['fechaDevolucion'] . "\n";
            echo "Estado: " . $libroEditado['estado'] . "\n";
            echo "ID Biblioteca: " . $libroEditado['idBiblioteca'] . "\n";
            echo "ID Usuario: " . $libroEditado['idUsuario'] . "\n";
            echo "ID Categoría: " . $libroEditado['idCategoria'] . "\n";
            echo "ID Autor: " . $libroEditado['idAutor'] . "\n";
            echo "ID Editorial: " . $libroEditado['idEditorial'] . "\n";
            echo "ID Préstamo: " . $libroEditado['idPrestamo'] . "\n";
        } else {
            echo "No se encontró el libro con ID: $id para editar.";
        }
    }



    //Look for a book from the libros.json by título, autor o categoría

    public static function buscarLibro($titulo, $autor, $categoria){
        $libros = self::verificarArchivoJson();
        $libros_encontrados = [];
        foreach($libros as $libro){
            $criterios = [];
            if($libro['titulo'] == $titulo) {
                $criterios[] = 'título';
            }
            if($libro['autor'] == $autor) {
                $criterios[] = 'autor';
            }
            if($libro['categoria'] == $categoria) {
                $criterios[] = 'categoría';
            }
            if (!empty($criterios)) {
                $libro['criterios'] = $criterios;
                $libros_encontrados[] = $libro;
            }
        }
        self::imprimirLibroEncontrado($libros_encontrados);
        return $libros_encontrados;
    }

    public static function imprimirLibroEncontrado($libros_encontrados) {
        if (empty($libros_encontrados)) {
            echo "No se encontró ningún libro.";
        } else {
            echo "Libros encontrados:\n";
            foreach ($libros_encontrados as $libro) {
                echo "Título: " . $libro['titulo'] . ", Autor: " . $libro['autor'] . ", Categoría: " . $libro['categoria'] . "\n";
                echo "Criterios de coincidencia: " . implode(', ', $libro['criterios']) . "\n";
            }
        }
    }

    // Método público para obtener información del libro
    public function obtenerInformacionLibro($id) {
        $libros = self::verificarArchivoJson();
        foreach ($libros as $libro) {
            if ($libro['id'] == $id) {
                return "ID: {$libro['id']}, Título: {$libro['titulo']}, Autor: {$libro['autor']}";
            }
        }
        return null;
    }


    public static function prestarLibro($id, $prestadoPor, $fechaPrestamo, $fechaDevolucion, $estado) {
        $libros = self::verificarArchivoJson();
        $libroPrestado = null;
        foreach($libros as $key => $libro){
            if($libro['id'] == $id && $libro['disponible']) {
                $libros[$key]['prestadoPor'] = $prestadoPor;
                $libros[$key]['fechaPrestamo'] = $fechaPrestamo;
                $libros[$key]['fechaDevolucion'] = $fechaDevolucion;
                $libros[$key]['estado'] = $estado;
                $libros[$key]['disponible'] = false;
                $libroPrestado = $libros[$key];
                break;
            }
        }
        self::guardarLibros($libros);
        self::imprimirLibroPrestado($libroPrestado, $id);
        return $libroPrestado;
    }

    public static function imprimirLibroPrestado($libroPrestado, $id) {
        if ($libroPrestado) {
            echo "Libro prestado:\n";
            echo "Título: " . $libroPrestado['titulo'] . "\n";
            echo "Autor: " . $libroPrestado['autor'] . "\n";
            echo "Categoría: " . $libroPrestado['categoria'] . "\n";
            echo "Prestado Por: " . $libroPrestado['prestadoPor'] . "\n";
            echo "Fecha de Préstamo: " . $libroPrestado['fechaPrestamo'] . "\n";
            echo "Fecha de Devolución: " . $libroPrestado['fechaDevolucion'] . "\n";
            echo "Estado: " . $libroPrestado['estado'] . "\n";
        } else {
            echo "No se pudo prestar el libro con ID: $id.";
        }
    }

    

    




    //Show all books from libros.json
    // public static function mostrarLibros(){
    //     $libros = self::verificarArchivoJson();
    //     foreach($libros as $libro){
    //         echo "ID: ".$libro['id']."<br>";
    //         echo "Título: ".$libro['titulo']."<br>";
    //         echo "Autor: ".$libro['autor']."<br>";
    //         echo "Categoría: ".$libro['categoria']."<br>";
    //         echo "Disponible: ".$libro['disponible']."<br>";
    //         echo "Prestado por: ".$libro['prestadoPor']."<br>";
    //         echo "Fecha de préstamo: ".$libro['fechaPrestamo']."<br>";
    //         echo "Fecha de devolución: ".$libro['fechaDevolucion']."<br>";
    //         echo "Estado: ".$libro['estado']."<br>";
    //         echo "ID Biblioteca: ".$libro['idBiblioteca']."<br>";
    //         echo "ID Usuario: ".$libro['idUsuario']."<br>";
    //         echo "ID Categoría: ".$libro['idCategoria']."<br>";
    //         echo "ID Autor: ".$libro['idAutor']."<br>";
    //         echo "ID Editorial: ".$libro['idEditorial']."<br>";
    //         echo "ID Préstamo: ".$libro['idPrestamo']."<br>";
    //         echo "<br>";
    //     }
    // }

}


 

?>