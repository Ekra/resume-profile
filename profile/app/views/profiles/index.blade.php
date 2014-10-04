@extends('layouts.default')

@section('content')

<head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<style>
body
 { padding-bottom:40px; padding-top:40px; }
</style>
</head>
<body class="container">
<div class="row">
<div class="col-sm-8 col-sm-offset-2">
<div class="page-header">
	@foreach ($profiles as $profile)

	<li>{{ $profile->firstname }}</li>
	<li>{{ $profile->lastname }}</li>
	<li>{{ $profile->nickname }}</li>
	<li>{{ $profile->phonenumber }}</li>
	<li>{{ $profile->photo }}</li>
	<li>{{ $profile->cv }}</li>

@endforeach

@stop
