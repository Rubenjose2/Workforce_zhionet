@extends('layouts.master') @section('content') {{-- Firts Section of Ghaphs --}}
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Main Category</h3>
    </div>
    <div class="panel-body">
        <div class="col-md4 col-lg-4">
            @include('dashboard.partial._userInformation')
        </div>
        <div class="col-md-8 col-lg-8">
            {{-- Total Category Graph --}} @include('dashboard.graph_partial._total')
        </div>
    </div>
</div>

{{-- Activity Management Section --}}

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Activity Management 29%</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-8 col-lg-8">
            {{-- Total Category Graph --}} @include('dashboard.graph_partial._activity')
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-table" aria-hidden="true"></i> Data</h3>
                </div>
                <div class="panel-body">
                    <p>
                        <strong>Jobs Completed same day: </strong>{{$user->score->SDCP_closed}}</p>
                    <p>
                        <strong>Jobs Scheduled: </strong>{{$user->score->SDCP_scheduled}}</p>
                    <hr size:2px>
                    <p>
                        <strong>Services Call Completed Same Day: </strong> {{$user->score->SDCs_closed}}</p>
                    <p>
                        <strong>Service Call Scheduled: </strong>{{$user->score->SDCs_scheduled}}</p>
                    <hr size:2px>
                    <p>
                        <strong>SDCP Status:</strong> @if($user->score->SDCP_ >= $user->score->SDCP_goal)

                        <span class="label label-success">compliance</span>
                        @else
                        <span class="label label-danger">no compliance</span>
                        @endif
                    </p>
                    <p>
                        <small>"Same day completion production"</small>
                    </p>
                    <p>
                        <strong>SDCS Status:</strong> @if($user->score->SDCs_ >= $user->score->SDCs_goal)
                        <span class="label label-success">compliance</span>
                        @else
                        <span class="label label-danger">no compliance</span>
                        @endif
                        <p>
                            <small>"Same day completion services"</small>
                        </p>
                    </p>

                </div>

            </div>
        </div>
    </div>
</div>

