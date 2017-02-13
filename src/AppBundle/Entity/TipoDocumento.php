<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoDocumento
 *
 * @ORM\Table(name="tipo_documento")
 * @ORM\Entity
 */
class TipoDocumento
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
	 * @ORM\Column(name="tipo", type="string", length=45, nullable=false)
	 */
	private $tipo;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="abreviacion", type="string", length=45, nullable=false)
	 */
	private $abreviacion;


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
	 * Get tipo
	 *
	 * @return string
	 */
	public function getTipo ()
	{
		return $this->tipo;
	}

	/**
	 * Set tipo
	 *
	 * @param string $tipo
	 *
	 * @return TipoDocumento
	 */
	public function setTipo ($tipo)
	{
		$this->tipo = $tipo;

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
	 * Set abreviacion
	 *
	 * @param string $abreviacion
	 *
	 * @return TipoDocumento
	 */
	public function setAbreviacion ($abreviacion)
	{
		$this->abreviacion = $abreviacion;

		return $this;
	}
}
