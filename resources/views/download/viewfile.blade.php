<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
	<div class="wrapper">
		<section class="panel panel-primary">
			<div class="panel-heading">
				Download Files				
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
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
					</thead>

					<tbody>
						@foreach($downloads as $down)
						<tr>
							<td>{{$down->des_documento}}</td>
							<td>{{$down->numero_serie}}</td>
							<td>{{$down->numero_documento}}</td>
							<td>{{$down->fec_emision}}</td>
							<td>{{$down->des_moneda}}</td>
							<td>{{$down->importe_valor_venta}}</td>
							<td>{{$down->importe_igv}}</td>
							<td>{{$down->importe_total_neto}}</td>
							<td>
							<a href="download/{{$down->archivo_pdf}}"
								download="download/{{$down->archivo_pdf}}">
								<button type="button" class="btn btn-pdf">
								<i class="glyphicon glyphicon-download" >PDF</i>
								</button>
							</a>
							</td>
							<td>
							<a href="download/{{$down->archivo_xml}}"
								download="download/{{$down->archivo_xml}}">
								<button type="button" class="btn btn-xml">
								<i class="glyphicon glyphicon-download">XML</i>
								</button>
							</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</section>
	</div>
</body>
</html>