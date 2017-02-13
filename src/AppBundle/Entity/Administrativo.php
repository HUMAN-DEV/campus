<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Acudiente
 * @ORM\Table(name="administrativo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdministrativosRepository")
 */
class Administrativo extends Persona
{

	protected $discr = self::ADMINISTRATIVO;

	/**
	 * @var Cargo
	 *
	 * @ORM\ManyToOne(targetEntity="Cargo")
	 */
	private $cargo;


	/**
	 * @return int
	 */
	public function getId ()
	{
		return parent::getId ();
	}

	/**
	 * Get cargo
	 *
	 * @return Cargo
	 */
	public function getCargo ()
	{
		return $this->cargo;
	}

	/**
	 * Set cargo
	 *
	 * @param Cargo $cargo
	 *
	 * @return Administrativo
	 */
	public function setCargo (Cargo $cargo = NULL)
	{
		$this->cargo = $cargo;

		return $this;
	}
}
