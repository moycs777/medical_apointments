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
      <li class="{{ Request::path() == 'office/clinicalpatients' ? 'active' : '' }}">
        <a href="{{ route('clinicalpatients.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Pacientes</p>
        </a>
      </li>
    </ul>
  </div>
</div>