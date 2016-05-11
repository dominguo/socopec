
@extends('layouts.app')

@section('content')
<script>
$(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            editable: false,
            events: "{{ url('/historique/getH/') }}/{{ $id }}",
            dayClick: function(date, jsEvent, view) {
            $('#debut').val(date.format('DD-MM-YYYY'));
            $('#fin').val(date.format('DD-MM-YYYY'));


                $('#modal').modal('show');
            }
        });
    });
</script>
<h4>Historique de la voiture : {{strtoupper($vehicule->nom.' '.$vehicule->model)}}</h4><hr>
<div class="col-md-2">
    <legend>Légende :</legend>
    @foreach ($statuts as $s)
        <label class="label col-md-12" style="background:{{$s->color}}">{{$s->libelle}}</label>
    @endforeach

</div>
<div class="col-md-10">
    <div id='calendar'></div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Réserver {{strtoupper($vehicule->nom.' '.$vehicule->model)}}</h4>
      </div>
      <div class="modal-body">
            <form action="{{url('historique/reserver')}}" method="POST">

                    <label>Statut</label>
                    <select name="statut_id" class="form-control">
                        @foreach ($statuts as $s)
                            <option value="{{$s->id}}">{{$s->libelle}}</option>
                        @endforeach
                    </select>
                    <label>Début</label>
                    <input name="debut" type="text" class="form-control" id="debut">
                    <label>Fin</label>
                    <input name="fin" type="text" class="form-control" id="fin">
                    <input name="vehicule_id" type="hidden" value="{{$id}}">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Réserver</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection