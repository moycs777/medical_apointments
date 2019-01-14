<div class="col-md-6 pr-md-1">
  <div class="form-group">
    <label for="">Recipe</label>
    <textarea name="recipe" value = "{{ $consultation->recipe }}"
      placeholder="Recipe" rows = '10' cols = "80" required = "required" 
      style="width: 100%; height: 100%px; font-size: 13px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="recipe" >{!! $consultation->recipe !!}
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
    <textarea name="prescription" value = "{{ $consultation->prescription }}"
      placeholder="Describa las indicaciones" rows = '10' cols = "80" required = "required" 
      style="width: 100%; height: 100%px; font-size: 13px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="prescription" >{!! $consultation->prescription !!}
    </textarea>
    @if ($errors->has('prescription'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('prescription') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-12 ">
  <div class="form-group">
    <label>Antecedentes Personales</label>
   
    <textarea class="form-control" name="personal_history" 
      placeholder="Antecedentes personales" rows = '10' required = "required" 
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
      placeholder="Antecedentes familiares" rows = '10' required = "required" 
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
    <input id="weight"
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
    <input id="size"
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
    <input id="systolic_pressure"
        type="text" class="form-control {{ $errors->has('systolic_pressure') ? ' is-invalid' : '' }}"
        placeholder="Indique la presion sistolica" name="systolic_pressure" 
        value="{{ $consultation->systolic_pressure }}">
        {{-- value="{{ $appointment->clinical_patient->systolic_pressure }}"> --}}
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
    <input id="diastolic_pressure"
        type="text" class="form-control {{ $errors->has('diastolic_pressure') ? ' is-invalid' : '' }}"
        placeholder="Describa la talla" name="diastolic_pressure" 
        value = "{{ $consultation->diastolic_pressure }}"
        {{-- value="{{ $appointment->clinical_patient->diastolic_pressure }}"> --}}
    @if ($errors->has('diastolic_pressure'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('diastolic_pressure') }}</strong>
        </span>
    @endif
  </div>
</div>
