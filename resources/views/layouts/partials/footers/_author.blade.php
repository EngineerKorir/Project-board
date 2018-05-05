@if ($notice)

<footer>
  <div class="hmi-author">
    <p class="font-size-xs"><a href="#">

      @if($notice->user)
      @if ($notice->user->role_id == 2) {{-- Department --}}

      {!! $notice->user->department->name .' '.$notice->user->username !!}

      @elseif ($notice->user->role_id == 4 && $notice->user->salutation_id != 0) {{-- Lecturer --}}

      {!! $notice->user->salutation->name .'. '. $notice->user->username !!}

      @else {{-- Organization, Class rep ... --}}

      {!! $notice->user->username !!}

      @endif
      @endif

    </a>
      <i class="fa fa-clock-o glyph-r-margin glyph-l-margin"></i>{{ $notice->created_at }}
      <i class="fa fa-eye glyph-r-margin glyph-l-margin"></i> {{ $notice->views }} views

      @if ($notice->deadline)
      <i class="fa fa-warning glyph-r-margin glyph-l-margin text-warning"></i>Deadline {{ $notice->deadline }}
      @endif

    </p>
  </div>
</footer>

@endif
