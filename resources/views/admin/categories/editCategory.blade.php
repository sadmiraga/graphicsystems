@extends('layouts.adminLayout')
@section('content')


    <!-- FORM SECTION -->
    {!! Form::open(['url' => '/updateCategory', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
    <div style="width: 70%;margin-right:15%;margin-left:15%;" class="card mb-4">
        <div style="text-align: center;" class="card-header bg-white font-weight-bold">
            Edit "{{ $category->name }}" category
        </div>
        <div class="card-body">

            <input type="hidden" id="custId" name="categoryID" value="{{ $category->id }}">

            <div class="form-group">
                <input type="text" name="categoryName" required="required" value="{{ $category->name }}"
                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="update category name">
            </div>


        </div>
        <div style="text-align: center;" class="card-footer bg-white">
            <button style="width: 30%;" type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
    {!! Form::close() !!}



@endsection
