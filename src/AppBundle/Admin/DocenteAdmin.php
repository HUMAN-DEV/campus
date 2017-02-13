<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DocenteAdmin extends AbstractAdmin
{
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
			->add ('facebook')
			->add ('id')
			->add ('especializacion');
	}

	/**
	 * @param ListMapper $listMapper
	 */
	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->add ('id')
			->add ('nombreCompleto')
			->add ('fechaNacimiento')
			->add ('dirResidencia')
			->add ('correo')
			->add ('telefono')
			->add ('movil')
			->add ('especializacion')
			->add ('escalafon')
			->add ('_action', null, [
				'actions' => [
					'show'   => [],
					'edit'   => [],
					'delete' => [],
				]
			]);
	}

	/**
	 * @param FormMapper $formMapper
	 */
	protected function configureFormFields (FormMapper $formMapper)
	{
		$formMapper
			->with ('Información Personal', ['class' => 'col-md-3'])
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
				'choice_label' => 'abreviacion',
				'required'     => false
			])
			->add ('documento', TextType::class, [
				'label' => 'Numero de Identificación',
				'attr'  => ['class' => 'validate']
			])
			->add ('lugarExpDocumento', 'sonata_type_model_autocomplete', [
				'class'        => 'AppBundle\Entity\Town',
				'property'     => 'name',
				'label_render' => 'name',
				'required'     => false
			])
			->add ('fechaNacimiento', 'sonata_type_date_picker', [
				'format' => 'yyyy-MM-dd'
			])
			->add ('lugarNacimiento', 'sonata_type_model_autocomplete', [
				'class'        => 'AppBundle\Entity\Town',
				'property'     => 'name',
				'label_render' => 'name',
				'required'     => false
			])
			->end ()
			->with ('Especialización', ['class' => 'col-md-9'])
			->add ('normalista_superior', null, ['attr' => ['class' => 'col-md-3']])
			->add ('desc_normalista', null, ['label' => 'Descripcion'])
			->add ('licenciado')
			->add ('desc_licenciado', null, ['label' => 'Descripcion'])
			->add ('especializacion')
			->add ('desc_especializacion', null, ['label' => 'Descripcion'])
			->add ('maestria')
			->add ('desc_maestria', null, ['label' => 'Descripcion'])
			->add ('phd', null, ['label' => 'PHD'])
			->add ('desc_phd', null, ['label' => 'Descripcion'])
			->add ('ingeniero')
			->add ('desc_ingeniero', null, ['label' => 'Descripcion'])
			->add ('otro')
			->add ('desc_otro', null, ['label' => 'Descripcion'])
			->end ()
			->with ('Residencia', ['class' => 'col-md-4'])
			->add ('lugarResidencia', 'sonata_type_model_autocomplete', [
				'class'        => 'AppBundle\Entity\Town',
				'property'     => 'name',
				'label_render' => 'name',
				'required'     => false
			])
			->add ('dirResidencia', TextType::class, [
				'label' => 'Dirección de Residencia',
			])
			->end ()
			->with ('Información de Contacto', ['class' => 'col-md-4'])
			->add ('correo', EmailType::class, [
				'label' => 'Correo Electrónico'
			])
			->add ('telefono', TextType::class, [
				'label'    => 'Telefono Fijo',
				'required' => false
			])
			->add ('movil', TextType::class, [
				'label' => 'Telefono Movil',
			])
			->add ('skype', TextType::class, [
				'label'    => 'Skype',
				'required' => false
			])
			->add ('facebook', TextType::class, [
				'label'    => 'Facebook',
				'required' => false
			])
			->end ()
			->with ('Informacion Adicional', ['class' => 'col-md-4'])
			->add ('fecha_nombramiento', 'sonata_type_date_picker', [
				'format' => 'yyyy-MM-dd',
				'attr'   => ['class' => 'validate']
			])
			->add ('fecha_ingreso', 'sonata_type_date_picker', [
				'format' => 'yyyy-MM-dd',
				'attr'   => ['class' => 'validate']
			])
			->add ('tiempo_experiencia')
			->add ('decreto_nombramiento')
			->add ('resolucion_nombramiento')
			->add ('grado_escalafon')
			->add ('estado_civil')
			->add ('eps')
			->end ();
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
			->add ('id')
			->add ('especializacion');
	}
}
