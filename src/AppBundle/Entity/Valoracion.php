<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Valoraciones
 *
 * @ORM\Table(name="valoracion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ValoracionesRepository")
 */
class Valoracion
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
	 * @ORM\Column(name="abbr", type="string", length=1, unique=true)
	 */
	private $abbr;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="nombre", type="string", length=20)
	 */
	private $nombre;


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
	 * Set abbr
	 *
	 * @param string $abbr
	 *
	 * @return Valoracion
	 */
	public function setAbbr ($abbr)
	{
		$this->abbr = $abbr;

		return $this;
	}

	/**
	 * Get abbr
	 *
	 * @return string
	 */
	public function getAbbr ()
	{
		return $this->abbr;
	}

	/**
	 * Set nombre
	 *
	 * @param string $nombre
	 *
	 * @return Valoracion
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


	public function __toString ()
	{
		return $this->nombre;
	}

}

