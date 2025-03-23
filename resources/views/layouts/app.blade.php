<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- ...existing code... -->
</head>
<body class="bg-dark text-white">
    <div id="app">
        <header class="bg-primary text-white p-4">
            <h1 class="text-3xl font-bold">Meu Aplicativo</h1>
        </header>
        <main class="p-4">
            @yield('content')
        </main>
        <footer class="bg-dark-gray text-center p-2">
            <p>© 2023 Meu Aplicativo</p>
        </footer>
    </div>
</body>
</html>
