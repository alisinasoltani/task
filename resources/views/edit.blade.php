<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @vite('resources/css/app.css')
    <title>Edit Customer {{ $customer[0]["FirstName"]}}</title>
</head>
<body class="w-full h-full flex flex-row justify-center items-center">
    <div class="w-full h-full flex flex-row justify-center items-center mt-6">
        <form action="/edit/{{ $customer[0]["id"] }}/validate" method="POST" class="text-center p-12 bg-white rounded-3xl">
            @csrf
            <h2 class="text-3xl font-bold mb-6">Edit Customer {{ $customer[0]["FirstName"]}}</h2>
            <div class="flex flex-row items-center justify-between gap-6">
                <div class="form-control my-4">
                    <label class="label">
                      <span class="label-text">first name:</span>
                    </label>
                    <input name="FirstName" type="text" value="{{ $customer[0]["FirstName"] }}" class="input input-bordered w-full max-w-xs" />
                </div>
                <div class="form-control my-4">
                    <label class="label">
                      <span class="label-text">last name:</span>
                    </label>
                    <input name="LastName" type="text" value="{{ $customer[0]["LastName"] }}" class="input input-bordered w-full max-w-xs" />
                </div>
            </div>
            <div class="flex flex-row items-center justify-between gap-6">
                <div class="form-control my-4">
                    <label class="label">
                      <span class="label-text">date of birth:</span>
                    </label>
                    <input name="DateOfBirth" type="date" value="{{ $customer[0]["DateOfBirth"] }}" class="input input-bordered w-full max-w-xs" />
                </div>
                <div class="form-control my-4">
                    <label class="label">
                      <span class="label-text">phone number:</span>
                    </label>
                    <input name="PhoneNumber" type="text" value="{{ $customer[0]["PhoneNumber"] }}" class="input input-bordered w-full max-w-xs" />
                </div>
            </div>
            <div class="flex flex-row items-center justify-between gap-6">
                <div class="form-control my-4">
                    <label class="label">
                      <span class="label-text">email:</span>
                    </label>
                    <input name="Email" type="email" value="{{ $customer[0]["Email"] }}" class="input input-bordered w-full max-w-xs" />
                </div>
                <div class="form-control my-4">
                    <label class="label">
                      <span class="label-text">bank account number</span>
                    </label>
                    <input name="BankAccountNumber" type="text" value="{{ $customer[0]["BankAccountNumber"] }}" class="input input-bordered w-full max-w-xs" />
                </div>
            </div>
            <div class="flex flex-row items-center justify-between mt-6">
                <button class="btn btn-warning" type="submit">Edit</button>
            </div>
        </form>
    </div>
</body>
</html>