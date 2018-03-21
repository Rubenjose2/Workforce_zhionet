@extends('layouts.admin')
@section('content')
<div class="container-fliud padding-25">
<div class="row">
    @if(App\User::whereNull('security_level')->count()>0)
    <div class="col-md-4 col-md-4">
        <div class="panel panel-transparent">
            <div class="panel-heading">
                <div class="panel-title">New Tech Subscription
                </div>
            </div>
            <div class="panel-body">

                <table class="table table-hover" id="new_users">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach((App\User::whereNull('security_level')->get()) as $newUser)
                        <tr data-send={{$newUser->id}}>
                            <td>{{$newUser->fname}} {{$newUser->lname}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    @endif
</div>
</div>

@endsection