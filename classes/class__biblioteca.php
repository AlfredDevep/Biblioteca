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


require_once 'class__libro.php';
require_once 'class__biblioteca.php';
require_once 'class__usuario.php';
//una clase `Biblioteca` que maneje la gestión de libros y la interacción con los usuarios.

class Biblioteca extends Libro{
    private $libros = array();
    private $usuario = array();


    public function __construct($id, $titulo, $autor, $categoria, $disponible, $prestadoPor, $fechaPrestamo, $fechaDevolucion, $estado, $idBiblioteca, $idUsuario, $idCategoria, $idAutor, $idEditorial, $idPrestamo) {
        parent::__construct($id, $titulo, $autor, $categoria, $disponible, $prestadoPor, $fechaPrestamo, $fechaDevolucion, $estado, $idBiblioteca, $idUsuario, $idCategoria, $idAutor, $idEditorial, $idPrestamo);
        $this->libros = array();
        $this->usuario = array();
    }

    // Agregar libro

    public function agregarLibroBiblioteca($libro){
        return parent::agregarLibro($libro);
    }

    // Editar libro
    public function editarLibroBiblioteca($id, $titulo, $autor, $categoria, $disponible, $prestadoPor, $fechaPrestamo, $fechaDevolucion, $estado, $idBiblioteca, $idUsuario, $idCategoria, $idAutor, $idEditorial, $idPrestamo){
        return parent::editarLibro($id, $titulo, $autor, $categoria, $disponible, $prestadoPor, $fechaPrestamo, $fechaDevolucion, $estado, $idBiblioteca, $idUsuario, $idCategoria, $idAutor, $idEditorial, $idPrestamo);
    }

    // Eliminar libro

    public function eliminarLibroBiblioteca($id){
        return parent::eliminarLibro($id);
    }

    // Buscar libro
    public function buscarLibroBiblioteca($titulo, $autor, $categoria){
        return self::buscarLibro($titulo, $autor, $categoria);
        
    }

    // Prestar libro

    public static function prestarLibro($id, $prestadoPor, $fechaPrestamo, $fechaDevolucion, $estado) {
        return parent::prestarLibro($id, $prestadoPor, $fechaPrestamo, $fechaDevolucion, $estado);
    }
   
    // Devolver libro
    
}

?>
