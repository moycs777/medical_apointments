<div class="col-md-10 col-md-10-offset-2">
  <div class="form-group">
    <label>Antecedentes Personales</label>
   
    <textarea class="form-control" name="personal_history"
      placeholder="Recipe" rows = '10' required = "required" 
      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px 
      solid #dddddd; padding: 10px;" id="personal_history" >
    </textarea>
    @if ($errors->has('recipe'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('personal_history') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-10 col-md-10-offset-2">
  <div class="form-group">
    <label>Antecedentes Familiares</label>
    
    <textarea class="form-control" name="family_background"
      placeholder="Indicaciones" rows = '10' required = "required" 
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

