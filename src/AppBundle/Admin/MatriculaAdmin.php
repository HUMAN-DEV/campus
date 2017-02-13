<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MatriculaAdmin extends AbstractAdmin
{
	/**
	 * @param DatagridMapper $datagridMapper
	 */
	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('id')
			->add ('fecha')
			->add ('estado.estado')
			->add ('estudiante.id', null, [
				'label' => 'Codigo'
			])
			->add ('estudiante.documento', null, [
				'label' => 'Documento'
			])
			->add ('grado')
			->add ('observaciones');
	}

	/**
	 * @param ListMapper $listMapper
	 */
	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier ('id', null, [
				'label' => 'Código Matricula    '
			])
			->add ('fecha')
			->add ('estado.estado')
			->add ('estudiante.nombreCompleto')
			->add ('grado')
			->add ('observaciones')
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
			->with ('Matricula', ['class' => 'col-md-4 '])
//			->add ('fecha', 'sonata_type_date_picker', [
//				'dp_use_current' => true,
//				'format'         => 'yyyy-MM-dd',
//				'widget'         => 'single_text',
//				'attr'           => ['class' => 'datepicker']
//			])
			->add ('estado')
			->add ('observaciones', null, ['attr' => ['rows' => 5]])
			->end ()
			->with ('Estudiante', ['class' => 'col-md-4'])
			->add ('estudiante', 'sonata_type_model_list')
			->end ()
			->with ('Sede', ['class' => 'col-md-3'])
			->add ('sede')
			->end ()
			->with ('Grado', ['class' => 'col-md-3'])
			->add ('grado')
			->end ();
	}

	/**
	 * @param ShowMapper $showMapper
	 */
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('id')
			->add ('fecha')
			->add ('estudiante')
			->add ('sede')
			->add ('grado')
			->add ('estado', null, ['editable' => true, 'label' => 'Estado'])
			->add ('observaciones');
	}
}
