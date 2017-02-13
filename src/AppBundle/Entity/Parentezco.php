<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parentezco
 *
 * @ORM\Table(name="parentezco")
 * @ORM\Entity
 *
 */
class Parentezco
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
	 * @ORM\Column(name="descripcion", type="string", length=45, nullable=false)
	 */
	private $descripcion;


	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId ()
	{
		return $this->id;
	}

	public function __toString ()
	{
		return $this->getDescripcion ();
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
	 * @return Parentezco
	 */
	public function setDescripcion ($descripcion)
	{
		$this->descripcion = $descripcion;

		return $this;
	}
}
