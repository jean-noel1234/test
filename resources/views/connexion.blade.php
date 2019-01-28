@extends('template')

@section('titre')
  connexion
@endsection

@section('contenu')
<br>
<div class="col-sm-offset-3 col-sm-6">
  <div class="panel panel-info">
    <div class="panel-heading">connexion utilisateur</div>
    <div class="panel-body">
      {!! Form::open(['url' => 'connexion']) !!}
        <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
          {!! Form::label('adresse_mail', 'Entrez votre email : ') !!}
          {!! Form::text('adresse_mail', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
          {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
        </div>
        <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
          {!! Form::label('password', 'Entrez votre mot de passe : ') !!}
          {!! Form::password ('password', null, ['class' => 'form-control', 'placeholder' => 'Mot de passe']) !!}
          {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
        </div>
        {!! Form::submit('Connexion', ['class' => 'btn btn-info pull-right']) !!}
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
