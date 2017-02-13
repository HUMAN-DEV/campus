<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * InfReferencialEstudiante
 *
 * @ORM\Table(name="inf_referencial_estudiante")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InfReferencialEstudianteRepository")
 */
class InfReferencialEstudiante
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
	 * @var Parentezco
	 * @Assert\NotNull()
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Parentezco")
	 */
	private $viveCon;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="victima_conflicto", type="boolean", nullable=false)
	 */
	private $victimaConflicto;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="pertenece_etnia", type="boolean", nullable=false)
	 */
	private $perteneceEtnia;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="familias_accion", type="boolean", nullable=false)
	 */
	private $familiasAccion;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="padre_vive", type="boolean", nullable=false)
	 */
	private $padreVive;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="madre_vive", type="boolean", nullable=false)
	 */
	private $madreVive;

	/**
	 * @var TipoInstitucion
	 * @Assert\NotNull()
	 * @ORM\ManyToOne(targetEntity="TipoInstitucion")
	 */
	private $tipoInsProv;

	/**
	 * @var Discapacidad
	 *
	 * @ORM\ManyToOne(targetEntity="Discapacidad")
	 */
	private $tipoDiscapacidad;

	/**
	 * @var EstadoCivil
	 * @Assert\NotNull()
	 * @ORM\ManyToOne(targetEntity="EstadoCivil")
	 */
	private $estadoCivilPadres;

	/**
	 * @var Eps
	 * @Assert\NotNull()
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Eps")
	 */
	private $eps;

	/**
	 * @var string
	 * @ORM\Column(name="ips", type="string", nullable=true)
	 */
	private $ips;

	/**
	 * @var string
	 * @ORM\Column(name="ars", type="string", nullable=true)
	 */
	private $ars;

	/**
	 * @var string
	 * @Assert\NotNull()
	 * @ORM\Column(name="tipo_sangre", type="string", nullable=true)
	 */
	private $tipoSangre;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="numero_carnet_sisben", type="string", nullable=true)
	 */
	private $numeroCarnetSisben;

	/**
	 * @var string
	 * @ORM\Column(name="nivel_sisben", type="string", nullable=true)
	 */
	private $nivelSisben;

	/**
	 * @var string
	 * @Assert\NotNull()
	 * @ORM\Column(name="estrato", type="string", nullable=true)
	 */
	private $estrato;

	/**
	 * @var string
	 * @Assert\NotNull()
	 * @ORM\Column(name="fuente_recursos", type="string", nullable=true)
	 */
	private $fuenteRecursos;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="madre_cabeza_familia", type="boolean", nullable=true)
	 */
	private $madreCabezaFamilia;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="hijo_madre_cabeza_familia", type="boolean", nullable=true)
	 */
	private $hijoMadreCabezaFamilia;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="beneficiario_veterano_militar", type="boolean", nullable=true)
	 */
	private $beneficiarioVeteranoMilitar;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="beneficiario_heroe_nacional", type="boolean", nullable=true)
	 */
	private $beneficiarioHeroeNacional;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="poblacion_victima_conflicto", type="boolean", nullable=true)
	 */
	private $poblacionVictimaConflicto;

	/**
	 * @var Date
	 *
	 * @ORM\Column(name="fecha_expulsion", type="date", nullable=true)
	 */
	private $fechaExpulsion;

	/**
	 * @var Town
	 *
	 * @ORM\ManyToOne(targetEntity="Town")
	 */
	private $lugarExpulsion;

	/**
	 * @var Resguardo
	 *
	 * @ORM\ManyToOne(targetEntity="Resguardo")
	 */
	private $resguardo;

	/**
	 * @var Etnia
	 *
	 * @ORM\ManyToOne(targetEntity="Etnia")
	 */
	private $etnia;


	/**
	 * Get victimaConflicto
	 *
	 * @return boolean
	 */
	public function getVictimaConflicto ()
	{
		return $this->victimaConflicto;
	}

	/**
	 * Set victimaConflicto
	 *
	 * @param boolean $victimaConflicto
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setVictimaConflicto ($victimaConflicto)
	{
		$this->victimaConflicto = $victimaConflicto;

		return $this;
	}

	/**
	 * Get perteneceEtnia
	 *
	 * @return boolean
	 */
	public function getPerteneceEtnia ()
	{
		return $this->perteneceEtnia;
	}

	/**
	 * Set perteneceEtnia
	 *
	 * @param boolean $perteneceEtnia
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setPerteneceEtnia ($perteneceEtnia)
	{
		$this->perteneceEtnia = $perteneceEtnia;

		return $this;
	}

	/**
	 * Get familiasAccion
	 *
	 * @return boolean
	 */
	public function getFamiliasAccion ()
	{
		return $this->familiasAccion;
	}

	/**
	 * Set familiasAccion
	 *
	 * @param boolean $familiasAccion
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setFamiliasAccion ($familiasAccion)
	{
		$this->familiasAccion = $familiasAccion;

		return $this;
	}

	/**
	 * Get padreVive
	 *
	 * @return boolean
	 */
	public function getPadreVive ()
	{
		return $this->padreVive;
	}

	/**
	 * Set padreVive
	 *
	 * @param boolean $padreVive
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setPadreVive ($padreVive)
	{
		$this->padreVive = $padreVive;

		return $this;
	}

	/**
	 * Get madreVive
	 *
	 * @return boolean
	 */
	public function getMadreVive ()
	{
		return $this->madreVive;
	}

	/**
	 * Set madreVive
	 *
	 * @param boolean $madreVive
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setMadreVive ($madreVive)
	{
		$this->madreVive = $madreVive;

		return $this;
	}

	/**
	 * Get tipoInsProv
	 *
	 * @return TipoInstitucion
	 */
	public function getTipoInsProv ()
	{
		return $this->tipoInsProv;
	}

	/**
	 * Set tipoInsProv
	 *
	 * @param TipoInstitucion $tipoInsProv
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setTipoInsProv (TipoInstitucion $tipoInsProv = null)
	{
		$this->tipoInsProv = $tipoInsProv;

		return $this;
	}

	/**
	 * Get tipoDiscapacidad
	 *
	 * @return Discapacidad
	 */
	public function getTipoDiscapacidad ()
	{
		return $this->tipoDiscapacidad;
	}

	/**
	 * Set tipoDiscapacidad
	 *
	 * @param Discapacidad $tipoDiscapacidad
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setTipoDiscapacidad (Discapacidad $tipoDiscapacidad = null)
	{
		$this->tipoDiscapacidad = $tipoDiscapacidad;

		return $this;
	}

	/**
	 * Get estadoCivilPadres
	 *
	 * @return EstadoCivil
	 */
	public function getEstadoCivilPadres ()
	{
		return $this->estadoCivilPadres;
	}

	/**
	 * Set estadoCivilPadres
	 *
	 * @param EstadoCivil $estadoCivilPadres
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setEstadoCivilPadres (EstadoCivil $estadoCivilPadres = null)
	{
		$this->estadoCivilPadres = $estadoCivilPadres;

		return $this;
	}

	/**
	 * Set estadoCivilPadresIre
	 *
	 * @param EstadoCivil $estadoCivilPadres
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setEstadoCivilPadresIre (EstadoCivil $estadoCivilPadres = null)
	{
		$this->estadoCivilPadres = $estadoCivilPadres;

		return $this;
	}

	/**
	 * Get viveCon
	 *
	 * @return Parentezco
	 */
	public function getViveCon ()
	{
		return $this->viveCon;
	}

	/**
	 * Set viveCon
	 *
	 * @param Parentezco $viveCon
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setViveCon (Parentezco $viveCon = null)
	{
		$this->viveCon = $viveCon;

		return $this;
	}

	public function __toString ()
	{
		return $this->getId () . '';
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
	 * Set ips
	 *
	 * @param string $ips
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setIps ($ips)
	{
		$this->ips = $ips;

		return $this;
	}

	/**
	 * Get ips
	 *
	 * @return string
	 */
	public function getIps ()
	{
		return $this->ips;
	}

	/**
	 * Set ars
	 *
	 * @param string $ars
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setArs ($ars)
	{
		$this->ars = $ars;

		return $this;
	}

	/**
	 * Get ars
	 *
	 * @return string
	 */
	public function getArs ()
	{
		return $this->ars;
	}

	/**
	 * Set tipoSangre
	 *
	 * @param string $tipoSangre
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setTipoSangre ($tipoSangre)
	{
		$this->tipoSangre = $tipoSangre;

		return $this;
	}

	/**
	 * Get tipoSangre
	 *
	 * @return string
	 */
	public function getTipoSangre ()
	{
		return $this->tipoSangre;
	}

	/**
	 * Set numeroCarnetSisben
	 *
	 * @param string $numeroCarnetSisben
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setNumeroCarnetSisben ($numeroCarnetSisben)
	{
		$this->numeroCarnetSisben = $numeroCarnetSisben;

		return $this;
	}

	/**
	 * Get numeroCarnetSisben
	 *
	 * @return string
	 */
	public function getNumeroCarnetSisben ()
	{
		return $this->numeroCarnetSisben;
	}

	/**
	 * Set nivelSisben
	 *
	 * @param string $nivelSisben
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setNivelSisben ($nivelSisben)
	{
		$this->nivelSisben = $nivelSisben;

		return $this;
	}

	/**
	 * Get nivelSisben
	 *
	 * @return string
	 */
	public function getNivelSisben ()
	{
		return $this->nivelSisben;
	}

	/**
	 * Set estrato
	 *
	 * @param string $estrato
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setEstrato ($estrato)
	{
		$this->estrato = $estrato;

		return $this;
	}

	/**
	 * Get estrato
	 *
	 * @return string
	 */
	public function getEstrato ()
	{
		return $this->estrato;
	}

	/**
	 * Set fuenteRecursos
	 *
	 * @param string $fuenteRecursos
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setFuenteRecursos ($fuenteRecursos)
	{
		$this->fuenteRecursos = $fuenteRecursos;

		return $this;
	}

	/**
	 * Get fuenteRecursos
	 *
	 * @return string
	 */
	public function getFuenteRecursos ()
	{
		return $this->fuenteRecursos;
	}

	/**
	 * Set madreCabezaFamilia
	 *
	 * @param boolean $madreCabezaFamilia
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setMadreCabezaFamilia ($madreCabezaFamilia)
	{
		$this->madreCabezaFamilia = $madreCabezaFamilia;

		return $this;
	}

	/**
	 * Get madreCabezaFamilia
	 *
	 * @return boolean
	 */
	public function getMadreCabezaFamilia ()
	{
		return $this->madreCabezaFamilia;
	}

	/**
	 * Set hijoMadreCabezaFamilia
	 *
	 * @param boolean $hijoMadreCabezaFamilia
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setHijoMadreCabezaFamilia ($hijoMadreCabezaFamilia)
	{
		$this->hijoMadreCabezaFamilia = $hijoMadreCabezaFamilia;

		return $this;
	}

	/**
	 * Get hijoMadreCabezaFamilia
	 *
	 * @return boolean
	 */
	public function getHijoMadreCabezaFamilia ()
	{
		return $this->hijoMadreCabezaFamilia;
	}

	/**
	 * Set beneficiarioVeteranoMilitar
	 *
	 * @param boolean $beneficiarioVeteranoMilitar
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setBeneficiarioVeteranoMilitar ($beneficiarioVeteranoMilitar)
	{
		$this->beneficiarioVeteranoMilitar = $beneficiarioVeteranoMilitar;

		return $this;
	}

	/**
	 * Get beneficiarioVeteranoMilitar
	 *
	 * @return boolean
	 */
	public function getBeneficiarioVeteranoMilitar ()
	{
		return $this->beneficiarioVeteranoMilitar;
	}

	/**
	 * Set beneficiarioHeroeNacional
	 *
	 * @param boolean $beneficiarioHeroeNacional
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setBeneficiarioHeroeNacional ($beneficiarioHeroeNacional)
	{
		$this->beneficiarioHeroeNacional = $beneficiarioHeroeNacional;

		return $this;
	}

	/**
	 * Get beneficiarioHeroeNacional
	 *
	 * @return boolean
	 */
	public function getBeneficiarioHeroeNacional ()
	{
		return $this->beneficiarioHeroeNacional;
	}

	/**
	 * Set poblacionVictimaConflicto
	 *
	 * @param string $poblacionVictimaConflicto
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setPoblacionVictimaConflicto ($poblacionVictimaConflicto)
	{
		$this->poblacionVictimaConflicto = $poblacionVictimaConflicto;

		return $this;
	}

	/**
	 * Get poblacionVictimaConflicto
	 *
	 * @return string
	 */
	public function getPoblacionVictimaConflicto ()
	{
		return $this->poblacionVictimaConflicto;
	}

	/**
	 * Set fechaExpulsion
	 *
	 * @param \DateTime $fechaExpulsion
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setFechaExpulsion ($fechaExpulsion)
	{
		$this->fechaExpulsion = $fechaExpulsion;

		return $this;
	}

	/**
	 * Get fechaExpulsion
	 *
	 * @return \DateTime
	 */
	public function getFechaExpulsion ()
	{
		return $this->fechaExpulsion;
	}

	/**
	 * Set eps
	 *
	 * @param \AppBundle\Entity\Eps $eps
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setEps (\AppBundle\Entity\Eps $eps = null)
	{
		$this->eps = $eps;

		return $this;
	}

	/**
	 * Get eps
	 *
	 * @return \AppBundle\Entity\Eps
	 */
	public function getEps ()
	{
		return $this->eps;
	}

	/**
	 * Set lugarExpulsion
	 *
	 * @param \AppBundle\Entity\Town $lugarExpulsion
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setLugarExpulsion (\AppBundle\Entity\Town $lugarExpulsion = null)
	{
		$this->lugarExpulsion = $lugarExpulsion;

		return $this;
	}

	/**
	 * Get lugarExpulsion
	 *
	 * @return \AppBundle\Entity\Town
	 */
	public function getLugarExpulsion ()
	{
		return $this->lugarExpulsion;
	}

	/**
	 * Set resguardo
	 *
	 * @param \AppBundle\Entity\Resguardo $resguardo
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setResguardo (\AppBundle\Entity\Resguardo $resguardo = null)
	{
		$this->resguardo = $resguardo;

		return $this;
	}

	/**
	 * Get resguardo
	 *
	 * @return \AppBundle\Entity\Resguardo
	 */
	public function getResguardo ()
	{
		return $this->resguardo;
	}

	/**
	 * Set etnia
	 *
	 * @param \AppBundle\Entity\Etnia $etnia
	 *
	 * @return InfReferencialEstudiante
	 */
	public function setEtnia (\AppBundle\Entity\Etnia $etnia = null)
	{
		$this->etnia = $etnia;

		return $this;
	}

	/**
	 * Get etnia
	 *
	 * @return \AppBundle\Entity\Etnia
	 */
	public function getEtnia ()
	{
		return $this->etnia;
	}

}
