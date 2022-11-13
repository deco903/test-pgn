<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('store')}}" method='post'>
      {{ csrf_field() }}
        
        <div class="form-group">
            <label for="exampleInputEmail1">Moda</label>
            <input type="text" name="moda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Moda Transportasi">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Rute</label>
            <input type="text" name="rute" class="form-control" id="exampleInputPassword1" placeholder="Masukan rute">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Jadwal</label>
            <div class='input-group date' id='datetimepicker'>
            <input type='text' name="jadwal" class="form-control" />
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
            </div>
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