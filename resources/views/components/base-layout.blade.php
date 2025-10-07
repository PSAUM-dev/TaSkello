@vite (['resources/css/app.css', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Taskello</title>
</head>
<body class="bg-dark" data-bs-theme="dark">

    <x-header />

    <main>
        {{ $slot }}
    </main>
    
    <x-footer />

</body>
</html>