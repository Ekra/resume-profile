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
	

	<h1>Create Profile </h1>
</div>

	{{Form::open(['route' => 'profiles.store','files'=> 'true']) }}

<div class="form-group">
	{{Form::label('firstname','Firstname:')}}
	{{Form::text('firstname', null ,[ 'class'=>'form-control'])}}
	{{$errors->first('firstname')}}
</div>


<div class="form-group">
	{{Form::label('Lastname','Lastname:')}}
	{{Form::text('lastname', null ,[ 'class'=>'form-control'])}}
	{{$errors->first('lastname')}}
</div>


<div class="form-group">
	{{Form::label('nickname','Nickname:')}}
	{{Form::text('nickname', null ,[ 'class'=>'form-control'])}}
	{{$errors->first('nickname')}}

</div>

<div class="form-group">
	{{Form::label('phonenumber','Phonenumber:')}}
	{{Form::text('phonenumber', null ,[ 'class'=>'form-control'])}}
	{{$errors->first('phonenumber')}}
	
</div>


<div class="form-group">
{{ Form::label('photo', 'Photo: ') }}
{{ Form::file('photo') }}
</div>



<div class="form-group">
{{ Form::label('cv', 'Curriculum Vitae: ') }}
{{ Form::file('cv') }}
</div>



<div class="form-group">
	{{Form::submit('Create Profile',['class' => 'btn btn-success']) }}
</div>

	{{Form::close()}}
	{{HTML::ul($errors->all())}}
@stop

