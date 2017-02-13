<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infacademico
 *
 * @ORM\Table(name="infAcademico",
 *     indexes={@ORM\Index(name="IDX_7519801F9243D6CE",
 *     columns={"asignatura_id"}),
 *     @ORM\Index(name="IDX_7519801F3B3F3FAD",
 *     columns={"estudiante_id"}),
 *     @ORM\Index(name="IDX_7519801F7439301C",
 *     columns={"logro_id"}),
 *     @ORM\Index(name="IDX_7519801F7316C4ED",
 *     columns={"periodo_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InfacademicoRepository")
 */
class Infacademico
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
	 * @var float
	 *
	 * @ORM\Column(name="nota", type="float", precision=10, scale=0, nullable=false)
	 */
	private $nota;

	/**
	 * @var Estudiante
	 *
	 * @ORM\ManyToOne(targetEntity="Estudiante")
	 */
	private $estudiante;

	/**
	 * @var Periodo
	 *
	 * @ORM\ManyToOne(targetEntity="Periodo")
	 */
	private $periodo;

	/**
	 * @var Logro
	 *
	 * @ORM\ManyToOne(targetEntity="Logro")
	 */
	private $logro;

	/**
	 * @var Asignatura
	 *
	 * @ORM\ManyToOne(targetEntity="Asignatura")
	 */
	private $asignatura;


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
	 * @return Infacademico
	 */
	public function setNota ($nota)
	{
		$this->nota = $nota;

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
	 * @return Infacademico
	 */
	public function setEstudiante (Estudiante $estudiante = NULL)
	{
		$this->estudiante = $estudiante;

		return $this;
	}

	/**
	 * Get periodo
	 *
	 * @return Periodo
	 */
	public function getPeriodo ()
	{
		return $this->periodo;
	}

	/**
	 * Set periodo
	 *
	 * @param Periodo $periodo
	 *
	 * @return Infacademico
	 */
	public function setPeriodo (Periodo $periodo = NULL)
	{
		$this->periodo = $periodo;

		return $this;
	}

	/**
	 * Get logro
	 *
	 * @return Logro
	 */
	public function getLogro ()
	{
		return $this->logro;
	}

	/**
	 * Set logro
	 *
	 * @param Logro $logro
	 *
	 * @return Infacademico
	 */
	public function setLogro (Logro $logro = NULL)
	{
		$this->logro = $logro;

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
	 * @return Infacademico
	 */
	public function setAsignatura (Asignatura $asignatura = NULL)
	{
		$this->asignatura = $asignatura;

		return $this;
	}
}
