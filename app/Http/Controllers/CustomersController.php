<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $customers = Customer::all();


        return view('customers.index', compact('customers'));

        // Long way of achieving passing information to views. It has been simplified in the code above.
//        return view('internals.customers', [
//            'activeCustomers' => $activeCustomers,
//            'inactiveCustomers' => $inactiveCustomers
//        ]);
    }

    public function create(Customer $customer) {

        $companies = Company::all();
        return view('customers.create', compact('companies', 'customer'));
    }

    public function store()
    {


//        dd($data);
        Customer::create($this->validateRequest());
        return redirect('customers');
//        (dd(\request('name')));
    }

    public function show(Customer $customer) {

        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer) {

        $companies = Company::all();
        return view('customers.edit', compact('customer','companies'));
    }

    public function update(Customer $customer) {

        $customer->update($this->validateRequest());
        return redirect('customers/' . $customer->id);
    }

    public function destroy(Customer $customer) {
        $customer->delete();

        return redirect('customers');
    }

    private function validateRequest()
    {
        $data = \request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required'
        ]);

        return $data;

    }

}
