<?php
 session_start();
 ini_set("memory_limit","1000M");
 set_time_limit(20*60);

if( !isset($_GET['ini']) || !isset($_GET['fin']) ){
 //echo "no definida";
 $consulta = array('idEstacion'=>$_GET['idEstacion'], "rubro"=>$_GET['rubro']);
}else{
//echo "definida";
 $consulta = array('fechaCaptura'=>array('$gt'=>new MongoDate(strtotime($_GET['ini'])), '$lte'=>new MongoDate(strtotime($_GET['fin']) )), 'idEstacion'=>$_GET['idEstacion'],'rubro'=>$_GET['rubro']);
}

 $skip = (int)$_GET['skip'];
 $limit =(int)$_GET['limit'];

 //** Include PHPExcel */
 require_once 'Classes/PHPExcel.php'; 
 include('reportes.php');

 $client = new Reporte();
 $nombreEstacion =  $client->getEstacion($_GET['idEstacion']);

 /** Error reporting */
 error_reporting(E_ALL);
 ini_set('display_errors', TRUE);
 ini_set('display_startup_errors', TRUE);
 date_default_timezone_set('Europe/London');

 if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

// Create new PHPExcel object
if ($_GET['rubro'] === 'pds1') {	
//	echo "preferencias";

	$objPHPExcel = new PHPExcel();
	// Set document properties
	$objPHPExcel->getProperties()->setCreator("Servicios Mexicanos de Ingenieria Civil")
								 ->setLastModifiedBy("SEMIC")
								 ->setTitle("Office 2007 XLSX Document")
								 ->setSubject("Office 2007 XLSX Document")
								 ->setDescription("Document de Office 2007 XLSX, Generado por Semic.")
								 ->setKeywords("office 2007 openxml php")
								 ->setCategory("Semic");  
		    $i = 1;

		    $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('A'.(string)($i),"PROG");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('B'.(string)($i),"ESTACIÓN");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('C'.(string)($i),"KM");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('D'.(string)($i),"SEN");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('E'.(string)($i),"AÑO");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('F'.(string)($i),"MES");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('G'.(string)($i),"DIA");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('H'.(string)($i),"HORA");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('I'.(string)($i),"T_VEH_OK");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('J'.(string)($i),"DESC. VEH");

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('K'.(string)($i),"CVE_LOC_ORI");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('L'.(string)($i),"LOC_ORI");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('M'.(string)($i),"CVE_EDO_ORI");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('N'.(string)($i),"EDO_ORI");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('O'.(string)($i),"COLONIA_ORI");

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('P'.(string)($i),"CVE_LOC_DES");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Q'.(string)($i),"LOC_DES");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('R'.(string)($i),"CVE_EDO_DES");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('S'.(string)($i),"EDO_DES");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('T'.(string)($i),"COLONIA_DES");

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('U'.(string)($i),"CVE_MAR");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('V'.(string)($i),"MARCA");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('W'.(string)($i),"MODELO");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('X'.(string)($i),"CVE_COM");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Y'.(string)($i),"COMBUSTIBLE");

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Z'.(string)($i),"OCUPANTES");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AA'.(string)($i),"CVE_MV");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AB'.(string)($i),"MOT_VIA");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AC'.(string)($i),"CVE_FREC");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AD'.(string)($i),"FRECUENCIA");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AE'.(string)($i),"INGRESO");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AF'.(string)($i),"CVE_CAR");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AG'.(string)($i),"CARGA");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AH'.(string)($i),"TON");

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AI'.(string)($i),'T-1');
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AJ'.(string)($i),'T-2');
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AK'.(string)($i),'T-3');
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AL'.(string)($i),'T-4');
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AM'.(string)($i),'T-5');
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AN'.(string)($i),'T-6');
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AO'.(string)($i),'T-7');
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AP'.(string)($i),'T-8');
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AQ'.(string)($i),'T-9');
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AR'.(string)($i),'T-10');
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AS'.(string)($i),'VIAJE');
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AT'.(string)($i),'CAPT');
		
		 $i++; 
	     $estacion = "";
		 $capturista = "";
		 $nones = array( 'fill' => array(
	            'type' => PHPExcel_Style_Fill::FILL_SOLID,
	            'color' => array('rgb' => 'ECECEC')
	        ));

	    $prog= 1;
		foreach ($client->excelEstacion($consulta,$skip,$limit) as $fila) 
		 {			
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('A'.($i), $prog ); // progresivo
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('B'.(string)($i), (string)$fila['estacion']);//estacion
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('C'.(string)($i), (string)$fila['km']); //km
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('D'.(string)($i), (string)$fila['sentido']); //sentido
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('E'.(string)($i), (string)$fila['anyo']); // anio
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('F'.(string)($i), (string)$fila['mes']); // mes
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('G'.(string)($i), (string)$fila['dia']); // dia
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('H'.(string)($i), (string)$fila['hora']); // hora
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('I'.(string)($i), (string)$fila['tipoVehiculo']);// tipoVehiculo
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('J'.(string)($i), (string)$fila['descVehiculo']);// desc vehiculo

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('K'.(string)($i), (string)$fila['poblacionOrigenIdInegi']);// clave pob. origen
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('L'.(string)($i), (string)$fila['poblacionOrigen']);// Pob. origen 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('M'.(string)($i), (string)$fila['clvEstadoOrigen']);// clave edo. origen 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('N'.(string)($i), (string)$fila['estadoOrigen']);// edo. origen 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('O'.(string)($i), (string)$fila['coloniaOrigen']);// colonia origen 

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('P'.(string)($i), (string)$fila['poblacionDestinoIdInegi']);// clave pob. destino
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Q'.(string)($i), (string)$fila['poblacionDestino']);// Pob. destino 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('R'.(string)($i), (string)$fila['clvEstadoDestino']);// clave edo. destino 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('S'.(string)($i), (string)$fila['estadoDestino']);// edo. destino 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('T'.(string)($i), (string)$fila['coloniaDestino']);// colonia destino 

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('U'.(string)($i), (string)$fila['clvMarca']);// clave marca
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('V'.(string)($i), (string)$fila['marca']);// marca 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('W'.(string)($i), (string)$fila['modelo']);// modelo
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('X'.(string)($i), (string)$fila['clvCombustible']);// clave combustible
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Y'.(string)($i), (string)$fila['combustible']);// combustible 

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Z'.(string)($i), (string)$fila['ocupantes']);// ocupantes
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AA'.(string)($i), (string)$fila['clvMotivo']);// clave motivo
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AB'.(string)($i), (string)$fila['motivo']);//  motivo 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AC'.(string)($i), (string)$fila['clvFrecuencia']);// clave frecuencia 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AD'.(string)($i), (string)$fila['frecuencia']);// frecuencia 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AE'.(string)($i), (string)$fila['ingreso']);//  ingreso	
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AF'.(string)($i), (string)$fila['clvCarga']);// clave carga
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AG'.(string)($i), (string)$fila['carga']);//  carga	
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AH'.(string)($i), (string)$fila['toneladas']);//  toneladas

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AI'.(string)($i), (string)$fila['t1']);//  t1
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AJ'.(string)($i), (string)$fila['t2']);//  t2
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AK'.(string)($i), (string)$fila['t3']);//  t3
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AL'.(string)($i), (string)$fila['t4']);//  t4
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AM'.(string)($i), (string)$fila['t5']);//  t5
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AN'.(string)($i), (string)$fila['t6']);//  t6
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AO'.(string)($i), (string)$fila['t7']);//  t7
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AP'.(string)($i), (string)$fila['t8']);//  t8
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AQ'.(string)($i), (string)$fila['t9']);//  t9
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AR'.(string)($i), (string)$fila['t10']);//  t10
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AS'.(string)($i), (string)$fila['tarjetasPd']);//  tarjetadPd
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AT'.(string)($i), (string)$fila['capturista']);//  capturista
			$prog++;
	        $i++;	       
		}


	        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AK')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AL')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AM')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AN')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AO')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AP')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AQ')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AR')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AS')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AT')->setAutoSize(true);

					
			$decoracionTitulos = array(
						    'font'    => array(
			                'name'      => 'Arial Narrow',
							'bold'      => true,
							'size'   => 10,
			                'color'     => array(
			                'rgb' => '000000')
						),
						'alignment' => array(
							'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
						)
					);		


	$objPHPExcel->getActiveSheet()->getStyle('A1:AT1')->applyFromArray($decoracionTitulos);

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment;filename="'.$nombreEstacion['carretera'].'-'.$nombreEstacion['estacion'].'-PD.xlsx" ');
	header('Cache-Control: max-age=0');

	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	$objWriter->save('php://output');
	exit();

}else{
	//	echo "ods";
	$objPHPExcel = new PHPExcel();
	// Set document properties
	$objPHPExcel->getProperties()->setCreator("Servicios Mexicanos de Ingenieria Civil")
								 ->setLastModifiedBy("SEMIC")
								 ->setTitle("Office 2007 XLSX Document")
								 ->setSubject("Office 2007 XLSX Document")
								 ->setDescription("Document de Office 2007 XLSX, Generado por Semic.")
								 ->setKeywords("office 2007 openxml php")
								 ->setCategory("Semic");  
		    $i = 1;

		    $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('A'.(string)($i),"PROG");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('B'.(string)($i),"ESTACIÓN");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('C'.(string)($i),"KM");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('D'.(string)($i),"SEN");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('E'.(string)($i),"AÑO");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('F'.(string)($i),"MES");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('G'.(string)($i),"DIA");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('H'.(string)($i),"HORA");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('I'.(string)($i),"T_VEH_OK");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('J'.(string)($i),"DESC. VEH");

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('K'.(string)($i),"CVE_LOC_ORI");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('L'.(string)($i),"LOC_ORI");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('M'.(string)($i),"CVE_EDO_ORI");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('N'.(string)($i),"EDO_ORI");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('O'.(string)($i),"COLONIA_ORI");

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('P'.(string)($i),"CVE_LOC_DES");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Q'.(string)($i),"LOC_DES");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('R'.(string)($i),"CVE_EDO_DES");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('S'.(string)($i),"EDO_DES");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('T'.(string)($i),"COLONIA_DES");

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('U'.(string)($i),"CVE_MAR");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('V'.(string)($i),"MARCA");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('W'.(string)($i),"MODELO");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('X'.(string)($i),"CVE_COM");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Y'.(string)($i),"COMBUSTIBLE");

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Z'.(string)($i),"OCUPANTES");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AA'.(string)($i),"CVE_MV");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AB'.(string)($i),"MOT_VIA");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AC'.(string)($i),"CVE_FREC");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AD'.(string)($i),"FRECUENCIA");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AE'.(string)($i),"INGRESO");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AF'.(string)($i),"CVE_CAR");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AG'.(string)($i),"CARGA");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AH'.(string)($i),"TON");
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AI'.(string)($i),'CAPT');
		
		 $i++; 
	     $estacion = "";
		 $capturista = "";
		 $nones = array( 'fill' => array(
	            'type' => PHPExcel_Style_Fill::FILL_SOLID,
	            'color' => array('rgb' => 'ECECEC')
	        ));

		 $prog= 1;
		foreach ($client->excelEstacion($consulta,$skip,$limit) as $fila) 
		 {														
 			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('A'.($i), $prog ); // progresivo
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('B'.(string)($i), (string)$fila['estacion']);//estacion
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('C'.(string)($i), (string)$fila['km']); //km
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('D'.(string)($i), (string)$fila['sentido']); //sentido
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('E'.(string)($i), (string)$fila['anyo']); // anio
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('F'.(string)($i), (string)$fila['mes']); // mes
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('G'.(string)($i), (string)$fila['dia']); // dia
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('H'.(string)($i), (string)$fila['hora']); // hora
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('I'.(string)($i), (string)$fila['tipoVehiculo']);// tipoVehiculo
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('J'.(string)($i), (string)$fila['descVehiculo']);// desc vehiculo

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('K'.(string)($i), (string)$fila['poblacionOrigenIdInegi']);// clave pob. origen
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('L'.(string)($i), (string)$fila['poblacionOrigen']);// Pob. origen 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('M'.(string)($i), (string)$fila['clvEstadoOrigen']);// clave edo. origen 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('N'.(string)($i), (string)$fila['estadoOrigen']);// edo. origen 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('O'.(string)($i), (string)$fila['coloniaOrigen']);// colonia origen 

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('P'.(string)($i), (string)$fila['poblacionDestinoIdInegi']);// clave pob. destino
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Q'.(string)($i), (string)$fila['poblacionDestino']);// Pob. destino 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('R'.(string)($i), (string)$fila['clvEstadoDestino']);// clave edo. destino 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('S'.(string)($i), (string)$fila['estadoDestino']);// edo. destino 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('T'.(string)($i), (string)$fila['coloniaDestino']);// colonia destino 

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('U'.(string)($i), (string)$fila['clvMarca']);// clave marca
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('V'.(string)($i), (string)$fila['marca']);// marca 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('W'.(string)($i), (string)$fila['modelo']);// modelo
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('X'.(string)($i), (string)$fila['clvCombustible']);// clave combustible
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Y'.(string)($i), (string)$fila['combustible']);// combustible 

			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Z'.(string)($i), (string)$fila['ocupantes']);// ocupantes
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AA'.(string)($i), (string)$fila['clvMotivo']);// clave motivo
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AB'.(string)($i), (string)$fila['motivo']);//  motivo 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AC'.(string)($i), (string)$fila['clvFrecuencia']);// clave frecuencia 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AD'.(string)($i), (string)$fila['frecuencia']);// frecuencia 
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AE'.(string)($i), (string)$fila['ingreso']);//  ingreso	
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AF'.(string)($i), (string)$fila['clvCarga']);// clave carga
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AG'.(string)($i), (string)$fila['carga']);//  carga	
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AH'.(string)($i), (string)$fila['toneladas']);//  toneladas
		    $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AI'.(string)($i), (string)$fila['capturista']);//  capturista

			$prog++;
	       $i++;
	}

	        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setAutoSize(true);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setAutoSize(true);

			$decoracionTitulos = array(
						    'font'    => array(
			                'name'      => 'Arial Narrow',
							'bold'      => true,
							'size'   => 10,
			                'color'     => array(
			                'rgb' => '000000')
						),
						'alignment' => array(
							'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
						)
					);		


	$objPHPExcel->getActiveSheet()->getStyle('A1:AI1')->applyFromArray($decoracionTitulos);

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment;filename="'.$nombreEstacion['carretera'].'-'.$nombreEstacion['estacion'].'-ODS.xlsx" ');
	header('Cache-Control: max-age=0');

	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	$objWriter->save('php://output');
	exit();
}

?>