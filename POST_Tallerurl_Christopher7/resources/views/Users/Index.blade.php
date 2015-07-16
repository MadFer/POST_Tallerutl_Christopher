
@extends('app')
@section('content')
   <table class="table table-striped">
       <tr>
           <th>Nombre</th>
           <th>Correo</th>
    </tr>
    @foreach($user as $users)
    <tr>
    <td>{{$users->name}}</td>
    <td>{{$users->email}}</td>
    </tr>
    @endforeach
    </table>
    {!! $user->render() !!}
@endsection