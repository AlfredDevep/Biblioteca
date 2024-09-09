<?php

require_once 'class__libro.php';

//una clase `Biblioteca` que maneje la gestión de libros y la interacción con los usuarios.
class Usuario{
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $telefono;
    private $direccion;
    

    //Construtor
    public function __construct($id, $nombre, $apellido, $email, $telefono, $direccion){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }

    // Set and Getter
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    

    // Verifica si el archivo existe y no está vacío

    public function verificarArchivo(){
        if(file_exists('usuarios.json') && filesize('usuarios.json') > 0){
            $contenido = file_get_contents('usuarios.json');
            return json_decode($contenido, true) ?? [];
        }else{
            return [];
        }
    }



    //metodo para agregar un usuario a usuarios.json
    public function agregarUsuario(){
        $usuarios = $this->verificarArchivo();
        $usuario = [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'email' => $this->email,
            'telefono' => $this->telefono,
            'direccion' => $this->direccion,
        ];
        $usuarios[] = $usuario;
        file_put_contents('usuarios.json', json_encode($usuarios, JSON_PRETTY_PRINT));
    }




    // Mostrar usuarios
    public function mostrarUsuarios(){
        $usuarios = $this->verificarArchivo();
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>Email</th>";
        echo "<th>Telefono</th>";
        echo "<th>Direccion</th>";
        foreach($usuarios as $usuario){
            echo "<tr>";
            echo "<td>".$usuario['id']."</td>";
            echo "<td>".$usuario['nombre']."</td>";
            echo "<td>".$usuario['apellido']."</td>";
            echo "<td>".$usuario['email']."</td>";
            echo "<td>".$usuario['telefono']."</td>";
            echo "<td>".$usuario['direccion']."</td>";
        }
        echo "</table>";
    }

    //Prestar libro
    public function prestarLibro($biblioteca, $idLibro, $fechaPrestamo, $fechaDevolucion, $estado) {
        return $biblioteca->prestarLibro($idLibro, $this->nombre, $fechaPrestamo, $fechaDevolucion, $estado);
    }
    
}   

?>