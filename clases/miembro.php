<?php 

abstract class Miembro {

private int $id;

protected $nombre;

protected $apellidos;

protected $email;


public function __construct($id, $nombre, $apellidos, $email) {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->email = $email;
}

/**
 * Get the value of email
 */ 
public function getEmail()
{
return $this->email;
}

/**
 * Set the value of email
 *
 * @return  self
 */ 
public function setEmail($email)
{
$this->email = $email;

return $this;
}

/**
 * Get the value of apellidos
 */ 
public function getApellidos()
{
return $this->apellidos;
}

/**
 * Set the value of apellidos
 *
 * @return  self
 */ 
public function setApellidos($apellidos)
{
$this->apellidos = $apellidos;

return $this;
}

/**
 * Get the value of nombre
 */ 
public function getnombre()
{
return $this->nombre;
}

/**
 * Set the value of nombre
 *
 * @return  self
 */ 
public function setnombre($nombre)
{
$this->nombre = $nombre;

return $this;
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

public function __toString() {
    return $this->id . " " . $this->nombre . " " . $this->apellidos . " " . $this->email;
}
}