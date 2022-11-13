<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukan Data Diri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('storePemudik')}}" method='post'>
      {{ csrf_field() }}
        <div class="form-group row mt-10">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Moda Transportasi">
        </div>
        <div class="form-group row mt-10">
            <label for="exampleInputPassword1">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukan Alamat">
        </div>
        <div class="form-group row mt-10">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Masukan Email">
        </div>
        <div class="form-group row mt-10">
          <label for="exampleInputEmail1">Moda</label> 
          <select name="moda" id="language" class="form-control" id="exampleInputPassword1">
          <option value=""> -- Masukan Moda Transport -- </option>
          <option value="kapal laut">kapal laut</option>
          <option value="bus">bus</option>
          <option value="kreta">kreta</option>
          </select>
        </div>
        <div class="form-group row mt-10">
        <label for="exampleInputPassword1">Tujuan</label>
            <input type="text" name="tujuan" class="form-control" id="exampleInputPassword1" placeholder="Masukan Alamat">
        </div>
        <div class="form-group row mt-10">
        <label for="exampleInputPassword1">Tanggal</label>
            <input type="text" name="tgl" class="form-control" id="exampleInputPassword1" placeholder="Masukan Alamat">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Input</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
 
<!--end of modal-->