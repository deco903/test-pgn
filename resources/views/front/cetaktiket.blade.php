@extends('front.navbar')
@section('title','Cetak Tiket')
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
		@foreach($cetak as $ct)
		<tr>
        <td>{{ $loop->index + 1 }}</td>
			<td>{{ $ct->nama }}</td>
			<td>{{ $ct->alamat }}</td>
			<td>{{ $ct->email }}</td>
			<td>{{ $ct->moda }}</td>
			<td>{{ $ct->tujuan }}</td>
			<td>{{ $ct->tgl }}</td>
			<td>
				  <img src="{{asset('gbr/download.jpg')}}" style="width:250px;height:150px;">
             </td>	
			<td>{{ $ct->id }}</td>

		</tr>
		@endforeach
    
</thead>
</table>

@endsection



