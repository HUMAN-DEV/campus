<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inasistencia
 *
 * @ORM\Table(name="inasistencia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InasistenciaRepository")
 */
class Inasistencia
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
	 * @var integer
	 *
	 * @ORM\Column(name="inasistencia", type="integer", nullable=false)
	 */
	private $inasistencia;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="fecha", type="date", nullable=false)
	 */
	private $fecha;

	/**
	 * @var Estudiante
	 *
	 * @ORM\ManyToOne(targetEntity="Estudiante")
	 */
	private $estudiante;

//	/**
//	 * @var Periodo
//	 *
//	 * @ORM\ManyToOne(targetEntity="Periodo")
//	 */
//	private $periodo;

	/**
	 * @var Asignatura
	 *
	 * @ORM\ManyToOne(targetEntity="Asignatura")
	 */
	private $asignatura;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="observaciones", type="text", nullable=true)
	 */
	private $observaciones;

	/**
	 * @var bool
	 *
	 * @ORM\Column(name="excusa", type="boolean", nullable=true)
	 */
	private $excusa;

	public function __construct ()
	{
		$this->fecha = new \DateTime();
		$this->inasistencia = 1;
	}

	/**
	 * @return bool
	 */
	public function isExcusa ()
	{
		return $this->excusa;
	}

	/**
	 * @param bool $excusa
	 */
	public function setExcusa ($excusa)
	{
		$this->excusa = $excusa;
	}

	/**
	 * @return string
	 */
	public function getObservaciones ()
	{
		return $this->observaciones;
	}

	/**
	 * @param string $observaciones
	 */
	public function setObservaciones ($observaciones)
	{
		$this->observaciones = $observaciones;
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
	 * Get inasistencia
	 *
	 * @return integer
	 */
	public function getInasistencia ()
	{
		return $this->inasistencia;
	}

	/**
	 * Set inasistencia
	 *
	 * @param integer $inasistencia
	 *
	 * @return Inasistencia
	 */
	public function setInasistencia ($inasistencia)
	{
		$this->inasistencia = $inasistencia;

		return $this;
	}

	/**
	 * Get fecha
	 *
	 * @return \DateTime
	 */
	public function getFecha ()
	{
		return $this->fecha;
	}

	/**
	 * Set fecha
	 *
	 * @param \DateTime $fecha
	 *
	 * @return Inasistencia
	 */
	public function setFecha ($fecha)
	{
		$this->fecha = $fecha;

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
	 * @return Inasistencia
	 */
	public function setEstudiante (Estudiante $estudiante = null)
	{
		$this->estudiante = $estudiante;

		return $this;
	}

//	/**
//	 * Get periodo
//	 *
//	 * @return Periodo
//	 */
//	public function getPeriodo ()
//	{
//		return $this->periodo;
//	}
//
//	/**
//	 * Set periodo
//	 *
//	 * @param Periodo $periodo
//	 *
//	 * @return Inasistencia
//	 */
//	public function setPeriodo (Periodo $periodo = null)
//	{
//		$this->periodo = $periodo;
//
//		return $this;
//	}

	/**
	 * Get asignatura
	 *
	 * @return Asignatura
	 */
	public function getAsignatura ()
	{
		return $this->asignatura;
	}

	/**
	 * Set asignatura
	 *
	 * @param Asignatura $asignatura
	 *
	 * @return Inasistencia
	 */
	public function setAsignatura (Asignatura $asignatura = null)
	{
		$this->asignatura = $asignatura;

		return $this;
	}
}
