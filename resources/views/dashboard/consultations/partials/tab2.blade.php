<div class="col-md-10 col-md-10-offset-10">
  <div class="form-group">
    <label>Recipe</label>
    {{-- <input id="recipe"
        type="text"
        class="form-control {{ $errors->has('recipe') ? ' is-invalid' : '' }}"
        placeholder="Recipe"
        name="fieldName"
        value="{{ old('recipe') }}" required
    > --}}
    <textarea class="form-control" name="recipe"
      placeholder="Recipe" rows = '10' required = "required" 
      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px 
      solid #dddddd; padding: 10px;" id="recipe" >
    </textarea>
    @if ($errors->has('recipe'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('recipe') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-10 col-md-10-offset-10">
  <div class="form-group">
    <label>Indicaciones</label>
    
    <textarea class="form-control" name="indications"
      placeholder="Indicaciones" rows = '10' required = "required" 
      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px 
      solid #dddddd; padding: 10px;" id="indications" >
    </textarea>

    @if ($errors->has('indications'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('indications') }}</strong>
        </span>
    @endif
  </div>
</div>

