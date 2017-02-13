<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genero
 *
 * @ORM\Table(name="genero")
 * @ORM\Entity
 */
class Genero
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
	 * @ORM\Column(name="genero", type="string", length=45, nullable=false)
	 */
	private $genero;

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
	 * Get genero
	 *
	 * @return string
	 */
	public function getGenero ()
	{
		return $this->genero;
	}

	/**
	 * Set genero
	 *
	 * @param string $genero
	 *
	 * @return Genero
	 */
	public function setGenero ($genero)
	{
		$this->genero = $genero;

		return $this;
	}
}
