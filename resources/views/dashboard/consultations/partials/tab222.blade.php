
<div class="col-md-12">
  <div class="form-group">
    <label for="sel1"><strong>Enfermedad(diagnostico)</strong></label>
    <select class="js-example-basic-single form-control" id="seldisease" name="disease_id" style="width: 100%;">
      @foreach($diseases as $item)
          <option 
             value ="{{ $item->id }}"
             @if($item->id == $consultation->disease_id) 
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
  <label for="sel1"><strong>Tratamiento</strong></label>
    <select class="js-example-basic-single form-control" id="sel22" name="subpatology_id" style="width: 100%;">
      @foreach($subpatologies as $item)
          <option 
             value ="{{ $item->id }}"
             @if($item->id == $consultation->subpatology_id) 
                selected='selected' 
             @endif>
             {{ $item->name }} 
          </option>
      @endforeach 
    </select>
  </div>
</div>

<div class="col-md-6 pr-md-1">
  <div class="form-group">
    <label for="">Recipe</label>
    <textarea name="recipe" 
      placeholder="Recipe" rows = '10' cols = "80" required = "required" 
      style="width: 100%; height: 100%px; font-size: 13px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="recipe" >{!! $consultation->subpatology->recipe !!}
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
    <textarea name="prescription" 
      placeholder="Describa las indicaciones" rows = '10' cols = "80" required = "required" 
      style="width: 100%; height: 100%px; font-size: 13px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="prescription" >{!! $consultation->subpatology->prescription !!}
    </textarea>
    @if ($errors->has('prescription'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('prescription') }}</strong>
        </span>
    @endif
  </div>
</div>

