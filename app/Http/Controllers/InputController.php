<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class InputController extends Controller
{

    public function getHomePage() {
        $api = new ApiController();
        $response = $api->getAllCustomers();
        return view('home', [
            "customers" => $response
        ]);
    }

    public function inputForm() {
        if (!Auth::check()) {
            return redirect('/login');
        }
        return view('inputForm');
    }

    public function edit(Request $request) {
        $api = new ApiController();
        $customer = $api->getCustomer($request->id);
        return view('edit',["customer" => $customer]);
    }

    public function editValidate(Request $request) {
        $api = new ApiController();
        $response = $api->updateCustomer($request, $request->id);
        if ($response->status() == 200) {
            return redirect('/', 200);
        } else {
            return back(status: 400);
        }
    }

    public function delete(Request $request) {
        $api = new ApiController();
        $response = $api->deleteCustomer($request->id);
        if ($response->status() == 200) {
            return redirect('/', 200);
        } else {
            return back(status: 400);
        }
    }

    public function postForm(Request $request) {
        $api = new ApiController();
        $inputs = $request->validate([
            "FirstName" => ["required", "max:255"],
            "LastName" => ["required", "max:255"],
            "DateOfBirth" => ["required"],
            "PhoneNumber" => ["required", "digits:11"],
            "Email" => ["required"],
            "BankAccountNumber" => ["required", "digits:16"]
        ]);

        $response = $api->post($request);

        if ($response->status() == 200) {
            return redirect("/", 200);
        } else {
            return back()->withInput();
        }
    }
}
