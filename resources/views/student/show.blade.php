@extends('Layouts.app')

@section('content')
hello mr/miss,<br/>
<b>{{ $student->name }}</b>
<br>
contact details:
<ul>
    <li>{{ $student->address }}</li>
    <li>{{ $student->email }}</li>
</ul>
@endsection