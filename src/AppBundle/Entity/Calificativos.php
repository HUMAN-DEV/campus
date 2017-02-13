<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calificativos
 *
 * @ORM\Table(name="calificativos")
 * @ORM\Entity
 */
class Calificativos
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
	 * @ORM\Column(name="desempenio", type="string", length=45, nullable=false)
	 */
	private $desempenio;

	/**
	 * @var double
	 *
	 * @ORM\Column(name="nota_minima", type="float", nullable=false)
	 */
	private $notaMinima;


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
	 * Get desempenio
	 *
	 * @return string
	 */
	public function getDesempenio ()
	{
		return $this->desempenio;
	}

	/**
	 * Set desempenio
	 *
	 * @param string $desempenio
	 *
	 * @return Calificativos
	 */
	public function setDesempenio ($desempenio)
	{
		$this->desempenio = $desempenio;

		return $this;
	}

	/**
	 * Set notaMinima
	 *
	 * @param float $notaMinima
	 *
	 * @return Calificativos
	 */
	public function setNotaMinima ($notaMinima)
	{
		$this->notaMinima = $notaMinima;

		return $this;
	}

	/**
	 * Get notaMinima
	 *
	 * @return float
	 */
	public function getNotaMinima ()
	{
		return $this->notaMinima;
	}


	public function __toString ()
	{
		return $this->getDesempenio ();
	}
}
