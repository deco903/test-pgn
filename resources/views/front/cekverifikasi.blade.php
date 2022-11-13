@extends('front.navbar')
@section('title','Cek Verifikasi')
@section('isi')


<table class="table" style="margin-top:10px;">
<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>Moda</th>
			<th>Tujuan</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Kode Booking</th>
		</tr>
		@foreach($cek as $c)
		<tr>
        <td>{{ $loop->index + 1 }}</td>
			<td>{{ $c->nama }}</td>
			<td>{{ $c->alamat }}</td>
			<td>{{ $c->email }}</td>
			<td>{{ $c->moda }}</td>
			<td>{{ $c->tujuan }}</td>
			<td>{{ $c->tgl }}</td>
			<td>
				  <a href="/cetakTiket/{{$c->id}}"><span class="badge badge-danger" style="background-color:green;">Sudah Verifikasi</span></a>
             </td>	
			<td>{{ $c->id }}</td>

		</tr>
		@endforeach
    
</thead>
</table>

@endsection



