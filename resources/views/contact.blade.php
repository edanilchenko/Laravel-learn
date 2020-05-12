@extends('layouts.app')

@section('title')
Contacts
@endsection

@section('content')
<h1>Contacts</h1>

<form action="{{ route('contact-form') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Input name</label>
        <input type="text" name="name" placeholder="Input name" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Input name</label>
        <input type="text" name="email" placeholder="Input email" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="subject">Input subject</label>
        <input type="text" name="subject" placeholder="Input subject" id="subject" class="form-control">
    </div>

    <div class="form-group">
        <label for="message">Input message</label>
        <textarea name="message" id="message" class="form-control" placeholder="Input message"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Send</button>
</form>
@endsection