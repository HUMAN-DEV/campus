<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Docente
 *
 * @ORM\Table(name="docente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DocenteRepository")
 *
 */
class Docente extends Persona
{
	protected $disc = self::DOCENTE;


	/**
	 * @var string
	 *
	 * @ORM\Column(name="grado_escalafon", type="string", length=45, nullable=false)
	 */
	private $grado_escalafon;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="fecha_nombramiento", type="date", options={"default":"1700-01-01"}, nullable=false)
	 */
	private $fecha_nombramiento;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="fecha_ingreso", type="date", options={"default":"1700-01-01"},  nullable=false)
	 */
	private $fecha_ingreso;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="tiempo_experiencia", type="string", options={"default":"No Definido"},  nullable=false)
	 */
	private $tiempo_experiencia;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="decreto_nombramiento", type="string", options={"default":"No Definido"},  nullable=false)
	 */
	private $decreto_nombramiento;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="resolucion_nombramiento", type="string", options={"default":"No Definido"},  nullable=false)
	 */
	private $resolucion_nombramiento;

	/**
	 * @var bool
	 *
	 * @ORM\Column(name="normalista_superior", type="boolean",  nullable=true)
	 */
	private $normalista_superior;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="desc_normalista", type="string",  nullable=true)
	 */
	private $desc_normalista;

	/**
	 * @var bool
	 *
	 * @ORM\Column(name="licenciado", type="boolean",  nullable=true)
	 */
	private $licenciado;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="desc_licenciado", type="string",  nullable=true)
	 */
	private $desc_licenciado;

	/**
	 * @var bool
	 *
	 * @ORM\Column(name="especializacion", type="boolean",  nullable=true)
	 */
	private $especializacion;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="desc_especializacion", type="string",  nullable=true)
	 */
	private $desc_especializacion;

	/**
	 * @var bool
	 *
	 * @ORM\Column(name="maestria", type="boolean",  nullable=true)
	 */
	private $maestria;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="desc_maestria", type="string",  nullable=true)
	 */
	private $desc_maestria;

	/**
	 * @var bool
	 *
	 * @ORM\Column(name="phd", type="boolean",  nullable=true)
	 */
	private $phd;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="desc_phd", type="string",  nullable=true)
	 */
	private $desc_phd;

	/**
	 * @var bool
	 *
	 * @ORM\Column(name="ingeniero", type="boolean",  nullable=true)
	 */
	private $ingeniero;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="desc_ingeniero", type="string",  nullable=true)
	 */
	private $desc_ingeniero;

	/**
	 * @var bool
	 *
	 * @ORM\Column(name="otro", type="boolean",  nullable=true)
	 */
	private $otro;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="desc_otro", type="string",  nullable=true)
	 */
	private $desc_otro;

	/**
	 * @return string
	 */
	public function getGradoEscalafon ()
	{
		return $this->grado_escalafon;
	}

	/**
	 * @param string $grado_escalafon
	 */
	public function setGradoEscalafon (string $grado_escalafon)
	{
		$this->grado_escalafon = $grado_escalafon;
	}

	/**
	 */
	public function getFechaNombramiento ()
	{
		return $this->fecha_nombramiento;
	}

	/**
	 * @param  $fecha_nombramiento
	 */
	public function setFechaNombramiento ($fecha_nombramiento)
	{
		$this->fecha_nombramiento = $fecha_nombramiento;
	}

	/**
	 * @return \DateTime
	 */
	public function getFechaIngreso ()
	{
		return $this->fecha_ingreso;
	}

	/**
	 * @param  $fecha_ingreso
	 */
	public function setFechaIngreso ($fecha_ingreso)
	{
		$this->fecha_ingreso = $fecha_ingreso;
	}

	/**
	 * @return string
	 */
	public function getTiempoExperiencia ()
	{
		return $this->tiempo_experiencia;
	}

	/**
	 * @param string $tiempo_experiencia
	 */
	public function setTiempoExperiencia (string $tiempo_experiencia)
	{
		$this->tiempo_experiencia = $tiempo_experiencia;
	}

	/**
	 * @return string
	 */
	public function getDecretoNombramiento ()
	{
		return $this->decreto_nombramiento;
	}

	/**
	 * @return string
	 */
	public function getResolucionNombramiento ()
	{
		return $this->resolucion_nombramiento;
	}

	/**
	 * @param string $resolucion_nombramiento
	 */
	public function setResolucionNombramiento ($resolucion_nombramiento)
	{
		$this->resolucion_nombramiento = $resolucion_nombramiento;
	}

	/**
	 * @param string $decreto_nombramiento
	 */
	public function setDecretoNombramiento (string $decreto_nombramiento)
	{
		$this->decreto_nombramiento = $decreto_nombramiento;
	}

	/**
	 * @return bool
	 */
	public function isNormalistaSuperior ()
	{
		return $this->normalista_superior;
	}

	/**
	 * @param bool $normalista_superior
	 */
	public function setNormalistaSuperior (bool $normalista_superior)
	{
		$this->normalista_superior = $normalista_superior;
	}

	/**
	 * @return string
	 */
	public function getDescNormalista ()
	{
		return $this->desc_normalista;
	}

	/**
	 * @param string $desc_normalista
	 */
	public function setDescNormalista (string $desc_normalista)
	{
		$this->desc_normalista = $desc_normalista;
	}

	/**
	 * @return bool
	 */
	public function isLicenciado ()
	{
		return $this->licenciado;
	}

	/**
	 * @param bool $licenciado
	 */
	public function setLicenciado (bool $licenciado)
	{
		$this->licenciado = $licenciado;
	}

	/**
	 * @return string
	 */
	public function getDescLicenciado ()
	{
		return $this->desc_licenciado;
	}

	/**
	 * @param string $desc_licenciado
	 */
	public function setDescLicenciado (string $desc_licenciado)
	{
		$this->desc_licenciado = $desc_licenciado;
	}

	/**
	 * @return bool
	 */
	public function isEspecializacion ()
	{
		return $this->especializacion;
	}

	/**
	 * @param bool $especializacion
	 */
	public function setEspecializacion (bool $especializacion)
	{
		$this->especializacion = $especializacion;
	}

	/**
	 * @return string
	 */
	public function getDescEspecializacion ()
	{
		return $this->desc_especializacion;
	}

	/**
	 * @param string $desc_especializacion
	 */
	public function setDescEspecializacion (string $desc_especializacion)
	{
		$this->desc_especializacion = $desc_especializacion;
	}

	/**
	 * @return bool
	 */
	public function isMaestria ()
	{
		return $this->maestria;
	}

	/**
	 * @param bool $maestria
	 */
	public function setMaestria (bool $maestria)
	{
		$this->maestria = $maestria;
	}

	/**
	 * @return string
	 */
	public function getDescMaestria ()
	{
		return $this->desc_maestria;
	}

	/**
	 * @param string $desc_maestria
	 */
	public function setDescMaestria (string $desc_maestria)
	{
		$this->desc_maestria = $desc_maestria;
	}

	/**
	 * @return bool
	 */
	public function isPhd ()
	{
		return $this->phd;
	}

	/**
	 * @param bool $phd
	 */
	public function setPhd (bool $phd)
	{
		$this->phd = $phd;
	}

	/**
	 * @return string
	 */
	public function getDescPhd ()
	{
		return $this->desc_phd;
	}

	/**
	 * @param string $desc_phd
	 */
	public function setDescPhd (string $desc_phd)
	{
		$this->desc_phd = $desc_phd;
	}

	/**
	 * @return bool
	 */
	public function isIngeniero ()
	{
		return $this->ingeniero;
	}

	/**
	 * @param bool $ingeniero
	 */
	public function setIngeniero (bool $ingeniero)
	{
		$this->ingeniero = $ingeniero;
	}

	/**
	 * @return string
	 */
	public function getDescIngeniero ()
	{
		return $this->desc_ingeniero;
	}

	/**
	 * @param string $desc_ingeniero
	 */
	public function setDescIngeniero (string $desc_ingeniero)
	{
		$this->desc_ingeniero = $desc_ingeniero;
	}

	/**
	 * @return bool
	 */
	public function isOtro ()
	{
		return $this->otro;
	}

	/**
	 * @param bool $otro
	 */
	public function setOtro (bool $otro)
	{
		$this->otro = $otro;
	}

	/**
	 * @return string
	 */
	public function getDescOtro ()
	{
		return $this->desc_otro;
	}

	/**
	 * @param string $desc_otro
	 */
	public function setDescOtro (string $desc_otro)
	{
		$this->desc_otro = $desc_otro;
	}

	/**
	 * @return string
	 */
	public function getEps ()
	{
		return $this->eps;
	}

	/**
	 * @param string $eps
	 */
	public function setEps (string $eps)
	{
		$this->eps = $eps;
	}

	/**
	 * @return \AppBundle\Entity\EstadoCivil
	 */
	public function getEstadoCivil ()
	{
		return $this->estado_civil;
	}

	/**
	 * @param \AppBundle\Entity\EstadoCivil $estado_civil
	 */
	public function setEstadoCivil (EstadoCivil $estado_civil)
	{
		$this->estado_civil = $estado_civil;
	}

	/**
	 * @var string
	 *
	 * @ORM\Column(name="eps", type="string",  nullable=true)
	 */
	private $eps;

	/**
	 * @var EstadoCivil
	 *
	 * @ORM\ManyToOne(targetEntity="EstadoCivil")
	 */
	private $estado_civil;


	/**
	 * @return int
	 */
	public function getId ()
	{
		return parent::getId ();
	}


	public function __toString ()
	{
		return $this->getNombreCompleto ();
	}


}
