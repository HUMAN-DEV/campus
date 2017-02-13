<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Noticia
 *
 * @ORM\Table(name="noticia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NoticiaRepository")
 */
class Noticia
{
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="titulo", type="string", length=45, nullable=false)
	 */
	private $titulo;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="descripcion", type="text", nullable=false)
	 */
	private $descripcion;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="imagen", type="string", length=45, nullable=false)
	 */
	private $imagen;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="fecha", type="date", nullable=false)
	 */
	private $fecha;


	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId ()
	{
		return $this->id;
	}

	/**
	 * Get titulo
	 *
	 * @return string
	 */
	public function getTitulo ()
	{
		return $this->titulo;
	}

	/**
	 * Set titulo
	 *
	 * @param string $titulo
	 *
	 * @return Noticia
	 */
	public function setTitulo ($titulo)
	{
		$this->titulo = $titulo;

		return $this;
	}

	/**
	 * Get descripcion
	 *
	 * @return string
	 */
	public function getDescripcion ()
	{
		return $this->descripcion;
	}

	/**
	 * Set descripcion
	 *
	 * @param string $descripcion
	 *
	 * @return Noticia
	 */
	public function setDescripcion ($descripcion)
	{
		$this->descripcion = $descripcion;

		return $this;
	}

	/**
	 * Get imagen
	 *
	 * @return string
	 */
	public function getImagen ()
	{
		return $this->imagen;
	}

	/**
	 * Set imagen
	 *
	 * @param string $imagen
	 *
	 * @return Noticia
	 */
	public function setImagen ($imagen)
	{
		$this->imagen = $imagen;

		return $this;
	}

	/**
	 * Get fecha
	 *
	 * @return \DateTime
	 */
	public function getFecha ()
	{
		return $this->fecha;
	}

	/**
	 * Set fecha
	 *
	 * @param \DateTime $fecha
	 *
	 * @return Noticia
	 */
	public function setFecha ($fecha)
	{
		$this->fecha = $fecha;

		return $this;
	}
}
