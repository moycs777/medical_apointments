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
        placeholder="" name="clinical_patient_id" disabled
        value="{{ old('clinical_patient_id') }}" required
    >
    @if ($errors->has('clinical_patient_id'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('clinical_patient_id') }}</strong>
        </span>
    @endif
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
        value="{{ old('reason_consultation') }}" required
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
    <label>Enfermedad</label>
    
    {{-- <textarea class="form-control" name="disease"
      placeholder="Enfermedad" rows = '2'  
      style="width: 100%; height: 50px; font-size: 14px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="disease" >
    </textarea> --}}
    <input id="disease"
        type="text"
        class="form-control {{ $errors->has('disease') ? ' is-invalid' : '' }}"
        placeholder="Describa enfermedad"
        name="reason_consultation"
        value="{{ old('disease') }}"
    >
    @if ($errors->has('disease'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('disease') }}</strong>
        </span>
    @endif
  </div>
</div>
<div class="col-md-12">
  <div class="form-group">
    <label>Exploracion</label>
    <select class="form-control" id="asd" name="exploration_id">
        @foreach($explorations as $item)
           <option value ="{{ $item->id }}">
              {{ $item->name }}
           </option>
        @endforeach 
     </select>
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label>Diagnostico</label>
    <textarea class="form-control" name="diagnosis"
      placeholder="Diagnostico" rows = '5' required = "required" 
      style="width: 100%; height: 50px; font-size: 14px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="diagnosis" >
    </textarea>
    @if ($errors->has('diagnosis'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('diagnosis') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label for="sel2"><strong>Seleccione subpatologia</strong></label>
      <select class="js-example-basic-single form-control" id="sel2" name="subpatology">
        @foreach($subpatologies as $item)
           <option value ="{{ $item->id }}">
              {{  $item->name . "---" .$item->recipe }}
           </option>
        @endforeach 
      </select>
  </div>
</div>

<div class="col-md-6 pr-md-1">
  <div class="form-group">
    <label for="">Recipe</label>
    <textarea class="form-control" name="recipe"
      placeholder="Recipe" rows = '5' required = "required" 
      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="recipe" >
    </textarea>
    @if ($errors->has('recipe'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('recipe') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-6 pr-md-1">
  <div class="form-group">
    <label for="">Indicaciones</label>
    <textarea class="form-control" name="prescription"
      placeholder="Describa las indicaciones" rows = '5' required = "required" 
      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="prescription" >
    </textarea>
    @if ($errors->has('prescription'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('prescription') }}</strong>
        </span>
    @endif
  </div>
</div>

