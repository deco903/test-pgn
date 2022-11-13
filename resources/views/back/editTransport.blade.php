@extends('back.app')
@section('title','Edit Page')
@section('isi')
<a>Halaman edit</a>
<form action="/updateTransportasi/{{$rubah->id}}" method='post'>
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $rubah->id }}"> <br/>
        <div class="form-group">
            <label for="exampleInputEmail1">Moda</label>
            <input type="text" name="moda" value="{{ $rubah->moda }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Moda Transportasi">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Rute</label>
            <input type="text" name="rute" value="{{ $rubah->rute }}" id="exampleInputPassword1" placeholder="Masukan rute">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Jadwal</label>
            <div class='input-group date' id='datetimepicker'>
            <input type='text' name="jadwal" value="{{ $rubah->jadwal }}" />
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Rubah</button>
        </div>
        </form>
      </div>
@endsection