<?php 

abstract class Miembros {

private int $id;

private $name;

private $apellidos;

private $email;

private int $edad;

public function __construct(int $id, string $name, string $apellidos, string $email, int $edad) {
    $this->id = $id;
    $this->name = $name;
    $this->apellidos = $apellidos;
    $this->email = $email;
    $this->edad = $edad;
}


/**
 * Get the value of edad
 */ 
public function getEdad()
{
return $this->edad;
}

/**
 * Set the value of edad
 *
 * @return  self
 */ 
public function setEdad($edad)
{
$this->edad = $edad;

return $this;
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
 * Get the value of name
 */ 
public function getName()
{
return $this->name;
}

/**
 * Set the value of name
 *
 * @return  self
 */ 
public function setName($name)
{
$this->name = $name;

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
}