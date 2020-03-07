@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session('successMsg'))
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Well done!</strong> {{session('successMsg')}}
            </div>

            @endif
    </div>
    <table class="table table-bordered table-striped table-hover ">
        <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        </thead>
        <tbody>

           @foreach($students as $student)
               <tr>
               <td> {{$student->id }}</td>
               <td>{{$student->first_name }}</td>
               <td>{{$student->last_name }}</td>
               <td>{{$student->email }}</td>
               <td>{{$student->phone }}</td>
               </tr>
               @endforeach

        </tbody>
    </table>
    @endsection