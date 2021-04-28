@extends('test1')
@section('title','home')
@section('container')

    <ul>
        <li> hello this is a test </li>
        @if(1==1)
            <li> wow ur smart</li>
        @endif
    </ul>
@endsection
