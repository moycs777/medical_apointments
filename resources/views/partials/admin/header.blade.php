<div class="sidebar">
  <div class="sidebar-wrapper">
    <div class="logo">
      <a href="javascript:void(0)" class="simple-text logo-mini">
        DR.
      </a>
      <a href="javascript:void(0)" class="simple-text logo-normal">
        Fernando Silva
      </a>
    </div>
    <ul class="nav">
      <li class="{{ Request::path() == 'admin/home' ? 'active' : '' }}">
        <a href="{{ route('admin.home')}}">
          <i class="tim-icons icon-chart-pie-36"></i>
          <p>Dashboard / Inicio</p>
        </a>
      </li>
      <li class="{{ Request::path() == 'office/appointments' ? 'active' : '' }}">
        <a href="{{ route('appointments.index')}}">
          <i class="tim-icons icon-pin"></i>
          <p>Citas</p>
        </a>
      </li>

      <li class="{{ Request::path() == 'office/occupations' ? 'active' : '' }}">
        <a href="{{ route('occupations.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Ocupacion</p>
        </a>
      </li>

      {{--  // Seguros Medicos  --}}
      <li class="{{ Request::path() == 'office/insurances' ? 'active' : '' }}">
        <a href="{{ route('insurances.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Seguros Medicos</p>
        </a>
      </li>

      {{--  // Clasificacion  --}}
      <li class="{{ Request::path() == 'office/classifications' ? 'active' : '' }}">
        <a href="{{ route('classifications.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Clasificacion</p>
        </a>
      </li>
     {{--  <li class="{{ Request::path() == 'office/classifications' ? 'active' : '' }}">
        <a href="{{ route('subclassifications.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Subclasificacion</p>
        </a>
      </li> --}}
      <li class="{{ Request::path() == 'office/clinicalpatients' ? 'active' : '' }}">
        <a href="{{ route('clinicalpatients.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Pacientes</p>
        </a>
      </li>
    </ul>
  </div>
</div>
