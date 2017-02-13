<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RoleRepository")
 */
class Role
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
	 * @ORM\Column(name="valor", type="integer", nullable=false)
	 */
	private $valor;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="role", type="string", length=45, nullable=false)
	 */
	private $role;


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
	 * Get valor
	 *
	 * @return integer
	 */
	public function getValor ()
	{
		return $this->valor;
	}

	/**
	 * Set valor
	 *
	 * @param integer $valor
	 *
	 * @return Role
	 */
	public function setValor ($valor)
	{
		$this->valor = $valor;

		return $this;
	}

	/**
	 * Get role
	 *
	 * @return string
	 */
	public function getRole ()
	{
		return $this->role;
	}

	/**
	 * Set role
	 *
	 * @param string $role
	 *
	 * @return Role
	 */
	public function setRole ($role)
	{
		$this->role = $role;

		return $this;
	}
}
