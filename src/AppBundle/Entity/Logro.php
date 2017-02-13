<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logro
 *
 * @ORM\Table(name="logro",
 *     indexes={@ORM\Index(name="IDX_7439301C9243D6CE",
 *     columns={"asignatura_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LogroRepository")
 */
class Logro
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
	 * @ORM\Column(name="descripcion", type="text", nullable=true)
	 */
	private $descripcion;

	/**
	 * @var Calificativos
	 *
	 * @ORM\ManyToOne(targetEntity="Calificativos")
	 */
	private $calificativo;

	/**
	 * @var Asignatura
	 *
	 * @ORM\ManyToOne(targetEntity="Asignatura")
	 */
	private $asignatura;

//	/**
//	 * @var Valoracion
//	 *
//	 * @ORM\ManyToOne(targetEntity="Valoracion")
//	 */
//	private $valoracion;


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
	 * @return Logro
	 */
	public function setNombre ($nombre)
	{
		$this->nombre = $nombre;

		return $this;
	}

	/**
	 * Get descripcion
	 *
	 * @return string
	 */
	public function getDescripcion ()
	{
		return $this->descripcion;
	}

	/**
	 * Set descripcion
	 *
	 * @param string $descripcion
	 *
	 * @return Logro
	 */
	public function setDescripcion ($descripcion)
	{
		$this->descripcion = $descripcion;

		return $this;
	}

	/**
	 * Get asignatura
	 *
	 * @return Asignatura
	 */
	public function getAsignatura ()
	{
		return $this->asignatura;
	}

	/**
	 * Set asignatura
	 *
	 * @param Asignatura $asignatura
	 *
	 * @return Logro
	 */
	public function setAsignatura (Asignatura $asignatura = null)
	{
		$this->asignatura = $asignatura;

		return $this;
	}

	/**
	 * Set calificativo
	 *
	 * @param \AppBundle\Entity\Calificativos $calificativo
	 *
	 * @return Logro
	 */
	public function setCalificativo (Calificativos $calificativo = null)
	{
		$this->calificativo = $calificativo;

		return $this;
	}

	/**
	 * Get calificativo
	 *
	 * @return \AppBundle\Entity\Calificativos
	 */
	public function getCalificativo ()
	{
		return $this->calificativo;
	}

//	/**
//	 * @return \AppBundle\Entity\Valoracion
//	 */
//	public function getValoracion ()
//	{
//		return $this->valoracion;
//	}
//
//	/**
//	 * @param Valoracion $valoracion
//	 */
//	public function setValoracion (Valoracion $valoracion)
//	{
//		$this->valoracion = $valoracion;
//	}

}
