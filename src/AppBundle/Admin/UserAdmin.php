<?php

namespace AppBundle\Admin;

use AppBundle\Entity\Estudiante;
use FOS\UserBundle\Model\UserManagerInterface;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserAdmin extends AbstractAdmin
{
	public function toString ($object)
	{
		return $object instanceof Estudiante ? $object->getNombreCompleto () : 'Estudiante';
	}

	/**
	 * @param FormMapper $formMapper
	 */
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
			->with('General')
			->add('username')
			->add('email')
			->add('plainPassword', 'text')
			->end()
			->with('Groups')
			->add('groups', 'sonata_type_model', array('required' => false))
			->end()
			->with('Management')
			->add('roles', 'sonata_security_roles', array( 'multiple' => true))
			->add('locked', null, array('required' => false))
			->add('expired', null, array('required' => false))
			->add('enabled', null, array('required' => false))
			->add('credentialsExpired', null, array('required' => false))
			->end()
		;
	}

	public function preUpdate($user)
	{
		$this->getUserManager()->updateCanonicalFields($user);
		$this->getUserManager()->updatePassword($user);
	}

	public function setUserManager(UserManagerInterface $userManager)
	{
		$this->userManager = $userManager;
	}

	/**
	 * @return UserManagerInterface
	 */
	public function getUserManager()
	{
		$userManager = $this->container->get('fos_user.user_manager');
		return $userManager;
	}

	/**
	 * @param DatagridMapper $datagridMapper
	 */
	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('nombre1')
			->add ('nombre2')
			->add ('apellido1')
			->add ('apellido2')
			->add ('documento')
			->add ('fechaNacimiento')
			->add ('dirResidencia')
			->add ('correo')
			->add ('telefono')
			->add ('movil')
			->add ('skype')
			->add ('facebook');
	}

	/**
	 * @param ListMapper $listMapper
	 */
	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->add ('nombre1')
			->add ('nombre2')
			->add ('apellido1')
			->add ('apellido2')
			->add ('documento')
			->add ('fechaNacimiento')
			->add ('dirResidencia')
			->add ('correo')
			->add ('telefono')
			->add ('movil')
			->add ('skype')
			->add ('facebook')
			->add ('id')
			->add ('_action', NULL, [
				'actions' => [
					'show'   => [],
					'edit'   => [],
					'delete' => [],
				]
			]);
	}


	/**
	 * @param ShowMapper $showMapper
	 */
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('nombre1')
			->add ('nombre2')
			->add ('apellido1')
			->add ('apellido2')
			->add ('documento')
			->add ('fechaNacimiento')
			->add ('dirResidencia')
			->add ('correo')
			->add ('telefono')
			->add ('movil')
			->add ('skype')
			->add ('facebook')
			->add ('acudiente');
	}
}
