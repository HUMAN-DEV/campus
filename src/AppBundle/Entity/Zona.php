<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zona
 *
 * @ORM\Table(name="zona")
 * @ORM\Entity
 */
class Zona
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
	 * @ORM\Column(name="nombre_zona", type="string", length=45, nullable=false)
	 */
	private $nombreZona;


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
	 * Get nombreZona
	 *
	 * @return string
	 */
	public function getNombreZona ()
	{
		return $this->nombreZona;
	}

	/**
	 * Set nombreZona
	 *
	 * @param string $nombreZona
	 *
	 * @return Zona
	 */
	public function setNombreZona ($nombreZona)
	{
		$this->nombreZona = $nombreZona;

		return $this;
	}

	public function __toString ()
	{
		return $this->nombreZona;
	}
}
