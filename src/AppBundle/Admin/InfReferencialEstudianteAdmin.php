<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class InfReferencialEstudianteAdmin extends AbstractAdmin
{
	/**
	 * @param DatagridMapper $datagridMapper
	 */
	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('id')
			->add ('victimaConflicto')
			->add ('perteneceEtnia')
			->add ('familiasAccion')
			->add ('padreVive')
			->add ('madreVive')
			->add ('ips')
			->add ('ars')
			->add ('tipoSangre')
			->add ('numeroCarnetSisben')
			->add ('nivelSisben')
			->add ('estrato')
			->add ('fuenteRecursos')
			->add ('madreCabezaFamilia')
			->add ('hijoMadreCabezaFamilia')
			->add ('beneficiarioVeteranoMilitar')
			->add ('beneficiarioHeroeNacional')
			->add ('poblacionVictimaConflicto')
			->add ('fechaExpulsion');
	}

	/**
	 * @param ListMapper $listMapper
	 */
	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->add ('viveCon')
			->add ('victimaConflicto')
			->add ('perteneceEtnia')
			->add ('familiasAccion')
			->add ('padreVive')
			->add ('madreVive')
			->add ('tipoInsProv')
			->add ('tipoDiscapacidad')
			->add ('estadoCivilPadres')
			->add ('ips')
			->add ('eps')
			->add ('tipoSangre')
			->add ('numeroCarnetSisben')
			->add ('nivelSisben')
			->add ('estrato')
			->add ('fuenteRecursos')
			->add ('madreCabezaFamilia')
			->add ('hijoMadreCabezaFamilia')
			->add ('beneficiarioVeteranoMilitar')
			->add ('beneficiarioHeroeNacional')
			->add ('poblacionVictimaConflicto')
			->add ('fechaExpulsion')
			->add ('lugarExpulsion')
			->add ('resguardo')
			->add ('etnia')
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

//1. Bajo-bajo
//
//2.Bajo
//
//3. Medio-bajo
//
//4.Medio
//
//5.medio-Alto
//
//6. Alto
	protected function configureFormFields (FormMapper $formMapper)
	{
		$formMapper
			->with ('.', ['class' => 'col-md-4 '])
			->add ('viveCon')
			->add ('victimaConflicto')
			->add ('perteneceEtnia')
			->add ('familiasAccion')
			->add ('padreVive')
			->add ('madreVive')
			->add ('tipoInsProv', null, ['label' => 'Tipo de Institución Proveniente'])
			->add ('tipoDiscapacidad', null, ['label' => 'Discapacidad?'])
			->add ('estadoCivilPadres')
			->end ()
			->with ('Informacion Socioeconomica', ['class' => 'col-md-3'])
			->add ('ips', null, ['label' => 'IPS'])
			->add ('eps', 'sonata_type_model_list', ['label' => 'EPS'])
			->add ('tipoSangre', ChoiceType::class, [
				'choices'  => [
					'A+'  => 'A+',
					'A-'  => 'A-',
					'B+'  => 'B+',
					'B-'  => 'B-',
					'O+'  => 'O+',
					'O-'  => 'O-',
					'AB+' => 'AB+',
					'AB-' => 'AB-',
				], 'label' => 'Tipo de sangre'])
			->add ('numeroCarnetSisben', null, ['label' => 'Numero Sisben'])
			->add ('nivelSisben')
			->add ('estrato', ChoiceType::class, [
				'choices'  => [
					'1 BAJO-BAJO ',
					'2 BAJO',
					'3 MEDIO-BAJO',
					'4 MEDIO',
					'5 MEDIO-ALTO',
					'6 ALTO',
				], 'label' => 'Estrato Socioeconomico'])
			->add ('fuenteRecursos', null, ['label' => 'Fuente de Recursos'])
			->end ()
			->with (',', ['class' => 'col-md-4'])
			->add ('madreCabezaFamilia')
			->add ('hijoMadreCabezaFamilia')
			->add ('beneficiarioVeteranoMilitar')
			->add ('beneficiarioHeroeNacional')
			->add ('poblacionVictimaConflicto')
			->add ('fechaExpulsion', 'sonata_type_date_picker', [
				'format'   => 'yyyy-MM-dd',
				'widget'   => 'single_text',
				'attr'     => ['class' => 'datepicker'],
				'required' => false
			])
			->add ('lugarExpulsion', 'sonata_type_model_autocomplete', [
				'class'        => 'AppBundle\Entity\Town',
				'property'     => 'name',
				'label_render' => 'name',
				'required'     => false
			])
			->add ('resguardo')
			->add ('etnia')
			->end ();
	}

	/**
	 * @param ShowMapper $showMapper
	 */
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('id')
			->add ('viveCon')
			->add ('victimaConflicto')
			->add ('perteneceEtnia')
			->add ('familiasAccion')
			->add ('padreVive')
			->add ('madreVive')
			->add ('tipoInsProv')
			->add ('tipoDiscapacidad')
			->add ('estadoCivilPadres')
			->add ('ips')
			->add ('eps')
			->add ('tipoSangre')
			->add ('numeroCarnetSisben')
			->add ('nivelSisben')
			->add ('estrato')
			->add ('fuenteRecursos')
			->add ('madreCabezaFamilia')
			->add ('hijoMadreCabezaFamilia')
			->add ('beneficiarioVeteranoMilitar')
			->add ('beneficiarioHeroeNacional')
			->add ('poblacionVictimaConflicto')
			->add ('fechaExpulsion')
			->add ('lugarExpulsion')
			->add ('resguardo')
			->add ('etnia');
	}
}
