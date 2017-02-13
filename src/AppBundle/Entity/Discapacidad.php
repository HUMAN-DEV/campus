<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discapacidad
 *
 * @ORM\Table(name="discapacidad")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DiscapacidadRepository")
 */
class Discapacidad
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
	 * @ORM\Column(name="discapacidad", type="string", length=45, nullable=false)
	 */
	private $discapacidad;


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
	 * Get discapacidad
	 *
	 * @return string
	 */
	public function getDiscapacidad ()
	{
		return $this->discapacidad;
	}

	/**
	 * Set discapacidad
	 *
	 * @param string $discapacidad
	 *
	 * @return Discapacidad
	 */
	public function setDiscapacidad ($discapacidad)
	{
		$this->discapacidad = $discapacidad;

		return $this;
	}

	public function __toString ()
	{
		return $this->discapacidad;
	}
}
