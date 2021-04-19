@extends('layouts.adminLayout')

@section('content')

    @if (session()->has('message'))
        <div class="alert alert-success" style="text-align:center;">
            {{ session()->get('message') }}
        </div>
    @endif

    {!! Form::open(['url' => '/share-machine-exe', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
    <div class="card mb-4" style="width: 70%;margin-right:15%;margin-left:15%;">
        <div style="text-align: center;" class="card-header font-weight-bold">
            Share "{{ $machine->name }}" to machinerydepo.com
        </div>

        <input type="hidden" value="{{ $machine->id }}" name="machineID">

        @if ($errors->any())
            <div style="text-align:center;" class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach
            </div>
        @endif

        <div class="card-body">

            <!-- LOCATION -->
            <div class="form-group">
                <select required name="locationID" id="locationID" title="Please select location" class="form-control">
                    <option selected disabled value="-1">Select Location</option>
                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}"> {{ $location->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Show machine price on machinerydepo
                </label>
            </div>

            <br>


            <!-- CATEGORY -->
            <div class="form-group">
                <select required name="categoryID" id="categoryID" title="Please select category" class="form-control">
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


        </div>
        <div style="text-align: center;" class="card-footer bg-white">
            <button style="width: 30%;" type="submit" class="btn btn-primary">Share</button>
        </div>
    </div>
    {!! Form::close() !!}


    <!-- CATEGORY -> SUBCATEGORY -->
    <script>
        //dynamic oblika field
        $('#categoryID').change(function() {

            var categoryID = $(this).val();
            if (categoryID) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('http://machinerydepo.com/api/getSubcategories/') }}" +
                        categoryID,
                    dataType: 'JSON',
                    crossDomain: true,
                    success: function(res) {
                        if (res) {
                            $("#subsubcategoryID").empty();
                            $("#subsubcategoryID").append(
                                '<option disabled selected value="0">Select Subsubcategory</option>'
                            );

                            $("#subcategoryID").empty();
                            $("#subcategoryID").append(
                                '<option disabled selected value="0">Select Subcategory</option>'
                            );
                            $.each(res, function(key, value) {

                                $("#subcategoryID").append('<option value="' + key +
                                    '">' +
                                    value +
                                    '</option>');
                            });

                        } else {
                            $("#subcategoryID").empty();
                        }
                    }
                });
            } else {
                $("#subcategoryID").empty();
            }
        });

    </script>

    <script>
        //dynamic oblika field
        $('#subcategoryID').change(function() {

            var subcategoryID = $(this).val();
            if (subcategoryID) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('http://machinerydepo.com/api/getSubsubcategories/') }}" + subcategoryID,
                    success: function(res) {
                        if (res) {
                            $("#subsubcategoryID").empty();
                            $("#subsubcategoryID").append(
                                '<option disabled selected value="0">Select Subcategory</option>'
                            );
                            $.each(res, function(key, value) {

                                $("#subsubcategoryID").append('<option value="' + key +
                                    '">' + value +
                                    '</option>');
                            });

                        } else {
                            $("#subsubcategoryID").empty();
                        }
                    }
                });
            } else {
                $("#subcategoryID").empty();

            }
        });

    </script>



@endsection
