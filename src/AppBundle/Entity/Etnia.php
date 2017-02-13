<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etnia
 *
 * @ORM\Table(name="etnia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EtniaRepository")
 */
class Etnia
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
	 * @ORM\Column(name="etnia", type="string", length=50)
	 */
	private $etnia;


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
	 * @return Etnia
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
	 * Set etnia
	 *
	 * @param string $etnia
	 *
	 * @return Etnia
	 */
	public function setEtnia ($etnia)
	{
		$this->etnia = $etnia;

		return $this;
	}

	/**
	 * Get etnia
	 *
	 * @return string
	 */
	public function getEtnia ()
	{
		return $this->etnia;
	}

	public function __toString ()
	{
		return $this->etnia;
	}
}

