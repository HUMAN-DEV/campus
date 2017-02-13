<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Estudiante
 *
 * @ORM\Table(name="estudiante")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EstudianteRepository")
 */
class Estudiante extends Persona
{

	protected $discr = self::ESTUDIANTE;


	/**
	 * @var Acudiente
	 * @Assert\NotNull()
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Acudiente")
	 */
	private $acudiente;

	/**
	 * @var InfReferencialEstudiante
	 *
	 * @ORM\OneToOne(targetEntity="AppBundle\Entity\InfReferencialEstudiante", cascade={"all"}, orphanRemoval=true)
	 */
	private $infReferencial;


	/**
	 * @return int
	 */
	public function getId ()
	{
		return parent::getId ();
	}


	/**
	 * Get acudiente
	 *
	 * @return \AppBundle\Entity\Acudiente
	 */
	public function getAcudiente ()
	{
		return $this->acudiente;
	}

	/**
	 * Set acudiente
	 *
	 * @param Acudiente $acudiente
	 *
	 * @return Estudiante
	 */
	public function setAcudiente (Acudiente $acudiente = null)
	{
		$this->acudiente = $acudiente;

		return $this;
	}

	public function __toString ()
	{
		return $this->getNombreCompleto ();
	}


	/**
	 * Set infReferencial
	 *
	 * @param InfReferencialEstudiante $infReferencial
	 *
	 * @return Estudiante
	 */
	public function setInfReferencial (InfReferencialEstudiante $infReferencial = null)
	{
		$this->infReferencial = $infReferencial;

		return $this;
	}

	/**
	 * Get infReferencial
	 *
	 * @return InfReferencialEstudiante
	 */
	public function getInfReferencial ()
	{
		return $this->infReferencial;
	}


}
