<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoCivil
 *
 * @ORM\Table(name="estado_civil")
 * @ORM\Entity
 */
class EstadoCivil
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
	 * @ORM\Column(name="estado_civil", type="string", length=45, nullable=false)
	 */
	private $EstadoCivil;


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
		return $this->getEstadoCivil ();
	}

	/**
	 * Get EstadoCivil
	 *
	 * @return string
	 */
	public function getEstadoCivil ()
	{
		return $this->EstadoCivil;
	}

	/**
	 * Set EstadoCivil
	 *
	 * @param string $estadoCivil
	 *
	 * @return EstadoCivil
	 */
	public function setEstadoCivil ($estadoCivil)
	{
		$this->EstadoCivil = $estadoCivil;

		return $this;
	}
}
