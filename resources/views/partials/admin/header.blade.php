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

      <li class="{{ Request::path() == 'office/consultations' ? 'active' : '' }}">
        <a href="{{ route('consultations.index')}}">
          <i class="tim-icons icon-chart-pie-36"></i>
          <p>Consulta / Medica</p>
        </a>
      </li>

      <li class="{{ Request::path() == 'office/appointments' ? 'active' : '' }}">
        <a href="{{ route('appointments.index')}}">
          <i class="tim-icons icon-pin"></i>
          <p>Citas</p>
        </a>
      </li>

       <li class="{{ Request::path() == 'office/medical_schedules' ? 'active' : '' }}">
        <a href="{{ route('medical_schedules.index')}}">
          <i class="tim-icons icon-pin"></i>
          <p>Horario Medico</p>
        </a>
      </li>

      <li class="{{ Request::path() == 'office/doctors' ? 'active' : '' }}">
        <a href="{{ route('doctors.index')}}">
          <i class="tim-icons icon-pin"></i>
          <p>Doctores</p>
        </a>
      </li> 

      <li class="{{ Request::path() == 'office/diseases' ? 'active' : '' }}">
        <a href="{{ route('diseases.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Enfermedades</p>
        </a>
      </li>

      <li class="{{ Request::path() == 'office/specialties' ? 'active' : '' }}">
        <a href="{{ route('specialties.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Especialidades</p>
        </a>
      </li>
      
      <li class="{{ Request::path() == 'office/explorations' ? 'active' : '' }}">
        <a href="{{ route('explorations.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Exploraciones</p>
        </a>
      </li>

      <li class="{{ Request::path() == 'office/occupations' ? 'active' : '' }}">
        <a href="{{ route('occupations.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Ocupación</p>
        </a>
      </li>

      {{--  // Seguros Medicos  --}}
      <li class="{{ Request::path() == 'office/insurances' ? 'active' : '' }}">
        <a href="{{ route('insurances.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Seguros Médicos</p>
        </a>
      </li>

      {{--  // Clasificacion  --}}
      <li class="{{ Request::path() == 'office/classifications' ? 'active' : '' }}">
        <a href="{{ route('classifications.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Clasificación</p>
        </a>
      </li>

      <li class="{{ Request::path() == 'office/pathologies' ? 'active' : '' }}">
        <a href="{{ route('pathologies.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Patologias</p>
        </a>
      </li>

      <li class="{{ Request::path() == 'office/clinicalpatients' ? 'active' : '' }}">
        <a href="{{ route('clinicalpatients.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Pacientes</p>
        </a>
      </li>
     
     <li class="{{ Request::path() == 'office/subpatologies' ? 'active' : '' }}">
        <a href="{{ route('subpatologies.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Subpatologias</p>
        </a>
      </li>

      <li class="{{ Request::path() == 'office/subclassifications' ? 'active' : '' }}">
        <a href="{{ route('subclassifications.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Subclasificación</p>
        </a>
      </li>

       <!-- <li class="{{ Request::path() == 'office/doctors' ? 'active' : '' }}">
        <a href="{{ route('doctors.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Médicos</p>
        </a>
      </li> -->
      
      <li class="{{ Request::path() == 'office/clinicalpatients' ? 'active' : '' }}">
        <a href="{{ route('clinicalpatients.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>Pacientes</p>
        </a>
      </li>
    </ul>
  </div>
</div>
