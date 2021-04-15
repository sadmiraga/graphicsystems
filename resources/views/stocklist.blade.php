@extends('layouts.mainLayout')
@section('content')
    <div class="container show-machines-by-container">
        <h4>List of currently available used machines</h4>
        <div class="row">
            <div class="col-3 category-col-3">
                <div class="machines-category">
                    <p class="bold">Machine Category <i class="fas fa-angle-down"></i></p>

                    @foreach ($categories as $category)
                        <a href="#">
                            <p class="light">{{ $category->name }}</p>
                        </a>
                    @endforeach
                </div>
                <div class="test">
                    <div class="machines-category">
                        <p class="bold" data-toggle="collapse" href="#machines-category-collapse" role="button"
                            aria-expanded="false" aria-controls="machines-category-collapse">Machine Category <i
                                class="fas fa-angle-down"></i></p>
                        <div class="collapse multi-collapse" id="machines-category-collapse">
                            <a href="#">
                                <p class="light">Off-set printing machinery</p>
                            </a>
                            <a href="#">
                                <p class="light">Flexo printing machinery</p>
                            </a>
                            <a href="#">
                                <p class="light">3D printing machinery</p>
                            </a>
                            <a href="#">
                                <p class="light">Set printing machinery</p>
                            </a>
                            <a href="#">
                                <p class="light">Bet printing machinery</p>
                            </a>
                        </div>
                    </div>

                    <div class="machines-brand">
                        <p class="bold" data-toggle="collapse" href="#machines-brand-collapse" role="button"
                            aria-expanded="false" aria-controls="machines-brand-collapse">Machine Brand <i
                                class="fas fa-angle-down"></i></p>
                        <div class="collapse" id="machines-brand-collapse">
                            <a href="">
                                <p class="light">Heidelberg</p>
                            </a>
                            <a href="">
                                <p class="light">Volkswagen</p>
                            </a>
                            <a href="">
                                <p class="light">Audi</p>
                            </a>
                            <a href="">
                                <p class="light">Peugot</p>
                            </a>
                            <a href="">
                                <p class="light">Ferrari</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="show-machine">
                    <div class="col-3">
                        <a href="">
                            <img src="/images/machine-images/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="" class="machine-name">Bobst Lemanic 67-H DR 67</a>
                        <P class="machine-desc">Machine ID: 1</p>
                        <p class="machine-desc">Year: 1</p>
                        <p class="machine-desc">Manufacturer: Bobst</p>
                        <p class="machine-desc">Model: Lemanic</p>
                    </div>
                    <div class="col-3 button-col-3">
                        <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Send
                            Request</button>
                    </div>
                </div>
                <hr>
                <div class="show-machine">
                    <div class="col-3">
                        <img src="/images/machine-images/1.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <a href="" class="machine-name">Bobst Lemanic 67-H DR 67</a>
                        <P class="machine-desc">Machine ID: 1</p>
                        <p class="machine-desc">Year: 1</p>
                        <p class="machine-desc">Manufacturer: Bobst</p>
                        <p class="machine-desc">Model: Lemanic</p>
                    </div>
                    <div class="col-3 button-col-3">
                        <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Send
                            Request</button>
                    </div>
                </div>
                <hr>
                <div class="show-machine">
                    <div class="col-3">
                        <img src="/images/machine-images/1.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <a href="" class="machine-name">Bobst Lemanic 67-H DR 67</a>
                        <P class="machine-desc">Machine ID: 1</p>
                        <p class="machine-desc">Year: 1</p>
                        <p class="machine-desc">Manufacturer: Bobst</p>
                        <p class="machine-desc">Model: Lemanic</p>
                    </div>
                    <div class="col-3 button-col-3">
                        <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Send
                            Request</button>
                    </div>
                </div>
                <hr>
            </div>
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
@endsection
