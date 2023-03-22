
<div class="form-group">
<label for="Asignatura"> Asignatura </label>
<input type="text" class="form-control" name="Asignatura" value="{{ isset($infos->Asignatura)?$infos->Asignatura:'' }}" id="Asignatura">
<br>
</div>


<div class="form-group">
<label for="Actividad1"> Actividad1 </label>
<input type="text" class="form-control" name="Actividad1" value="{{ isset($infos->Actividad1)?$infos->Actividad1:'' }}" id="Actividad1">
<br>
</div>


<div class="form-group">
<label for="Calificación1"> Calificación1 </label>
<input type="text" class="form-control" name="Calificación1" value="{{ isset($infos->Calificación1)?$infos->Calificación1:'' }}" id="Calificación1">
<br>
</div>


<div class="form-group">
<label for="Actividad2"> Actividad2 </label>
<input type="text" class="form-control" name="Actividad2" value="{{ isset($infos->Actividad2)?$infos->Actividad2:'' }}" id="Actividad2">
<br>
</div>


<div class="form-group">
<label for="Calificación2"> Calificación2 </label>
<input type="text" class="form-control" name="Calificación2" value="{{ isset($infos->Calificación2)?$infos->Calificación2:''}}" id="Calificación2">
<br>
</div>

<input class="btn btn-success" type="submit" value="Guardar datos">

<a class="btn btn-primary" href="{{ url('datos/') }}">Regresar</a>

<br>
