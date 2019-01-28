@extends ('template')

@section ('titre')
  Ajout d'utilisateur
@endsection

@section ('contenu')
<br>
<div class="col-sm-offset-3 col-sm-6">
  <div class="panel panel-info">
    <div class="panel-heading">Ajout utilisateur</div>
    <div class="panel-body">
      {!! Form::open(['url' => 'ajout_utilisateur']) !!}
        <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
          {!! Form::label('nom', 'Entrez votre nom : ') !!}
          {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
          {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
        </div>
        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
          {!! Form::label('email', 'Entrez votre email : ') !!}
          {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
          {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
        </div>
        <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
          {!! Form::label('password', 'Entrez votre mot de passe : ') !!}
          {!! Form::password ('password', null, ['class' => 'form-control', 'placeholder' => 'Mot de passe']) !!}
          {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
        </div>
        <div class="form-group {!! $errors->has('password_confirmation') ? 'has-error' : '' !!}">
          {!! Form::label('password_confirmation', 'Confirmez votre mot de passe : ') !!}
          {!! Form::password ('password_confirmation', null, ['class' => 'form-control', 'placeholder' => 'Confirmer mot de passe']) !!}
          {!! $errors->first('password_confirmation', '<small class="help-block">:message</small>') !!}
        </div>
        {!! Form::submit('Enregistrer !', ['class' => 'btn btn-info pull-right']) !!}
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
