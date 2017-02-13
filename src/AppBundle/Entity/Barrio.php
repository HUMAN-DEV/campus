<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Barrio
 *
 * @ORM\Table(name="barrio")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BarrioRepository")
 */
class Barrio
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
	 * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
	 */
	private $nombre;

	/**
	 * @var Town
	 *
	 * @ORM\ManyToOne(targetEntity="Town")
	 */
	private $ciudad;


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
	 * Get nombre
	 *
	 * @return string
	 */
	public function getNombre ()
	{
		return $this->nombre;
	}

	/**
	 * Set nombreBarrio
	 *
	 * @param string $nombreBarrio
	 *
	 * @return Barrio
	 */
	public function setNombre ($nombreBarrio)
	{
		$this->nombre = $nombreBarrio;

		return $this;
	}

	/**
	 * Get ciudad
	 *
	 * @return Town
	 */
	public function getCiudad ()
	{
		return $this->ciudad;
	}

	/**
	 * Set ciudad
	 *
	 * @param Town $ciudad
	 *
	 * @return Barrio
	 */
	public function setCiudad (Town $ciudad = null)
	{
		$this->ciudad = $ciudad;

		return $this;
	}

	public function __toString ()
	{
		return $this->nombre;
	}
}
