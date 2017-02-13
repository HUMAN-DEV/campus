<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periodo
 *
 * @ORM\Table(name="periodo")
 * @ORM\Entity
 */
class Periodo
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
	 * @ORM\Column(name="periodo", type="string", length=45, nullable=false, unique=true)
	 */
	private $periodo;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="desde", type="date", nullable=true)
	 */
	private $desde;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="hasta", type="date", nullable=true)
	 */
	private $hasta;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="descripcion", type="string", length=200, nullable=false)
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

	/**
	 * Set periodo
	 *
	 * @param string $periodo
	 *
	 * @return Periodo
	 */
	public function setPeriodo ($periodo)
	{
		$this->periodo = $periodo;

		return $this;
	}

	/**
	 * Get periodo
	 *
	 * @return string
	 */
	public function getPeriodo ()
	{
		return $this->periodo;
	}

	/**
	 * Set desde
	 *
	 * @param \DateTime $desde
	 *
	 * @return Periodo
	 */
	public function setDesde ($desde)
	{
		$this->desde = $desde;

		return $this;
	}

	/**
	 * Get desde
	 *
	 * @return \DateTime
	 */
	public function getDesde ()
	{
		return $this->desde;
	}

	/**
	 * Set hasta
	 *
	 * @param \DateTime $hasta
	 *
	 * @return Periodo
	 */
	public function setHasta ($hasta)
	{
		$this->hasta = $hasta;

		return $this;
	}

	/**
	 * Get hasta
	 *
	 * @return \DateTime
	 */
	public function getHasta ()
	{
		return $this->hasta;
	}

	/**
	 * Set descripcion
	 *
	 * @param string $descripcion
	 *
	 * @return Periodo
	 */
	public function setDescripcion ($descripcion)
	{
		$this->descripcion = $descripcion;

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
}
