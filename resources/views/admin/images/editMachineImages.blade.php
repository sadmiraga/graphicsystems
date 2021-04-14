@extends('layouts.adminLayout')


@section('content')

    @if (session()->has('message'))
        <div class="alert alert-success" style="text-align:center;">
            {{ session()->get('message') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger" style="text-align:center;">
            {{ session()->get('error') }}
        </div>
    @endif

    <div class="col-sm-9">
        <div class="account-settings">
            <div class="card mb-4">



                <div style="font-size: 20px;" class="card-header bg-light font-weight-bold">
                    Edit/Add New Images ({{ $machine->name }})
                </div>

                <div class="photo-gallery">
                    <div class="container">

                        <div class="row photos">

                            @foreach ($pictures as $picture)
                                <div class="col-sm-6 col-md-4 col-lg-3 item"><a {{ Popper::pop('View fullscreen') }}
                                        href="/images/machines/{{ $picture->image }}" data-lightbox="photos"><img
                                            class="img-fluid" src="/images/machines/{{ $picture->image }}">
                                        <i class="fa fa-expand" aria-hidden="true"></i>
                                    </a>
                                    <button {{ Popper::pop('Delete image') }}
                                        onclick="location.href='/deleteImage/{{ $machineID }}/{{ $picture->id }}'"
                                        class="btn btn-danger">Delete</button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <hr>



                <div class="form-group" style="text-align: center">
                    {!! Form::open(['url' => '/addImage', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'machineForm', 'files' => 'false', 'onsubmit' => 'showLoading();']) !!}
                    @csrf

                    <label for="file-upload" class="custom-file-upload" style="margin: auto; width: 70%;">
                        <i class="fa fa-cloud-upload"></i>Upload
                    </label>
                    <input id="file-upload" type="file" required name="files[]" multiple />
                    <div style="margin-bottom: 2rem; padding:auto;" id="previewGallery" class="gallery"></div>

                    <input type=hidden name="machineID" value="{{ $machineID }}">
                    <button type="submit" class="btn btn-primary" style="width: 70%;">Add Images</button>
                    {!! Form::close() !!}
                </div>

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

                                        $($.parseHTML('<img width="150" style="margin:3px;">')).attr('src',
                                                event
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

            <div class=" card mb-4">
                <div style="font-size: 20px;" class="card-header bg-light font-weight-bold">
                    <i class="fab fa-youtube"></i>
                    Edit/Add Youtube Video
                </div>



                @if ($machine->youtubeLink != null)
                    <iframe width="70%" height="300px" style="margin:auto;margin-top:1rem;"
                        src="https://www.youtube.com/embed/{{ $machine->youtubeLink }}" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

                    <button onclick="location.href='/remove-video/{{ $machine->id }}'" style="width: 70%;margin:auto;"
                        class="btn btn-danger">
                        Remove Video
                    </button>
                @endif

                <br><br>

                <div class="form-group">
                    {!! Form::open(['url' => '/updateYoutubeVideo', 'method' => 'post']) !!}
                    @csrf

                    <input type="text" name="YoutubeLink" required placeholder="Insert Youtube Link"
                        style="width:70%;margin:auto;" class="form-control"> <br>

                    <input type="hidden" name="machineID" value="{{ $machine->id }}">


                    @if ($machine->youtubeLink == null)
                        <button type="submit" style="width: 70%;margin-right:15%;margin-left:15%;"
                            class="btn btn-primary">Add</button>
                    @else
                        <button type="submit" style="width: 70%;margin-right:15%;margin-left:15%;"
                            class="btn btn-primary">Change</button>
                    @endif

                    {!! Form::close() !!}
                </div>


            </div>

        </div>
    @endsection
