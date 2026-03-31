<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My App' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <div class="h-full font-[Inter] antialiased bg-slate-950 text-slate-100">
    <div class="flex h-screen overflow-hidden">

        {{-- Sidebar --}}
        <x-sidebar />

      <div class="flex-1 flex flex-col overflow-hidden">
        <x-navbar />
        <main class="flex-1 overflow-y-auto p-6">
          {{ $slot }}
        </main>
      </div>
    </div>
  </div>
</body>
</html>
