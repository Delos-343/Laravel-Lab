<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Fachry ~ 5025201159
    </title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('items.index') }}" class="text-2xl font-bold">
                Your Personal Lab
            </a>
            <nav>
                <ul class="flex space-x-4">
                    <li>
                        <a href="{{ route('items.index') }}" class="hover:text-gray-300">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('items.create') }}" class="hover:text-gray-300">
                            Create
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="py-8">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            Fachry &copy; 5025201159
        </div>
    </footer>
</body>
</html>
