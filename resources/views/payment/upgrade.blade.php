<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upgrade Plan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    @include("layouts.sidebar")

    <div class="lg:ml-72 p-8">
        <!-- Main Content -->
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg">
            <h1 class="text-3xl font-bold text-gray-800">Upgrade Your Plan</h1>
            <p class="mt-4 text-lg text-gray-600">
                You have reached the maximum limit of 5 teams. Please upgrade your plan to add more teams and unlock additional features.
            </p>

            <div class="mt-6 space-y-4">
                <div class="flex items-center justify-between p-4 border rounded-lg border-gray-200">
                    <div class="flex items-center">
                        <span class="text-xl font-semibold text-gray-800">Current Plan:</span>
                        <span class="ml-2 text-lg text-gray-600">Free Plan</span>
                    </div>
                    <span class="px-3 py-1 text-sm text-white bg-yellow-500 rounded-full">Limit Reached</span>
                </div>

                <div class="flex items-center justify-between p-4 border rounded-lg border-gray-200">
                    <div class="flex items-center">
                        <span class="text-xl font-semibold text-gray-800">Upgrade Plan:</span>
                        <span class="ml-2 text-lg text-gray-600">Premium Plan</span>
                    </div>
                    <span class="px-3 py-1 text-sm text-white bg-green-500 rounded-full">Unlimited Teams</span>
                </div>
            </div>

            <a href="{{ route('checkout') }}" class="mt-8 inline-block px-8 py-3 text-white bg-black rounded-lg hover:bg-gray-900 transition duration-200 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Proceed to Payment
            </a>
        </div>
    </div>

</body>
</html>
