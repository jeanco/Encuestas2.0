<?php
 session_start();
 ini_set("memory_limit","1000M");
 set_time_limit(20*60);
 //** Include PHPExcel */
 require_once 'Classes/PHPExcel.php';
 //include('../excel/reportes.php');
 var_dump($_GET);
 exit();
 
 $id_paquete = $_GET['paquete'];
 $estaciones = $_GET['rubro'];

 $consultaPaquete = array("id_paquete"=>$id_paquete); 

 $clent = new Reporte();

 /** Error reporting */
 error_reporting(E_ALL);
 ini_set('display_errors', TRUE);
 ini_set('display_startup_errors', TRUE);
 date_default_timezone_set('Europe/London');

 if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

 // Create new PHPExcel object

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

	    $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('A'. (string)($i), "PROG");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('B'. (string)($i), "ESTACIÓN");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('C'. (string)($i), "KM");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('D'. (string)($i), "SEN");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('E'. (string)($i), "CARRIL");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('F'. (string)($i), "AÑO");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('G'. (string)($i), "MES");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('H'. (string)($i), "DIA");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('I'. (string)($i), "HORA");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('J'. (string)($i), "T_VEH_OK");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('K'. (string)($i), "DESC. VEH");

		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('L'. (string)($i), "CVE_LOC_ORI");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('M'. (string)($i), "LOC_ORI");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('N'. (string)($i), "CVE_EDO_ORI");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('O'. (string)($i), "EDO_ORI");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('P'. (string)($i), "COLONIA_ORI");

		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Q'. (string)($i), "CVE_LOC_DES");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('R'. (string)($i), "LOC_DES");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('S'. (string)($i), "CVE_EDO_DES");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('T'. (string)($i), "EDO_DES");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('U'. (string)($i), "COLONIA_DES");

		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('V'. (string)($i), "CVE_MAR");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('W'. (string)($i), "MARCA");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('X'. (string)($i), "MODELO");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Y'. (string)($i), "CVE_COM");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Z'. (string)($i), "COMBUSTIBLE");

		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AA'. (string)($i), "OCUPANTES");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AB'. (string)($i), "CVE_MV");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AC'. (string)($i), "MOT_VIA");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AD'. (string)($i), "CVE_FREC");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AE'. (string)($i), "FRECUENCIA");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AF'. (string)($i), "INGRESO");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AG'. (string)($i), "CVE_CAR");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AH'. (string)($i), "CARGA");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AI'. (string)($i), "TON");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AJ'. (string)($i),'CAPT');
	
	 $i++; 
     $estacion = "";
	 $capturista = "";
	 $nones = array( 'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => 'ECECEC')
        ));
/*
	foreach ($conexion->excelODS2Mayo($paquete) as $fila) 
	 {														
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('A'. (string)($i), (string)$i ); // progresivo
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('B'. (string)($i), (string)$fila['estacion']);//estacion
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('C'. (string)($i), (string)$fila['km']); //km
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('D'. (string)($i), (string)$fila['sentido']); //sentido
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('E'. (string)($i), (string)$fila['carril']); //carril
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('F'. (string)($i), (string)$fila['anyo']); // anio
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('G'. (string)($i), (string)$fila['mes']); // mes
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('H'. (string)($i), (string)$fila['dia']); // dia
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('I'. (string)($i), (string)$fila['hora']); // hora
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('J'. (string)($i), (string)$fila['tipoVehiculo']);// tipoVehiculo
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('K'. (string)($i), (string)$fila['descVehiculo']);// desc vehiculo

		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('L'. (string)($i), (string)$fila['clvPoblacionOrigen']);// clave pob. origen
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('M'. (string)($i), (string)$fila['poblacionOrigen']);// Pob. origen 
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('N'. (string)($i), (string)$fila['clvEstadoOrigen']);// clave edo. origen 
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('O'. (string)($i), (string)$fila['estadoOrigen']);// edo. origen 
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('P'. (string)($i), (string)$fila['coloniaOrigen']);// colonia origen 

		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Q'. (string)($i), (string)$fila['clvPoblacionDestino']);// clave pob. destino
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('R'. (string)($i), (string)$fila['poblacionDestino']);// Pob. destino 
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('S'. (string)($i), (string)$fila['clvEstadoDestino']);// clave edo. destino 
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('T'. (string)($i), (string)$fila['estadoDestino']);// edo. destino 
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('U'. (string)($i), (string)$fila['coloniaDestino']);// colonia destino 

		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('V'. (string)($i), (string)$fila['clvMarca']);// clave marca
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('W'. (string)($i), (string)$fila['marca']);// marca 
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('X'. (string)($i), (string)$fila['modelo']);// modelo
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Y'. (string)($i), (string)$fila['clvCombustible']);// clave combustible
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Z'. (string)($i), (string)$fila['combustible']);// combustible 

		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AA'. (string)($i), (string)$fila['ocupantes']);// ocupantes
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AB'. (string)($i), (string)$fila['clvMotivo']);// clave motivo
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AC'. (string)($i), (string)$fila['motivo']);//  motivo 
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AD'. (string)($i), (string)$fila['clvFrecuencia']);// clave frecuencia 
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AE'. (string)($i), (string)$fila['frecuencia']);// frecuencia 
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AF'. (string)($i), (string)$fila['ingreso']);//  ingreso	
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AG'. (string)($i), (string)$fila['clvCarga']);// clave carga
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AH'. (string)($i), (string)$fila['carga']);//  carga	
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AI'. (string)($i), (string)$fila['toneladas']);//  toneladas
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AJ'. (string)($i), (string)$fila['capturista']);//  capturista

        $i++;
	}

*/
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


		$decoracionTablas = array(
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


$objPHPExcel->getActiveSheet()->getStyle('A1:AK2')->applyFromArray($decoracionTitulos);
$objPHPExcel->getActiveSheet()->getStyle('A3:AK4')->applyFromArray($decoracionTablas);

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="ODS.xlsx"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit();

?>