@extends('layouts.adminLayout')


@section('content')

    <div class="col-sm-11" id="wrapper-form-container ">
        <div class="card mb-4" style="width: 70%;margin-right:15%;margin-left:15%;margin-top:5%;margin-bottom:5%;">

            <!-- FORM SECTION -->
            {!! Form::open(['url' => '/new-machine-exe', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'machineForm', 'files' => 'false', 'onsubmit' => 'showLoading();']) !!}

            @csrf
            <div style="font-size: 20px;" class="card-header bg-light font-weight-bold">
                Add New Machine
            </div>




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
                    <input type="text" required name="machineName" class="form-control" placeholder="Machine Name">
                </div>

                <!-- MODEL -->
                <div class="form-group">
                    <input type="text" required name="machineModel" class="form-control" placeholder="Machine Model">
                </div>

                <!-- MANUFACTURERS -->
                <div class="form-group" id="manufacturerIDWrapper">
                    <select name="manufacturerID" id="manufacturerID" title="Please select manufacturer"
                        class="form-control">
                        <option selected disabled value="-1">Select Manufacturer</option>
                        @foreach ($manufacturers as $manufacturer)
                            <option value="{{ $manufacturer->id }}"> {{ $manufacturer->name }}</option>
                        @endforeach
                        <option value="0">Other</option>
                    </select>
                </div>

                <!-- CUSTOM MANUFACTURER -->
                <div class="form-group" id="customManufacturerWrapper" style="display:none;">
                    <input type="text" name="customManufacturer" id="customManufacturer" class="form-control"
                        placeholder="Enter new manufacturer">
                </div>

                <script>
                    $(function() {
                        $("#manufacturerID").on('change', function() {

                            var manufacturerSelect = document.getElementById("manufacturerID").value;

                            if (manufacturerSelect == 0) {
                                document.getElementById("manufacturerIDWrapper").style.display = "none";
                                document.getElementById("manufacturerID").value = null;
                                document.getElementById("customManufacturerWrapper").style.display =
                                    "block";
                                document.getElementById("customManufacturer").required = true;
                            }
                        })

                    });

                </script>



                <!-- TYPE -->
                <div class="form-group">
                    <input required type="text" name="machineType" class="form-control" placeholder="Machine Type">
                </div>

                <!-- PRICE -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">€</span>
                    </div>
                    <input required type="number" name="machinePrice" class="form-control" placeholder="Machine Price">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>



                <br>

                <!-- YEAR -->
                <div class="form-group">
                    <input required type="number" name="machineYear" class="form-control" placeholder="Year of manufacture">
                </div>

                <!-- CONDITION -->
                <div class="form-group">
                    <select required name="condition" class="form-control">
                        <option selected disabled value="0">Condition</option>
                        <option value="new">New</option>
                        <option value="used">Used</option>
                    </select>
                </div>

                <!-- DESCRIPTION -->
                <div class="form-group">
                    <textarea required name="machineDescription" placeholder="Please Enter Machine Description"
                        class="form-control" id="exampleFormControlTextarea1" cols="3" rows="5"
                        style="resize:none;"></textarea>
                </div>


                <br>
                <hr>
                <br>

                <!-- LOcation NOTE -->
                <div class="form-group">
                    <textarea required name="locationNote"
                        placeholder="Enter Notes about machine. This text will be visible just to you." class="form-control"
                        id="exampleFormControlTextarea1" cols="3" rows="3" style="resize:none;"></textarea>
                </div>





                <!-- CATEGORY -->
                <div class="form-group">
                    <select required name="categoryID" id="categoryID" title="Please select category" class="form-control">
                        <option selected disabled value="-1">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>



                <br>
                <hr>
                <br>

                <!--IMAGES -->
                <label for="file-upload" class="custom-file-upload">
                    <i class="fas fa-cloud-upload-alt"></i>Upload
                </label>
                <input id="file-upload" required type="file" name="machineImages[]" multiple />
                <div style="margin-bottom: 2rem; padding:auto;" id="previewGallery" class="gallery"></div>


                <!--YOUTUBE LINK -->
                <div class="input-group" style="margin-bottom: 2.5rem">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fab fa-youtube" style="color:red;"></i>
                        </span>
                    </div>
                    <input type="text" name="youtubeLink" class="form-control" placeholder="Youtube Link (optional)">
                </div>



                <div style="text-align: center;" class="card-footer bg-white">
                    <button style="width: 30%;" type="submit" class="btn btn-primary">Add Machine</button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}



        <script type="text/javascript">
            $(function() {
                // Multiple images preview in browser
                var imagesPreview = function(input, placeToInsertImagePreview) {
                    document.getElementById("previewGallery").innerHTML = "";

                    if (input.files) {
                        var filesAmount = input.files.length;

                        for (i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();

                            reader.onload = function(event) {

                                $($.parseHTML('<img width="150" style="margin:3px;">')).attr('src', event
                                        .target.result)
                                    .appendTo(
                                        placeToInsertImagePreview);
                            }

                            reader.readAsDataURL(input.files[i]);
                        }
                    }

                };

                $('#file-upload').on('change', function() {
                    imagesPreview(this, 'div.gallery');
                });
            });

        </script>



    </div>

@endsection
