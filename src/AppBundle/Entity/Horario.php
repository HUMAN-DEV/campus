<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 *
 * @ORM\Table(name="horario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HorarioRepository")
 */
class Horario
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
	 * @ORM\Column(name="dia", type="string", length=45, nullable=false)
	 */
	private $dia;

	/**
	 *
	 * @ORM\Column(name="hora", type="time")
	 */
	private $hora;

	/**
	 * @var Aula
	 *
	 * @ORM\ManyToOne(targetEntity="Aula")
	 *
	 */
	private $aula;

	/**
	 * @var Asignatura
	 *
	 * @ORM\ManyToOne(targetEntity="Asignatura")
	 *
	 */
	private $asignatura;

	/**
	 * @var Grupo
	 *
	 * @ORM\ManyToOne(targetEntity="Grupo")
	 *
	 */
	private $grupo;

	/**
	 * @var Docente
	 *
	 * @ORM\ManyToOne(targetEntity="Docente")
	 *
	 */
	private $docente;


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
	 * Get dia
	 *
	 * @return string
	 */
	public function getDia ()
	{
		return $this->dia;
	}

	/**
	 * Set dia
	 *
	 * @param string $dia
	 *
	 * @return Horario
	 */
	public function setDia ($dia)
	{
		$this->dia = $dia;

		return $this;
	}


	/**
	 * Get aula
	 *
	 * @return Aula
	 */
	public function getAula ()
	{
		return $this->aula;
	}

	/**
	 * Set aula
	 *
	 * @param Aula $aula
	 *
	 * @return Horario
	 */
	public function setAula (Aula $aula = null)
	{
		$this->aula = $aula;

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
	 * @return Horario
	 */
	public function setAsignatura (Asignatura $asignatura = null)
	{
		$this->asignatura = $asignatura;

		return $this;
	}


	/**
	 * Get docente
	 *
	 * @return Docente
	 */
	public function getDocente ()
	{
		return $this->docente;
	}

	/**
	 * Set docente
	 *
	 * @param Docente $docente
	 *
	 * @return Horario
	 */
	public function setDocente (Docente $docente = null)
	{
		$this->docente = $docente;

		return $this;
	}

	/**
	 * Set hora
	 *
	 * @param \DateTime $hora
	 *
	 * @return Horario
	 */
	public function setHora ($hora)
	{
		$this->hora = $hora;

		return $this;
	}

	/**
	 * Get hora
	 *
	 * @return \DateTime
	 */
	public function getHora ()
	{
		return $this->hora;
	}

	/**
	 * Set grupo
	 *
	 * @param \AppBundle\Entity\Grupo $grupo
	 *
	 * @return Horario
	 */
	public function setGrupo (Grupo $grupo = null)
	{
		$this->grupo = $grupo;

		return $this;
	}

	/**
	 * Get grupo
	 *
	 * @return \AppBundle\Entity\Grupo
	 */
	public function getGrupo ()
	{
		return $this->grupo;
	}
}
