@extends('voyager::master')
@section('css')
    <style>
        .profile
        {
            position: fixed;
            height: 100%;
            width: 100%;
            display: inline-block;
        }
        #map {
            height: 400px;
            width: 100%;
        }
        figcaption.ratings
        {
            margin-top:20px;
        }
        figcaption.ratings a
        {
            color:#f1c40f;
            font-size:11px;
        }
        figcaption.ratings a:hover
        {
            color:#f39c12;
            text-decoration:none;
        }
        .divider
        {
            border-top:1px solid rgba(0,0,0,0.1);
        }
        .emphasis
        {
            border-top: 4px solid transparent;
        }
        .emphasis:hover
        {
            border-top: 4px solid #1abc9c;
        }
        .emphasis h2
        {
            margin-bottom:0;
        }
        span.tags
        {
            background: #1abc9c;
            border-radius: 2px;
            color: #f5f5f5;
            font-weight: bold;
            padding: 2px 4px;
        }
        .dropdown-menu
        {
            background-color: #34495e;
            box-shadow: none;
            -webkit-box-shadow: none;
            width: 250px;
            margin-left: -125px;
            left: 50%;
        }
        .dropdown-menu .divider
        {
            background:none;
        }
        .dropdown-menu>li>a
        {
            color:#f5f5f5;
        }
        .dropup .dropdown-menu
        {
            margin-bottom:10px;
        }
        .dropup .dropdown-menu:before
        {
            content: "";
            border-top: 10px solid #34495e;
            border-right: 10px solid transparent;
            border-left: 10px solid transparent;
            position: absolute;
            bottom: -10px;
            left: 50%;
            margin-left: -10px;
            z-index: 10;
        }
        a{
            text-decoration: none;
        }
    </style>

@endsection
@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-6" >
            <div class="container">
                <div class="row">
                    <div class=" col-md-12  col-lg-12">
                        <div class="well profile">
                            <div class="col-sm-12">
                                <div class="col-xs-12 col-sm-12">
                                    <h2>{!! $customer->name !!}</h2>
                                    <p><strong>Country: </strong> {!! $customer->country !!}. </p>
                                    <p><strong>Address: </strong> {!! $customer->adress !!}. </p>
                                    <p><strong>Mobail: </strong> {!! $customer->mobail !!}. </p>
                                    <p><strong>Email: </strong> {!! $customer->email !!}. </p>
                                    <p><strong>Paket: </strong> {!! $customer->paket !!}. </p>
                                    <p><strong>Payment: </strong> {!! $customer->payment !!}. </p>
                                    <p><strong>Seller: </strong> {!! $customer->seller !!}. </p>
                                    <p><strong>Booker: </strong> {!! $customer->booker !!}. </p>
                                    <p><strong>Status: </strong> {!! $customer->status !!}. </p>
                                    <p><strong>Web Site: </strong> @if($customer->web_site)  <a href="{!! $customer->web_site !!}"><button class="btn btn-success">click here</button></a> @endif </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {!! Session::get('success') !!}
                </div>
            @endif
            <div class="row">
                <div class=" alert alert-info">Register your comments here !</div>
                <form method="post" action="{!! route('voyager.customers.notebook') !!}">
                    {!! csrf_field() !!}
                    <textarea style="height: 200px;" class="form-control " name="notebook" id="richtext1"></textarea>
                    <input name="customer_id" value="{!! $customer->id !!}" hidden>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>

            </div>
                <br><br>
            <div class="row">
                @if($customer->notebooks)
                    <?php
                    $notebooks = DB::table('notebooks')->where('customer_id','=',$customer->id)->limit(40)->get();
                    ?>
                    @foreach($customer->notebooks->reverse() as $customer)
                        <textarea class="form-control "   cols="30" rows="4" style="height:200px; font-size: 20px;" readonly>
                            {!! $customer->body !!}
                        </textarea>
                        <h5>by : @if($customer->user){!! $customer->user->name !!}@endif {!! $customer->created_at !!} </h5><br><br>
                    @endforeach
                    {{--@foreach($notebooks as $notebook)--}}
                            {{--<textarea class="form-control "  cols="30" rows="4" style="height:200px; font-size: 20px;" disabled>--}}
                            {{--{!! $notebook->body !!}--}}
                            {{--</textarea>--}}
                            {{--<h5>by : {!! $notebook->user->name !!}  :: {!! $notebook->created_at !!} </h5><br><br>--}}
                    {{--@endforeach--}}
                @endif
            </div>
        </div>
    </div>
@endsection
@section('javascript')


@endsection