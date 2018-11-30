
<input type="hidden" name="url" id="url" value="{{url('')}}">
<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label for="">Numero/codigo de la cita</label>
    <input id="appointment_number"
        type="text"
        class="form-control {{ $errors->has('appointment_number') ? ' is-invalid' : '' }}"
        placeholder="Numero de cita"
        name="appointment_number"
        value="{{ old('appointment_number') }}" required
    >
    @if ($errors->has('appointment_number'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('appointment_number') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label for="">Fecha de la consulta</label>
    <input id="date_consultation"
        type="text"
        class="form-control {{ $errors->has('date_consultation') ? ' is-invalid' : '' }}"
        placeholder="Fecha de la consulta"
        name="date_consultation"
        value="@php echo date("d-m-Y") @endphp" required = "require" disabled
    >
    @if ($errors->has('date_consultation'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('date_consultation') }}</strong>
        </span>
    @endif 
  </div>
</div>

    <div class="col-md-4 pr-md-1">
      <div class="form-group">
        <label>Nombre del paciente</label>
        <input id="clinical_patient_id"
            type="text"
            class="form-control {{ $errors->has('clinical_patient_id') ? ' is-invalid' : '' }}"
            placeholder=""
            name="date_consultation"
            value="{{ old('clinical_patient_id') }}" required
        >
        @if ($errors->has('clinical_patient_id'))
            <span style="color: red; class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('clinical_patient_id') }}</strong>
            </span>
        @endif
      </div>
    </div>


<div class="col-md-10 col-md-10-offset-2">
  <div class="form-group">
    <label>Motivo de la consulta</label>
    <input id="reason_consultation"
        type="text"
        class="form-control {{ $errors->has('reason_consultation') ? ' is-invalid' : '' }}"
        placeholder="Describa motivo de la consulta"
        name="reason_consultation"
        value="{{ old('reason_consultation') }}" required
    >
    @if ($errors->has('reason_consultation'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('reason_consultation') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-10 col-md-10-offset-10">
  <div class="form-group">
    <label>Enfermedad</label>
    
    <textarea class="form-control" name="disease"
      placeholder="Enfermedad" rows = '5' required = "required" 
      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="disease" >
    </textarea>
    @if ($errors->has('disease'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('disease') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-10 col-md-10-offset-2">
  <div class="form-group">
    <label>Exploracion</label>
    {{-- <input id="exploration"
        type="text"
        class="form-control {{ $errors->has('exploration') ? ' is-invalid' : '' }}"
        placeholder="Descripcion de la exploracion"
        name="exploration" value="{{ old('exploration') }}" required
    > --}}
    <textarea class="form-control" name="exploration"
      placeholder="Exploracion" rows = '5' required = "required" 
      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="exploration" >
    </textarea>
    @if ($errors->has('exploration'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('exploration') }}</strong>
        </span>
    @endif
  </div>
</div> 

<div class="col-md-10 col-md-10-offset-2">
  <div class="form-group">
    <label>Diagnostico</label>
    {{-- <input id="diagnosis"
        type="text"
        class="form-control {{ $errors->has('diagnosis') ? ' is-invalid' : '' }}"
        placeholder="Diagnostico"
        name="diagnosis"
        value="{{ old('diagnosis') }}" required
    > --}}
    <textarea class="form-control" name="diagnosis"
      placeholder="Diagnostico" rows = '5' required = "required" 
      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="diagnosis" >
    </textarea>
    @if ($errors->has('diagnosis'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('diagnosis') }}</strong>
        </span>
    @endif
  </div>
</div>







