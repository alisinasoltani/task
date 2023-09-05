<?php

namespace App\Http\Controllers;
use App\Models\Customers;
use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use libphonenumber\PhoneNumberUtil;
use Symfony\Component\Console\Input\Input;

class ApiController extends Controller
{
    public function getAllCustomers() {
        $response = Customers::all();
        return $response;
    }

    public function getCustomer(int $id) {
        $customers = new Customers();
        return $customers->find($id);
    }

    public function post(Request $request) {
        $inputs = $request->validate([
            "FirstName" => ["required", "max:255", Rule::unique("customers", "FirstName")],
            "LastName" => ["required", "max:255", Rule::unique("customers", "LastName")],
            "DateOfBirth" => ["required", Rule::unique("customers", "DateOfBirth")],
            "PhoneNumber" => ["required", "digits:11"],
            "Email" => ["required", "regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", Rule::unique("customers", "Email")],
            "BankAccountNumber" => ["required", "digits:16", "regex:/^\d{16}/"]
        ]);

        $inputs["FirstName"] = strip_tags($inputs["FirstName"]);
        $inputs["LastName"] = strip_tags($inputs["LastName"]);
        $inputs["DateOfBirth"] = strip_tags($inputs["DateOfBirth"]);
        $inputs["PhoneNumber"] = strip_tags($inputs["PhoneNumber"]);
        $inputs["Email"] = strip_tags($inputs["Email"]);
        $inputs["BankAccountNumber"] = strip_tags($inputs["BankAccountNumber"]);

        $phoneUtil = PhoneNumberUtil::getInstance();
        $phoneNumber = new \libphonenumber\PhoneNumber($inputs["PhoneNumber"]);
        if (!$phoneUtil->isValidNumber($phoneNumber)) {
            return Response(json_encode([
                "error" => "Invalid Phone Number"
            ]), 401);
        }
        
        $customer = new Customers($inputs);
        $response = $customer->create($inputs);
        if ($response) {
            return redirect('/');
        } else {
            return back()->withInput();
        }
    }

    public function deleteCustomer(int $id): Response {
        $customer = Customers::findOrFail($id);
        $customer->delete();
        return response(json_encode([
            "message" => "Customer $id Deleted."
        ]), 200);
    }

    public function updateCustomer(Request $request, int $id): Response {
        $customer = Customers::findOrFail($id);
        $inputs = $request->validate([
            "FirstName" => ["required", "max:255", Rule::unique("customers", "FirstName")],
            "LastName" => ["required", "max:255", Rule::unique("customers", "LastName")],
            "DateOfBirth" => ["required", Rule::unique("customers", "DateOfBirth")],
            "PhoneNumber" => ["required", "digits:11"],
            "Email" => ["required", "regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", Rule::unique("customers", "Email")],
            "BankAccountNumber" => ["required", "digits:16", "regex:/^\d{16}/"]
        ]);

        $inputs["FirstName"] = strip_tags($inputs["FirstName"]);
        $inputs["LastName"] = strip_tags($inputs["LastName"]);
        $inputs["DateOfBirth"] = strip_tags($inputs["DateOfBirth"]);
        $inputs["PhoneNumber"] = strip_tags($inputs["PhoneNumber"]);
        $inputs["Email"] = strip_tags($inputs["Email"]);
        $inputs["BankAccountNumber"] = strip_tags($inputs["BankAccountNumber"]);

        $customer->update($inputs);

        return response(json_encode([
            "message" => "Customer $id Updated."
        ]), 200);
    }
}
