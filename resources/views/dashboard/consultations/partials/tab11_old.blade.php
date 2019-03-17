<input type="hidden" name="url" id="url" value="{{url('')}}">

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label>Numero/codigo de la cita</label>
    
     <input id="appointment_id"
        type="text" class="form-control" name="appointment_id" 
        value="{{ $consultation->appointment_id }}" disabled 
     >
     @if ($errors->has('appointment_id'))
         <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('appointment_id') }}</strong>
         </span>
     @endif 
  </div>
</div>

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label for="">Fecha de la consulta</label>
    <input type="text" class="form-control"
        name="date_consultation" value="{{ $consultation->date_consultation }}"  disabled
    >
  </div>
</div>

<div class="col-md-4">
   <input id="x" type="hidden" name="codigo_paciente" value="{{ $appointment->clinical_patient_id }}" >
</div>

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label>Nombre del paciente</label>
    <input id="clinical_patient_full_name"
        type="text" class="form-control" name="clinical_patient_id" disabled
        value="{{ $appointment->clinical_patient->first_name . " " . $appointment->clinical_patient->last_name }}" required
    >
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label>Motivo de la consulta</label>
    <input id="reason_consultation"
        type="text"
        class="form-control {{ $errors->has('reason_consultation') ? ' is-invalid' : '' }}"
        placeholder="Describa motivo de la consulta"
        name="reason_consultation"
        value="{{ $consultation->reason_consultation }}" required
    >
    @if ($errors->has('reason_consultation'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('reason_consultation') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label>Enfermedad Actual</label>
        
    <input id="disease"
        type="text" class="form-control {{ $errors->has('disease') ? ' is-invalid' : '' }}"
        placeholder="Describa enfermedad"  name="disease" value="{{ $consultation->disease }}">
    @if ($errors->has('disease'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('disease') }}</strong>
        </span>
    @endif
  </div>
</div>

 
<div class="col-md-12">
  <div class="form-group">
  <label for="sel1"><strong>Exploracion</strong></label>
    <select class="form-control" id="asd" name="exploration_id" required = "required">
      @foreach($explorations as $item)
          <option 
             value ="{{ $item->id }}"
             @if($item->id == $consultation->exploration_id) 
                selected='selected' 
             @endif>
             {{ $item->name }} 
          </option>
      @endforeach 
    </select>
  </div>
</div>


<div class="col-md-12">
  <div class="form-group">
    <label>Diagnostico</label>
    <textarea class="form-control" name="diagnosis" value ="{{ $consultation->diagnosis }}"
      placeholder="Diagnostico" rows = '5' required = "required" 
      style="width: 100%; height: 50px; font-size: 14px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;"
      id="diagnosis" >{!! $consultation->diagnosis !!}
    </textarea>
    @if ($errors->has('diagnosis'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('diagnosis') }}</strong>
        </span>
    @endif
  </div>
</div>

<input type = "hidden" name = "status" value = "{{ $consultation->status }}">
<input type = "hidden" name = "nrocita" value = "{{ $consultation->appointment_id }}">

<div class="form-group">
   <button type="submit" id = "salvar" class="btn btn-primary">Guardar</button>
</div>