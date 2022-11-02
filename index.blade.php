@include('layouts.navbar')
<!DOCTYPE html>
<head>
</head>
<body>



	<table border="9">
		<tr>
			<th>NamaPenulis</th>
			<th>NamaBuku</th>
			<th>JenisBuku</th>
			<th>Opsi</th>
		</tr>
		@foreach($buku as $p)
		<tr>
			<td>{{ $p->nama_penulis }}</td>
			<td>{{ $p->nama_buku }}</td>
			<td>{{ $p->jenis_buku }}</td>
			<td>
				<a href="/buku/edit/{{ $p->id_buku }}">Edit</a>
				|
				<a href="/buku/hapus/{{ $p->id_buku }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <a href="/buku/tambah"> + Tambah Buku Ke Koleksi</a>
</body>
