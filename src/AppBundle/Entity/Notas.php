<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notas
 *
 * @ORM\Table(name="notas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NotasRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Notas
{
	private $usuario;
	/**
	 * @var int
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="fecha", type="date")
	 */
	private $fecha;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="actividad", type="string", length=255)
	 */
	private $actividad;

	/**
	 * @var float
	 *
	 * @ORM\Column(name="nota", type="float")
	 */
	private $nota;

	/**
	 * @var Asignatura
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Asignatura")
	 */
	private $asignatura;

	/**
	 * @var Estudiante
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Estudiante")
	 */
	private $estudiante;


	/**
	 * @var Docente
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Docente")
	 */
	private $docente;

	public function __construct ()
	{
		$this->fecha = new \DateTime();
	}


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
	 * @return Notas
	 */
	public function setFecha ($fecha)
	{
		$this->fecha = $fecha;

		return $this;
	}

	/**
	 * Get actividad
	 *
	 * @return string
	 */
	public function getActividad ()
	{
		return $this->actividad;
	}

	/**
	 * Set actividad
	 *
	 * @param string $actividad
	 *
	 * @return Notas
	 */
	public function setActividad ($actividad)
	{
		$this->actividad = $actividad;

		return $this;
	}

	/**
	 * Get nota
	 *
	 * @return float
	 */
	public function getNota ()
	{
		return $this->nota;
	}

	/**
	 * Set nota
	 *
	 * @param float $nota
	 *
	 * @return Notas
	 */
	public function setNota ($nota)
	{
		$this->nota = $nota;

		return $this;
	}

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
	 * @return Notas
	 */
	public function setAsignatura (Asignatura $asignatura = null)
	{
		$this->asignatura = $asignatura;

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
	 * @return Notas
	 */
	public function setEstudiante (Estudiante $estudiante = null)
	{
		$this->estudiante = $estudiante;

		return $this;
	}


	/**
	 * @return Docente
	 */
	public function getDocente ()
	{
		return $this->docente;
	}

	/**
	 * @param Docente $docente
	 */
	public function setDocente (Docente $docente)
	{
		$this->docente = $docente;
	}



}
