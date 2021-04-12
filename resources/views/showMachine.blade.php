@extends('layouts.mainLayout')






@section('content')




    <div class="show-machine-wrap" style="margin-top: 2rem;">
        <div class="container">
            <div class="show-machine-headline">

                <div>

                </div>

                <div>

                </div>


                <h3></h3>
            </div>
            <hr>
            <div class="row show-machine-sm-desc-row">
                <div class="show-machine-sm-desc">

                    <div class="show-machine-sm-desc-price">
                        <p class="show-machine-sm-desc-small-text">Price</p>
                        <p class="show-machine-sm-desc-text"></p>
                    </div>
                    <div class="show-machine-sm-desc-year">
                        <p class="show-machine-sm-desc-small-text">Year of manufacture</p>
                        <p class="show-machine-sm-desc-text"></p>
                    </div>
                    <div class="show-machine-sm-desc-condition">
                        <p class="show-machine-sm-desc-small-text">Condition</p>
                        <p class="show-machine-sm-desc-text"></p>
                    </div>
                    <div class="show-machine-sm-desc-location">
                        <p class="show-machine-sm-desc-small-text">Location</p>
                        <p style="word-break:break-all;" class="show-machine-sm-desc-text">

                        </p>
                    </div>
                </div>
            </div>
            <div class="row show-machine-carousel-row">
                <div class="col-7">
                    <!-- Flickity HTML init -->
                    <div class="carousel carousel-main" data-flickity='{ "contain": true, "pageDots": false}'>

                        <div class="carousel-cell carousel-cell-main"><img alt="" src="/images/machine-images/1.jpg/"
                                height=100%>
                        </div>

                        <iframe width="100%" height="543" src="https://www.youtube.com/embed/" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>



                    </div>

                    <div class="carousel carousel-nav"
                        data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false}'>
                        <div class="carousel-cell carousel-cell-nav "><img alt="" src="/images/machines/"></div>

                        <!-- index for video -->
                        <div class="carousel-cell carousel-cell-nav youtubeIcon">
                            <img src="/images/logos/youtube.png">
                        </div>
                    </div>

                </div>

                <div class="col-5 sticky-top show-machine-seller-col-5" style="z-index: 1 !important;">
                    <div class="row" style="padding-top: 0">
                        <div class="col-12 show-machine-col-12">
                            <div class="card">
                                <h4 class="card-header">SELLER</h4>
                                <div class="card-body show-machine-seller">
                                    <div class="show-machine-seller-desc">
                                        <a href="#">
                                            <h5 onclick="location.href='/user-profile/">
                                            </h5>
                                        </a>
                                        <p>Contact person:

                                        </p>
                                        <p>Adress:</p>
                                        <p>Zipcode:</p>
                                        <p>City:</p>
                                        <p>State</p>
                                        <p>Country:></p>
                                    </div>
                                    <div class="col-12 show-machine-seller-desc-box">
                                        <div class="row show-machine-seller-desc-box-row">
                                            <div class="col-5 left">Phone:</div>
                                            <div class="col-7 right">225883</div>
                                        </div>
                                        <div class="row show-machine-seller-desc-box-row">
                                            <div class="col-5 left">Contact person:</div>
                                            <div class="col-7 right">
                                            </div>
                                        </div>
                                        <div class="row show-machine-seller-desc-box-row">
                                            <div class="col-5 left">Listing ID:</div>
                                            <div class="col-7 right"></div>
                                        </div>
                                    </div>
                                    <div class="col-12"
                                        style="position: relative;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            min-height: 300px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7" style="margin-top: -5rem !important">
                    <div class="row machine-data-row" style="padding-top: 0">

                        <div class="col-12">
                            <div class="card">
                                <h4 class="card-header">MACHINE DATA</h4>
                                <div class="card-body">
                                    <div class="show-machine-desc">
                                        <p class="show-machine-desc-left"> Machine type:</p>
                                        <p class="show-machine-desc-right"> </p>
                                    </div>
                                    <hr>
                                    <div class="show-machine-desc">
                                        <p class="show-machine-desc-left">Manufacturer:</p>
                                        <p class="show-machine-desc-right"></p>
                                    </div>
                                    <hr>
                                    <div class="show-machine-desc">
                                        <p class="show-machine-desc-left">Model:</p>
                                        <p class="show-machine-desc-right"></p>
                                    </div>
                                    <hr>
                                    <div class="show-machine-desc">
                                        <p class="show-machine-desc-left">Condition:</p>
                                        <p class="show-machine-desc-right"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <h4 class="card-header">PRICE AND LOCATION</h4>
                                <div class="card-body">
                                    <div class="show-machine-desc">
                                        <p class="show-machine-desc-left"> Location:</p>
                                        <p class="show-machine-desc-right">



                                        </p>
                                    </div>
                                    <hr>
                                    <button class="btn btn-success" type="button" data-toggle="modal"><i
                                            class="fa fa-envelope" aria-hidden="true" style="padding-right: 5px;"></i>
                                        Request Price
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <h4 class="card-header">OFFER DETAILS</h4>
                                <div class="card-body">
                                    <div class="show-machine-desc">
                                        <p class="show-machine-desc-left"> Listing ID:</p>
                                        <p class="show-machine-desc-right"> </p>
                                    </div>

                                    <hr>
                                    <div class="show-machine-desc">
                                        <p class="show-machine-desc-left"> Times seen:</p>
                                        <p class="show-machine-desc-right"> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 5%;">
                        <div class="col-12">
                            <div class="card">
                                <h4 class="card-header">DESCRIPTION</h4>
                                <div class="card-body">
                                    <div class="show-machine-desc">
                                        <p class="show-machine-desc-right"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
