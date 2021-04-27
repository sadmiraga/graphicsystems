@extends('layouts.mainLayout')






@section('content')




    <div class="show-machine-wrap" style="margin-top: 2rem;">
        <div class="container">
            <div class="show-machine-headline">




                <h3>{{ $machine->name }}</h3>
            </div>
            <hr>
            <div class="row show-machine-sm-desc-row">
                <div class="show-machine-sm-desc">

                    <div class="show-machine-sm-desc-price">
                        <p class="show-machine-sm-desc-small-text">Status</p>
                        @if ($machine->sold == false)
                            <p class="show-machine-sm-desc-text" style="color: green">Active</p>
                        @else
                            <p class="show-machine-sm-desc-text" style="color: red">Sold</p>
                        @endif

                    </div>
                    <div class="show-machine-sm-desc-year">
                        <p class="show-machine-sm-desc-small-text">Year of manufacture</p>
                        <p class="show-machine-sm-desc-text">{{ $machine->year }}</p>
                    </div>
                    <div class="show-machine-sm-desc-condition">
                        <p class="show-machine-sm-desc-small-text">Condition</p>
                        <p class="show-machine-sm-desc-text">{{ $machine->condition }}</p>
                    </div>

                </div>
            </div>
            <div class="row show-machine-carousel-row">


                <!-- images-->
                <div class="col-7">
                    <!-- Flickity HTML init -->
                    <div class="carousel carousel-main" data-flickity='{ "contain": true, "pageDots": false}'>

                        @foreach ($pictures as $picture)
                            <div class="carousel-cell carousel-cell-main"><img class="carousel-big-img" alt=""
                                    src="/images/machines/{{ $picture->image }}" height=100%>
                            </div>
                        @endforeach

                        @if ($machine->youtubeLink != null)
                            <iframe width="100%" height="543"
                                src="https://www.youtube.com/embed/{{ $machine->youtubeLink }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        @endif
                    </div>

                    <div class="carousel carousel-nav"
                        data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false}'>

                        @foreach ($pictures as $picture)
                            <div class="carousel-cell carousel-cell-nav "><img alt=""
                                    src="/images/machines/{{ $picture->image }}"></div>
                        @endforeach

                        <!-- index for video -->
                        @if ($machine->youtubeLink != null)
                            <div class="carousel-cell carousel-cell-nav youtubeIcon">
                                <img src="/images/logos/youtube.png">
                            </div>
                        @endif
                    </div>
                </div>


                <!-- REQUEST -->

                <div class="col-5 sticky-top show-machine-seller-col-5" style="z-index: 1 !important;">
                    {!! Form::open(['url' => '/send-machine-inquiry', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                    <div class="row" style="padding-top: 0">
                        <div class="col-12 show-machine-col-12">
                            <div class="card">
                                <h4 class="card-header">Send Request</h4>
                                <div class="card-body show-machine-seller">
                                    <div class="container">

                                        <input type="hidden" name="machineID" value="{{ $machine->id }}">

                                        <div class="row">
                                            <!-- First Name -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="first">First Name</label>
                                                    <input type="text" name="firstName" class="form-control" placeholder=""
                                                        id="first">
                                                </div>
                                            </div>

                                            <!--  Last Name   -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="last">Last Name</label>
                                                    <input type="text" name="lastName" class="form-control" placeholder=""
                                                        id="last">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">

                                            <!-- company -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="company">Company</label>
                                                    <input type="text" name="companyName" class="form-control"
                                                        placeholder="" id="company">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <!--  Phone Number  -->
                                                <div class="form-group">
                                                    <label for="phone">Phone Number</label>
                                                    <input type="tel" name="phone" class="form-control" id="phone"
                                                        placeholder="phone">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- email address -->
                                                <div class="form-group">
                                                    <label for="email">Email address</label>
                                                    <input type="email" name="email" required="required"
                                                        class="form-control" id="email" placeholder="email">
                                                </div>
                                            </div>


                                            <!--  Website   -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="url">Your Website</label>
                                                    <input type="text" name="website" class="form-control" id="url"
                                                        placeholder="url">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <textarea name="userMessage" class="form-control"
                                                id="exampleFormControlTextarea1" rows="10"></textarea>
                                        </div>

                                        <div style="text-align: center; margin-bottom: 1rem;">
                                            <button type="submit" class="btn btn-primary">Send Request</button>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                <!-- end of REQUEST -->




                <div class="col-7" style="margin-top: -5rem !important">
                    <div class="row machine-data-row" style="padding-top: 0">

                        <div class="col-12">
                            <div class="card" style="    margin-top: 4rem;">
                                <h4 class="card-header">MACHINE DATA</h4>
                                <div class="card-body">
                                    <div class="show-machine-desc">
                                        <p class="show-machine-desc-left"> Machine type:</p>
                                        <p class="show-machine-desc-right">{{ $machine->machineType }} </p>
                                    </div>
                                    <hr>
                                    <?php ?>
                                    <div class="show-machine-desc">
                                        <p class="show-machine-desc-left">Manufacturer:</p>
                                        <p class="show-machine-desc-right">{{ $manufacturer->name }}</p>
                                    </div>
                                    <hr>
                                    <div class="show-machine-desc">
                                        <p class="show-machine-desc-left">Model:</p>
                                        <p class="show-machine-desc-right">{{ $machine->model }}</p>
                                    </div>
                                    <hr>
                                    <div class="show-machine-desc">
                                        <p class="show-machine-desc-left">Condition:</p>
                                        <p class="show-machine-desc-right">{{ $machine->model }}</p>
                                    </div>
                                    <hr>
                                    <div class="show-machine-desc">
                                        <p class="show-machine-desc-left"> Listing ID:</p>
                                        <p class="show-machine-desc-right">{{ $machine->id }}</p>
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
                                        <p class="show-machine-desc-right">
                                            {!! nl2br(e($machine->description)) !!}
                                        </p>
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
