<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Grado
 *
 * @ORM\Table(name="grupo")
 * @ORM\Entity
 */
class Grupo
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
	 * @ORM\Column(name="abreviacion", length=4, type="string", unique=true)
	 */

	private $abreviacion;
	/**
	 * @var string
	 * @ORM\Column(name="nombre", type="string", length=10)
	 */
	private $nombre;
	/**
	 * @var Grado
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Grado")
	 */
	private $grado;

	/**
	 * @var Docente
	 * @ORM\OneToOne(targetEntity="AppBundle\Entity\Docente")
	 */
	private $director;

	/**
	 * @var Aula
	 * @ORM\OneToOne(targetEntity="AppBundle\Entity\Aula")
	 */
	private $aula;

	/**
	 * @var Estudiante
	 * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Estudiante")
	 */
	private $estudiantes;


	/**
	 * Constructor
	 */
	public function __construct ()
	{
		$this->estudiantes = new ArrayCollection();
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
	 * Set abreviacion
	 *
	 * @param string $abreviacion
	 *
	 * @return Grupo
	 */
	public function setAbreviacion ($abreviacion)
	{
		$this->abreviacion = $abreviacion;

		return $this;
	}

	/**
	 * Get abreviacion
	 *
	 * @return string
	 */
	public function getAbreviacion ()
	{
		return $this->abreviacion;
	}

	/**
	 * Set nombre
	 *
	 * @param string $nombre
	 *
	 * @return Grupo
	 */
	public function setNombre ($nombre)
	{
		$this->nombre = $nombre;

		return $this;
	}

	/**
	 * Get nombre
	 *
	 * @return string
	 */
	public function getNombre ()
	{
		return $this->nombre;
	}

	/**
	 * Set grado
	 *
	 * @param \AppBundle\Entity\Grado $grado
	 *
	 * @return Grupo
	 */
	public function setGrado (\AppBundle\Entity\Grado $grado = null)
	{
		$this->grado = $grado;

		return $this;
	}

	/**
	 * Get grado
	 *
	 * @return \AppBundle\Entity\Grado
	 */
	public function getGrado ()
	{
		return $this->grado;
	}

	/**
	 * Set director
	 *
	 * @param \AppBundle\Entity\Docente $director
	 *
	 * @return Grupo
	 */
	public function setDirector (\AppBundle\Entity\Docente $director = null)
	{
		$this->director = $director;

		return $this;
	}

	/**
	 * Get director
	 *
	 * @return \AppBundle\Entity\Docente
	 */
	public function getDirector ()
	{
		return $this->director;
	}

	/**
	 * Set aula
	 *
	 * @param \AppBundle\Entity\Aula $aula
	 *
	 * @return Grupo
	 */
	public function setAula (\AppBundle\Entity\Aula $aula = null)
	{
		$this->aula = $aula;

		return $this;
	}

	/**
	 * Get aula
	 *
	 * @return \AppBundle\Entity\Aula
	 */
	public function getAula ()
	{
		return $this->aula;
	}


	/**
	 * Add estudiante
	 *
	 * @param \AppBundle\Entity\Estudiante $estudiante
	 *
	 * @return Grupo
	 */
	public function addEstudiante (\AppBundle\Entity\Estudiante $estudiante)
	{
		$this->estudiantes[] = $estudiante;

		return $this;
	}

	/**
	 * Remove estudiante
	 *
	 * @param \AppBundle\Entity\Estudiante $estudiante
	 */
	public function removeEstudiante (\AppBundle\Entity\Estudiante $estudiante)
	{
		$this->estudiantes->removeElement ($estudiante);
	}

	/**
	 * Get estudiantes
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getEstudiantes ()
	{
		return $this->estudiantes;
	}

	public function __toString ()
	{
		return $this->nombre;
	}
}
