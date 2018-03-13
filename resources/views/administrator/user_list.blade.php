@extends('layouts.admin') @section('content')
<link type="text/css" rel="stylesheet" href="{{asset('css/jquery.dataTables.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset('css/dataTables.fixedColumns.min.css')}}">
<link media="screen" type="text/css" rel="stylesheet" href="{{asset('css/datatables.responsive.css')}}">

<div>
    <h2>List of Users</h2>
    <table id="table_user" class="table table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                
                <th>Score</th>
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
                
                @if($user->score['total_score']>=50)
                <td><span class="label label-info">{{$user->score['total_score']}}</span></td>
                @else
                <td><span class="label label-danger">{{$user->score['total_score']}}</span></td>
                @endif
                <td><img src="/uploads/avatars/{{$user->picture}}" class="avatar-bullet" /></td>
                <td>{{$user->tech_id}}</td>
                <td>{{$user->fname}}</td>
                <td>{{$user->lname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
  



</div>

@endsection