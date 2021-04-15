@extends('layouts.mainLayout')

@section('content')
    <div class="index">
        <div class="carousel" data-flickity='{ "wrapAround": true , "prevNextButtons": false, "autoPlay": 3000}'>
            <div class="carousel-cell"><img src="/images/slideshow/1.jpg" alt=""></div>
            <div class="carousel-cell"></div>
            <div class="carousel-cell"></div>
            <div class="carousel-cell"></div>
            <div class="carousel-cell"></div>
        </div>
        <div class="brand-bar">
            <div class="container">
                <img src="/images/brand-logos/codimag.png" alt="" style="height: 3rem;">
                <img src="/images/brand-logos/mark-andy.png" alt="" style="width: 15rem; height: 2rem;">
                <img src="/images/brand-logos/mps.png" alt="" style="height: 3rem;">
                <img src="/images/brand-logos/nilpeter.svg" alt=""
                    style="height: 4rem; margin-left: -2rem; margin-right: -2rem;">
                <img src="/images/brand-logos/gallus.png" alt="" style="height: 4rem">
            </div>
        </div>

        <div class="container index-container">
            <div class="top-machines">
                <h2>Featured Equipment</h2>
                <div class="row">

                    @foreach ($machines as $machine)
                        <div class="card">
                            <div class="card-body">
                                <div class="banner">
                                    Featured
                                </div>
                                <a href="">
                                    <!-- image -->
                                    <?php $picture = DB::table('pictures')
                                    ->where('machineID', '=', $machine->id)
                                    ->first(); ?>
                                    <div class="card-image">
                                        <div class="overlay">
                                        </div>
                                        <img src="/images/machines/{{ $picture->image }}" alt="">
                                    </div>
                                </a>
                                <div class="card-name">
                                    <a href=""> 1300 WAT MAZAK SUPER TURBO X-48 CHAMP CNC LASER</a>
                                </div>
                                <div class="card-desc">
                                    <p><span class="left">Name:</span> Mazak</p>
                                    <p><span class="left">Model:</span> Super Turbo X-38</p>
                                    <p><span class="left">Manufacturer:</span> Mazak</p>
                                    <p><span class="left">Category:</span> Lasers, CNC</p>
                                    <p><span class="left">Year:</span> 2011</p>
                                </div>
                                <a href=""><button class="more-button">MORE</button></a>
                                <button class="request-button" data-toggle="modal"
                                    data-target=".bd-example-modal-lg">Request
                                    Price</button>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="center" style="text-align: center">
                <a href=""><button class="more-offers-button">MORE OFFERS</button></a>
            </div>
        </div>
        <div class="index-parallax" id="#index-parallax-id">
            <p style="margin-bottom: -0.5rem; font-size: 1.5rem;"><b>Subscribe to our Newsletter</b></p>
            <p>Make sure you're not missing out on our latest arrivals and offers</p>
            <input type="text" placeholder="your@email.com">
            <div class="index-parallax-buttons">
                <button class="btn btn-success">I'm an enduser</button>
                <button class="btn btn-success">I'm a machine dealer</button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="container">
                        <form>
                            <h2>Send Request</h2>
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
                                        <input type="tel" class="form-control" id="phone" placeholder="phone">
                                    </div>
                                </div>
                                <!--  col-md-6   -->
                            </div>
                            <!--  row   -->


                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="email">
                                    </div>
                                </div>
                                <!--  col-md-6   -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="url">Your Website <small>Please include http://</small></label>
                                        <input type="url" class="form-control" id="url" placeholder="url">
                                    </div>

                                </div>
                                <!--  col-md-6   -->
                            </div>
                            <!--  row   -->
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
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
@endsection
