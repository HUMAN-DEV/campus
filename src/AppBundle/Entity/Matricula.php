<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Matricula
 *
 * @ORM\Table(name="matricula")
 * @UniqueEntity(fields={"estudiante"})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MatriculaRepository")
 */
class Matricula
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
	 * @var \DateTime
	 *
	 * @ORM\Column(name="fecha_matricula", type="datetime", nullable=false)
	 */
	private $fecha;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="observaciones_matricula", type="text", nullable=true)
	 */
	private $observaciones;

	/**
	 * @var Estado
	 *
	 * @ORM\ManyToOne(targetEntity="Estado")
	 */
	private $estado;

	/**
	 * @var Estudiante
	 *
	 * @ORM\OneToOne(targetEntity="Estudiante")
	 */
	private $estudiante;

	/**
	 * @var Sede
	 *
	 * @ORM\ManyToOne(targetEntity="Sede")
	 */
	private $sede;

	/**
	 * @var Grado
	 *
	 * @ORM\ManyToOne(targetEntity="Grado")
	 */
	private $grado;

	public function __construct ()
	{
		$this->fecha = new \DateTime();
	}


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
	 * Get fecha
	 *
	 * @return \DateTime
	 */
	public function getFecha ()
	{
		$this->fecha = new DateTime();

		return $this->fecha;
	}

	/**
	 * Set fecha
	 *
	 * @param \DateTime $fecha
	 *
	 * @return Matricula
	 */
	public function setFecha ($fecha)
	{
		$this->fecha = new DateTime();

		return $this;
	}

	/**
	 * Get observaciones
	 *
	 * @return string
	 */
	public function getObservaciones ()
	{
		return $this->observaciones;
	}

	/**
	 * Set observaciones
	 *
	 * @param string $observaciones
	 *
	 * @return Matricula
	 */
	public function setObservaciones ($observaciones)
	{
		$this->observaciones = $observaciones;

		return $this;
	}

	/**
	 * Get estado
	 *
	 * @return Estado
	 */
	public function getEstado ()
	{
		return $this->estado;
	}

	/**
	 * Set estado
	 *
	 * @param Estado $estado
	 *
	 * @return Matricula
	 */
	public function setEstado (Estado $estado = null)
	{
		$this->estado = $estado;

		return $this;
	}

	/**
	 * Get estudiante
	 *
	 * @return Estudiante
	 */
	public function getEstudiante ()
	{
		return $this->estudiante;
	}

	/**
	 * Set estudiante
	 *
	 * @param Estudiante $estudiante
	 *
	 * @return Matricula
	 */
	public function setEstudiante (Estudiante $estudiante = null)
	{
		$this->estudiante = $estudiante;

		return $this;
	}

	/**
	 * Get sede
	 *
	 * @return Sede
	 */
	public function getSede ()
	{
		return $this->sede;
	}

	/**
	 * Set sede
	 *
	 * @param Sede $sede
	 *
	 * @return Matricula
	 */
	public function setSede (Sede $sede = null)
	{
		$this->sede = $sede;

		return $this;
	}

	/**
	 * Get grado
	 *
	 * @return Grado
	 */
	public function getGrado ()
	{
		return $this->grado;
	}

	/**
	 * Set grado
	 *
	 * @param Grado $grado
	 *
	 * @return Matricula
	 */
	public function setGrado (Grado $grado = null)
	{
		$this->grado = $grado;

		return $this;
	}
}
