@extends('voyager::master')
@section('content')
<section class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="panel-group" id="accordion-markup1" >
                <div class="panel panel-default">
                    <div class="panel-heading"  >
                        <h4 class="panel-title" class="row">
                            <a data-toggle="collapse" data-parent="#accordion-markup1" href="#collapseOne1">
                                  Customer Information
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p class="row" style="margin-left:10px"><strong>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </strong>{!! $customer->name !!}. </p>
                            <p class="row" style="margin-left:10px"><strong>Address&nbsp;&nbsp;: </strong> {!! $customer->adress !!}. </p>
                            <p class="row" style="margin-left:10px"><strong>Mobil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong> <a href="">{!! $customer->mobail !!}</a> </p>
                            <p class="row" style="margin-left:10px"><strong>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong> {!! $customer->email !!}. </p>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="panel-group" id="accordion-markup2" >--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading"  >--}}
                        {{--<h4 class="panel-title">--}}
                            {{--<a data-toggle="collapse" data-parent="#accordion-markup2" href="#collapseOne2">--}}
                                {{--Site Information--}}
                            {{--</a>--}}
                            {{--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@if (!$customer->website)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endif--}}
                            {{--@if($customer->website)<a href="{!! route('voyager.websites.delete1',['id'=>$customer->website->id,'customer_id'=>$customer->id]) !!}"> <button type="button" class="btn btn-danger">Delete</button></a>@endif--}}
                            {{--@if($customer->website)<a href="{!! route('voyager.websites.edit',['id'=>$customer->website->id,'customer_id'=>$customer->id]) !!}"><button class="btn btn-warning">Edit</button></a> @endif--}}
                            {{--@if(!$customer->website)<a href="{!! route('voyager.websites.create',['customer_id'=>$customer->id]) !!}"><button class="btn btn-success">add</button></a>@endif--}}
                        {{--</h4>--}}
                    {{--</div>--}}
                    {{--<div id="collapseOne2" class="panel-collapse collapse in">--}}
                        {{--<div class="panel-body">--}}
                                {{--<p class="row" style="margin-left:10px"><strong>company&nbsp;&nbsp;&nbsp;&nbsp;: </strong>@if($customer->website){!! $customer->website->company !!}@endif </p>--}}
                                {{--<p class="row" style="margin-left:10px"><strong>First Name&nbsp;: </strong>@if($customer->website){!! $customer->website->first_name !!}@endif </p>--}}
                                {{--<p class="row" style="margin-left:10px"><strong>Last Name &nbsp;: </strong>@if($customer->website){!! $customer->website->last_name !!} @endif</p>--}}
                                {{--<p class="row" style="margin-left:10px"><strong>Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>@if($customer->website){!! $customer->website->address !!}@endif </p>--}}
                                {{--<p class="row" style="margin-left:10px"><strong>Post Code&nbsp;&nbsp; : </strong>@if($customer->website){!! $customer->website->post_code !!}@endif </p>--}}
                                {{--<p class="row" style="margin-left:10px"><strong>City &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  </strong>@if($customer->website){!! $customer->website->city !!} @endif</p>--}}
                                {{--<p class="row" style="margin-left:10px"><strong>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;: </strong>@if($customer->website){!! $customer->website->email !!}@endif </p>--}}
                                {{--<p class="row" style="margin-left:10px"><strong>Telefon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>@if($customer->website){!! $customer->website->telefon !!} @endif</p>--}}
                                {{--<p class="row" style="margin-left:10px"><strong>phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong>@if($customer->website){!! $customer->website->phone !!} @endif</p>--}}
                                {{--<p class="row" style="margin-left:10px"><strong>Fax &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong>@if($customer->website){!! $customer->website->fax !!}@endif </p>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="panel-group" id="accordion-markup3" >
                <div class="panel panel-default">
                    <div class="panel-heading"  >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion-markup3" href="#collapseOne3">
                                Design Information
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@if (!$customer->design)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endif
                            @if($customer->design)<a href="{!! route('voyager.designs.delete1',['id'=>$customer->design->id,'customer_id'=>$customer->id]) !!}"> <button type="button" class="btn btn-danger">Delete</button></a>@endif
                            @if($customer->design)<a href="{!! route('voyager.designs.edit',['id'=>$customer->design->id,'customer_id'=>$customer->id]) !!}"><button class="btn btn-warning">Edit</button></a> @endif
                            @if(!$customer->design)<a href="{!! route('voyager.designs.create',['customer_id'=>$customer->id]) !!}"><button class="btn btn-success">add</button></a>@endif
                        </h4>
                    </div>
                    <div id="collapseOne3" class="panel-collapse collapse in">
                        <div class="panel-body">
                                <p><strong>company :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->design){!! $customer->design->construction !!}@endif </p>
                                <p><strong>Header :&nbsp;&nbsp; </strong>@if($customer->design){!! $customer->design->header !!}@endif </p>
                                <p><strong>Footer :&nbsp;&nbsp;&nbsp; </strong>@if($customer->design){!! $customer->design->footer !!} @endif</p>
                                <p><strong>What does not like :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->design){!! $customer->design->not_like !!}@endif </p>
                                <p><strong>Remarks :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->design){!! $customer->design->remarks !!}@endif </p>
                                <p><strong>Internal Comments :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->design){!! $customer->design->internal_comments !!}@endif </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-group" id="accordion-markup4" >
                <div class="panel panel-default">
                    <div class="panel-heading"  >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion-markup4" href="#collapseOne4">
                                Social Media
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@if (!$customer->social)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endif
                            @if($customer->social)<a href="{!! route('voyager.socials.delete1',['id'=>$customer->social->id,'customer_id'=>$customer->id]) !!}"> <button type="button" class="btn btn-danger">Delete</button></a>@endif
                            @if($customer->social)<a href="{!! route('voyager.socials.edit',['id'=>$customer->social->id,'customer_id'=>$customer->id]) !!}"><button class="btn btn-warning">Edit</button></a> @endif
                            @if(!$customer->social)<a href="{!! route('voyager.socials.create',['customer_id'=>$customer->id]) !!}"><button class="btn btn-success">add</button></a>@endif
                        </h4>
                    </div>
                    <div id="collapseOne4" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p><strong>Facebook link :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<a href="{!! $customer->social->facebook_link !!}">{!! $customer->social->facebook_link !!}</a>@endif </p>
                            <p><strong>Facebook new :&nbsp;&nbsp; </strong>@if($customer->social)<input type="checkbox"   @if($customer->social->facebook_new)checked="checked" @endif disabled>  @endif</p>
                            <p><strong>Facebook st available :&nbsp;&nbsp; </strong>@if($customer->social)<input type="checkbox"   @if($customer->social->facebook_st_available)checked="checked" @endif disabled >  @endif</p>
                            <p><strong>Twitter Link :&nbsp;&nbsp;&nbsp;</strong>@if($customer->social)<a href="{!! $customer->social->twitter_link !!}">{!! $customer->social->twitter_link !!} </a>@endif</p>
                            <p><strong>Twitter st available :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<input type="checkbox"   @if($customer->social->twitter_st_available)checked="checked" @endif disabled >@endif </p>
                            {{--<p><strong>Google link :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<a href="{!! $customer->social->google_link !!}">{!! $customer->social->google_link !!}</a>@endif </p>--}}
                            {{--<p><strong>Google st available :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<input type="checkbox" @if($customer->social->google_st_available) checked="checked" @endif disabled> @endif</p>--}}
                            <p><strong>Instagram link :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<a href="{!! $customer->social->instagram_link !!}">{!! $customer->social->instagram_link !!}</a>@endif </p>
                            <p><strong>Instagram st available :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<input type="checkbox"   @if($customer->social->instagram_st_available)checked="checked" @endif disabled >@endif </p>
                            {{--<p><strong>Linkedin :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<a href="{!! $customer->social->linkedin!!}">{!! $customer->social->likedin !!}</a>@endif </p>--}}
                            {{--<p><strong>Linkedin st available :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<input type="checkbox"   @if($customer->social->linkedin_st_available)checked="checked" @endif disabled >@endif </p>--}}
                            {{--<p><strong>Snapchat :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<a href="{!! $customer->social->snapchat!!}">{!! $customer->social->snapchat !!}</a>@endif </p>--}}
                            {{--<p><strong>Snapchat st available :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<input type="checkbox"   @if($customer->social->snapchat_st_available)checked="checked" @endif disabled >@endif </p>--}}
                            {{--<p><strong>Soundcloud :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<a href="{!! $customer->social->soundcloud!!}">{!! $customer->social->soundcloud !!}</a>@endif </p>--}}
                            {{--<p><strong>Soundcloud st available :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<input type="checkbox"   @if($customer->social->soundcloud_st_available)checked="checked" @endif  disabled>@endif </p>--}}
                            {{--<p><strong>Tumblr :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<a href="{!! $customer->social->tumblr!!}">{!! $customer->social->tumblr !!}</a>@endif </p>--}}
                            {{--<p><strong>Tumblr st available :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<input type="checkbox"   @if($customer->social->tumblr_st_available)checked="checked" @endif disabled >@endif </p>--}}
                            {{--<p><strong>Whats app :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<a href="">{!! $customer->social->whatsapp !!}</a>@endif </p>--}}
                            {{--<p><strong>whats app st available :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<input type="checkbox"   @if($customer->social->whatsapp_st_available)checked="checked" @endif disabled >@endif </p>--}}
                            {{--<p><strong>Youtube :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<a href="{!! $customer->social->youtube !!}">{!! $customer->social->youtube !!}</a>@endif </p>--}}
                            {{--<p><strong>Youtube st available :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>@if($customer->social)<input type="checkbox"   @if($customer->social->youtube_st_available)checked="checked" @endif disabled >@endif </p>--}}
                            <lable> <strong>Internal Comments</strong></lable><br>
                            <textarea  cols="30" rows="10" disabled="">@if($customer->social) {!! $customer->social->internal_comments !!}@endif</textarea>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="panel-group" id="accordion-markup5" >--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading"  >--}}
                        {{--<h4 class="panel-title">--}}
                            {{--<a data-toggle="collapse" data-parent="#accordion-markup5" href="#collapseOne5">--}}
                                {{--Legal information--}}
                            {{--</a>--}}
                            {{--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@if (!$customer->legal)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endif--}}
                            {{--@if($customer->legal)<a href="{!! route('voyager.legals.delete1',['id'=>$customer->legal->id,'customer_id'=>$customer->id]) !!}"> <button type="button" class="btn btn-danger">Delete</button></a>@endif--}}
                            {{--@if($customer->legal)<a href="{!! route('voyager.legals.edit',['id'=>$customer->legal->id,'customer_id'=>$customer->id]) !!}"><button class="btn btn-warning">Edit</button></a> @endif--}}
                            {{--@if(!$customer->legal)<a href="{!! route('voyager.legals.create',['customer_id'=>$customer->id]) !!}"><button class="btn btn-success">add</button></a>@endif--}}
                        {{--</h4>--}}
                    {{--</div>--}}
                    {{--<div id="collapseOne5" class="panel-collapse collapse in">--}}
                        {{--<div class="panel-body">--}}
                            {{--<textarea  cols="30" rows="10" disabled="">@if($customer->legal) {!! $customer->legal->information !!}@endif</textarea>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="panel-group" id="accordion-markup6" >
                <div class="panel panel-default">
                    <div class="panel-heading"  >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion-markup6" href="#collapseOne6">
                                Domains
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{!! route('voyager.domains.create',['customer_id'=>$customer->id]) !!}"><button class="btn btn-success">Add</button></a>
                        </h4>
                    </div>
                    <div id="collapseOne6" class="panel-collapse collapse in" style="overflow: scroll">
                        <div class="panel-body" >
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>domain</th>
                                    <th>type</th>
                                    <th>authentication</th>
                                    <th>provider</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($customer->domains)
                                    @foreach($customer->domains as $domain)
                                        <tr>
                                            <td><a href="{!! $domain->domain !!}">{!! $domain->domain !!}</a></td>
                                            <td>{!! $domain->type !!}</td>
                                            <td>{!! $domain->authentication !!}</td>
                                            <td>{!! $domain->provider !!}</td>
                                            <td>{!! $domain->remarks !!}</td>
                                            <td>
                                                <a href="{!! route('voyager.domains.delete1',['id'=>$domain->id,'customer_id'=>$customer->id]) !!}"> <button type="button" class="btn btn-danger">Delete</button></a>
                                                <a href="{!! route('voyager.domains.edit',['id'=>$domain->id,'customer_id'=>$customer->id]) !!}"><button class="btn btn-warning">Edit</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-group" id="accordion-markup7" >
                <div class="panel panel-default">
                    <div class="panel-heading"  >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion-markup7" href="#collapseOne7">
                                Opening hours
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@if (!$customer->clock)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endif
                            @if($customer->clock)<a href="{!! route('voyager.clocks.delete1',['id'=>$customer->clock->id,'customer_id'=>$customer->id]) !!}"> <button type="button" class="btn btn-danger">Delete</button></a>@endif
                            @if($customer->clock)<a href="{!! route('voyager.clocks.edit',['id'=>$customer->clock->id,'customer_id'=>$customer->id]) !!}"><button class="btn btn-warning">Edit</button></a> @endif
                            @if(!$customer->clock)<a href="{!! route('voyager.clocks.create',['customer_id'=>$customer->id]) !!}"><button class="btn btn-success">Add</button></a>@endif
                        </h4>
                    </div>
                    <div id="collapseOne7" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered">
                               <div class="breifing-row">
                                   <div class="row">
                                       <div class="col-lg-6 col-md-6">
                                           <br>
                                           <h5>Monday</h5>
                                           <h5>Tuesday</h5>
                                           <h5>Wednesday</h5>
                                           <h5>Thursday</h5>
                                           <h5>Friday</h5>
                                           <h5>Saturday</h5>
                                           <h5>Sunday</h5>
                                       </div>
                                       <div class="col-lg-3 col-md-3">
                                           <h5>Time begins</h5>
                                           @if($customer->clock)
                                               <h5>{!! $customer->clock->monday_begin !!}</h5>
                                               <h5>{!! $customer->clock->tuesday_begin !!}</h5>
                                               <h5>{!! $customer->clock->wednesday_begin !!}</h5>
                                               <h5>{!! $customer->clock->thursday_begin !!}</h5>
                                               <h5>{!! $customer->clock->friday_begin !!}</h5>
                                               <h5>{!! $customer->clock->saturday_begin !!}</h5>
                                               <h5>{!! $customer->clock->sunday_begin !!}</h5>
                                           @endif
                                       </div>
                                       <div class="col-lg-3 col-md-3">
                                           <h5>Time Ends</h5>
                                           @if($customer->clock)
                                               <h5>{!! $customer->clock->monday_end !!}</h5>
                                               <h5>{!! $customer->clock->tuesday_end !!}</h5>
                                               <h5>{!! $customer->clock->wednesday_end !!}</h5>
                                               <h5>{!! $customer->clock->thursday_end !!}</h5>
                                               <h5>{!! $customer->clock->friday_end !!}</h5>
                                               <h5>{!! $customer->clock->saturday_end !!}</h5>
                                               <h5>{!! $customer->clock->sunday_end !!}</h5>
                                           @endif
                                       </div>
                                   </div>
                               </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-group" id="accordion-markup8" >
                <div class="panel panel-default">
                    <div class="panel-heading"  >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion-markup8" href="#collapseOne8">
                                Logos
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@if (!$customer->logos)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if($customer->logos)<a href="{!! route('voyager.logos.delete1',['id'=>$customer->logos->id,'customer_id'=>$customer->id]) !!}"> <button type="button" class="btn btn-danger">Delete</button></a>@endif
                            @if($customer->logos)<a href="{!! route('voyager.logos.edit',['id'=>$customer->logos->id,'customer_id'=>$customer->id]) !!}"><button class="btn btn-warning">Edit</button></a> @endif
                            @if(!$customer->logos)<a href="{!! route('voyager.logos.create',['customer_id'=>$customer->id]) !!}"><button class="btn btn-success">Add</button></a>@endif
                        </h4>
                    </div>
                    <div id="collapseOne8" class="panel-collapse collapse in">
                        <div class="panel-body">
                            @if($customer->logos)
                                <div class="row">
                                    <div class="col-lg-3 col-md-3"><h5>source :</h5></div>
                                    <div class="col-lg-6 col-md-6"><h5>{!! $customer->logos->source !!}</h5></div>
                                </div>
                                <h5>logos</h5>
                                <div class="row">
                                    @if($customer->logos->logo!=null)
                                        @foreach( json_decode($customer->logos->logo) as $item )
                                            <div class="col-lg-4 col-md-4">
                                                <a href="{!! Storage::url($item)  !!}"  target="_blank"><img src="{!! Storage::url($item)  !!}"  style=" width:75px; height: 75px;"></a>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            @endif
                            <h5>remarks</h5>
                            <textarea  cols="30" rows="10" style="overflow: scroll;" disabled="">
                                @if($customer->logos)
                                    {!! $customer->logos->remarks !!}
                                @endif
                            </textarea>
                            <h5>internal comments</h5>
                            <textarea  cols="30" rows="10" style="overflow: scroll;" disabled="">
                                @if($customer->logos)
                                    {!! $customer->logos->internal_comments !!}
                                @endif
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="panel-group" id="accordion-markup9" >
                <div class="panel panel-default">
                    <div class="panel-heading"  >
                        <h4 class="panel-title ">
                            <a data-toggle="collapse" data-parent="#accordion-markup9" href="#collapseOne9">
                                 Structure
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@if (!$customer->section)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endif
                            @if($customer->section)<a href="{!! route('voyager.sections.delete1',['id'=>$customer->section->id,'customer_id'=>$customer->id]) !!}"> <button type="button" class="btn btn-danger">Delete</button></a>@endif
                            @if($customer->section)<a href="{!! route('voyager.sections.edit',['id'=>$customer->section->id,'customer_id'=>$customer->id]) !!}"><button class="btn btn-warning">Edit</button></a> @endif
                            @if(!$customer->section)<a href="{!! route('voyager.sections.create',['customer_id'=>$customer->id]) !!}"><button class="btn btn-success">Add</button></a>@endif
                        </h4>
                    </div>
                    <div id="collapseOne9" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="panel-group" id="accordion-markup" >
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion-markup" href="#collapseOne">
                                                About Us
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                           @if(isset($customer->section->about_us))

                                              <div class="container" style="overflow: scroll;">
                                                  {!! $customer->section->about_us !!}
                                              </div>

                                           @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion-markup" href="#collapseTwo" class="collapsed">
                                                Services
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            @if(isset($customer->section->services))

                                                  <div class="container" style="overflow: scroll;">
                                                      {!! $customer->section->services !!}
                                                  </div>

                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion-markup" href="#collapseThree" class="collapsed">
                                                References
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           @if(isset($customer->section->references))
                                               <div class="container" style="overflow: scroll;">
                                                   {!! $customer->section->references !!}

                                               </div>
                                           @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion-markup" href="#collapseFour" class="collapsed">
                                                Contact
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           @if(isset($customer->section->contact))
                                               <div class="container" style="overflow: scroll;">
                                                   {!! $customer->section->contact !!}
                                               </div>
                                           @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="panel-group" id="accordion-markup10" >
                <div class="panel panel-default">
                    <div class="panel-heading"  >
                        <h4 class="panel-title ">
                            <a data-toggle="collapse" data-parent="#accordion-markup10" href="#collapseOne10">
                                Files
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@if (!$customer->files)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endif
                            @if($customer->files)<a href="{!! route('voyager.files.delete1',['id'=>$customer->files->id,'customer_id'=>$customer->id]) !!}"> <button type="button" class="btn btn-danger">Delete</button></a>@endif
                            @if($customer->files)<a href="{!! route('voyager.files.edit',['id'=>$customer->files->id,'customer_id'=>$customer->id]) !!}"><button class="btn btn-warning">Edit</button></a> @endif
                            @if(!$customer->files)<a href="{!! route('voyager.files.create',['customer_id'=>$customer->id]) !!}"><button class="btn btn-success">Add</button></a>@endif
                        </h4>
                    </div>
                    <div id="collapseOne10" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="panel-group" id="accordion-markup" >
                                {{--<div class="panel panel-default">--}}
                                    {{--<div class="panel-heading">--}}
                                        {{--<h4 class="panel-title">--}}
                                            {{--<a data-toggle="collapse" data-parent="#accordion-markup" href="#collapseBusiness">--}}
                                                {{--Business Cards--}}
                                            {{--</a>--}}
                                        {{--</h4>--}}
                                    {{--</div>--}}
                                    {{--<div id="collapseBusiness" class="panel-collapse collapse in">--}}
                                        {{--<div class="panel-body">--}}
                                             {{--@if(isset($customer->files->business_cards))--}}
                                               {{--<div class="row">--}}
                                                {{--@foreach( json_decode($customer->files->business_cards) as $item )--}}
                                                    {{--<div class="col-lg-4 col-md-4">--}}
                                                        {{--<a href="{!! Storage::url($item->download_link) !!}" title="{!! $item->original_name !!}" target="_blank"><img src="{!! asset('storage1/PDF.png') !!}" alt="pdf" style="max-width:75px; ">{!! str_limit($item->original_name,9) !!}</a>--}}
                                                    {{--</div>--}}
                                                {{--@endforeach--}}
                                               {{--</div>--}}
                                             {{--@endif--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="panel panel-default">--}}
                                    {{--<div class="panel-heading">--}}
                                        {{--<h4 class="panel-title">--}}
                                            {{--<a data-toggle="collapse" data-parent="#accordion-markup" href="#collapseBrochure" class="collapsed">--}}
                                                {{--Brochure--}}
                                            {{--</a>--}}
                                        {{--</h4>--}}
                                    {{--</div>--}}
                                    {{--<div id="collapseBrochure" class="panel-collapse collapse">--}}
                                        {{--<div class="panel-body">--}}
                                            {{--@if(isset($customer->files->brochure))--}}
                                                {{--<div class="row">--}}
                                                    {{--@foreach( json_decode($customer->files->brochure) as $item )--}}
                                                        {{--<div class="col-lg-4 col-md-4">--}}
                                                            {{--<a href="{!! Storage::url($item->download_link)  !!}" title="{!! $item->original_name !!}" target="_blank"><img src="{!! asset('storage1/PDF.png') !!}" alt="pdf" style="max-width:75px; ">{!! str_limit($item->original_name,9) !!}</a>--}}
                                                        {{--</div>--}}
                                                    {{--@endforeach--}}
                                                {{--</div>--}}
                                            {{--@endif--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="panel panel-default">--}}
                                    {{--<div class="panel-heading">--}}
                                        {{--<h4 class="panel-title">--}}
                                            {{--<a data-toggle="collapse" data-parent="#accordion-markup" href="#collapseFlyer" class="collapsed">--}}
                                                {{--Flyer--}}
                                            {{--</a>--}}
                                        {{--</h4>--}}
                                    {{--</div>--}}
                                    {{--<div id="collapseFlyer" class="panel-collapse collapse">--}}
                                        {{--<div class="panel-body">--}}
                                            {{--@if(isset($customer->files->flyer))--}}
                                                {{--<div class="row">--}}
                                                    {{--@foreach( json_decode($customer->files->flyer) as $item )--}}
                                                        {{--<div class="col-lg-4 col-md-4">--}}
                                                            {{--<a href="{!! Storage::url($item->download_link)  !!}" title="{!! $item->original_name !!}" target="_blank"><img src="{!! asset('storage1/PDF.png') !!}" alt="pdf" style="max-width:75px; ">{!! str_limit($item->original_name,9) !!}</a>--}}
                                                        {{--</div>--}}
                                                    {{--@endforeach--}}
                                                {{--</div>--}}
                                            {{--@endif--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion-markup" href="#collapseTexts" class="collapsed">
                                                Texts
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTexts" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            @if(isset($customer->files->texts))
                                                <div class="row">
                                                    @foreach( json_decode($customer->files->texts) as $item )
                                                        <div class="col-lg-4 col-md-4">
                                                            <a href="{!! Storage::url($item->download_link)  !!}" title="{!! $item->original_name !!}" target="_blank"><img src="{!! asset('storage1/PDF.png') !!}" alt="pdf" style="max-width:75px; ">{!! str_limit($item->original_name,9) !!}</a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion-markup" href="#collapseFotos" class="collapsed">
                                                Fotos
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFotos" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            @if(isset($customer->files->fotos))
                                                <div class="row">
                                                    @foreach( json_decode($customer->files->fotos) as $item )
                                                        <div class="col-lg-4 col-md-4">
                                                            <a href="{!! Storage::url($item)  !!}"  target="_blank"><img src="{!! Storage::url($item)  !!}"  style=" width:75px; height: 75px;"></a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion-markup" href="#collapseContract" class="collapsed">
                                                Contract & Invoice
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseContract" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            @if(isset($customer->files->contract))
                                                <div class="row">
                                                    @foreach( json_decode($customer->files->contract) as $item )
                                                        <div class="col-lg-4 col-md-4">
                                                            <a href="{!! Storage::url($item->download_link)  !!}" title="{!! $item->original_name !!}" target="_blank"><img src="{!! asset('storage1/PDF.png') !!}" alt="pdf" style="max-width:75px; ">{!! str_limit($item->original_name,9) !!}</a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{--pop up for delete --}}
    {{--<div class="modal fade" id="myModal" role="dialog">--}}
        {{--<div class="modal-dialog">--}}

            {{--<!-- Modal content-->--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                    {{--<h4 class="modal-title">Delete details</h4>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<p>are you sure.</p>--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}

                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
</section>
@endsection