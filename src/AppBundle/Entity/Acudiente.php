<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Acudiente
 * @ORM\Table(name="acudiente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AcudienteRepository")
 */
class Acudiente extends Persona
{

	protected $discr = self::ACUDIENTE;

	/**
	 * @var Ocupacion
	 *
	 * @ORM\ManyToOne(targetEntity="Ocupacion")
	 */
	private $ocupacion;


	/**
	 * @return int
	 */
	public function getId ()
	{
		return parent::getId ();
	}

	/**
	 * Get Ocupacion Acudiente
	 *
	 * @return Ocupacion
	 */
	public function getOcupacion ()
	{
		return $this->ocupacion;
	}

	/**
	 * Set Ocupacion Acudiente
	 *
	 * @param Ocupacion $ocupacion
	 *
	 * @return Acudiente
	 */
	public function setOcupacion (Ocupacion $ocupacion = NULL)
	{
		$this->ocupacion = $ocupacion;

		return $this;
	}

	/**
	 * Set nombre1
	 *
	 * @param string $nombre1
	 *
	 * @return Acudiente
	 */
	public function setNombre1 ($nombre1)
	{
		$this->nombre1 = $nombre1;

		return $this;
	}

	/**
	 * Set nombre2
	 *
	 * @param string $nombre2
	 *
	 * @return Acudiente
	 */
	public function setNombre2 ($nombre2)
	{
		$this->nombre2 = $nombre2;

		return $this;
	}

	/**
	 * Set apellido1
	 *
	 * @param string $apellido1
	 *
	 * @return Acudiente
	 */
	public function setApellido1 ($apellido1)
	{
		$this->apellido1 = $apellido1;

		return $this;
	}

	/**
	 * Set apellido2
	 *
	 * @param string $apellido2
	 *
	 * @return Acudiente
	 */
	public function setApellido2 ($apellido2)
	{
		$this->apellido2 = $apellido2;

		return $this;
	}

	/**
	 * Set documento
	 *
	 * @param string $documento
	 *
	 * @return Acudiente
	 */
	public function setDocumento ($documento)
	{
		$this->documento = $documento;

		return $this;
	}

	/**
	 * Set fechaNacimiento
	 *
	 * @param \DateTime $fechaNacimiento
	 *
	 * @return Acudiente
	 */
	public function setFechaNacimiento ($fechaNacimiento)
	{
		$this->fechaNacimiento = $fechaNacimiento;

		return $this;
	}

	/**
	 * Get fechaNacimiento
	 *
	 * @return \DateTime
	 */
	public function getFechaNacimiento ()
	{
		return $this->fechaNacimiento;
	}

	/**
	 * Set dirResidencia
	 *
	 * @param string $dirResidencia
	 *
	 * @return Acudiente
	 */
	public function setDirResidencia ($dirResidencia)
	{
		$this->dirResidencia = $dirResidencia;

		return $this;
	}

	/**
	 * Get dirResidencia
	 *
	 * @return string
	 */
	public function getDirResidencia ()
	{
		return $this->dirResidencia;
	}

	/**
	 * Set correo
	 *
	 * @param string $correo
	 *
	 * @return Acudiente
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
	 * Set telefono
	 *
	 * @param string $telefono
	 *
	 * @return Acudiente
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
	 * Set movil
	 *
	 * @param string $movil
	 *
	 * @return Acudiente
	 */
	public function setMovil ($movil)
	{
		$this->movil = $movil;

		return $this;
	}

	/**
	 * Get movil
	 *
	 * @return string
	 */
	public function getMovil ()
	{
		return $this->movil;
	}

	/**
	 * Set skype
	 *
	 * @param string $skype
	 *
	 * @return Acudiente
	 */
	public function setSkype ($skype)
	{
		$this->skype = $skype;

		return $this;
	}

	/**
	 * Get skype
	 *
	 * @return string
	 */
	public function getSkype ()
	{
		return $this->skype;
	}

	/**
	 * Set facebook
	 *
	 * @param string $facebook
	 *
	 * @return Acudiente
	 */
	public function setFacebook ($facebook)
	{
		$this->facebook = $facebook;

		return $this;
	}

	/**
	 * Get facebook
	 *
	 * @return string
	 */
	public function getFacebook ()
	{
		return $this->facebook;
	}

	/**
	 * Set genero
	 *
	 * @param Genero $genero
	 *
	 * @return Acudiente
	 */
	public function setGenero (Genero $genero = NULL)
	{
		$this->genero = $genero;

		return $this;
	}

	/**
	 * Get genero
	 *
	 * @return Genero
	 */
	public function getGenero ()
	{
		return $this->genero;
	}

	/**
	 * Set tipoDocumento
	 *
	 * @param TipoDocumento $tipoDocumento
	 *
	 * @return Acudiente
	 */
	public function setTipoDocumento (TipoDocumento $tipoDocumento = NULL)
	{
		$this->tipoDocumento = $tipoDocumento;

		return $this;
	}

	/**
	 * Get tipoDocumento
	 *
	 * @return TipoDocumento
	 */
	public function getTipoDocumento ()
	{
		return $this->tipoDocumento;
	}

	/**
	 * Set lugarNacimiento
	 *
	 * @param Town $lugarNacimiento
	 *
	 * @return Acudiente
	 */
	public function setLugarNacimiento (Town $lugarNacimiento = NULL)
	{
		$this->lugarNacimiento = $lugarNacimiento;

		return $this;
	}

	/**
	 * Get lugarNacimiento
	 *
	 * @return Town
	 */
	public function getLugarNacimiento ()
	{
		return $this->lugarNacimiento;
	}

	/**
	 * Set lugarResidencia
	 *
	 * @param Town $lugarResidencia
	 *
	 * @return Acudiente
	 */
	public function setLugarResidencia (Town $lugarResidencia = NULL)
	{
		$this->lugarResidencia = $lugarResidencia;

		return $this;
	}

	/**
	 * Get lugarResidencia
	 *
	 * @return Town
	 */
	public function getLugarResidencia ()
	{
		return $this->lugarResidencia;
	}

	/**
	 * Set lugarExpDocumento
	 *
	 * @param Town $lugarExpDocumento
	 *
	 * @return Acudiente
	 */
	public function setLugarExpDocumento (Town $lugarExpDocumento = NULL)
	{
		$this->lugarExpDocumento = $lugarExpDocumento;

		return $this;
	}

	/**
	 * Get lugarExpDocumento
	 *
	 * @return Town
	 */
	public function getLugarExpDocumento ()
	{
		return $this->lugarExpDocumento;
	}

	public function __toString ()
	{
		return $this->getNombreCompleto();
	}

	/**
	 * Get documento
	 *
	 * @return string
	 */
	public function getDocumento ()
	{
		return $this->documento;
	}

	/**
	 * Get apellido1
	 *
	 * @return string
	 */
	public function getApellido1 ()
	{
		return $this->apellido1;
	}

	/**
	 * Get apellido2
	 *
	 * @return string
	 */
	public function getApellido2 ()
	{
		return $this->apellido2;
	}

	/**
	 * Get nombre1
	 *
	 * @return string
	 */
	public function getNombre1 ()
	{
		return $this->nombre1;
	}

	/**
	 * Get nombre2
	 *
	 * @return string
	 */
	public function getNombre2 ()
	{
		return $this->nombre2;
	}



}
