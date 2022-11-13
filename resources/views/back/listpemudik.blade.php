@extends('back.app')
@section('title','List Pemudik')
@section('isi')
<p>Ini halaman list</p>
@include('back.success')
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
            <th>Action</th>
		</tr>
    @foreach($list as $ll)
		<tr>
            <td>{{ $loop->index + 1 }}</td>
			<td>{{ $ll->nama }}</td>
			<td>{{ $ll->alamat }}</td>
			<th>{{ $ll->email }}</th>
			<td>{{ $ll->moda }}</td>
            <td>{{ $ll->tujuan }}</td>
			<td>{{ $ll->tgl }}</td>
            <td>
				@if($ll->status_verifikasi == 0)
                  <span class="badge badge-danger" style="background-color:red;">Belum Verifikasi</span>
				  @else
				  <span class="badge badge-danger" style="background-color:green;">Sudah Verifikasi</span>
				 @endif
            </td>
            <td>
                <a href="/verivikasi/status/{{$ll->id}}" class="btn btn-sm btn-primary">Approval</a>
            </td>
		</tr>
		@endforeach
  </thead>
  
</table>
Halaman : {{ $list->currentPage() }} <br/>
	Jumlah Data : {{ $list->total() }} <br/>
	Data Per Halaman : {{ $list->perPage() }} <br/>
{{ $list->links() }}
@endsection