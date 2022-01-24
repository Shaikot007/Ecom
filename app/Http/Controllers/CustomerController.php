<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    private $customers;
    private $customer;

    public function index()
    {
        return view('admin.customer.add');
    }

    public function create(Request $request)
    {
        Customer::newCustomer($request);
        return redirect()->back()->with('message', 'Customer info create successfully.');
    }

    public function manage()
    {
        $this->customers = Customer::orderBy('id', 'desc')->get();
        return view('admin.customer.manage', ['customers' => $this->customers]);
    }

    public function edit($id)
    {
        $this->customer = Customer::find($id);
        return view('admin.customer.edit', ['customer' => $this->customer]);
    }

    public function update(Request $request, $id)
    {
        Customer::updateCustomer($request, $id);
        return redirect('/manage-customer')->with('message', 'Customer info updated successfully.');
    }

    public function delete(Request $request, $id)
    {
        Customer::deleteCustomer($id);
        return redirect('/manage-customer')->with('message', 'Customer info deleted successfully.');
    }
}
