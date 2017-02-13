<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sede
 *
 * @ORM\Table(name="sede")
 * @ORM\Entity
 */
class Sede
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
	 * @var int
	 *
	 * @ORM\Column(name="codigo_dane", type="integer",  nullable=true, unique=true)
	 */
	private $codigoDane;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="nombre", type="string", length=70, nullable=false)
	 */
	private $nombre;


	/**
	 * @var string
	 *
	 * @ORM\Column(name="representante_legal", type="string", length=60, nullable=true)
	 */
	private $representanteLegal;

	/**
	 * @var Town
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Town")
	 */
	private $ciudad;

	/**
	 * @var Zona
	 * @ORM\ManyToOne(targetEntity="Zona")
	 */
	private $zona;

	/**
	 * @var Barrio
	 * @ORM\ManyToOne(targetEntity="Barrio")
	 */
	private $barrio;

	/**
	 * @var Vereda
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Vereda")
	 */
	private $vereda;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="direccion", type="string", length=45, nullable=false)
	 */
	private $direccion;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="telefono", type="string", length=20, nullable=true)
	 */
	private $telefono;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="fax", type="string", length=45, nullable=true)
	 */
	private $fax;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="correo", type="string", length=45, nullable=true)
	 */
	private $correo;


	public function __toString ()
	{
		return $this->getNombre ();
	}

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
	 * Set codigoDane
	 *
	 * @param integer $codigoDane
	 *
	 * @return Sede
	 */
	public function setCodigoDane ($codigoDane)
	{
		$this->codigoDane = $codigoDane;

		return $this;
	}

	/**
	 * Get codigoDane
	 *
	 * @return integer
	 */
	public function getCodigoDane ()
	{
		return $this->codigoDane;
	}

	/**
	 * Set nombre
	 *
	 * @param string $nombre
	 *
	 * @return Sede
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

	/**
	 * Set representanteLegal
	 *
	 * @param string $representanteLegal
	 *
	 * @return Sede
	 */
	public function setRepresentanteLegal ($representanteLegal)
	{
		$this->representanteLegal = $representanteLegal;

		return $this;
	}

	/**
	 * Get representanteLegal
	 *
	 * @return string
	 */
	public function getRepresentanteLegal ()
	{
		return $this->representanteLegal;
	}

	/**
	 * Set direccion
	 *
	 * @param string $direccion
	 *
	 * @return Sede
	 */
	public function setDireccion ($direccion)
	{
		$this->direccion = $direccion;

		return $this;
	}

	/**
	 * Get direccion
	 *
	 * @return string
	 */
	public function getDireccion ()
	{
		return $this->direccion;
	}

	/**
	 * Set telefono
	 *
	 * @param string $telefono
	 *
	 * @return Sede
	 */
	public function setTelefono ($telefono)
	{
		$this->telefono = $telefono;

		return $this;
	}

	/**
	 * Get telefono
	 *
	 * @return string
	 */
	public function getTelefono ()
	{
		return $this->telefono;
	}

	/**
	 * Set fax
	 *
	 * @param string $fax
	 *
	 * @return Sede
	 */
	public function setFax ($fax)
	{
		$this->fax = $fax;

		return $this;
	}

	/**
	 * Get fax
	 *
	 * @return string
	 */
	public function getFax ()
	{
		return $this->fax;
	}

	/**
	 * Set correo
	 *
	 * @param string $correo
	 *
	 * @return Sede
	 */
	public function setCorreo ($correo)
	{
		$this->correo = $correo;

		return $this;
	}

	/**
	 * Get correo
	 *
	 * @return string
	 */
	public function getCorreo ()
	{
		return $this->correo;
	}

	/**
	 * Set ciudad
	 *
	 * @param \AppBundle\Entity\Town $ciudad
	 *
	 * @return Sede
	 */
	public function setCiudad (\AppBundle\Entity\Town $ciudad = null)
	{
		$this->ciudad = $ciudad;

		return $this;
	}

	/**
	 * Get ciudad
	 *
	 * @return \AppBundle\Entity\Town
	 */
	public function getCiudad ()
	{
		return $this->ciudad;
	}

	/**
	 * Set zona
	 *
	 * @param \AppBundle\Entity\Zona $zona
	 *
	 * @return Sede
	 */
	public function setZona (\AppBundle\Entity\Zona $zona = null)
	{
		$this->zona = $zona;

		return $this;
	}

	/**
	 * Get zona
	 *
	 * @return \AppBundle\Entity\Zona
	 */
	public function getZona ()
	{
		return $this->zona;
	}

	/**
	 * Set barrio
	 *
	 * @param \AppBundle\Entity\Barrio $barrio
	 *
	 * @return Sede
	 */
	public function setBarrio (\AppBundle\Entity\Barrio $barrio = null)
	{
		$this->barrio = $barrio;

		return $this;
	}

	/**
	 * Get barrio
	 *
	 * @return \AppBundle\Entity\Barrio
	 */
	public function getBarrio ()
	{
		return $this->barrio;
	}

	/**
	 * Set vereda
	 *
	 * @param \AppBundle\Entity\Vereda $vereda
	 *
	 * @return Sede
	 */
	public function setVereda (\AppBundle\Entity\Vereda $vereda = null)
	{
		$this->vereda = $vereda;

		return $this;
	}

	/**
	 * Get vereda
	 *
	 * @return \AppBundle\Entity\Vereda
	 */
	public function getVereda ()
	{
		return $this->vereda;
	}
}
