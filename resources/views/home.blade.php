@if (Auth::user()->usertype=="warden")
  @includeIf('warden.base', [Auth::user()->usertype=="warden"])

@elseif(Auth::user()->usertype=="hostelite")
  @include('hostelite.base')
@else
  @include('homepage')
@endif