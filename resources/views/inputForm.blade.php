<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Form</title>
</head>
<body class="bg-slate-900 w-full h-full">
    <div class="w-[100vw] h-[100vh] flex flex-col justify-center items-center">
        <form action="/post" method="POST" class="text-center p-12 bg-white rounded-3xl">
            @csrf
            <h2 class="text-3xl font-bold mb-6">Customer Form</h2>
            <div class="flex flex-row items-center justify-between gap-6">
                <div class="form-control my-4">
                    <label class="label">
                      <span class="label-text">first name:</span>
                    </label>
                    <input name="FirstName" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                </div>
                <div class="form-control my-4">
                    <label class="label">
                      <span class="label-text">last name:</span>
                    </label>
                    <input name="LastName" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                </div>
            </div>
            <div class="flex flex-row items-center justify-between gap-6">
                <div class="form-control my-4">
                    <label class="label">
                      <span class="label-text">date of birth:</span>
                    </label>
                    <input name="DateOfBirth" type="date" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                </div>
                <div class="form-control my-4">
                    <label class="label">
                      <span class="label-text">phone number:</span>
                    </label>
                    <input name="PhoneNumber" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                </div>
            </div>
            <div class="flex flex-row items-center justify-between gap-6">
                <div class="form-control my-4">
                    <label class="label">
                      <span class="label-text">email:</span>
                    </label>
                    <input name="Email" type="email" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                </div>
                <div class="form-control my-4">
                    <label class="label">
                      <span class="label-text">bank account number</span>
                    </label>
                    <input name="BankAccountNumber" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                </div>
            </div>
            <div class="flex flex-row items-center justify-between mt-6">
                <button class="btn btn-info" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>