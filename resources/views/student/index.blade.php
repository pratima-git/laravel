@extends('Layouts.app')
@section('content')
<table class="table table-striped table-dark">
    <thead class="thead-dark">
    <tr>
    <th>Name</th>
    <th>Address</th>
    <th colspan="4">Email</th>
    </tr>
    @foreach ($students as $student)
   
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->address }}</td>
            <td >{{ $student->email }}</td>
            <td> <a href="{{ route('student.show',['student'=>$student]) }}" class="btn btn-primary"> Show</a></td>
            <td><a href="{{ route('student.edit',['student'=>$student]) }}" class="btn btn-primary">Edit</a></td>    
            <td> <form action="{{ route('student.destroy',['student'=>$student]) }}" method="post" >
            @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>  
    
    </form></td>
        </tr>

    
        
    @endforeach
</thead>
</table>
@endsection