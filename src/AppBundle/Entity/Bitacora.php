<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bitacora
 *
 * @ORM\Table(name="bitacora",
 *     indexes={@ORM\Index(name="IDX_9087FEF9ECF1CF36",
 *     columns={"modulo_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BitacoraRepository")
 */
class Bitacora
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
	 * @var \DateTime
	 *
	 * @ORM\Column(name="fecha", type="date", nullable=false)
	 */
	private $fecha;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="hora", type="time", nullable=false)
	 */
	private $hora;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="usuario", type="integer", nullable=false)
	 */
	private $usuario;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="ip", type="string", length=45, nullable=false)
	 */
	private $ip;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="accion", type="string", length=45, nullable=false)
	 */
	private $accion;

	/**
	 * @var Modulo
	 *
	 * @ORM\ManyToOne(targetEntity="Modulo")
	 *
	 */
	private $modulo;


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
	 * Get fecha
	 *
	 * @return \DateTime
	 */
	public function getFecha ()
	{
		return $this->fecha;
	}

	/**
	 * Set fecha
	 *
	 * @param \DateTime $fecha
	 *
	 * @return Bitacora
	 */
	public function setFecha ($fecha)
	{
		$this->fecha = $fecha;

		return $this;
	}

	/**
	 * Get hora
	 *
	 * @return \DateTime
	 */
	public function getHora ()
	{
		return $this->hora;
	}

	/**
	 * Set hora
	 *
	 * @param \DateTime $hora
	 *
	 * @return Bitacora
	 */
	public function setHora ($hora)
	{
		$this->hora = $hora;

		return $this;
	}

	/**
	 * Get usuario
	 *
	 * @return integer
	 */
	public function getUsuario ()
	{
		return $this->usuario;
	}

	/**
	 * Set usuario
	 *
	 * @param integer $usuario
	 *
	 * @return Bitacora
	 */
	public function setUsuario ($usuario)
	{
		$this->usuario = $usuario;

		return $this;
	}

	/**
	 * Get ip
	 *
	 * @return string
	 */
	public function getIp ()
	{
		return $this->ip;
	}

	/**
	 * Set ip
	 *
	 * @param string $ip
	 *
	 * @return Bitacora
	 */
	public function setIp ($ip)
	{
		$this->ip = $ip;

		return $this;
	}

	/**
	 * Get accion
	 *
	 * @return string
	 */
	public function getAccion ()
	{
		return $this->accion;
	}

	/**
	 * Set accion
	 *
	 * @param string $accion
	 *
	 * @return Bitacora
	 */
	public function setAccion ($accion)
	{
		$this->accion = $accion;

		return $this;
	}

	/**
	 * Get modulo
	 *
	 * @return Modulo
	 */
	public function getModulo ()
	{
		return $this->modulo;
	}

	/**
	 * Set modulo
	 *
	 * @param Modulo $modulo
	 *
	 * @return Bitacora
	 */
	public function setModulo (Modulo $modulo = NULL)
	{
		$this->modulo = $modulo;

		return $this;
	}
}
