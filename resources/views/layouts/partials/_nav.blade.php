<nav class="navbar navbar-toggleable-sm navbar-light fixed-top bg-faded navbar-full">
  <div class="navbar-header">
    <div id="burger-container" data-toggle="collapse" data-target="#responsive-navbar-collapse" class="hidden-md-up">
      <div id="burger">
        <span>&nbsp;</span>
        <span>&nbsp;</span>
        <span>&nbsp;</span>
      </div><!-- /.burger -->
    </div> <!-- /.burger-container -->
    <a class="navbar-brand" href="/">Masenoboards</a>
  </div> <!-- /.navbar-header -->

  <div class="navbar-collapse collapse" id="responsive-navbar-collapse">
    <ul class="navbar-nav">

      <li class="nav-item"><a class="nav-link" href="{{ route('getHome') }}">Home</a></li>

      @if($user)

      @if ($user->role_id === 1) {{-- student --}}

      <li class="nav-item"><a class="nav-link" href="{{ route('getStudentDashboard') }}" title="Student dashboard">Student</a></li>

      @elseif ($user->role_id === 2) {{-- department --}}

      <li class="nav-item"><a class="nav-link" href="{{ route('getDepartmentDashboard') }}" title="Department dashboard">Department</a></li>

      @elseif ($user->role_id === 3) {{-- organization --}}

      <li class="nav-item"><a class="nav-link" href="{{ route('getOrganizationDashboard') }}" title="Organization dashboard">Organization</a></li>

      @elseif ($user->role_id === 4) {{-- lecturer --}}

      <li class="nav-item"><a class="nav-link" href="{{ route('getLecturerDashboard') }}" title="Lecturer dashboard">Lecturer</a></li>

      @elseif ($user->role_id === 5) {{-- class_rep --}}

      <li class="nav-item"><a class="nav-link" href="{{ route('getClassRepDashboard') }}" title="Class rep dashboard">Class rep</a></li>

      @else
      {{-- Silence is golden --}}
      @endif

      @endif


    </ul>

    <!-- User Account Menu -->
    <ul class="navbar-nav ml-auto mr-5">
      @include('layouts.partials._nav_account')
    </ul>
  </div>
</nav>
