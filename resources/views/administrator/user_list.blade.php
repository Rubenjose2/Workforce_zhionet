@extends('layouts.admin') @section('content')
<link type="text/css" rel="stylesheet" href="{{asset('css/jquery.dataTables.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset('css/dataTables.fixedColumns.min.css')}}">
<link media="screen" type="text/css" rel="stylesheet" href="{{asset('css/datatables.responsive.css')}}">

<div>
    <h2>List of Users</h2>
    <table id="table_user" class="table table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th></th>
                <th>Tech Id</th>
                <th>Firts Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr data-send="{{$user->id}}" class="pointer">
                <th>{{$user->id}}</th>
                <th><img src="/uploads/avatars/{{$user->picture}}" class="avatar-bullet" /></th>
                <th>{{$user->tech_id}}</th>
                <th>{{$user->fname}}</th>
                <th>{{$user->lname}}</th>
                <th>{{$user->email}}</th>
                <th>{{$user->phone}}</th>
            </tr>
            @endforeach
        </tbody>

    </table>
  



</div>

@endsection