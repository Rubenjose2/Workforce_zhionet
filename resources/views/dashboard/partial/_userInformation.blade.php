<div class="col-sm-6 col-md-6 col-lg-6">
    <img src="/uploads/avatars/{{$user->picture}}" class="img-responsive avatar-profile-v2" /> @if($user->score) @endif

</div>
<div class="text-center">
    
    <h3>{{$user->getFullNamefromUser()}}</h3>
    <div>ID: {{Auth::user()->tech_id}}</div>
    <div>
        Title: {{$user->roles->description}}
    </div>
</div>
{{--  <div id="jg2"></div>  --}}