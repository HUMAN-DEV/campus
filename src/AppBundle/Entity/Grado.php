<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grado
 *
 * @ORM\Table(name="grado")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GradoRepository")
 */
class Grado
{
	/**
	 * @var int
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var int
	 *
	 * @ORM\Column(name="grado", type="integer", unique=true)
	 */
	private $grado;


	/**
	 * Get id
	 *
	 * @return int
	 */
	public function getId ()
	{
		return $this->id;
	}

	/**
	 * Set grado
	 *
	 * @param integer $grado
	 *
	 * @return Grado
	 */
	public function setGrado ($grado)
	{
		$this->grado = $grado;

		return $this;
	}

	/**
	 * Get grado
	 *
	 * @return int
	 */
	public function getGrado ()
	{
		return $this->grado;
	}

	public function __toString ()
	{
		return '' . $this->grado;
	}
}

