@if(session('pesan'))
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
  <h4><i class="icon fa fa-check"></i>Alert</h4>
  {{session('pesan')}}
</div>
@endif