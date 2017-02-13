<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Asignatura
 *
 * @ORM\Table(name="asignatura", indexes={@ORM\Index(name="IDX_9243D6CED7943D68",
 *                               columns={"area_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AsignaturaRepository")
 */
class Asignatura
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
	 * @var Area
	 *
	 * @ORM\ManyToOne(targetEntity="Area")
	 *
	 */
	private $area;

	/**
	 * @var double
	 *
	 * @ORM\Column(name="intesidad_horaria", type="float", nullable=true)
	 */
	private $intesidad_horaria;


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
	 * @return Asignatura
	 */
	public function setNombre ($nombre)
	{
		$this->nombre = $nombre;

		return $this;
	}

	/**
	 * Get area
	 *
	 * @return Area
	 */
	public function getArea ()
	{
		return $this->area;
	}

	/**
	 * Set area
	 *
	 * @param Area $area
	 *
	 * @return Asignatura
	 */
	public function setArea (Area $area = NULL)
	{
		$this->area = $area;

		return $this;
	}

	public function __toString ()
	{
		return $this->getNombre();
	}

    /**
     * Set intesidadHoraria
     *
     * @param float $intesidadHoraria
     *
     * @return Asignatura
     */
    public function setIntesidadHoraria($intesidadHoraria)
    {
        $this->intesidad_horaria = $intesidadHoraria;

        return $this;
    }

    /**
     * Get intesidadHoraria
     *
     * @return float
     */
    public function getIntesidadHoraria()
    {
        return $this->intesidad_horaria;
    }
}
