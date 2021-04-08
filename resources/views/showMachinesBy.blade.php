@extends('layouts.mainLayout')
@section('content')
    <div class="container show-machines-by-container">
        <h4>List of currently available used machines</h4>
        <div class="row">
            <div class="col-3">
                <p>Search by Category</p>

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
                        <button class="btn btn-primary">Send Request</button>
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
                        <button class="btn btn-primary">Send Request</button>
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
                        <button class="btn btn-primary">Send Request</button>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
