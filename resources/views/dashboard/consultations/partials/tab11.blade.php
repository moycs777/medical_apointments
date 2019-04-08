<input type="hidden" name="url" id="url" value="{{url('')}}">

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label>Numero/codigo de la cita</label>
     <input type = "hidden" id="appointment_id"
        class="form-control" name="appointment_id"
        value="{{ $consultation->appointment_id }}"
     >
     <input type="text" class="form-control" value="{{ $consultation->appointment_id }}" disabled>
     @if ($errors->has('appointment_id'))
         <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('appointment_id') }}</strong>
         </span>
     @endif
  </div>
</div>

<input type = "hidden" id="date_consultation" class="form-control" name="date_consultation"
        value="{{ $consultation->date_consultation }}"
>
<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label for="">Fecha de la consulta</label>
    <input type="text" class="form-control"
       value="{{Carbon\Carbon::parse($consultation->date_consultation)->format('d-m-Y')}}" disabled>
    </div>
</div>

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label>Nombre del paciente</label>
    <input id="clinical_patient_full_name"
        type="text" class="form-control" name="clinical_patient_id" disabled
        value="{{ $appointment->clinical_patient->first_name . " " . $appointment->clinical_patient->last_name }}"
    >
  </div>
</div>
<div class="col-md-4  pr-md-1">
   <input id="x" type="hidden" name="codigo_paciente" value="{{ $appointment->clinical_patient_id }}" >
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
    <input id="current_illness"
        type="text" class="form-control {{ $errors->has('current_illness') ? ' is-invalid' : '' }}"
        placeholder="Enfermedad"  name="current_illness" value="{{ $consultation->current_illness }}">
    @if ($errors->has('current_illness'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('current_illness') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-12 ">
  <div class="form-group">
    <label>Antecedentes Personales</label>

    <textarea class="form-control" name="personal_history"
      placeholder="Antecedentes personales" rows = '5' required = "required"
      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px
      solid #dddddd; padding: 10px;" id="personal_history"
      value = "{{ $consultation->personal_history }}" >{!! $appointment->clinical_patient->personal_history !!}
    </textarea>
    @if ($errors->has('personal_history'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('personal_history') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label>Antecedentes Familiares</label>

    <textarea class="form-control" name="family_background"
      placeholder="Antecedentes familiares" rows = '5' required = "required"
      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px
      solid #dddddd; padding: 10px;" id="family_background"
      value ="{!! $consultation->family_background !!}}" >{!! $appointment->clinical_patient->family_background !!}
    </textarea>

    @if ($errors->has('family_background'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('family_background') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-3">
  <div class="form-group">
    <label>Peso</label>
    <input id="weight" maxlength="10"
        type="text" class="form-control {{ $errors->has('weight') ? ' is-invalid' : '' }}"
        placeholder="Indique el peso" name="weight" value="{{$consultation->weight }}">
    @if ($errors->has('weight'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('weight') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-3">
  <div class="form-group">
    <label>Talla</label>
    <input id="size" maxlength="10"
        type="text" class="form-control {{ $errors->has('size') ? ' is-invalid' : '' }}"
        placeholder="Describa la talla" name="size" value="{{$consultation->size }}">
    @if ($errors->has('size'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('size') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-3">
  <div class="form-group">
    <label>Presion sistolica</label>
    <input id="systolic_pressure" maxlength="10"
        type="text" class="form-control {{ $errors->has('systolic_pressure') ? ' is-invalid' : '' }}"
        placeholder="Indique la presion sistolica" name="systolic_pressure"
        value="{{ $consultation->systolic_pressure }}">
    @if ($errors->has('systolic_pressure'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('systolic_pressure') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-3">
  <div class="form-group">
    <label>Presion diastolica</label>
    <input id="diastolic_pressure" maxlength="10"
        type="text" class="form-control {{ $errors->has('diastolic_pressure') ? ' is-invalid' : '' }}"
        placeholder="Indique la presion diastolica" name="diastolic_pressure"
        value="{{ $consultation->diastolic_pressure }}">
    @if ($errors->has('diastolic_pressure'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('diastolic_pressure') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label for="sel1"><strong>Exploracion</strong></label>
    <select class="js-example-basic-single form-control" id="asd" name="exploration_id"
        required = "required" style="width: 100%;">
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

<input type = "hidden" name = "status" value = "{{ $consultation->status }}">
<input type = "hidden" name = "nrocita" value = "{{ $consultation->appointment_id }}">


{{-- <div class="form-group">
   <button type="submit" id = "salvar" class="btn btn-primary">Guardar</button>
</div> --}}
