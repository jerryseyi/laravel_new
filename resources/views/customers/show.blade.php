@extends('layouts.app')

@section('title')
    Details for {{ $customer->name }}
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <h3>Details for {{ $customer->name }}</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Name:</strong> {{ $customer->name }}<a href="/customers/{{$customer->id}}/edit">Edit</a></p>
            <p><strong>Email:</strong> {{ $customer->email }}<a href="/customers/{{$customer->id}}/edit">Edit</a></p>
            <p><strong>Company:</strong> {{ $customer->company->name }}<a href="/customers/{{$customer->id}}/edit">Edit</a></p>
        </div>
    </div>
    <div class="input-group">
        <a href="/customers/{{$customer->id}}/edit" class="btn btn-primary">Edit Details</a>@include('customers.delete')
    </div>

@endsection
