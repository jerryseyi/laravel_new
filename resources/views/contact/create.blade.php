@extends('layouts.app')

@section('title', 'contact us')

@section('content')

    <h3>Contact Us</h3>

    @if(! session()->has('message'))

        <form action="/contact" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
            </div>
            <div>{{ $errors->first('name') }}</div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
            </div>
            <div>{{ $errors->first('email') }}</div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
            </div>
            <div>{{ $errors->first('message') }}</div>

            @csrf
            <button type="submit" class="btn btn-primary">Send Message</button>

        </form>
    @endif
@endsection