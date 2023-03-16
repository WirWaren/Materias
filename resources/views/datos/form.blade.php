<br>
<label for="Asignatura"> Asignatura </label>
<input type="text" name="Asignatura" value="{{ isset($infos->Asignatura)?$infos->Asignatura:'' }}" id="Asignatura">
<br>
<label for="Actividad1"> Actividad1 </label>
<input type="text" name="Actividad1" value="{{ isset($infos->Actividad1)?$infos->Actividad1:'' }}" id="Actividad1">
<br>
<label for="Calificación1"> Calificación1 </label>
<input type="text" name="Calificación1" value="{{ isset($infos->Calificación1)?$infos->Calificación1:'' }}" id="Calificación1">
<br>
<label for="Actividad2"> Actividad2 </label>
<input type="text" name="Actividad2" value="{{ isset($infos->Actividad2)?$infos->Actividad2:'' }}" id="Actividad2">
<br>
<label for="Calificación2"> Calificación2 </label>
<input type="text" name="Calificación2" value="{{ isset($infos->Calificación2)?$infos->Calificación2:''}}" id="Calificación2">
<br>
<input type="submit" value="Guardar datos">

<a href="{{ url('datos/') }}">Regresar</a>

<br>
