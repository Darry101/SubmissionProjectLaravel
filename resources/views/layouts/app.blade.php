<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Praktikum Blade')</title>
    <style>
        body { font-family: system-ui, sans-serif; margin: 0; padding: 0 1rem; }
        nav { background: #1e293b; padding: 0.75rem 1rem; margin-bottom: 1.5rem; }
        nav a { color: #f8fafc; margin-right: 1rem; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
        table { border-collapse: collapse; width: 100%; max-width: 800px; }
        th, td { border: 1px solid #cbd5e1; padding: 0.5rem 0.75rem; text-align: left; }
        th { background: #e2e8f0; }
        .alert { padding: 0.75rem 1rem; border-radius: 0.375rem; margin-bottom: 1rem; }
        .alert-sukses { background: #dcfce7; color: #166534; }
        .alert-bahaya { background: #fee2e2; color: #991b1b; }
        .alert-info  { background: #e0f2fe; color: #075985; }
    </style>
    @stack('styles')
</head>
<body>
    {{-- Navbar partial --}}
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    <footer style="margin-top: 2rem; color: #64748b; font-size: 0.875rem;">
        &copy; {{ date('Y') }} Praktikum Laravel
    </footer>

    @stack('scripts')
</body>
</html>