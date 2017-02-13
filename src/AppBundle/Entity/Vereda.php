<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vereda
 *
 * @ORM\Table(name="vereda",
 *     indexes={@ORM\Index(name="IDX_896529F3A8B1B073",
 *     columns={"ciudad_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VeredaRepository")
 */
class Vereda
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
	 * @ORM\Column(name="vereda", type="string", length=45, nullable=false)
	 */
	private $vereda;

	/**
	 * @var Town $ciudad
	 *
	 * @ORM\ManyToOne(targetEntity="Town")
	 */
	private $ciudad;


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
	 * Get vereda
	 *
	 * @return string
	 */
	public function getVereda ()
	{
		return $this->vereda;
	}

	/**
	 * Set vereda
	 *
	 * @param string $vereda
	 *
	 * @return Vereda
	 */
	public function setVereda ($vereda)
	{
		$this->vereda = $vereda;

		return $this;
	}

	/**
	 * Get ciudad
	 *
	 * @return Town
	 */
	public function getCiudad ()
	{
		return $this->ciudad;
	}

	/**
	 * Set ciudad
	 *
	 * @param Town $ciudad
	 *
	 * @return Vereda
	 */
	public function setCiudad (Town $ciudad = null)
	{
		$this->ciudad = $ciudad;

		return $this;
	}

	public function __toString ()
	{
		return $this->vereda;
	}
}
