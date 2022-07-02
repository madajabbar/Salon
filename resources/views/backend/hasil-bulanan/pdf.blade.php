<!DOCTYPE html>
<html>
<head>
	<title>Data Laporan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Salon {{\Carbon\Carbon::now()->format('j,F, Y')}}</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
                <th>No</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Diskon</th>
                <th>Total</th>
                <th>Pegawai</th>
                <th>tanggal</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($data as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->name}}</td>
				<td>{{$p->harga}}</td>
				<td>{{$p->diskon}}</td>
				<td>{{$p->harga-$p->diskon}}</td>
				<td>{{$p->pegawai->name}}</td>
				<td>{{\Carbon\Carbon::parse($p->created_at)->format('j,F, Y')}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
