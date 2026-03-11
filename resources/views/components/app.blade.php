<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
<body>
    {{ $slot }}
</body>
</html>