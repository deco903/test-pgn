@extends('front.navbar')
@section('title','Input Pemudik')
@section('isi')

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Input Data
</button>

@include('front.success')
<table class="table" style="margin-top:10px;">
<thead>
		<tr>
			<th>No</th>
			<th>Moda Transportasi</th>
			<th>Rute</th>
			<th>Jadwal</th>
			
		</tr>
    @foreach($data as $r)
		<tr>
        <td>{{ $loop->index + 1 }}</td>
			<td>{{ $r->moda }}</td>
			<td>{{ $r->rute }}</td>
			<td>{{ $r->jadwal }}</td>
		</tr>
		@endforeach
</thead>
</table>
@include('front.modal')
Halaman : {{ $data->currentPage() }} <br/>
	Jumlah Data : {{ $data->total() }} <br/>
	Data Per Halaman : {{ $data->perPage() }} <br/>
{{ $data->links() }}

@endsection



