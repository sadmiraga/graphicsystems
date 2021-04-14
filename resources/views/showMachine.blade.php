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

                        <div class="carousel-cell carousel-cell-main"><img alt="" src="images/machine-images/1.jpg"
                                height=100%>
                        </div>
                        <div class="carousel-cell carousel-cell-main"><img alt="" src="images/machine-images/1.jpg"
                                height=100%>
                        </div>

                        <div class="carousel-cell carousel-cell-main"><img alt="" src="images/machine-images/1.jpg"
                                height=100%>
                        </div>

                        <div class="carousel-cell carousel-cell-main"><img alt="" src="images/machine-images/1.jpg"
                                height=100%>
                        </div>


                        <iframe width="100%" height="543" src="https://www.youtube.com/embed/" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>



                    </div>

                    <div class="carousel carousel-nav"
                        data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false}'>
                        <div class="carousel-cell carousel-cell-nav "><img alt="" src="images/machine-images/1.jpg  "></div>
                        <div class="carousel-cell carousel-cell-nav "><img alt="" src="images/machine-images/1.jpg  "></div>
                        <div class="carousel-cell carousel-cell-nav "><img alt="" src="images/machine-images/1.jpg  "></div>
                        <div class="carousel-cell carousel-cell-nav "><img alt="" src="images/machine-images/1.jpg  "></div>
                        <div class="carousel-cell carousel-cell-nav "><img alt="" src="images/machine-images/1.jpg  "></div>

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
                                <h4 class="card-header">Send Request</h4>
                                <div class="card-body show-machine-seller">
                                    <div class="container">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="first">First Name</label>
                                                        <input type="text" class="form-control" placeholder="" id="first">
                                                    </div>
                                                </div>
                                                <!--  col-md-6   -->

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="last">Last Name</label>
                                                        <input type="text" class="form-control" placeholder="" id="last">
                                                    </div>
                                                </div>
                                                <!--  col-md-6   -->
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="company">Company</label>
                                                        <input type="text" class="form-control" placeholder="" id="company">
                                                    </div>


                                                </div>
                                                <!--  col-md-6   -->

                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label for="phone">Phone Number</label>
                                                        <input type="tel" class="form-control" id="phone"
                                                            placeholder="phone">
                                                    </div>
                                                </div>
                                                <!--  col-md-6   -->
                                            </div>
                                            <!--  row   -->


                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label for="email">Email address</label>
                                                        <input type="email" class="form-control" id="email"
                                                            placeholder="email">
                                                    </div>
                                                </div>
                                                <!--  col-md-6   -->

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="url">Your Website</label>
                                                        <input type="url" class="form-control" id="url" placeholder="url">
                                                    </div>

                                                </div>
                                                <!--  col-md-6   -->
                                            </div>
                                            <!--  row   -->
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="10"></textarea>
                                            </div>
                                            <div style="text-align: center; margin-bottom: 1rem;">
                                                <button type="submit" class="btn btn-primary">Send Request</button>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7" style="margin-top: -5rem !important">
                    <div class="row machine-data-row" style="padding-top: 0">

                        <div class="col-12">
                            <div class="card" style="    margin-top: 4rem;">
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
                                    <hr>
                                    <div class="show-machine-desc">
                                        <p class="show-machine-desc-left"> Listing ID:</p>
                                        <p class="show-machine-desc-right"> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: 5%;">
                        <div class="col-12">
                            <div class="card" style="    margin-top: 1rem;">
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
