<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ocupacion
 *
 * @ORM\Table(name="ocupacion")
 * @ORM\Entity
 */
class Ocupacion
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
	 * @var int
	 *
	 * @ORM\Column(name="ciuo", type="integer", length=11, nullable=false)
	 */
	private $ciuo;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="ocupacion", type="string", length=200, nullable=false)
	 */
	private $ocupacion;


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
	 * @return int
	 */
	public function getCiuo ()
	{
		return $this->ciuo;
	}

	/**
	 * @param int $ciuo
	 */
	public function setCiuo ($ciuo)
	{
		$this->ciuo = $ciuo;
	}

	/**
	 * Get ocupacion
	 *
	 * @return string
	 */
	public function getOcupacion ()
	{
		return $this->ocupacion;
	}

	/**
	 * Set ocupacion
	 *
	 * @param string $ocupacion
	 *
	 * @return Ocupacion
	 */
	public function setOcupacion ($ocupacion)
	{
		$this->ocupacion = $ocupacion;

		return $this;
	}

	public function __toString ()
	{
		return $this->ciuo . ' - ' . $this->getOcupacion ();
	}


}
