<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aula
 *
 * @ORM\Table(name="aula", indexes={@ORM\Index(name="IDX_31990A42A9BE2D1", columns={"sede_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AulaRepository")
 */
class Aula
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
	 * @var string
	 *
	 * @ORM\Column(name="tamanio", type="string", length=45, nullable=false)
	 */
	private $tamanio;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="estado", type="string", length=45, nullable=false)
	 */
	private $estado;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="capacidad", type="integer", length=45, nullable=false)
	 */
	private $capacidad;

	/**
	 * @var Sede
	 *
	 * @ORM\ManyToOne(targetEntity="Sede")
	 *
	 */
	private $sede;


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
	 * @return Aula
	 */
	public function setNombre ($nombre)
	{
		$this->nombre = $nombre;

		return $this;
	}

	/**
	 * Get tamanio
	 *
	 * @return string
	 */
	public function getTamanio ()
	{
		return $this->tamanio;
	}

	/**
	 * Set tamanio
	 *
	 * @param string $tamanio
	 *
	 * @return Aula
	 */
	public function setTamanio ($tamanio)
	{
		$this->tamanio = $tamanio;

		return $this;
	}
	

	/**
	 * Get capacidad
	 *
	 * @return integer
	 */
	public function getCapacidad ()
	{
		return $this->capacidad;
	}

	/**
	 * Set capacidad
	 *
	 * @param integer $capacidad
	 *
	 * @return Aula
	 */
	public function setCapacidad ($capacidad)
	{
		$this->capacidad = $capacidad;

		return $this;
	}

	/**
	 * Get sede
	 *
	 * @return Sede
	 */
	public function getSede ()
	{
		return $this->sede;
	}

	/**
	 * Set sede
	 *
	 * @param Sede $sede
	 *
	 * @return Aula
	 */
	public function setSede (Sede $sede = NULL)
	{
		$this->sede = $sede;

		return $this;
	}

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Aula
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    public function __toString ()
    {
	    return $this->getNombre();
    }
}
