<div class="col-md-12 ">
  <div class="form-group">
    <label>Antecedentes Personales</label>
   
    <textarea class="form-control" name="personal_history" 
      placeholder="Antecedentes personales" rows = '10' required = "required" 
      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px 
      solid #dddddd; padding: 10px;" id="personal_history" >
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
      placeholder="Antecedentes familiares" rows = '10'  
      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px 
      solid #dddddd; padding: 10px;" id="family_background" >
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
        placeholder="Indique el peso" name="weight" value="{{ old('weight') }}">
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
        placeholder="Describa la talla" name="size" value="{{ old('size') }}">
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
        placeholder="Indique la presion sistolica" name="systolic_pressure" value="{{ old('systolic_pressure') }}">
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
        placeholder="Describa la talla" name="size" value="{{ old('diastolic_pressure') }}">
    @if ($errors->has('diastolic_pressure'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('diastolic_pressure') }}</strong>
        </span>
    @endif
  </div>
</div>
