@extends('layouts.adminLayout')

@section('content')

    <div class="container">

        @if (session()->has('error'))
            <div class="alert alert-danger" style="text-align:center;">
                {{ session()->get('error') }}
            </div>
        @endif

        <button onclick="send();" class="btn btn-success">Send </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Picture</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($machines as $machine)
                    <tr>
                        <th scope="row">
                            <input class="form-check-input" onchange="add({{ $machine->id }});" style="margin:auto;"
                                type="checkbox" id="flexSwitchCheckDefault">
                        </th>
                        <td>
                            {{ $machine->name }}
                        </td>

                        <!-- get image -->
                        <?php $picture = DB::table('pictures')
                        ->where('machineID', '=', $machine->id)
                        ->first(); ?>
                        <td>
                            <img class="img-thumbnail" width="100" height="100"
                                src="/images/machines/{{ $picture->image }}">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>


    <script>
        var selected = [];

        //send form
        function send() {
            var selectedInput = document.getElementById("selectedMachines").value = selected;
            var form = document.getElementById("sendNewsletterForm");
            form.submit();
        }

        //try to add element to array
        function add(id) {
            //check if that index is already selected
            if (selected.includes(id) == true) {
                removeAllElements(selected, id);
            } else {
                selected.push(id);
            }
        }

        //remove element from array
        function removeAllElements(array, elem) {
            var index = array.indexOf(elem);
            while (index > -1) {
                array.splice(index, 1);
                index = array.indexOf(elem);
            }
        }

    </script>


    {!! Form::open(['url' => '/send-newsletter', 'method' => 'post', 'id' => 'sendNewsletterForm']) !!}
    <input type="hidden" value="[]" id="selectedMachines" name="selectedMachines">
    <input type="submit" style="display:none;">
    {!! Form::close() !!}


@endsection
