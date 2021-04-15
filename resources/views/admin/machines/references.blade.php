@extends('layouts.adminLayout')

@section('content')

    @if (session()->has('message'))
        <div class="alert alert-success" style="text-align:center;">
            {{ session()->get('message') }}
        </div>
    @endif


    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">


                @foreach ($machines as $machine)
                    <!-- machine div -->
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">

                            <!-- get image -->
                            <?php $picture = DB::table('pictures')
                            ->where('machineID', '=', $machine->id)
                            ->first(); ?>

                            <div style="width: 100%;height:225">
                                <img style="object-fit: contain;" width="100%" height="225"
                                    src="/images/machines/{{ $picture->image }}">
                            </div>


                            <div class="card-body">

                                <!--name -->
                                <div style="display:flex;justify-content: space-between;">
                                    <p class="card-text">Name</p>
                                    <p class="card-text" style="float:right;">{{ $machine->name }}</p>
                                </div>

                                <!--model -->
                                <div style="display:flex;justify-content: space-between;">
                                    <p class="card-text">Model</p>
                                    <p class="card-text" style="float:right;">{{ $machine->model }}</p>
                                </div>

                                <!--manufacturer -->
                                <div style="display:flex;justify-content: space-between;">
                                    <p class="card-text">manufacturer</p>
                                    <p class="card-text" style="float:right;">{{ $machine->manufacturer }}</p>
                                </div>

                                <!--type -->
                                <div style="display:flex;justify-content: space-between;">
                                    <p class="card-text">Type</p>
                                    <p class="card-text" style="float:right;">{{ $machine->machineType }}</p>
                                </div>

                                <!--Price -->
                                <div style="display:flex;justify-content: space-between;">
                                    <p class="card-text">Price</p>
                                    <p class="card-text" style="float:right;">{{ $machine->price . '€' }}</p>
                                </div>

                                <!--year -->
                                <div style="display:flex;justify-content: space-between;">
                                    <p class="card-text">Year</p>
                                    <p class="card-text" style="float:right;">{{ $machine->year }}</p>
                                </div>

                                <!--inquiries -->
                                <div style="display:flex;justify-content: space-between;">
                                    <p class="card-text">Inquiries</p>
                                    <p class="card-text" style="float:right;">{{ $machine->inquiries }}</p>
                                </div>

                                <!--NOTE -->
                                <div style="display:flex;justify-content: space-between;">
                                    <p class="card-text">Note</p>
                                    <p class="card-text" style="float:right;">{{ $machine->locationNote }}</p>
                                </div>



                                <div class="d-flex justify-content-between align-items-center"
                                    style="justify-content: center !important;justify-content: center !important;">
                                    <div class="btn-group">

                                        <!-- EDIT -->
                                        <button {{ Popper::pop('Edit Listing') }} title="Edit" type="button"
                                            onclick="location.href='edit-machine/{{ $machine->id }}'"
                                            class="btn btn-icon btn-pill btn-primary"><i class="fa fa-fw fa-edit"></i>
                                        </button>

                                        <!-- EDIT IMAGES -->
                                        <button {{ Popper::pop('Edit Listing Images') }} title="Images" type="button"
                                            onclick="location.href='/edit-machine-images/{{ $machine->id }}'"
                                            class="btn btn-icon btn-pill btn-secondary"> <i class="fas fa-images"
                                                aria-hidden="true"></i>
                                        </button>



                                        <!-- DELETE MACHINE -->
                                        <button {{ Popper::pop('Remove Listing') }} title="Remove" type="button"
                                            onclick="location.href='/deleteMachine/{{ $machine->id }}'"
                                            class="btn btn-icon btn-pill btn-danger" data-toggle="modal"> <i
                                                class="fa fa-fw fa-trash"></i>
                                        </button>





                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>


@endsection
