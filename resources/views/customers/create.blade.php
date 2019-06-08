@extends('layouts.app')

@section('title')
    Add New Customers
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <h3>Add New Customers</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers" method="post">
                @include('customers.form')

                <button type="submit" class="btn btn-primary">Add a customer</button>


            </form>

        </div>
    </div>
    <hr>

@endsection