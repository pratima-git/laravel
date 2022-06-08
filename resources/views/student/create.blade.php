@extends('Layouts.app')

@section('content')
    <form action="{{ route('student.store') }}" method="POST"> 
        @csrf
    Name: <input type="text" name="name" ><br/>
    Address: <input type="text" name="address" ><br/>
    E-mail: <input type="text" name="email" ><br/>
    <button type="submit">Save</button>
    </form>
@endsection