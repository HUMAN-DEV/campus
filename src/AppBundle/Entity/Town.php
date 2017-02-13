<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Town
 *
 * @ORM\Table(name="town")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TownRepository")
 */
class Town
{
	/**
	 * @var int
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="name", type="string", length=50)
	 */
	private $name;

	/**
	 * @var float
	 *
	 * @ORM\Column(name="longitude", type="float", nullable=true, precision=15)
	 */
	private $longitude;

	/**
	 * @var float
	 *
	 * @ORM\Column(name="latitude", type="float", nullable=true, precision=15)
	 */
	private $latitude;


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
	 * Get longitude
	 *
	 * @return float
	 */
	public function getLongitude ()
	{
		return $this->longitude;
	}

	/**
	 * Set longitude
	 *
	 * @param float $longitude
	 *
	 * @return Town
	 */
	public function setLongitude ($longitude)
	{
		$this->longitude = $longitude;

		return $this;
	}

	/**
	 * Get latitude
	 *
	 * @return float
	 */
	public function getLatitude ()
	{
		return $this->latitude;
	}

	/**
	 * Set latitude
	 *
	 * @param float $latitude
	 *
	 * @return Town
	 */
	public function setLatitude ($latitude)
	{
		$this->latitude = $latitude;

		return $this;
	}

	public function __toString ()
	{
		return $this->getName ();
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName ()
	{
		return $this->name;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 *
	 * @return Town
	 */
	public function setName ($name)
	{
		$this->name = $name;

		return $this;
	}
}
