<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoInstitucion
 *
 * @ORM\Table(name="tipo_institucion")
 * @ORM\Entity
 */
class TipoInstitucion
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
	 * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
	 */
	private $nombre;


	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId ()
	{
		return $this->id;
	}

	public function __toString ()
	{
		return $this->getNombre ();
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
	 * Set nombre
	 *
	 * @param string $nombre
	 *
	 * @return TipoInstitucion
	 */
	public function setNombre ($nombre)
	{
		$this->nombre = $nombre;

		return $this;
	}
}
