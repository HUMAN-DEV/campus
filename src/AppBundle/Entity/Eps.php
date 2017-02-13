<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eps
 *
 * @ORM\Table(name="eps")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EpsRepository")
 */
class Eps
{
	/**
	 * @var int
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue()
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="eps", type="string", length=100)
	 */
	private $eps;


	/**
	 * Get id
	 *
	 * @return int
	 */
	public function getId ()
	{
		return $this->id;
	}

	/**
	 * Set eps
	 *
	 * @param string $eps
	 *
	 * @return Eps
	 */
	public function setEps ($eps)
	{
		$this->eps = $eps;

		return $this;
	}

	/**
	 * Get eps
	 *
	 * @return string
	 */
	public function getEps ()
	{
		return $this->eps;
	}

	public function __toString ()
	{
		return $this->eps;
	}

}

