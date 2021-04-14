@extends('layouts.adminLayout')


@section('content')

    <div class="col-sm-11" id="wrapper-form-container ">
        <div class="card mb-4" style="width: 70%;margin-right:15%;margin-left:15%;margin-top:5%;margin-bottom:5%;">

            <!-- FORM SECTION -->
            {!! Form::open(['url' => '/edit-machine-exe', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'machineForm', 'files' => 'false', 'onsubmit' => 'showLoading();']) !!}

            @csrf
            <div style="font-size: 20px;" class="card-header bg-light font-weight-bold">
                Edit "{{ $machine->name }}"
            </div>


            <input type="hidden" name="machineID" value="{{ $machine->id }}">

            @if ($errors->any())
                <div style="text-align:center;" class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br>
                    @endforeach
                </div>
            @endif

            <div class="card-body">

                <!-- NAME -->
                <div class="form-group">
                    <input type="text" value="{{ $machine->name }}" required="required" name="machineName"
                        class="form-control" placeholder="Machine Name">
                </div>

                <!-- MODEL -->
                <div class="form-group">
                    <input type="text" value="{{ $machine->model }}" required="required" name="machineModel"
                        class="form-control" placeholder="Machine Model">
                </div>

                <!-- MANUFACTURER -->
                <div class="form-group">
                    <input required="required" value="{{ $machine->manufacturer }}" type="text" name="machineManufacturer"
                        class="form-control" placeholder="Machine Manufacturer">
                </div>

                <!-- TYPE -->
                <div class="form-group">
                    <input required="required" value="{{ $machine->machineType }}" type="text" name="machineType"
                        class="form-control" placeholder="Machine Type">
                </div>

                <!-- PRICE -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">€</span>
                    </div>
                    <input required="required" value="{{ $machine->price }}" type="number" name="machinePrice"
                        class="form-control" placeholder="Machine Price">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>



                <br>

                <!-- YEAR -->
                <div class="form-group">
                    <input required="required" value="{{ $machine->year }}" type="number" name="machineYear"
                        class="form-control" placeholder="Year of manufacture">
                </div>

                <!-- CONDITION -->
                <div class="form-group">
                    <select required="required" name="condition" class="form-control">

                        @if ($machine->condition == 'new')
                            <option selected value="new">New</option>
                            <option value="used">Used</option>
                        @else
                            <option value="new">New</option>
                            <option selected value="used">Used</option>
                        @endif


                    </select>
                </div>

                <?php $formated = str_replace('<br />', PHP_EOL, $machine->description); ?>

                <!-- DESCRIPTION -->
                <div class="form-group">
                    <textarea required="required" name="machineDescription" placeholder="Please Enter Machine Description"
                        class="form-control" id="exampleFormControlTextarea1" cols="3" rows="5"
                        style="resize:none;">{{ $formated }}</textarea>
                </div>


                <br>
                <hr>
                <br>

                <?php $formated = str_replace('<br />', PHP_EOL, $machine->locationNote); ?>

                <!-- Location NOTE -->
                <div class="form-group">
                    <textarea required="required" name="locationNote"
                        placeholder="Enter Notes about machine. This text will be visible just to you." class="form-control"
                        id="exampleFormControlTextarea1" cols="3" rows="3"
                        style="resize:none;">{{ $formated }}</textarea>
                </div>





                <!-- CATEGORY -->
                <div class="form-group">
                    <select required="required" name="categoryID" id="categoryID" title="Please select category"
                        class="form-control">

                        @foreach ($categories as $category)
                            @if ($category->id == $machine->categoryId)
                                <option selected value="{{ $category->id }}"> {{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}"> {{ $category->name }}</option>
                            @endif

                        @endforeach
                    </select>
                </div>


                <div style="text-align: center;" class="card-footer bg-white">
                    <button style="width: 30%;" type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}







    </div>

@endsection
