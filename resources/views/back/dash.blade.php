@extends('back.app')
@section('title','Dashboard Page')
@section('isi')

<p>Dashboard</p>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Input Data
</button>

<table class="table" style="margin-top:10px;">
<thead>
		<tr>
			<th>No</th>
			<th>Moda Transportasi</th>
			<th>Rute</th>
			<th>Jadwal</th>
			<th>Opsi</th>
		</tr>
    @foreach($res as $d)
		<tr>
            <td>{{ $loop->index + 1 }}</td>
			<td>{{ $d->moda }}</td>
			<td>{{ $d->rute }}</td>
			<td>{{ $d->jadwal }}</td>
			<td>
				<a href="/editTransportasi/{{$d->id}}">Ubah</a>
				<a href="/hapusTransportasi/{{$d->id}}">Hapus</a>
			</td>
		</tr>
		@endforeach
  </thead>
</table>

@include('back.modal')
Halaman : {{ $res->currentPage() }} <br/>
	Jumlah Data : {{ $res->total() }} <br/>
	Data Per Halaman : {{ $res->perPage() }} <br/>
{{ $res->links() }}
<script type="text/javascript">
        $(function() {
           $('#datetimepicker').datetimepicker();
        });
    </script> 
@endsection


