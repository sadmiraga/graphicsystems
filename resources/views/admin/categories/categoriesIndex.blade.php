@extends('layouts.adminLayout')

@section('content')

    @if (session()->has('message'))
        <div class="alert alert-success" style="text-align:center;">
            {{ session()->get('message') }}
        </div>
    @endif

    {!! Form::open(['url' => '/add-category', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
    <div class="card mb-4" style="width: 70%;margin-right:15%;margin-left:15%;">
        <div style="text-align: center;" class="card-header font-weight-bold">
            Add new category
        </div>

        @if ($errors->any())
            <div style="text-align:center;" class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach
            </div>
        @endif

        <div class="card-body">

            <div class="form-group">
                <input type="text" name="categoryName" required="required" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter name for new category">
            </div>


        </div>
        <div style="text-align: center;" class="card-footer bg-white">
            <button style="width: 30%;" type="submit" class="btn btn-primary">Add Category</button>
        </div>
    </div>
    {!! Form::close() !!}


    <br><br>

    <div class="card mb-4" style="width: 70%;margin-right:15%;margin-left:15%;">
        <div class="card-body">
            <table id="example" class="table table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th class="actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>

                            <td>
                                <a href="/editCategory/{{ $category->id }}" class="btn btn-icon btn-pill btn-primary"
                                    data-toggle="tooltip" title="Edit"><i class="fa fa-fw fa-edit"></i></a>
                                <a onclick='return confirm("This action will delete all machines and subcategories from {{ $category->name }}. Are you sure you want to continue?")'
                                    href="/deleteCategory/{{ $category->id }}" class="btn btn-icon btn-pill btn-danger"
                                    data-toggle="tooltip" title="Delete"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
