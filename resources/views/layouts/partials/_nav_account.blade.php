@if($user)
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="notices" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

    <span class="menu-avatar">
      @if ($user->photo)
      <img src="{{ URL::to('images/avatars/small/' . $user->photo) }}" alt="{{ $user->username }}" title="{{ $user->username }}" class="img-fluid">

      @else

      <img src="{{ URL::to('images/avatars/default/small/avatar.png') }}" alt="{{ $user->username }}" title="{{ $user->username }}" class="img-fluid">

      @endif
    </span>

    @if($user->role_id === 1) {{-- Student --}}

    {!! $user->username !!}

    @elseif($user->role_id === 2) {{-- Department --}}

    {!! $user->department->name .' '.$user->username !!}

    @elseif($user->role_id === 4 && $user->salutation_id !== 0) {{-- Lecturer --}}

    {!! $user->salutation->name .'. '. $user->username !!}

    @else

    {!! $user->username !!}

    @endif

  </a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{ route('getLogout') }}">Logout</a>
  </div>
</li>
@endif