{{-- Quality Control --}}

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Quality Control 42%</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-8 col-lg-8">
            {{-- Total Quality Graph --}} @include('dashboard.graph_partial._quality')

        </div>
        <div class="col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-table" aria-hidden="true"></i> Data</h3>
                </div>
                <div class="panel-body">
                    <p>
                        <strong>Jobs Completed previous Month: </strong>{{$user->score->AIQ_P_closed}}</p>
                    <p>
                        <strong>Jobs with Quality 100% : </strong>{{$user->score->AIQ_P_qs}}</p>

                    <p>
                        <strong>Service Call Opened (30 Day) : </strong>{{$user->score->AIQ_P_closed - $user->score->AIQ_P_qs }}</p>
                    <hr size:2px>
                    <p>
                        <strong>Services Call previous Month: </strong> {{$user->score->AIQ_S_closed}}</p>
                    <p>
                        <strong>Service Call with Quality 100%: </strong>{{$user->score->AIQ_S_qs}}</p>
                    <p>
                        <strong>Service on Services Opened (30 Day) : </strong>{{$user->score->AIQ_S_closed - $user->score->AIQ_S_qs
                        }}
                    </p>
                    <hr size:2px>
                    <p>
                        <strong>AIQ Production:</strong>
                        @if($user->score->AIQ_P_ >= 0.94)
                        <span class="label label-success">compliance</span>
                        @else
                        <span class="label label-danger">no compliance</span>
                        @endif
                        <p>
                            <small>"Activities In Quality production"</small>
                        </p>
                    </p>
                    <p>
                        <strong>AIQ Repair:</strong> @if($user->score->AIQ_S_ >= 0.93)
                        <span class="label label-success">compliance</span>
                        @else
                        <span class="label label-danger">no compliance</span>
                        @endif
                        <p>
                            <small>"Activities In Qualitiy Repairs"</small>
                        </p>
                    </p>
                    <p>
                        <strong>Self QA:</strong> @if($user->score->qa_ >= .60)
                        <span class="label label-success">compliance</span>
                        @else
                        <span class="label label-danger">no compliance</span>
                        @endif
                        <p>
                            <small>"Pictures of Qualitiy Control"</small>
                        </p>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- CCK --}}

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Customer Expirience 10%</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-6 col-lg-6">
            {{-- Cinema Kit Connection --}} @include('dashboard.graph_partial._cck_goal')
        </div>
        <div class="col-md-6 col-lg-6">
            @include('dashboard.graph_partial._pp')
        </div>
        <div class="col-md-4 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-table" aria-hidden="true"></i> Data</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-12 col-lg-12">
                        <div class="col-md-5 col-lg-5">
                            <p>
                                <strong>CCK TR </strong>
                                <small>Cinema Kit Connection Rate</small>
                                @if($user->score->cck_>=$user->score->cck_goal & $user->score->actual>=.57)
                                <span class="label label-success">compliance</span>
                                @else @if($user->score->cck_>=$user->score->cck_goal)
                                <span class="label label-warning">compliance with error</span>
                                @else
                                <span class="label label-danger">no compliance</span>
                                <p>
                                <small>
                                        <strong>Important:</strong>
                                        <em>if you're not complaince in this metric, this would cancel the whole metric of Cinema
                                            Kit Connection
                                        </em>
                                    </small>
                                </p>
                                @endif @endif
                            </p>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <p>
                                <strong>Call Back </strong>
                                <small>Decas with Calls Back</small>
                                @if($user->score->actual>=.57)
                                <span class="label label-success">compliance</span>
                                @else
                                <span class="label label-danger">no compliance</span>
                                <small>
                                    <strong>Important:</strong>
                                    <em>if you're not complaince in this metric, this would cancel the whole metric of Cinema
                                        Kit Connection
                                    </em>
                                </small>
                                @endif
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <p>
                                <strong>Protection Plan</strong>
                                @if($user->score->PP_>=.54)
                                <span class="label label-success">compliance</span>
                                @else
                                <span class="label label-danger">no compliance</span>
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12"><hr></div>
                    <div class="col-md-6 col-md-6">
                        <p>
                            <strong>Amount of BB decas Added to WorkOrders: </strong>{{$user->score->decas}}</p>
                        <p>
                            <strong>Amount of BB decas with Call Backs </strong>{{$user->score->cb}}</p>

                        <p>

                            <strong>Effectivity: </strong>{{($user->score->cck_)*100 }} %</p>
                    </div>
                    <div class="col-md-6 col-md-6">
                        <p>
                            <strong>Work order with BB Elegible: </strong> {{$user->score->elegible}}</p>
                        <p>
                            <strong>Work order with BB Elegible Closed: </strong>{{$user->score->added}}</p>

                    </div>
                    <div class="col-md-12 col-lg-12">
                        <hr>
                        <p>
                            <strong>Protection Plan Sell </strong>{{$user->score->sold}} | Goal: 54%</p>
                        <p>
                            <strong>Oportunities to Sell </strong> on {{$user->score->elegible}} Jobs </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
{{-- Minor Graph --}}

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Additional Charts</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-8 col-lg-8">
            {{-- Total Quality Graph --}} @include('dashboard.graph_partial._minor')

        </div>
        <div class="col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-table" aria-hidden="true"></i> Data</h3>
                </div>
                <div class="panel-body">

                    <p>
                        <strong>Service 90 Days: </strong>{{$user->score->i90}}</p>

                </div>

            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/analityc.js')}}"></script>
<script src="{{asset('js/raphael-2.1.4.min.js')}}"></script>
<script src="{{asset('js/justgage.js')}}"></script>
<script src="{{asset('js/gauge.js')}}"></script>
<script>

</script>
@endsection