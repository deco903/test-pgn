@extends('back.app')
@section('title','Edit verifikasi')
@section('isi')
<form action="{{url('verivikasi/update', $list->id)}}" method="post">
    
  @csrf 
  @method('put')
  <input type="hidden" name="id" value="{{ $list->id }}"> <br/>
  <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" name="nama" value="{{ $list->nama }}" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" name="alamat" value="{{ $list->alamat }}" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Moda</label>
            <input type="text" name="moda" value="{{ $list->moda }}" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tujuan</label>
            <input type="text" name="tujuan" value="{{ $list->tujuan }}" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal</label>
            <input type="text" name="tgl" value="{{ $list->tgl }}" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>
  <div class="form-group">
   <label><strong>Pilih Verifikasi</strong></label>
   <select name="status_verifikasi" class="" id="">
    <option value="0">Belum verifikasi</option>
    <option value="1">Sudah verifikasi</option>
   </select>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-sm">Update</button>
  </div>
</form>
@endsection