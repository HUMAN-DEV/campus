<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resguardo
 *
 * @ORM\Table(name="resguardo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResguardoRepository")
 */
class Resguardo
{
	/**
	 * @var int
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="codigo", type="string", length=20, nullable=true)
	 */
	private $codigo;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="resguardo", type="string", length=20)
	 */
	private $resguardo;


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
	 * Set codigo
	 *
	 * @param string $codigo
	 *
	 * @return Resguardo
	 */
	public function setCodigo ($codigo)
	{
		$this->codigo = $codigo;

		return $this;
	}

	/**
	 * Get codigo
	 *
	 * @return string
	 */
	public function getCodigo ()
	{
		return $this->codigo;
	}

	/**
	 * Set resguardo
	 *
	 * @param string $resguardo
	 *
	 * @return Resguardo
	 */
	public function setResguardo ($resguardo)
	{
		$this->resguardo = $resguardo;

		return $this;
	}

	/**
	 * Get resguardo
	 *
	 * @return string
	 */
	public function getResguardo ()
	{
		return $this->resguardo;
	}

	public function __toString ()
	{
		return $this->resguardo;
	}
}

