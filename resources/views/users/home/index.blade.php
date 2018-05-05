@extends('layouts.master')
@section('content')
<div class="cover mb-2">
	<div class="text">
		<h1 class="h4">The Easiest Way To Be Updated</h1>
		<p class="lead">Connect with Maseno University departments, organizations and more.</p>
		<span class="actions"><a href="{{ route('getRegister') }}" class="btn btn-primary glyph-r-margin">Register</a> or <a href="{{ route('getLogin') }}" class="link glyph-l-margin">Sign in</a></span>
	</div>
</div><!-- /.cover -->

@endsection
