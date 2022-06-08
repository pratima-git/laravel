@extends('Layouts.app')

@section('content')
<form action="{{ route('student.update',['student'=>$student]) }}" method="post">
    @method('PUT')
@csrf
Name: <input type="text" name="name" value="{{ $student->name }}" ><br/>
Address: <input type="text" name="address" value="{{ $student->address }}" ><br/>
E-mail: <input type="text" name="email" value="{{ $student->email }}"><br/>
<button type="submit">Save</button>
</form>
@endsection