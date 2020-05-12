@extends('layouts.app')

@section('title')
Main
@endsection

@section('content')
<h1>Main page</h1>
@endsection

@section('aside')
    @parent
    <p>Yet another text</p>
@endsection