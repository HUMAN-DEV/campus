<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Table(name="persona")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({
 *     "persona" = "Persona",
 *     "estudiante" = "Estudiante",
 *     "docente" = "Docente",
 *     "acudiente" = "Acudiente",
 *      "administrativo" = "Administrativo"})
 * @ORM\Entity()
 */
abstract class Persona
{

	const PERSONA = 'Persona';
	const ESTUDIANTE = 'Estudiante';
	const DOCENTE = 'Docente';
	const ACUDIENTE = 'Acudiente';
	const ADMINISTRATIVO = 'Administrativo';
	/**
	 * @var string
	 * @Assert\NotBlank()
	 * @Assert\NotNull()
	 * @ORM\Column(name="nombre1", type="string", length=45, nullable=false)
	 */
	public $nombre1;
	/**
	 * @var string
	 *
	 * @ORM\Column(name="nombre2", type="string", length=45, nullable=true)
	 */
	public $nombre2;
	/**
	 * @var string
	 * @Assert\NotBlank()
	 * @Assert\NotNull()
	 * @ORM\Column(name="apellido1", type="string", length=45, nullable=false)
	 */
	public $apellido1;
	/**
	 * @var string
	 *
	 * @ORM\Column(name="apellido2", type="string", length=45, nullable=false)
	 */
	public $apellido2;
	/**
	 * @var string
	 * @Assert\NotBlank()
	 * @Assert\NotNull()
	 *     * @Assert\Type(
	 *     type="string",
	 *     message="El Valor {{ value }} no es un {{ type }} valido."
	 * )
	 * @Assert\Length(
	 *      min = 5,
	 *      max = 20,
	 *      minMessage = "Your first name must be at least {{ limit }} characters long",
	 *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
	 * )
	 * @ORM\Column(name="documento", type="string", length=45, nullable=false, unique=true)
	 */
	public $documento;
	/**
	 * @var Genero
	 * @Assert\NotNull()
	 * @ORM\ManyToOne(targetEntity="Genero")
	 * @ORM\JoinColumn(name="genero_id", referencedColumnName="id")
	 */
	public $genero;
	/**
	 * @var TipoDocumento
	 * @Assert\NotNull()
	 * @ORM\ManyToOne(targetEntity="TipoDocumento")
	 * @ORM\JoinColumn(name="tipo_documento_id", referencedColumnName="id")
	 */
	public $tipoDocumento;
	/**
	 * @var \DateTime
	 * @Assert\NotNull()
	 * @ORM\Column(name="fecha_nacimiento", type="date", nullable=false)
	 */
	public $fechaNacimiento;
	/**
	 * @var Town
	 * @Assert\NotNull()
	 * @ORM\ManyToOne(targetEntity="Town")
	 * @ORM\JoinColumn(name="lugar_nacimiento_id", referencedColumnName="id")
	 */
	public $lugarNacimiento;
	/**
	 * @var Town
	 * @Assert\NotNull()
	 * @ORM\ManyToOne(targetEntity="Town")
	 * @ORM\JoinColumn(name="lugar_residencia_id", referencedColumnName="id")
	 */
	public $lugarResidencia;
	/**
	 * @var string $dirResidencia
	 * @Assert\NotBlank()
	 * @Assert\NotNull()
	 * @ORM\Column(name="dir_residencia", type="string", length=200, nullable=false)
	 */
	public $dirResidencia;
	/**
	 * @var Town $lugarExpDocumento
	 * @Assert\NotNull()
	 * @ORM\ManyToOne(targetEntity="Town")
	 * @ORM\JoinColumn(name="lugar_exp_documento_id", referencedColumnName="id")
	 */
	public $lugarExpDocumento;
	/**
	 * @var string
	 *
	 * @Assert\Email(
	 *     checkMX = true,
	 *     checkHost = true
	 * )
	 * @ORM\Column(name="correo", type="string", length=45, nullable=true)
	 */
	public $correo;
	/**
	 * @var string
	 *
	 * @ORM\Column(name="telefono", type="string", length=45, nullable=true)
	 */
	public $telefono;
	/**
	 * @var string
	 * @Assert\Length(
	 *      min = 10,
	 *      max = 13,
	 * )
	 *
	 *
	 * @ORM\Column(name="movil", type="string", length=45, nullable=true)
	 */
	public $movil;
	/**
	 * @var string
	 *
	 * @ORM\Column(name="skype", type="string", length=45, nullable=true)
	 */
	public $skype;
	/**
	 * @var string
	 *
	 * @ORM\Column(name="facebook", type="string", length=45, nullable=true)
	 */
	public $facebook;
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @return int
	 */
	public function getId ()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId ($id)
	{
		$this->id = $id;
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
	 * Set fechaNacimiento
	 *
	 * @param \DateTime $fechaNacimiento
	 *
	 * @return Persona
	 */
	public function setFechaNacimiento ($fechaNacimiento)
	{
		$this->fechaNacimiento = $fechaNacimiento;

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
	 * Set dirResidencia
	 *
	 * @param string $dirResidencia
	 *
	 * @return Persona
	 */
	public function setDirResidencia ($dirResidencia)
	{
		$this->dirResidencia = $dirResidencia;

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
	 * Set correo
	 *
	 * @param string $correo
	 *
	 * @return Persona
	 */
	public function setCorreo ($correo)
	{
		$this->correo = $correo;

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
	 * Set telefono
	 *
	 * @param string $telefono
	 *
	 * @return Persona
	 */
	public function setTelefono ($telefono)
	{
		$this->telefono = $telefono;

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
	 * Set movil
	 *
	 * @param string $movil
	 *
	 * @return Persona
	 */
	public function setMovil ($movil)
	{
		$this->movil = $movil;

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
	 * Set skype
	 *
	 * @param string $skype
	 *
	 * @return Persona
	 */
	public function setSkype ($skype)
	{
		$this->skype = $skype;

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
	 * Set facebook
	 *
	 * @param string $facebook
	 *
	 * @return Persona
	 */
	public function setFacebook ($facebook)
	{
		$this->facebook = $facebook;

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
	 * Set genero
	 *
	 * @param Genero $genero
	 *
	 * @return Persona
	 */
	public function setGenero (Genero $genero = null)
	{
		$this->genero = $genero;

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
	 * Set tipoDocumento
	 *
	 * @param TipoDocumento $tipoDocumento
	 *
	 * @return Persona
	 */
	public function setTipoDocumento (TipoDocumento $tipoDocumento = null)
	{
		$this->tipoDocumento = $tipoDocumento;

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
	 * Set lugarNacimiento
	 *
	 * @param Town $lugarNacimiento
	 *
	 * @return Persona
	 */
	public function setLugarNacimiento (Town $lugarNacimiento = null)
	{
		$this->lugarNacimiento = $lugarNacimiento;

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
	 * Set lugarResidencia
	 *
	 * @param Town $lugarResidencia
	 *
	 * @return Persona
	 */
	public function setLugarResidencia (Town $lugarResidencia = null)
	{
		$this->lugarResidencia = $lugarResidencia;

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

	/**
	 * Set lugarExpDocumento
	 *
	 * @param Town $lugarExpDocumento
	 *
	 * @return Persona
	 */
	public function setLugarExpDocumento (Town $lugarExpDocumento = null)
	{
		$this->lugarExpDocumento = $lugarExpDocumento;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getNombreCompleto ()
	{
		return '(' . $this->getDocumento () . ') ' . $this->getApellido1 () . ' ' . $this->getApellido2 () . ', ' .
			$this->getNombre1 () . ' ' . $this->getNombre2 ();
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
	 * Set documento
	 *
	 * @param string $documento
	 *
	 * @return Persona
	 */
	public function setDocumento ($documento)
	{
		$this->documento = $documento;

		return $this;
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
	 * Set apellido1
	 *
	 * @param string $apellido1
	 *
	 * @return Persona
	 */
	public function setApellido1 ($apellido1)
	{
		$this->apellido1 = $apellido1;

		return $this;
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
	 * Set apellido2
	 *
	 * @param string $apellido2
	 *
	 * @return Persona
	 */
	public function setApellido2 ($apellido2)
	{
		$this->apellido2 = $apellido2;

		return $this;
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
	 * Set nombre1
	 *
	 * @param string $nombre1
	 *
	 * @return Persona
	 */
	public function setNombre1 ($nombre1)
	{
		$this->nombre1 = $nombre1;

		return $this;
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

	/**
	 * Set nombre2
	 *
	 * @param string $nombre2
	 *
	 * @return Persona
	 */
	public function setNombre2 ($nombre2)
	{
		$this->nombre2 = $nombre2;

		return $this;
	}
}
