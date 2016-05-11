@extends('_layouts.default')

@section('content')
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">沈雅个人博客</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/admin">后台首页</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">登录</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">注销</a></li>
							</ul>
						</li>
					@endif
				</ul>

			</div>
		</div>
	</nav>
	<div  id="title" style="text-align: center;">
		<h1>沈雅个人博客</h1>
		<div style="padding: 5px; font-size: 16px;">努力，以不负沈雅之名！</div>
	</div>
	<hr>
	<div class="navbar navbar-default" id="content">
		<ul>
			@foreach ($pages as $page)
			<li style="margin: 50px 0;">
				<div class="title">
					<a href="{{ URL('pages/'.$page->id) }}">
						<h4>{{ $page->title }}</h4>
					</a>
				</div>
				<div class="body">
					<p>{{ $page->body }}</p>
				</div>
			</li>
			@endforeach
		</ul>
	</div>
@endsection
