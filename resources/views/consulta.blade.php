<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	.wrapper{
		margin:0 auto;
		width:75%;
		margin-top:10px;

	}
</style>
	</head>

	<body>
		<div class="container">
			<h1>Consulta de Documentos</h1>
			<table class="table" id="docs">
				<thead>
					<tr>
						<th>Documento</th><!--Nombre Tipo de Documento-->
						<th>Serie</th><!--Serie Documento-->
						<th>Número</th><!--Numero Documento-->
						<th>Fecha Emisión</th><!--Fecha Emisión-->
						<th>Moneda</th><!--Moneda-->					
						<th>Valor Venta</th><!--Valor Venta-->
						<th>Importe IGV</th><!--Importe IGV-->
						<th>Importe Total Neto</th><!--Importe Total Neto-->
						<th>PDF</th><!--Archivo PDF-->
						<th>XML</th><!--Archivo XML-->
					</tr>
				</thead>				
			</table>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script>
			$(document).ready(function(){   			 
   			 var dt = $('#docs').DataTable({
      			"processing": true,
        		"serverSide": true,
        		"ajax": "/api/docs",
        		"columns":[
        			{data:'des_documento'},
        			{data:'numero_serie'},
        			{data:'numero_documento'},
        			{data:'fec_emision'},
        			{data:'des_moneda'},
        			{data:'importe_valor_venta'},
        			{data:'importe_igv'},
        			{data:'importe_total_neto'},
        			{defaultContent: "<tr><button id='btnPdf' type='button' class='btnPdf'><i class='glyphicon glyphicon-download'>PDF</i></button></tr>",
                		searchable:false, sortable:false},
					{defaultContent: "<tr><a><button id='btnXml' type='button' class='btnXml'><i class='glyphicon glyphicon-download'>XML</i></button></a></tr>",
                		searchable:false, sortable:false}
        		]
    		});
$('#docs').on('click', 'tr button', function(){
	document.location.href = 'download/'+ dt.row($(this).parents('tr')).data()['archivo_pdf'];
});

$('#docs').on('click', 'tr a button', function(){	
	document.location = 'download/'+ dt.row($(this).parents('tr')).data()['archivo_xml'];
});

});

	</script>
	</body>
</html>



