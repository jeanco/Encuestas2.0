<?php

 session_start();
 ini_set("memory_limit","1000M");
 set_time_limit(20*60);

 //** Include PHPExcel */
 require_once 'Classes/PHPExcel.php';
 include('../includes/mongoConection.php');


 $paquete =$_GET['id_paquete'];
 
 $conexion = new mongoConection();

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
	    $i = 4;

	    $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('A'. (string)($i), "Carretera");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('B'. (string)($i), "Estacion");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('C'. (string)($i), "Km");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('D'. (string)($i), "Sentido");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('E'. (string)($i), "Año");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('F'. (string)($i), "Mes");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('G'. (string)($i), "Dia");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('H'. (string)($i), "Dia Semana");		
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('I'. (string)($i), "Hora");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('J'. (string)($i), "Tipo de Vehiculo");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('K'. (string)($i), "Placas");
		
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('L'.(string)($i-1).':M'.(string)($i-1));
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('L'. (string)($i-1), "Poblacion de Origen");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('L'. (string)($i), "Codigo");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('M'. (string)($i), "Descripcion");
		
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('N'.(string)($i-1).':O'.(string)($i-1));
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('N'. (string)($i-1), "Estado de Origen");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('N'. (string)($i), "Codigo");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('O'. (string)($i), "Descripcion");
		
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('P'.(string)($i-1).':Q'.(string)($i-1));
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('P'. (string)($i-1), "Poblacion de Destino");		
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('P'. (string)($i), "Codigo");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Q'. (string)($i), "Descripcion");
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('R'.(string)($i-1).':S'.(string)($i-1));
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('R'. (string)($i-1), "Estado de Destino");		
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('R'. (string)($i), "Codigo");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('S'. (string)($i), "Descripcion");
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('T'.(string)($i-1).':U'.(string)($i-1));
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('T'. (string)($i-1), "Marca");		
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('T'. (string)($i), "Codigo");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('U'. (string)($i), "Descripcion");	
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('V'. (string)($i), "Modelo");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('W'. (string)($i), "Combustible");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('X'. (string)($i), "Pasajeros");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Y'. (string)($i), "Tripulacion");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Z'. (string)($i), "Motivo");
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('AA'.(string)($i-1).':AB'.(string)($i-1));
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AA'. (string)($i-1), "Carga");		
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AA'. (string)($i), "Codigo");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AB'. (string)($i), "Descripcion");	
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AC'. (string)($i), "Carga Textual");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AD'. (string)($i), "Cantidad");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AE'. (string)($i), "Unidad");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AF'. (string)($i), "Toneladas");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AG'. (string)($i), "Mercado");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AH'. (string)($i), "Caja");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AI'. (string)($i), "PSD");
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AJ'. (string)($i), "Control");	
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AK'. (string)($i), "Capturista");		

	
	 $i++; 
     $estacion = "";
	 $capturista = "";
	 $nones = array( 'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => 'ECECEC')
        ));

	foreach ($conexion->excelODS2Mayo($paquete) as $fila) 
	 {														
		
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('A'. (string)($i), (string)$fila['carretera']); // carretera
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('B'. (string)($i), (string)$fila['estacion']);//estacion
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('C'. (string)($i), (string)$fila['km']); //km
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('D'. (string)($i), (string)$fila['sentido']); //sentido
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('E'. (string)($i), (string)$fila['anio']); // anio
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('F'. (string)($i), (string)$fila['mes']); // mes
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('G'. (string)($i), (string)$fila['dia']); // dia
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('H'. (string)($i), (string)$fila['ds']); // ds
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('I'. (string)($i), (string)$fila['hora']); // hora
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('J'. (string)($i), (string)$fila['tipoV']);// tipo V
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('K'. (string)($i), (string)$fila['placas']);// placas

		if(strpos((string)$fila['poblacionOrigen'], "-") !== false) { // poblacionOrigen
  			// explodable
		    list($codigo,$descripcion) = explode("-", (string)$fila['poblacionOrigen']);
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('L'. (string)($i), $codigo);        
	        $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('M'. (string)($i), $descripcion);//CODIGO
		} else {
  			// not explodable
		    $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('M'. (string)($i), (string)$fila['poblacionOrigen']);
		}

		if(strpos((string)$fila['estadoOrigen'], "-") !== false) { //estadoOrigen
  			// explodable
		    list($codigo,$descripcion) = explode("-", (string)$fila['estadoOrigen']);
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('N'. (string)($i), $codigo);        
	        $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('O'. (string)($i), $descripcion);//CODIGO
		} else {
  			// not explodable
		    $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('O'. (string)($i), (string)$fila['estadoOrigen']);
		}

		if(strpos((string)$fila['poblacionDestino'], "-") !== false) { //poblacionDestino
  			// explodable
		    list($codigo,$descripcion) = explode("-", (string)$fila['poblacionDestino']);
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('P'. (string)($i), $codigo);        
	        $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Q'. (string)($i), $descripcion);//CODIGO
		} else {
  			// not explodable
		    $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Q'. (string)($i), (string)$fila['poblacionDestino']);
		}

		if(strpos((string)$fila['estadoDestino'], "-") !== false) { //estadoDestino
  			// explodable
		    list($codigo,$descripcion) = explode("-", (string)$fila['estadoDestino']);
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('R'. (string)($i), $codigo);        
	        $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('S'. (string)($i), $descripcion);//CODIGO
		} else {
  			// not explodable
		    $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('S'. (string)($i), (string)$fila['estadoDestino']);
		}

		if(strpos((string)$fila['marca'], "-") !== false) { // marca
  			// explodable
		    list($codigo,$descripcion) = explode("-", (string)$fila['marca']);
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('T'. (string)($i), $codigo);        
	        $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('U'. (string)($i), $descripcion);//CODIGO
		} else {
  			// not explodable
		    $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('U'. (string)($i), (string)$fila['marca']);
		}

		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('V'. (string)($i), (string)$fila['anioAuto']); // anioAuto
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('W'. (string)($i), (string)$fila['combustible']);// combustible
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('X'. (string)($i), (string)$fila['pasajeros']); //pasajeros

		if(strpos((string)$fila['tripulacion'], "-") !== false) { //tripulacion

	   		// explodable
		    list($codigo,$descripcion) = explode("-", (string)$fila['tripulacion']);
	 	    $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Y'. (string)($i), $codigo);        
		   //     $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AB'. (string)($i), $descripcion);//CODIGO
		} else {
	  		// not explodable
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Y'. (string)($i), (string)$fila['tripulacion']);
		}

		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('Z'. (string)($i), (string)$fila['motivo']); // motivo

		if(strpos((string)$fila['carga'], "-") !== false) {// carga
  			// explodable
		    list($codigo,$descripcion) = explode("-", (string)$fila['carga']);
			$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AA'. (string)($i), $codigo);        
	        $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AB'. (string)($i), $descripcion);//CODIGO
		} else {
  			// not explodable
		    $objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AB'. (string)($i), (string)$fila['carga']);
		}		

		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AC'. (string)($i), (string)$fila['cargatxt']); // cargatxt
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AD'. (string)($i), (string)$fila['cantidad']); // cantidad
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AE'. (string)($i), (string)$fila['unidad']); // unidad
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AF'. (string)($i), (string)$fila['toneladas']);// toneladas
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AG'. (string)($i), (string)$fila['mercado']);// mercado		
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AH'. (string)($i), (string)$fila['caja']); // caja
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AI'. (string)($i), (string)$fila['psd']); // psd
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AJ'. (string)($i), (string)$fila['control']); //Control
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('AK'. (string)($i), (string)$fila['usuario']); // usuario

	    if( ($i%2) != 0){
        $objPHPExcel->getActiveSheet()->getStyle('A'. (string)($i).':AK'. (string)($i))->applyFromArray($nones); 
        }
          $i++;
		}
        
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:AH1');
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('A1', "Encuestas Origen y Destino");
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:AH2');
		$objPHPExcel->setActiveSheetIndex(0) ->setCellValue('A2', $estacion);
        

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

$decoracionTablas = array(
			    'font'    => array(
                'name'      => 'Arial',
				'bold'      => true,
				'size'   => 12,
                'color'     => array(
                'rgb' => '000000')
			),
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			)
		);
		
$decoracionTitulos = array(
			    'font'    => array(
                'name'      => 'Arial',
				'bold'      => true,
				'size'   => 14,
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
header('Content-Disposition: attachment;filename="ODS'.$estacion.'.xlsx"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;

?>