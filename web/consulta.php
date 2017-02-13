<?php

$id = (int)$_REQUEST['id'];
$documento = $_REQUEST['documento'];
$desde = $_REQUEST['desde'];
$hasta = $_REQUEST['hasta'];

try {
//	$mbd = new PDO('pgsql:host=ec2-54-163-236-33.compute-1.amazonaws.com;port=5432;dbname=d9p4treifqabo8', 'zkhnztdqcphlnu', '7a34e162572f77cb89d738ee9d410249df774dd5f01b0a2dda9f542b49a45091');
	$mbd = new PDO('mysql:host=127.0.0.1;dbname=college', 'college', 'C0ll3g3.2016');


	$SQL = <<<SQL
			SELECT
				asi.nombre AS asignatura ,
				asi.intesidad_horaria AS intensidad ,
				i.inasistencia AS inasistencia ,
				AVG(n.nota) AS promedio ,
				gr.abreviacion AS grupo ,
				s.nombre AS sede ,
				CONCAT(
					est.nombre1 ,
					' ' ,
					est.apellido1 ,
					' ' ,
					est.apellido2
				) AS estudiante ,
				CONCAT(
					d.nombre1 ,
					' ' ,
					d.apellido1 ,
					' ' ,
					d.apellido2
				) AS docente
			FROM
				notas n
			JOIN persona per ON per.id = n.estudiante_id
			JOIN asignatura asi ON asi.id = n.asignatura_id
			JOIN persona d ON n.docente_id = d.id
			JOIN persona est ON n.estudiante_id = est.id
			JOIN inasistencia i ON i.estudiante_id = n.estudiante_id
			JOIN grupo_estudiante ge ON ge.estudiante_id = n.estudiante_id
			JOIN grupo gr ON ge.grupo_id = gr.id
			JOIN aula al ON gr.aula_id = al.id
			JOIN sede s ON s.id = al.sede_id
			WHERE
				n.estudiante_id = :id
			AND per.documento = :documento 
			AND n.fecha BETWEEN :desde
			AND :hasta
			GROUP BY
				asi.nombre ,
				i.inasistencia ,
				asi.intesidad_horaria

SQL;
	if ((!isset($desde) || '' == $desde) && (!isset($hasta) || '' == $hasta)) {
		$año = new DateTime();
		$año = $año->format ('Y');
		$desde = $año . '-01-01';
		$hasta = $año . '-12-31';
	}

	$stm = $mbd->prepare ($SQL);
	$stm->execute (
		[
			'id'        => $id,
			'documento' => $documento,
			'desde'     => $desde,
			'hasta'     => $hasta
		]
	);

	$res = $stm->fetchAll (PDO::FETCH_ASSOC);


	/**
	 * Consulta de periodos
	 */
	$per = <<<SQL
		SELECT
			periodo ,
			desde ,
			hasta
		FROM
			periodo;
SQL;

	$periodo = $mbd->prepare ($per);
	$periodo->execute ();
	$periodos = $periodo->fetchAll (PDO::FETCH_ASSOC);

	$asignaturas = [];
	$estudiante = '';
	$grupo = '';
	$sede = '';

	$dic = [
		1 => 'primero',
		2 => 'segundo',
		3 => 'tercero',
		4 => 'cuarto'
	];

	foreach ($periodos as $p) {
		$name = $p['periodo'];
		$desde = $p['desde'];
		$hasta = $p['hasta'];

		$stm->execute (
			[
				'id'        => $id,
				'documento' => $documento,
				'desde'     => $desde,
				'hasta'     => $hasta
			]
		);

		$data = $stm->fetchAll (PDO::FETCH_ASSOC);

		foreach ($data as $registro) {
			$count = 1;
			$asignaturas[$registro['asignatura']] = [
				'periodos' => [
					$dic[$count] => [
						'promedio'     => $registro['promedio'],
						'inasistencia' => $registro['inasistencia']
					]
				],
				'docente'  => $registro['docente'],
				'promedio' => $registro['promedio']
			];
			$estudiante = $registro['estudiante'];
			$grupo = $registro['grupo'];
			$sede = $registro['sede'];
			$count++;
		}

	}


	$json = [];

	if (count ($res) > 0) {
		$json['success'] = true;
		$json['id'] = $id;
		$json['estudiante'] = $estudiante;
		$json['grupo'] = $grupo;
		$json['sede'] = $sede;
		$json['message'] = '<b>' . $estudiante . '</b> registra las siguientes asignaturas: ';
		$json['data'] = $asignaturas;
	} else {
		$json['success'] = false;
		$json['data'] = 0;
	}

	header ('Content-type: application/json; charset=utf-8');
	echo json_encode ($json, JSON_FORCE_OBJECT);

	$mbd = null;
} catch (PDOException $e) {
	print "¡Error!: " . $e->getMessage () . "<br/>";
	die();
}