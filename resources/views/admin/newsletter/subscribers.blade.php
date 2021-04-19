@extends('layouts.adminLayout')

@section('content')

    @if (session()->has('message'))
        <div class="alert alert-success" style="text-align:center;">
            {{ session()->get('message') }}
        </div>
    @endif



    <div class="card mb-4" style="width: 70%;margin-right:15%;margin-left:15%;">
        <div class="card-body">
            <table id="example" class="table table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Type</th>
                        <th class="actions" style="display: flex; justify-content: flex-end">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subscribers as $subscriber)
                        <tr>
                            <td>{{ $subscriber->email }}</td>
                            <td>{{ $subscriber->type }}</td>

                            <td style="display: flex; justify-content: flex-end">
                                <a href="/delete-subscriber/{{ $subscriber->id }}"
                                    class="btn btn-icon btn-pill btn-danger" data-toggle="tooltip" title="Delete"><i
                                        class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
    </div>
    <!-- pages -->
    <div class="d-flex">
        <div class="mx-auto">
            {{ $subscribers->links('pagination::bootstrap-4') }}
        </div>
    </div>


@endsection
