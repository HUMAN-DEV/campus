<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\UserBundle\Entity\BaseUser;

class Usuario extends BaseUser
{
	protected $id;

	public function getId ()
	{
		return $this->id;
	}

}
