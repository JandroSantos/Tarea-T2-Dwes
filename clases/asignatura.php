<?php

class Asignatura {

    private int $id;
    private string $nombre;
    private string $creditos;

    public function __construct($id, $nombre, $creditos) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }

    public static function crearAsignaturasDeMuestra(){

        $asignatura = [

        new Asignatura(1, "DWES", "7 créditos"),
        new Asignatura(2, "DWEC", "6 créditos"),
        new Asignatura(3, "DIW", "4 créditos"),
        new Asignatura(4, "DAW", "4 créditos"),

        ];
        return $asignatura;

    }

    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of creditos
     */ 
    public function getCreditos()
    {
        return $this->creditos;
    }

    /**
     * Set the value of creditos
     *
     * @return  self
     */ 
    public function setCreditos($creditos)
    {
        $this->creditos = $creditos;

        return $this;
    }

    public function __toString() {
        return "Nombre: $this->nombre, Créditos: $this->creditos";
    }
}