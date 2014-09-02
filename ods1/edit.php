<!DOCTYPE html>
<html>
<head>
	<title>Semic | Origen y Destino</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="http://protodesarrollos.com/tools/img/semic_ico.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui-1.9.2.custom.min.css">

	<script src="../js/jquery.min.js" type="text/javascript"></script>
	<script src="../js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>

	<style type="text/css">
		html, body, .row{height: 100%; width: 100%;}
		.noPad{padding: 0;}
		.pad2{padding: 2px;}
		p{margin: 0;}
	</style>
</head>
<?php 
	include("../seguridad/sesiones/segCapturista.php");
	include("../includes/Catalogo.php");
	include("../includes/alertError.php");
	
	try {
		
	 	$catalogo = new Catalogo();
		$colonias = $catalogo->getColonias();
		$marcas = $catalogo->getMarcas();
		$ciudades = $catalogo->getCiudades();
		$cargas = $catalogo->getCargas();
		
	}catch (Exception $e) {		
		echo '<script type="text/javascript">$("#errorAlert").modal("show");</script>';
	}

?>
<body class="editarForm">
		<div class="encuestas-list">
			<div class="list-group list">
				<h5>Encuestas del día</h5>		  
			</div>
		</div>
		<div class="row encuestaForm">			
			<div class="col-lg-8 col-lg-offset-2 noPad">
				<h1>Edición</h1>
				<h3>Encuesta de Origen y Destino - Entrevista Directa</h3>
				<h4>Numero de referencia: <spa id="numRef"></spa></h4>

				<div class="col-lg-12 noPad">

					<div class="col-lg-3 pad2">
						<label>Carretera</label>
						<input class="form-control" type="text" name="carretera" value="" placeholder="" disabled>
					</div>
					<div class="col-lg-2 pad2">
						<label>Estación</label>
						<input class="form-control" type="text" name="estacion" value="" placeholder="" disabled>
					</div>
					<div class="col-lg-2 pad2">
						<label>KM</label>
						<input class="form-control" type="text" name="km" value="" placeholder="" disabled>
					</div>

					<div class="col-lg-1 pad2">
						<label>Sentido</label>
						<input class="form-control tabCtrl autocomplete" type="text" name="sentido" value="" placeholder="" data-opt = "sentido" required>
					</div>					
					<div class="col-lg-1 pad2">
						<label>Año</label>
						<input class="form-control tabCtrl autocomplete" type="text" name="anyo" value="" placeholder="" data-opt = "anyo" required>
					</div>
					<div class="col-lg-1 pad2">
						<label>Mes</label>
						<input class="form-control tabCtrl autocomplete" type="text" name="mes" value="" placeholder="" data-opt = "mes" required>
					</div>
					<div class="col-lg-1 pad2">
						<label>Día</label>
						<input class="form-control tabCtrl autocomplete" type="text" name="dia" value="" placeholder="" data-opt = "dia" required>
					</div>
					<div class="col-lg-1 pad2">
						<label>Hora</label>
						<input class="form-control tabCtrl autocomplete" type="text" name="hora" value="" placeholder="" data-opt = "hora" required>
					</div>					
					<div class="col-lg-2 pad2">
						<label>Tipo de vehículo</label>
						<input class="form-control tabCtrl autocomplete" type="text" name="tipoVehiculo" value="" placeholder="" data-opt="tipoVehiculo" required>
					</div>
				</div>


				<div class="col-lg-12 noPad">
					<div class="col-lg-2 pad2 labelDest">
						<label>Origen:</label>						
					</div>
					<div class="col-lg-10 noPad">						
						<div class="col-lg-5 pad2">
							<label>Población</label>
							<input class="form-control tabCtrl" type="text" name="poblacionOrigen" value="" placeholder="" required>
						</div>
						<div class="col-lg-3 pad2">
							<label>Edo.</label>
							<input class="form-control tabCtrl " type="text" name="estadoOrigen" value="" placeholder="" required>
						</div>
						<div class="col-lg-4 pad2">
							<label>Colonia</label>
							<input class="form-control tabCtrl autocomplete" type="text" name="coloniaOrigen" value="" placeholder="" data-opt="colonias" required>
						</div>
					</div>
				</div>

				<div class="col-lg-12 noPad">
					<div class="col-lg-2 pad2 labelDest">
						<label>Destino:</label>						
					</div>
					<div class="col-lg-10 noPad">						
						<div class="col-lg-5 pad2">
							<label>Población</label>
							<input class="form-control tabCtrl" type="text" name="poblacionDestino" value="" placeholder="" required>
						</div>
						<div class="col-lg-3 pad2">
							<label>Edo.</label>
							<input class="form-control tabCtrl " type="text" name="estadoDestino" value="" placeholder="" required>
						</div>
						<div class="col-lg-4 pad2">
							<label>Colonia</label>
							<input class="form-control tabCtrl autocomplete" type="text" name="coloniaDestino" value="" placeholder="" data-opt="colonias" required>
						</div>
					</div>
				</div>

				<div class="col-lg-12 noPad">
					<div class="col-lg-4 pad2">
						<label>Marca</label>
						<input class="form-control tabCtrl autocomplete" type="text" name="marca" value="" placeholder="" data-opt="marca" required>
					</div>
					<div class="col-lg-2 pad2">
						<label>Año</label>
						<input class="form-control tabCtrl autocomplete" type="text" name="modelo" value="" placeholder="" data-opt="modelo" required>
					</div>
					<div class="col-lg-4 pad2">
						<label>Combustible</label>
						<input class="form-control tabCtrl tabCtrl autocomplete" type="text" name="combustible" value="" placeholder="" data-opt="combustible" required>
					</div>
					<div class="col-lg-2 pad2">
						<label>Ocupantes</label>
						<input class="form-control tabCtrl autocomplete" type="text" name="ocupantes" value="" placeholder="" data-opt="ocupantes" required>
					</div>
				</div>

				<div class="col-lg-12 noPad">
					<div class="col-lg-2 pad2">
						<label>Motivo de Viaje</label>
						<input class="form-control tabCtrl autocomplete" type="text" name="motivo" value="" placeholder="" data-opt="motivo" required>
					</div>
					<div class="col-lg-3 pad2">
						<label>Frecuencia del viaje</label>
						<input class="form-control tabCtrl autocomplete" type="text" name="frecuencia" value="" placeholder="" data-opt="frecuencia" required>
					</div>
					<div class="col-lg-3 pad2">
						<label>Ingreso mensual</label>
						<input class="form-control tabCtrl autocomplete" type="text" name="ingreso" value="" placeholder="" data-opt="ingreso" required>
					</div>
					<div class="col-lg-2 pad2">
						<label>Carga</label>
						<input class="form-control tabCtrl autocomplete" type="text" name="carga" value="" placeholder="" data-opt="carga" required >
					</div>
					<div class="col-lg-2 pad2">
						<label>Tonelada</label>
						<input class="form-control tabCtrl autocomplete" type="text" name="toneladas" value="" placeholder="" data-opt="toneladas" required >
					</div>
				</div>

				<div class="col-lg-12 noPad">
					<div class="col-lg-2 col-lg-offset-6 pad2">
						<button id="odsEditar" type="button" class="btn tabCtrl">Guardar Cambios</button>
					</div>
				</div>

			</div>
		</div>
	<script type="text/javascript">
		var colonias = <?php echo $colonias?>,
			poblaciones = <?php echo $ciudades?>,
			marcas = <?php echo $marcas?>,			
			cargas = <?php echo $cargas?>; 
			
		var catalogos = {
    	sentido : [{value: "0",label: "NoCapturado"},{value: "1",label: "1"},{value: "2",label: "2"}],
		anyo : [{value: "0",label: "NoCapturado"},{value: "14", label: "2014" },{value: "15", label: "2015" },{value: "16", label: "2016" }],
		mes : [{value: "0",label: "NoCapturado"},{value: "1", label: "1" },{ value: "2", label: "2" },{ value: "3", label: "3" },{value: "4", label: "4" },{ value: "5", label: "5"},{ value: "6",  label: "6" },{value: "7",label: "7" },{ value: "8", label: "8" },{ value: "9", label: "9" },{ value: "10", label: "10" },{ value: "11", label: "11" },{ value: "12", label: "12" }],
		carril : [{value: "0",label: "NoCapturado"},{value: "1",label: "1"},{value: "2",label: "2"}],
		dia : [{value: "0",label: "NoCapturado"},{ value: "1", label: "1"},{ value: "2", label: "2"},{ value: "3", label: "3"},{ value: "4", label: "4"},{ value: "5", label: "5"},{ value: "6", label: "6"},{ value: "7", label: "7"},{ value: "8", label: "8"},{ value: "9", label: "9"},{ value: "10", label: "10"},{ value: "11", label: "11"},{ value: "12", label: "12"},{ value: "13", label: "13"},{ value: "14", label: "14"},{ value: "15", label: "15"},{ value: "16", label: "16"},{ value: "17", label: "17"},{ value: "18", label: "18"},{ value: "19", label: "19"},{ value: "20", label: "20"},{ value: "21", label: "21"},{ value: "22", label: "22"},{ value: "23", label: "23"},{ value: "24", label: "24"},{ value: "25", label: "25"},{ value: "26", label: "26"},{ value: "27", label: "27"},{ value: "28", label: "28"},{ value: "29", label: "29"},{ value: "30", label: "30"},{ value: "31", label: "31"}],
		hora : [{value: "0",label: "0"},{ value: "1", label: "1"},{ value: "2", label: "2"},{ value: "3", label: "3"},{ value: "4", label: "4"},{ value: "5", label: "5"},{ value: "6", label: "6"},{ value: "7", label: "7"},{ value: "8", label: "8"},{ value: "9", label: "9"},{ value: "10", label: "10"},{ value: "11", label: "11"},{ value: "12", label: "12"},{ value: "13", label: "13"},{ value: "14", label: "14"},{ value: "15", label: "15"},{ value: "16", label: "16"},{ value: "17", label: "17"},{ value: "18", label: "18"},{ value: "19", label: "19"},{ value: "20", label: "20"},{ value: "21", label: "21"},{ value: "22", label: "22"},{ value: "23", label: "23"}],
		tipoVehiculo : [{value: "0",label: "NoCapturado"},{ value: "A", label: "Automovil"},{ value: "P", label: "Pickup"},{ value: "U", label: "Utilitario"},{ value: "B", label: "B"},{ value: "C2", label: "Camion de dos ejes"},{ value: "C3", label: "Camion de tres ejes"},{ value: "C4", label: "Camion de cuatro ejes"},{ value: "C5", label: "Camion de cinco ejes"},{ value: "C6", label: "Camion de seis ejes"},{ value: "C7", label: "Camion de siete ejes"},{ value: "C8", label: "Camion de ocho ejes"},{ value: "C9", label: "Camion T2-S1"},{ value: "C10", label: "Camion T2-S2"},{ value: "C11", label: "Camion T3-S2"},{ value: "C12", label: "Camion T3-S3"},{ value: "C13", label: "Camion T2-S1-R2"},{ value: "C14", label: "Camion T3-S1-R2"},{ value: "C15", label: "Camion T3-S2-R2"},{ value: "C16", label: "Camion T3-S2-R3"},{ value: "C17", label: "Camion T3-S3-S2"},{ value: "C18", label: "Camion T3-S2-R4"},{ value: "C19", label: "Camion C2-R2"},{ value: "C20", label: "Camion C2-R3"},{ value: "C21", label: "Camion C3-R2"},{ value: "C22", label: "Camion C3-R3"},{ value: "C23", label: "Otros"}],
		frecuencia : [{value: "0",label: "NoCapturado"},{value: "D",label: "Diaria"},{value: "S",label: "Semanal"},{value: "M",label: "Mensual"},{value: "E",label: "Eventual"}],
		ingreso : [{value: "0",label: "NoCapturado"},{value: "1",label: "0 - 5000"},{value: "2",label: "5001 - 10000"},{value: "3",label: "10001 - 20000"},{value: "4",label: ">20000"}],
		marca : marcas,
		modelo : [{	value : "0",	label : "NoCapturado"}, {	label : "2015",	value : "15"}, {        	label : "2014",	value : "14"}, {         	label : "2013",	value : "13"}, {         	label : "2012",	value : "12"}, {         	label : "2011",	value : "11"}, {         	label : "2010",	value : "10"}, {         	label : "2009",	value : "09"   }, {              	label : "2008",	value : "08"   }, {              	label : "2007",	value : "07"   }, {              	label : "2006",	value : "06"   }, {              	label : "2005",	value : "05"   }, {              	label : "2004",	value : "04"}, {         	label : "2003",	value : "03"   }, {              	label : "2002",	value : "02"   }, {              	label : "2001",	value : "01"   }, {              	label : "2000",	value : "00"   }, {              	label : "1999",	value : "99"  }, {              	label : "1998",	value : "98"}, {         	label : "1997",	value : "97"  }, {              	label : "1996",	value : "96"  }, {              	label : "1995",	value : "95"  }, {              	label : "1994",	value : "94"  }, {              	label : "1993",	value : "93"  }, {              	label : "1992",	value : "92"}, {         	label : "1991",	value : "91"  }, {              	label : "1990",	value : "90"  }, {              	label : "1989",	value : "89"  }, {              	label : "1988",	value : "88"  }, {              	label : "1987",	value : "87"  }, {              	label : "1986",	value : "86"}, {	label : "1985",	value : "85"  }, {              	label : "1984",	value : "84"  }, {              	label : "1983",	value : "83"  }, {              	label : "1982",	value : "82"  }, {              	label : "1981",	value : "81"  }, {              	label : "1980",	value : "80"}, {         	label : "1979",	value : "79"  }, {              	label : "1978",	value : "78"  }, {              	label : "1977",	value : "77"  }, {              	label : "1976",	value : "76"  }, {              	label : "1975",	value : "75"  }, {              	label : "1974",	value : "74"}, {         	label : "1973",	value : "73"  }, {              	label : "1972",	value : "72"  }, {              	label : "1971",	value : "71"  }, {              	label : "1970",	value : "70"  }, {              	label : "1969",	value : "69"  }, {              	label : "1968",	value : "68"}, {         	label : "1967",	value : "67"  }, {              	label : "1966",	value : "66"  }, {              	label : "1965",	value : "65"  }, {              	label : "1964",	value : "64"  }, {              	label : "1963",	value : "63"  }, {              	label : "1962",	value : "62"  }, {              	label : "1961",	value : "61"  }, {              	label : "1960",	value : "60"  }, {              	label : "1959",	value : "59"  }, {              	label : "1958",	value : "58"}, {         	label : "1957",	value : "57"  }, {              	label : "1956",	value : "56"  }, {              	label : "1955",	value : "55"  }, {              	label : "1954",	value : "54"  }, {              	label : "1953",	value : "53"  }, {              	label : "1952",	value : "52"  }, {              	label : "1951",	value : "51"  }, {              	label : "1950",	value : "50"  }, {              	label : "1949",	value : "49"  }, {              	label : "1948",	value : "48"}, {         	label : "1947",	value : "47"  }, {              	label : "1946",	value : "46"  }, {              	label : "1945",	value : "45"  }, {              	label : "1944",	value : "44"  }, {              	label : "1943",	value : "43"  }, {              	label : "1942",	value : "42"  }, {              	label : "1941",	value : "41"  }, {              	label : "1940",	value : "40"  }, {              	label : "1939",	value : "39"  }, {              	label : "1938",	value : "38"}, {         	label : "1937",	value : "37"  }, {              	label : "1936",	value : "36"  }, {              	label : "1935",	value : "35"  }, {              	label : "1934",	value : "34"  }, {              	label : "1933",	value : "33"  }, {              	label : "1932",	value : "32"  }, {              	label : "1931",	value : "31"  }, {              	label : "1930",	value : "30"  }, {              	label : "1929",	value : "29"  }, {              	label : "1928",	value : "28"}, {         	label : "1927",	value : "27"  }, {              	label : "1926",	value : "26"  }, {              	label : "1925",	value : "25"  }, {              	label : "1924",	value : "24"  }, {              	label : "1923",	value : "23"    }, {              	label : "1922",	value : "22"    }, {              	label : "1921",	value : "21"    }, {              	label : "1920",	value : "20"    }],
		ocupantes : [{label:"NoCapturado",value:"0"},{label:"1" ,value:"1"},{label:"2" ,value:"2"},{label:"3" ,value:"3"},{label:"4" ,value:"4"},{label:"5" ,value:"5"},{label:"6" ,value:"6"},{label:"7" ,value:"7"},{label:"8" ,value:"8"},{label:"9" ,value:"9"},{label:"10",value:"10"},{label:"11",value:"11"},{label:"12",value:"12"},{label:"13",value:"13"},{label:"14",value:"14"},{label:"15",value:"15"},{label:"16",value:"16"},{label:"17",value:"17"},{label:"18",value:"18"},{label:"19",value:"19"},{label:"20",value:"20"},{label:"21",value:"21"},{label:"22",value:"22"},{label:"23",value:"23"},{label:"24",value:"24"},{label:"25",value:"25"},{label:"26",value:"26"},{label:"27",value:"27"},{label:"28",value:"28"},{label:"29",value:"29"},{label:"30",value:"30"},{label:"31",value:"31"},{label:"32",value:"32"},{label:"33",value:"33"},{label:"34",value:"34"},{label:"35",value:"35"},{label:"36",value:"36"},{label:"37",value:"37"},{label:"38",value:"38"},{label:"39",value:"39"},{label:"40",value:"40"},{label:"41",value:"41"},{label:"42",value:"42"},{label:"43",value:"43"},{label:"44",value:"44"},{label:"45",value:"45"},{label:"46",value:"46"},{label:"47",value:"47"},{label:"48",value:"48"},{label:"49",value:"49"},{label:"50",value:"50"},{label:"51",value:"51"},{label:"52",value:"52"},{label:"53",value:"53"},{label:"54",value:"54"},{label:"55",value:"55"},{label:"56",value:"56"},{label:"57",value:"57"},{label:"58",value:"58"},{label:"59",value:"59"},{label:"60",value:"60"},{label:"61",value:"61"},{label:"62",value:"62"},{label:"63",value:"63"},{label:"64",value:"64"},{label:"65",value:"65"},{label:"66",value:"66"},{label:"67",value:"67"},{label:"68",value:"68"},{label:"69",value:"69"},{label:"70",value:"70"},{label:"71",value:"71"},{label:"72",value:"72"},{label:"73",value:"73"},{label:"74",value:"74"},{label:"75",value:"75"},{label:"76",value:"76"},{label:"77",value:"77"},{label:"78",value:"78"},{label:"79",value:"79"},{label:"80",value:"80"},{label:"81",value:"81"},{label:"82",value:"82"},{label:"83",value:"83"},{label:"84",value:"84"},{label:"85",value:"85"},{label:"86",value:"86"},{label:"87",value:"87"},{label:"88",value:"88"},{label:"89",value:"89"},{label:"90",value:"90"},{label:"91",value:"91"},{label:"92",value:"92"},{label:"93",value:"93"},{label:"94",value:"94"},{label:"95",value:"95"},{label:"96",value:"96"},{label:"97",value:"97"},{label:"98",value:"98"},{label:"99",value:"99"}],
		motivo : [{value: "0",label: "NoCapturado"},{value: "T",label: "T"},{value: "P",label: "P"},{value: "E",label: "E"},{value: "C",label: "C"},{value: "V",label: "V"}],
		carga : cargas,
		toneladas : [{label:"NoCapturado",value:"0"},{label:"1"  ,value:"1"},{label:"2"  ,value:"2"},{label:"3"  ,value:"3"},{label:"4"  ,value:"4"},{label:"5"  ,value:"5"},{label:"6"  ,value:"6"},{label:"7"  ,value:"7"},{label:"8"  ,value:"8"},{label:"9"  ,value:"9"},{label:"10" ,value:"10"},{label:"11" ,value:"11"},{label:"12" ,value:"12"},{label:"13" ,value:"13"},{label:"14" ,value:"14"},{label:"15" ,value:"15"},{label:"16" ,value:"16"},{label:"17" ,value:"17"},{label:"18" ,value:"18"},{label:"19" ,value:"19"},{label:"20" ,value:"20"},{label:"21" ,value:"21"},{label:"22" ,value:"22"},{label:"23" ,value:"23"},{label:"24" ,value:"24"},{label:"25" ,value:"25"},{label:"26" ,value:"26"},{label:"27" ,value:"27"},{label:"28" ,value:"28"},{label:"29" ,value:"29"},{label:"30" ,value:"30"},{label:"31" ,value:"31"},{label:"32" ,value:"32"},{label:"33" ,value:"33"},{label:"34" ,value:"34"},{label:"35" ,value:"35"},{label:"36" ,value:"36"},{label:"37" ,value:"37"},{label:"38" ,value:"38"},{label:"39" ,value:"39"},{label:"40" ,value:"40"},{label:"41" ,value:"41"},{label:"42" ,value:"42"},{label:"43" ,value:"43"},{label:"44" ,value:"44"},{label:"45" ,value:"45"},{label:"46" ,value:"46"},{label:"47" ,value:"47"},{label:"48" ,value:"48"},{label:"49" ,value:"49"},{label:"50" ,value:"50"},{label:"51" ,value:"51"},{label:"52" ,value:"52"},{label:"53" ,value:"53"},{label:"54" ,value:"54"},{label:"55" ,value:"55"},{label:"56" ,value:"56"},{label:"57" ,value:"57"},{label:"58" ,value:"58"},{label:"59" ,value:"59"},{label:"60" ,value:"60"},{label:"61" ,value:"61"},{label:"62" ,value:"62"},{label:"63" ,value:"63"},{label:"64" ,value:"64"},{label:"65" ,value:"65"},{label:"66" ,value:"66"},{label:"67" ,value:"67"},{label:"68" ,value:"68"},{label:"69" ,value:"69"},{label:"70" ,value:"70"},{label:"71" ,value:"71"},{label:"72" ,value:"72"},{label:"73" ,value:"73"},{label:"74" ,value:"74"},{label:"75" ,value:"75"},{label:"76" ,value:"76"},{label:"77" ,value:"77"},{label:"78" ,value:"78"},{label:"79" ,value:"79"},{label:"80" ,value:"80"},{label:"81" ,value:"81"},{label:"82" ,value:"82"},{label:"83" ,value:"83"},{label:"84" ,value:"84"},{label:"85" ,value:"85"},{label:"86" ,value:"86"},{label:"87" ,value:"87"},{label:"88" ,value:"88"},{label:"89" ,value:"89"},{label:"90" ,value:"90"},{label:"91" ,value:"91"},{label:"92" ,value:"92"},{label:"93" ,value:"93"},{label:"94" ,value:"94"},{label:"95" ,value:"95"},{label:"96" ,value:"96"},{label:"97" ,value:"97"},{label:"98" ,value:"98"},{label:"99" ,value:"99"},{label:"100",value:"100"},{label:"101",value:"101"},{label:"102",value:"102"},{label:"103",value:"103"},{label:"104",value:"104"},{label:"105",value:"105"},{label:"106",value:"106"},{label:"107",value:"107"},{label:"108",value:"108"},{label:"109",value:"109"},{label:"110",value:"110"},{label:"111",value:"111"},{label:"112",value:"112"},{label:"113",value:"113"},{label:"114",value:"114"},{label:"115",value:"115"},{label:"116",value:"116"},{label:"117",value:"117"},{label:"118",value:"118"},{label:"119",value:"119"},{label:"120",value:"120"},{label:"121",value:"121"},{label:"122",value:"122"},{label:"123",value:"123"},{label:"124",value:"124"},{label:"125",value:"125"},{label:"126",value:"126"},{label:"127",value:"127"},{label:"128",value:"128"},{label:"129",value:"129"},{label:"130",value:"130"}],
		t1 : [{	value : "0",	label : "NoCapturado"}, {	value : "1",	label : "A"}, {	value : "2",	label : "B"}],
		t2 : [{	value : "0",	label : "NoCapturado"}, {	value : "1",	label : "A"}, {	value : "2",	label : "B"}],
		t3 : [{	value : "0",	label : "NoCapturado"}, {	value : "1",	label : "A"}, {	value : "2",	label : "B"}],
		t4 : [{	value : "0",	label : "NoCapturado"}, {	value : "1",	label : "A"}, {	value : "2",	label : "B"}],
		t5 : [{	value : "0",	label : "NoCapturado"}, {	value : "1",	label : "A"}, {	value : "2",	label : "B"}],
		t6 : [{	value : "0",	label : "NoCapturado"}, {	value : "1",	label : "A"}, {	value : "2",	label : "B"}],
		t7 : [{	value : "0",	label : "NoCapturado"}, {	value : "1",	label : "A"}, {	value : "2",	label : "B"}],
		t8 : [{	value : "0",	label : "NoCapturado"}, {	value : "1",	label : "A"}, {	value : "2",	label : "B"}],
		t9 : [{	value : "0",	label : "NoCapturado"}, {	value : "1",	label : "A"}, {	value : "2",	label : "B"}],
		t10 : [{	value : "0",	label : "NoCapturado"}, {	value : "1",	label : "A"}, {	value : "2",	label : "B"}],
		tarjetasPd : [{value : "0",label : "NoCapturado"},{value:"1",label:"corto"},{value:"2",label:"largo"}],
		combustible : [{value : "0",label : "NoCapturado"},{value : "G",label : "Gasolina"},{value : "O",label : "Gas"},{value : "D",label : "Diesel"}],
		colonias : colonias	
    };	
		
	</script>	
	
	<script src="../js/app.js" type="text/javascript"></script>
	<script type="text/javascript">listEncuestas.init('ods1');</script>
	<script>
		var pdEntrevistaDirecta = {
			tabReturn : $('[name="hora"]'),
			btnGuardar : $("#btnGuardar"),
			setEvents : function(){
				var _this = this;
				//boton guardar
			    // keyup
			    $(this.btnGuardar).on("keypress",function(){
			    	_this.tabReturn.focus();
			    });
			    $(this.btnGuardar).on("keydown",function(e){
					var keyCode = e.keyCode || e.which; 
					if (keyCode == 9) { 
    					e.preventDefault(); 
    					_this.tabReturn.focus();
    				}			    	
			    });
			},
			init: function(){

				this.setEvents();
			}
		};
		pdEntrevistaDirecta.init();
	</script>
</body>
</html>