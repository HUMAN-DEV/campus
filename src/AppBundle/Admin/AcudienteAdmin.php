<?php

namespace AppBundle\Admin;

use AppBundle\Entity\Acudiente;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AcudienteAdmin extends AbstractAdmin
{
	public function toString ($object)
	{
		return $object instanceof Acudiente ? $object->getNombreCompleto () : 'Acudiente';
	}

	/**
	 * @param DatagridMapper $datagridMapper
	 */
	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('id')
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
			->addIdentifier ('id', null, [
				'label' => 'Código'
			])
			->add ('nombreCompleto', null, [
				'label' => 'Nombre Completo',
			])
			->add ('fechaNacimiento')
			->add ('correo', EmailType::class, [
				'label' => 'Correo Electrónico'
			])
			->add ('telefono', TextType::class, [
				'label' => 'Telefono Fijo'
			])
			->add ('movil', TextType::class, [
				'label' => 'Telefono Movil'
			])
			->add ('skype', TextType::class, [
				'label' => 'Skype'
			])
			->add ('facebook', TextType::class, [
				'label' => 'Facebook'
			])
			->add ('_action', null, [
				'actions' => [
					'show' => [],
					'edit' => [],
				]
			]);
	}

	/**
	 * @param FormMapper $formMapper
	 */
	protected function configureFormFields (FormMapper $formMapper)
	{
		$formMapper
			->with ('Información Personal', ['class' => 'col-md-6'])
			->add ('nombre1', TextType::class, [
				'label' => 'Primer Nombre',
				'attr'  => ['class' => 'validate']])
			->add ('nombre2', TextType::class, [
				'label'    => 'Segundo Nombre',
				'required' => false
			])
			->add ('apellido1', TextType::class, [
				'label' => 'Primer Apellido',
				'attr'  => ['class' => 'validate']
			])
			->add ('apellido2', TextType::class, [
				'label' => 'Segundo Apellido',
				'attr'  => ['class' => 'validate']
			])
			->add ('genero', EntityType::class, [
				'label'        => 'Genero',
				'class'        => 'AppBundle\Entity\Genero',
				'choice_label' => 'genero',
				'choice_value' => 'id',
				'empty_data'   => null
			])
			->add ('tipoDocumento', EntityType::class, [
				'label'        => 'Tipo de Documento',
				'class'        => 'AppBundle\Entity\TipoDocumento',
				'choice_value' => 'id',
				'choice_label' => 'abreviacion'
			])
			->add ('documento', TextType::class, [
				'label' => 'Numero de Identificación',
				'attr'  => ['class' => 'validate']
			])
			->add ('lugarExpDocumento', 'sonata_type_model_autocomplete', [
				'class'        => 'AppBundle\Entity\Town',
				'property'     => 'name',
				'label_render' => 'name'
			])
			->add ('fechaNacimiento', 'sonata_type_date_picker', [
				'format' => 'yyyy-MM-dd',
			])
			->add ('lugarNacimiento', 'sonata_type_model_autocomplete', [
				'class'        => 'AppBundle\Entity\Town',
				'property'     => 'name',
				'label_render' => 'name'
			])
			->end ()
			->with ('Información de Contacto', ['class' => 'col-md-3'])
			->add ('lugarResidencia', 'sonata_type_model_autocomplete', [
				'class'        => 'AppBundle\Entity\Town',
				'property'     => 'name',
				'label_render' => 'name'
			])
			->add ('dirResidencia', TextType::class, [
				'label' => 'Dirección de Residencia',
			])
			->add ('correo', EmailType::class, [
				'label' => 'Correo Electrónico'
			])
			->add ('telefono', TextType::class, [
				'label'    => 'Telefono Fijo',
				'required' => false
			])
			->add ('movil', TextType::class, [
				'label' => 'Telefono Movil'
			])
			->add ('skype', TextType::class, [
				'label'    => 'Skype',
				'required' => false
			])
			->add ('facebook', TextType::class, [
				'label'    => 'Facebook',
				'required' => false
			])
			->end ();
	}

	/**
	 * @param ShowMapper $showMapper
	 */
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('nombreCompleto')
			->add ('documento')
			->add ('fechaNacimiento')
			->add ('dirResidencia')
			->add ('correo')
			->add ('telefono')
			->add ('movil')
			->add ('skype')
			->add ('facebook')
			->add ('estudiantes');
	}


}
