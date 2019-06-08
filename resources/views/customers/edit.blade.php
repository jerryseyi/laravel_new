@extends('layouts.app')

@section('title', 'Edit details for '. $customer->name)

@section('content')

    <div class="row">
        <div class="col-12">
            <h3>Edit details for {{ $customer->name }}</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers/{{ $customer->id }}" method="post">
                @method('PATCH')
                @include('customers.form')

                <button type="submit" class="btn btn-primary">Save</button>


            </form>

        </div>
    </div>
    <hr>

@endsection
