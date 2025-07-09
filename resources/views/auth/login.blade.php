<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white rounded-xl shadow-md w-full max-w-sm">
        <div class="bg-white px-6 py-4 border-b border-gray-200 rounded-t-xl">
            <h2 class="text-xl font-semibold text-center text-gray-800">Login</h2>
        </div>
        <div class="bg-gray-50 px-6 py-6 rounded-b-xl">
            @if ($errors->any())
                <div class="mb-4 text-red-600 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1">Email</label>
                    <input type="email" name="email" required autofocus
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm mb-1">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
