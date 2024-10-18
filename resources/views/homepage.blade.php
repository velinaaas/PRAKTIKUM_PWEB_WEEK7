@extends('components.template')
@section('title', 'homepage')
@section('content')
    <div class="overflow-x-auto">
        <table class="table table-zebra"><!-- head -->
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$contact['name']}}</td>
                        <td>{{$contact['email']}}</td>
                        <td>{{$contact['phone']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
