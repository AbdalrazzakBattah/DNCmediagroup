<?php
//    foreach ($customers as $customer)
//        {
//            dd($customer->location->getLat());
//        }
//?>
@extends('voyager::master')
@section('css')
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height:400px;
            width: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .pac-card {
            margin: 10px 10px 0 0;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            font-family: Roboto;
        }

        #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }

        #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div>
                <div id="title">
                    Autocomplete search
                </div>
                <div id="type-selector" class="pac-controls">
                    <input type="radio" name="type" id="changetype-all" checked="checked">
                    <label for="changetype-all">All</label>

                    <input type="radio" name="type" id="changetype-establishment">
                    <label for="changetype-establishment">Establishments</label>

                    <input type="radio" name="type" id="changetype-address">
                    <label for="changetype-address">Addresses</label>

                    <input type="radio" name="type" id="changetype-geocode">
                    <label for="changetype-geocode">Geocodes</label>
                </div>
                <div id="strict-bounds-selector" class="pac-controls">
                    <input type="checkbox" id="use-strict-bounds" value="">
                    <label for="use-strict-bounds">Strict Bounds</label>
                </div>
            </div>
            <div id="pac-container">
                <input id="pac-input"  type="text" class="search-map form-control"
                       placeholder="Enter a location">
            </div>
            <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div id="map"></div>
                        <div id="infowindow-content">
                            <img src="" width="16" height="16" id="place-icon">
                            <span id="place-name"  class="title"></span><br>
                            <span id="place-address"></span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Web Site</th>
                                <th>Briefing</th>
                                <th>Profile</th>
                            </tr>
                            </thead>
                            <tbody class="tbody">

                            </tbody>
                        </table>
                    </div>
            </div>
        </div>

    </div>
    <script>
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
        var map, popup, Popup;

        function initMap() {

            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 41.024479, lng: 28.944929},
                zoom: 13
            });
            // add marekers for customers
               {{--@foreach($customers as $customer)--}}

                    {{--var beachMarker = new google.maps.Marker({--}}
                        {{--position: {lat: {!! $customer->location->getLat() !!}, lng: {!! $customer->location->getLng() !!} },--}}
                        {{--map: map,--}}
                        {{--icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',--}}
                        {{--title:'{!! $customer->name !!} , {!! $customer->address !!}'--}}

                    {{--});--}}
                {{--@endforeach--}}
                {{--customer information--}}

            var bounds = new google.maps.LatLngBounds();
            var infoWindow = new google.maps.InfoWindow();
            @foreach($customers as $customer)
                var position = new google.maps.LatLng({!! $customer->location->getLat() !!}, {!! $customer->location->getLng() !!});
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png' ,
                    title: '{!! $customer->name !!} , {!! $customer->address !!}'
                });
                // Allow each marker to have an info window
                // html_elements = '<div><label>'+customer_name+'</label>'+' , '+'<label>'+customer_address+'</label><br><a href="">web site</a></div>';

                google.maps.event.addListener(marker, 'click', (function(marker) {
                    return function() {
                        var customer_name = '{!! $customer->name !!}';
                        var customer_address = '{!! $customer->address !!}';
                        var customer_web = '{!! $customer->web_site !!}';
                        infoWindow.setContent('<div><label>'+customer_name+'</label><br><label>'+customer_address+'</label><br><a href="'+customer_web+'">'+customer_web+'</a></div>');
                        infoWindow.open(map, marker);
                    }
                })(marker));
                // Allow each marker to have an info window
                google.maps.event.addListener(map, 'click', (function(marker) {
                    return function() {
                        infoWindow.close(map, marker);
                    }
                })(marker));
                // Automatically center the map fitting all markers on the screen
                map.fitBounds(bounds);

            @endforeach




            var card = document.getElementById('pac-card');
            var input = document.getElementById('pac-input');
            var types = document.getElementById('type-selector');
            var strictBounds = document.getElementById('strict-bounds-selector');

            map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

            var autocomplete = new google.maps.places.Autocomplete(input);

            // Bind the map's bounds (viewport) property to the autocomplete object,
            // so that the autocomplete requests use the current map bounds for the
            // bounds option in the request.
            autocomplete.bindTo('bounds', map);

            // Set the data fields to return when the user selects a place.
            autocomplete.setFields(
                ['address_components', 'geometry', 'icon', 'name']);

            var infowindow = new google.maps.InfoWindow();
            var infowindowContent = document.getElementById('infowindow-content');
            infowindow.setContent(infowindowContent);
            var marker = new google.maps.Marker({
                map: map,
                anchorPoint: new google.maps.Point(0, -29)
            });

            autocomplete.addListener('place_changed', function() {
                infowindow.close();
                marker.setVisible(false);
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    // User entered the name of a Place that was not suggested and
                    // pressed the Enter key, or the Place Details request failed.
                    window.alert("No details available for input: '" + place.name + "'");
                    return;
                }

                // If the place has a geometry, then present it on a map.
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);  // Why 17? Because it looks good.
                }
                marker.setPosition(place.geometry.location);
                marker.setVisible(true);

                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }

                infowindowContent.children['place-icon'].src = place.icon;
                infowindowContent.children['place-name'].textContent = place.name;
                infowindowContent.children['place-address'].textContent = address;
                infowindow.open(map, marker);
            });

            // Sets a listener on a radio button to change the filter type on Places
            // Autocomplete.
            function setupClickListener(id, types) {
                var radioButton = document.getElementById(id);
                radioButton.addEventListener('click', function() {
                    autocomplete.setTypes(types);
                });
            }

            setupClickListener('changetype-all', []);
            setupClickListener('changetype-address', ['address']);
            setupClickListener('changetype-establishment', ['establishment']);
            setupClickListener('changetype-geocode', ['geocode']);

            document.getElementById('use-strict-bounds')
                .addEventListener('click', function() {
                    console.log('Checkbox clicked! New state=' + this.checked);
                    autocomplete.setOptions({strictBounds: this.checked});
                });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeIJgtGDGbtc2ID6R-fVtSMffEPvlSbSQ&libraries=places&callback=initMap"
            async defer></script>


@endsection
@section('javascript')
    <script>
        $(document).ready(function () {
            $('#pac-input').change(function () {
                var data = $(this).val();
                var data_replace = data.replace('،',',')+',';
                var data2 = ' ';
                var i = 0;
                while (data_replace.charAt(i)!= ','){
                    data2 += data_replace.charAt(i);
                    i++;
                }
                $.ajax({
                    method : 'GET',
                    url : '{!! route('voyager.references.search') !!}',
                    data : {address :data2},
                    dataType : 'JSON',
                    success : function (response) {
                        console.log(JSON.stringify(response.customers));
                        $('.tbody').html('');
                        $.each(response.customers,function (i,data) {
                            var flag = '';
                            if (data.web_site != null){
                                flag = '<button class="btn btn-info">click here</button>' ;
                            }
                            $('.tbody').append(
                                '<tr>'+
                                '<td>'+data.name+'</td>'+
                                '<td>'+'<a href="'+data.web_site+'">'+flag+' </a>'+'</td>'+
                                '<td><a href="/admin/customers/briefing/'+data.id+'"><button class="btn btn-info">Briefing</button></a></td>'+
                                '<td><a href="/admin/customers/profile/'+data.id+'"><button class="btn btn-info">Profile</button></a></td>'+
                                '</tr>'
                            );
                        });
                    },
                    error  : function (xhr) {

                    }
                });
            });
        });
    </script>
@endsection
