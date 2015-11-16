@extends('layouts.base')
@section('title',"CareBear")
@section('style')
    <link rel="stylesheet" href="sass/style.css">
@endsection
@section('body')
    <div class="segment">
        <div id="slideshow">
            <ul class="bjqs">
                <li>
                    <img src="img/daycare2.jpg" alt="img2" class="img-responsive">
                </li>
                <li>
                    <img src="img/daycare_play_rug.jpg" alt="img2">
                </li>
                <li>
                    <img src="img/fhccc3.jpg" alt="img2">
                </li>
            </ul>
        </div>
        <div class="segment_content container-fluid">
            <div class="search_box">
                <div class="row">
                    <form class="form" method="get" action="search">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="ZIP Code" name="zip">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">Find!</button>
                                </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="slogan">
                <div class="row">
                    <h1 class="font_black">CareBear</h1>
                </div>
                <div class="row">
                    <img src="img/logo.png" alt="logo" width="100">
                </div>
                <div class="row">
                    <h2>Find loving daycare for your little one!</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container stat_panels">
        <div class="row text-center">
            <div class="col-xs-12 col-sm-4">
                <h3>
                    Over 1 million listing
                </h3>

                <img src="img/front_icons/im.png" alt="ico" height="100">

                <p>
                    A complete platform for day care search
                </p>
            </div>
            <div class="col-xs-12 col-sm-4">
                <h3>
                    Care giver assitance
                </h3>

                <img src="img/front_icons/images.png" alt="ico" height="100">

                <p>
                    Optimize operation cost and increase efficiency
                </p>
            </div>
            <div class="col-xs-12 col-sm-4">
                <h3>
                    Outsource Services
                </h3>

                <img src="img/front_icons/index.png" alt="ico" height="100">

                <p>Facilitates colloboration betwnn third party vendors and caregivers</p>
            </div>
        </div>
    </div>
    <div class="container-fluid ash_background cb_front_des">
        <div class="container">
            <div class="row">
                <h1 class="font_bold text-center">CareBear</h1>

                <h3 class="text-center">Find loving, clean and safe day care.</h3>
            </div>
            <div class="row">
                &nbsp;
            </div>
            <p class="text-justify">
                CareBear is a platform that brings parents, child care centers, day care and day care resources at to a
                single platform. CareBear platform helps parents to find loving, safe and clean day care facility for
                their
                little ones by searching and comparing the day care centers in their convenient locations. The platform
                provides complete information about day cares including reviews by parents and visitors which makes
                parents
                decision of process easier and less time consuming.


            </p>

            <p class="text-justify">
                CareBear is main marketing platform for day cares. The platform offers many productivity tools that
                helps
                day care centers to optimize their operation cost and easier to run. The registered day cares get a
                great
                insight in to their neighborhood market. The CareBear market insight tool helps day care to improve
                their
                services to better comply the level of service with other day care in their neighborhood.
            </p>

            <p class="text-justify">
                CareBear platform improves communication between parents and caregivers that helps that fosters better
                development of kids. CareBear parent community brings parents closure so they can discuss their day to
                day
                issues and child development progress, activity etc.
            </p>

        </div>
    </div>
    <div class="container">
        <div class="col-xs-12 col-sm-6">
            <h2>Why work with us?</h2>
            <ul>
                <li>125,000 day care listings</li>

                <li>200,000 registered parents</li>

                <li>43,000 registered partner businesses</li>
            </ul>


        </div>
        <div class="col-xs-12 col-sm-6">
            <div id="map"></div>
        </div>
    </div>

    <div class="container-fluid ash_background cb_comments">
        <div class="container">
            <div class="row">
                <h1 class="font_bold text-center">People say the nicest things… </h1>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 cb_comments_block">
                    <h4>Parents</h4>

                    <p class="text-justify">
                        “CareBear helped me found a day care that fits to my need. We found over 70
                        listing in 2 miles
                        range of our house. With their reviews and information I short listed 5 to go open houses. It
                        was surprising that information on site was so accurate when we visited to those day cares.”

                    </p>

                    <p>
                        - Adam Gray
                    </p>
                </div>
                <div class="col-xs-12 col-sm-4 cb_comments_block">
                    <h4>DayCares</h4>

                    <p class="text-justify">

                        “CareBear platform helped us to grow out business while we were struglling to bring new kids.
                        CareBear expert team helped us to uplift the quality of our day care and advised the area of
                        improvements.”s.”
                    </p>

                    <p>
                        - Kevin Cheng
                    </p>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <h4>Partner Bussinesses</h4>

                    <p class="text-justify">

                        “CareBear gave us a platform to connect with daycare business and partner to schedule the events
                        and generate business.”
                    </p>

                    <p>
                        - Trecy Stein
                    </p>
                </div>


            </div>
        </div>

    </div>


@endsection


@section('scripts')
    @parent
    <script type="text/javascript" src="js/bjqs-1.3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var windowHeight = $(window).height();
            var windowWidth = $(window).width();
            $("#slideshow").bjqs({
                'height': windowHeight,
                'width': windowWidth,
                'position': 'absolute',
                'responsive': true,
                'showcontrols': false,
                'showmarkers': false,
                'animtype': 'slide',
                animspeed: 10000,
                automatic: true,
                hoverpause: false

            });

            google.maps.event.addDomListener(window, 'load', mapInitialize);


            function mapInitialize() {
                var mapCanvas = document.getElementById('map');
                var mapOptions = {
                    center: new google.maps.LatLng(44.5403, -78.5463),
                    zoom: 8,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions);
            }

        });
    </script>
@endsection


