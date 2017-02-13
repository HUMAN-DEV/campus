<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asignacion
 *
 * @ORM\Table(name="asignacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AsignacionRepository")
 */
class Asignacion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_director", type="integer")
     */
    private $idDirector;

    /**
     * @var int
     *
     * @ORM\Column(name="id_estudiante", type="integer")
     */
    private $idEstudiante;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idDirector
     *
     * @param integer $idDirector
     *
     * @return Asignacion
     */
    public function setIdDirector($idDirector)
    {
        $this->idDirector = $idDirector;

        return $this;
    }

    /**
     * Get idDirector
     *
     * @return int
     */
    public function getIdDirector()
    {
        return $this->idDirector;
    }

    /**
     * Set idEstudiante
     *
     * @param integer $idEstudiante
     *
     * @return Asignacion
     */
    public function setIdEstudiante($idEstudiante)
    {
        $this->idEstudiante = $idEstudiante;

        return $this;
    }

    /**
     * Get idEstudiante
     *
     * @return int
     */
    public function getIdEstudiante()
    {
        return $this->idEstudiante;
    }
}

