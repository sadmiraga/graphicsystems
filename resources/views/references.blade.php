@extends('layouts.mainLayout')
@section('content')
    <div class="container index-container">
        <div class="top-machines">
            <h2>Sold Equipment</h2>
            <div class="row">

                @foreach ($machines as $machine)
                    <div class="card">
                        <div class="card-body">
                            <div class="banner" style="background-color: #C5312D;">
                                Sold
                            </div>
                            <a href="">
                                <!-- image -->
                                <?php $picture = DB::table('pictures')
                                ->where('machineID', '=', $machine->id)
                                ->first(); ?>
                                <div class="card-image">
                                    <a href="/show-machine/{{ $machine->id }}" class="overlay">
                                    </a>
                                    <img src="/images/machines/{{ $picture->image }}" alt="">
                                </div>
                            </a>
                            <div style="text-align: center;" class="card-name">
                                <a href=""> {{ $machine->name }}</a>
                            </div>
                            <div class="card-desc">
                                <p><span class="left">Model:</span> {{ $machine->model }}</p>

                                <!-- manufacturer -->
                                <?php
                                $manufacturer = DB::table('manufacturers')
                                ->where('id', '=', $machine->manufacturerID)
                                ->first();

                                $category = DB::table('categories')
                                ->where('id', '=', $machine->categoryID)
                                ->first();
                                ?>


                                <p><span class="left">Manufacturer:</span> {{ $manufacturer->name }}</p>
                                <p><span class="left">Category:</span> {{ $category->name }}</p>
                                <p><span class="left">Year:</span> {{ $machine->year }}</p>
                            </div>

                            <button onclick="location.href='/show-machine/{{ $machine->id }}'"
                                class="more-button">MORE</button>

                            <button class="request-button" data-toggle="modal" data-target=".bd-example-modal-lg">Request
                                Price</button>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
