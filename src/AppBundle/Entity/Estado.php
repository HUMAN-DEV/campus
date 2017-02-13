<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estado
 *
 * @ORM\Table(name="estado")
 * @ORM\Entity
 */
class Estado
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
	 * @ORM\Column(name="estado", type="string", length=30, nullable=false)
	 */
	private $estado;


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
	 * Get estado
	 *
	 * @return string
	 */
	public function getEstado ()
	{
		return $this->estado;
	}

	/**
	 * Set estado
	 *
	 * @param string $estado
	 *
	 * @return Estado
	 */
	public function setEstado ($estado)
	{
		$this->estado = $estado;

		return $this;
	}

	public function __toString ()
	{
		return $this->getEstado();
	}
}
