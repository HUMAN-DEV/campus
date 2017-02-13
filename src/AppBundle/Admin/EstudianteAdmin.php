<?php

namespace AppBundle\Admin;

use AppBundle\Entity\Estudiante;
use DateTime;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Indigo\SonataAdminPrintBundle\Admin\PrintAdmin;

class EstudianteAdmin extends AbstractAdmin
{
	public function toString ($object)
	{
		return $object instanceof Estudiante ? $object->getNombreCompleto () : 'Estudiante';
	}

	/**
	 * @param FormMapper $formMapper
	 */
	protected function configureFormFields (FormMapper $formMapper)
	{
		$hoy = new DateTime();
		$hoy = $hoy->modify ("-5 year");
//		$hoy = $hoy->format ('d/m/Y');

		$formMapper
			->with ('Información Personal', ['class' => 'col-md-4'])
			->add ('nombre1', TextType::class, [
				'label' => 'Primer Nombre',
				'attr'  => ['class' => 'validate']])
			->add ('nombre2', TextType::class, [
				'label'    => 'Segundo Nombre',
				'required' => false
			])
			->add ('apellido1', TextType::class, [
				'label' => 'Primer Apellido',
				'attr'  => ['class' => 'validate ']
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
				'empty_data'   => null,
				'attr'         => ['class' => 'validate']
			])
			->add ('tipoDocumento', EntityType::class, [
				'label'        => 'Tipo de Documento',
				'class'        => 'AppBundle\Entity\TipoDocumento',
				'choice_value' => 'id',
				'choice_label' => 'abreviacion',
				'attr'         => ['class' => 'validate']

			])
			->add ('documento', TextType::class, [
				'label' => 'Numero de Identificación',
				'attr'  => ['class' => 'validate']
			])
			->add ('lugarExpDocumento', 'sonata_type_model_autocomplete', [
				'class'        => 'AppBundle\Entity\Town',
				'property'     => 'name',
				'label_render' => 'name',
				'required'     => false,
				'attr'         => ['data-sonata-select2-allow-clear' => 'true']
			])
			->add ('fechaNacimiento', 'sonata_type_date_picker', [
				'format' => 'yyyy-MM-dd',
				'attr'   => ['class' => 'validate']
			])
			->add ('lugarNacimiento', 'sonata_type_model_autocomplete', [
				'class'        => 'AppBundle\Entity\Town',
				'property'     => 'name',
				'label_render' => 'name',
				'required'     => false
			])
			->end ()
			->with ('Información Referencial', ['class' => 'col-md-4'])
			->add ('infReferencial', 'sonata_type_model_list', [
				'label'      => 'Información Referencial',
				'btn_list'   => false,
				'btn_delete' => false,
				'attr'       => ['class' => 'validate']
			])
			->end ()
			->with ('Información del Acudiente', ['class' => 'col-md-4'])
			->add ('acudiente', 'sonata_type_model_list')
			->end ()
			->with ('Información de Contacto', ['class' => 'col-md-4'])
			->add ('correo', EmailType::class, [
				'label'    => 'Correo Electrónico',
				'required' => false
			])
			->add ('telefono', TextType::class, [
				'label'    => 'Telefono Fijo',
				'required' => false
			])
			->add ('movil', TextType::class, [
				'label'    => 'Telefono Movil',
				'required' => false
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
			->with ('Residencia', ['class' => 'col-md-4'])
			->add ('lugarResidencia', 'sonata_type_model_autocomplete', [
				'class'        => 'AppBundle\Entity\Town',
				'property'     => 'name',
				'label_render' => 'name',
				'required'     => false
			])
			->add ('dirResidencia', TextType::class, [
				'label' => 'Dirección de Residencia',
				'attr'  => ['class' => 'validate']
			])
			->end ();

	}


	/**
	 * @param DatagridMapper $datagridMapper
	 */
	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('id')
			->add ('nombre1')
			->add ('apellido1')
			->add ('documento', null, [
				'show_filter' => true])
			->add ('correo');
	}

	/**
	 * @param ListMapper $listMapper
	 */
	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->add ('id')
			->add ('nombreCompleto')
			->add ('documento')
			->add ('fechaNacimiento')
			->add ('dirResidencia')
			->add ('correo')
			->add ('telefono')
			->add ('movil')
			->add ('skype')
			->add ('facebook')
			->add ('_action', null, [
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
			->add ('nombreCompleto')
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
