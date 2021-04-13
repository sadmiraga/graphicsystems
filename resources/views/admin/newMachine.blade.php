@extends('layouts.adminLayout')


@section('adminContent')

    <div class="col-sm-9">
        <div class="account-settings">

            <!-- FORM SECTION -->
            {!! Form::open(['url' => '/newMachineExe', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'machineForm', 'files' => 'false', 'onsubmit' => 'showLoading();']) !!}
            <div class="card mb-4">
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

                    <!-- MANUFACTURER -->
                    <div class="form-group">
                        <input required type="text" name="machineManufacturer" class="form-control"
                            placeholder="Machine Manufacturer">
                    </div>

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

                    <!-- SHOW PRICE -->
                    <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" name="showPrice" value="false" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Don't show price to other delaers</label>
                    </div>

                    <br>

                    <!-- YEAR -->
                    <div class="form-group">
                        <input required type="number" name="machineYear" class="form-control"
                            placeholder="Year of manufacture">
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

                    <!-- CATEGORY -->
                    <div class="form-group">
                        <select required name="categoryID" id="categoryID" title="Please select category"
                            class="form-control">
                            <option selected disabled value="-1">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->categoryName }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- SUBCATEGORY -->
                    <div class="form-group">
                        <select required id="subcategoryID" name="subcategoryID" title="Please select subcategory"
                            class="form-control">
                            <option value="-1" selected disabled>Select Subcategory</option>
                        </select>
                    </div>



                    <!-- SUBSUBCATEGORY -->
                    <div class="form-group">
                        <select required id="subsubcategoryID" name="subsubcategoryID" title="Please select sub-subcategory"
                            class="form-control">
                            <option value="-1" selected disabled>Select sub-Subcategory</option>
                        </select>
                    </div>

                    <br>
                    <hr>
                    <br>




                    <br>
                    <hr>
                    <br>



                    <!--IMAGES -->
                    <label for="file-upload" class="custom-file-upload">
                        <i class="fa fa-cloud-upload"></i>Upload
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
                        <button style="width: 30%;" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                {!! Form::close() !!}

            </div>

        </div>

    @endsection
