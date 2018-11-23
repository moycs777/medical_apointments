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
                    <label for="tab1">Tab 1</label>
                
                    <input id="tab2" type="radio" name="tabs">
                    <label for="tab2">Tab 2</label>
                
                    <input id="tab3" type="radio" name="tabs">
                    <label for="tab3">Tab 3</label>
                
                    <input id="tab4" type="radio" name="tabs">
                    <label for="tab4">Tab 4</label>
                    {{-- Tabs --}}
                    <div class="contentTabs">  
                      <div id="content1">
                        <div class="row">
                          @include('dashboard.consultations.partials.tab1')
                        </div>
                      </div>
                
                      <div id="content2">
                        <div class="row">
                          @include('dashboard.consultations.partials.tab2')
                        </div>
                      </div>
                
                      <div id="content3">
                        <div class="row">
                          @include('dashboard.consultations.partials.tab3')
                        </div>
                      </div>
                
                      <div id="content4">
                        <div class="row">
                          @include('dashboard.consultations.partials.tab4')
                        </div>
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







