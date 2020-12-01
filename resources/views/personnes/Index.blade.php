@extends('Layouts.app')
@section('content')
 <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel 8 CRUD Example </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="/create" title="Create a Personne"> <i class="fas fa-plus-circle"></i>
            </a>
        </div>
    </div>
</div>
 @if ($message = Session::get('success'))
<div class="alert alert-success"> <p></p></div>
 @endif
 <table class="table table-bordered table-responsive-lg">
<tr><th>Id</th><th>nom</th><th>prenom</th><th>age</th><th>Date Created</th>
<th>Actions</th></tr>
 @foreach ($Personnes as $Personne)
 <tr>
 <td>{{$Personne->id}}</td>
 <td>{{$Personne->nom}}</td>
 <td>{{$Personne->prenom}}</td>
 <td>{{$Personne->age}}</td>
 <td>{{$Personne->created_at}}</td>
 <td>
<form action="/" method="POST">
 <a href="/show/{{$Personne->id}}" title="show">
 <i class="fas fa-eye text-success fa-lg"></i></a>
 <a href="/edit/{{$Personne->id}}">
 <i class="fas fa-edit fa-lg"></i></a>
 <a href="/destroy/{{$Personne->id}}"> <i class="fas fa-trash fa-lg text-danger"></i></a>
 @csrf
@method('DELETE')

 </form> </td> </tr>
 @endforeach
 </table>
 {!! $Personnes->links() !!}
@endsection