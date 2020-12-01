@extends('Layouts.app')
@section('content')
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left">
 <h2> </h2>
 </div>
 <div class="pull-right">
 <a class="btn btn-primary" href="/index" title="Go back"> <i class="fas fa-backward "></i> </a>
 </div>
 </div>
 </div>
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>nom:</strong>
 {{$Personne->nom}}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>prenom</strong>
 {{$Personne->prenom}}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>age</strong>
 {{$Personne->age}}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Date Created</strong>
 {{$Personne->created_at}}
 </div>
 </div>
 </div>
@endsection