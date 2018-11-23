@extends('layouts.admin')
@section('page-style')
  <style>
     *, *:before, *:after {margin: 0; padding: 0; box-sizing: border-box;}
     body {background: red; color: black; font: 14px 'Open Sans', sans-serif;}
     h1 {padding: 100px 0; font-weight: 400; text-align: center;}
     p {margin: 0 0 20px; line-height: 1.5;}
     .main {margin: 0 auto; min-width: 320px; max-width: 800px;}
     .contentTabs {background: white; color: black;}
     .contentTabs > div {display: none; padding: 20px 25px 5px;}
     input {display: none;}
     label {display: inline-block; padding: 15px 25px; font-weight: 600; text-align: center;}
     label:hover {color: #1d8cf8; cursor: pointer;}
     input:checked + label {background: #1d8cf8; color: #fff;}
     #tab1:checked ~ .contentTabs #content1,
     #tab2:checked ~ .contentTabs #content2,
     #tab3:checked ~ .contentTabs #content3,
     #tab4:checked ~ .contentTabs #content4 {
       display: block;
     }
     @media screen and (max-width: 400px) { label {padding: 15px 10px;} }
  </style>
@stop
@section('content')
<div class="wrapper">
    <div class="main-panel">
      <!-- Navbar -->
      @include('partials.admin.nav')
      <div class="content">
          <div class="row">
            <form method="POST" action="{{ route('consultations.store') }}">
              @csrf
              <div class="col-md-12">
                  <div class="main">
                    {{-- TabsMenu --}}
                    <input id="tab1" type="radio" name="tabs" checked>
                    <label for="tab1">New York</label>
                
                    <input id="tab2" type="radio" name="tabs">
                    <label for="tab2">London</label>
                
                    <input id="tab3" type="radio" name="tabs">
                    <label for="tab3">Mumbai</label>
                
                    <input id="tab4" type="radio" name="tabs">
                    <label for="tab4">Tokyo</label>
                    {{-- Tabs --}}
                    <div class="contentTabs">  
                      <div id="content1">
                        <div class="row">

                          <div class="col-md-4 pr-md-1">
                            <div class="form-group">
                              <label>fieldName</label>
                              <input id="fieldName"
                                  type="text"
                                  class="form-control {{ $errors->has('fieldName') ? ' is-invalid' : '' }}"
                                  placeholder="fieldName"
                                  name="fieldName"
                                  value="{{ old('fieldName') }}" required
                              >
                              @if ($errors->has('fieldName'))
                                  <span style="color: red; class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('fieldName') }}</strong>
                                  </span>
                              @endif
                            </div>
                          </div>

                          <div class="col-md-4 pr-md-1">
                            <div class="form-group">
                              <label>fieldName2</label>
                              <input id="fieldName2"
                                  type="text"
                                  class="form-control {{ $errors->has('fieldName2') ? ' is-invalid' : '' }}"
                                  placeholder="fieldName2"
                                  name="fieldName2"
                                  value="{{ old('fieldName2') }}" required
                              >
                              @if ($errors->has('fieldName2'))
                                  <span style="color: red; class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('fieldName2') }}</strong>
                                  </span>
                              @endif
                            </div>
                          </div>

                          <div class="col-md-4 pr-md-1">
                            <div class="form-group">
                              <label>fieldName3</label>
                              <input id="fieldName3"
                                  type="text"
                                  class="form-control {{ $errors->has('fieldName3') ? ' is-invalid' : '' }}"
                                  placeholder="fieldName3"
                                  name="fieldName3"
                                  value="{{ old('fieldName3') }}" required
                              >
                              @if ($errors->has('fieldName3'))
                                  <span style="color: red; class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('fieldName3') }}</strong>
                                  </span>
                              @endif
                            </div>
                          </div>

                        </div>
                      </div>
                
                      <div id="content2">
                      <p>
                       London is the capital city of England and the United Kingdom. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants. Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.
                      </p>
                      <p>
                        London's ancient core, the City of London, largely retains its 1.12-square-mile (2.9 km2) mediaeval boundaries and in 2011 had a resident population of 7,375, making it the smallest city in England. Since at least the 19th century, the term London has also referred to the metropolis developed around this core.
                      </p>
                      </div>
                
                      <div id="content3">
                      <p>
                        Mumbai is the capital city of the Indian state of Maharashtra. It is the most populous city in India, most populous metropolitan area in India, and the eighth most populous city in the world, with an estimated city population of 18.4 million and metropolitan area population of 20.7 million as of 2011. Along with the urban areas, including the cities of Navi Mumbai, Thane, Bhiwandi, Kalyan, it is one of the most populous urban regions in the world.
                      </p>
                      <p>
                        Mumbai lies on the west coast of India and has a deep natural harbour. In 2009, Mumbai was named an alpha world city. It is also the wealthiest city in India, and has the highest GDP of any city in South, West or Central Asia.
                      </p>
                      </div>
                
                      <div id="content4">
                        <button type="submit" class="btn btn-fill btn-primary">Save</button>
                        
                      </div>

                    </div>              
                  </div>
                <a href="https://twitter.com/moycs777?lang=es" target="_blank">@moycs777</a>
              </div>
            </form>
          </div>
      </div>
    </div>
</div>
@stop
@section('page-script')
  <script type="text/javascript">
    console.log("pacientes ");
    
  </script>
@stop







