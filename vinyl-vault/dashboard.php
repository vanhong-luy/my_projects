<?php

    // Connect to the database
    require_once 'connect.php';

    // Total Artists
    $stmt = $pdo->query("SELECT COUNT(*) AS total_artists FROM artist");
    $total_artists = $stmt->fetch(PDO::FETCH_ASSOC)['total_artists'];

    
    //Total Almbums
    $stmt = $pdo->query("SELECT COUNT(*) AS total_albums FROM album");
    $total_albums = $stmt->fetch(PDO::FETCH_ASSOC)['total_albums'];


    //Total Records
    $stmt = $pdo->query("SELECT COUNT(*) AS total_records FROM record");
    $total_records = $stmt->fetch(PDO::FETCH_ASSOC)['total_records'];

?>


<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Vinyl Vault</title>
<link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<style type="text/tailwindcss">
        :root {
            --primary-color: #f28e0c;
            --secondary-color: #f5f3f0;
            --text-primary: #181511;
            --text-secondary: #57534e;
            --border-color: #e7e5e4;
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .sidebar-link.active {
            background-color: var(--secondary-color);
            color: var(--text-primary);
            font-weight: 700;
        }
        .sidebar-link {
            color: var(--text-secondary);
        }
         .sidebar-link:hover {
            background-color: var(--secondary-color);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">

<div class="flex min-h-screen">
<aside class="w-64 flex-shrink-0 bg-white border-r border-[var(--border-color)] flex flex-col">
<div class="h-16 flex items-center px-6 border-b border-[var(--border-color)]">
<h1 class="text-[var(--text-primary)] text-xl font-bold">Vinyl Vault</h1>
</div>

<nav class="flex-1 px-4 py-6 space-y-2">
<a class="flex items-center gap-3 px-4 py-2.5 rounded-lg sidebar-link active" href="dashboard">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M224,115.55V208a16,16,0,0,1-16,16H168a16,16,0,0,1-16-16V168a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v40a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V115.55a16,16,0,0,1,5.17-11.78l80-75.48.11-.11a16,16,0,0,1,21.53,0,1.14,1.14,0,0,0,.11.11l80,75.48A16,16,0,0,1,224,115.55Z"></path></svg>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-2.5 rounded-lg sidebar-link" href="records">
<svg fill="currentColor" height="24px" viewBox="0 0 256 256" width="24px" xmlns="http://www.w3.org/2000/svg"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm0-160a72,72,0,1,0,72,72A72.08,72.08,0,0,0,128,56Zm0,128a56,56,0,1,1,56-56A56.06,56.06,0,0,1,128,184Z"></path></svg>
<span class="text-sm font-medium">Records</span>
</a>
<a class="flex items-center gap-3 px-4 py-2.5 rounded-lg sidebar-link" href="albums">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm39.2,96a39.77,39.77,0,0,0-5.84-14l34.23-34.24a87.54,87.54,0,0,1,20,48.28ZM152,128a24,24,0,1,1-24-24A24,24,0,0,1,152,128Zm-24,88A88,88,0,1,1,184.28,60.4L150,94.64A40,40,0,1,0,167.2,136h48.43A88.11,88.11,0,0,1,128,216Z"></path></svg>
<span class="text-sm font-medium">Albums</span>
</a>
<a class="flex items-center gap-3 px-4 py-2.5 rounded-lg sidebar-link" href="artists">
<svg fill="currentColor" height="24px" viewBox="0 0 256 256" width="24px" xmlns="http://www.w3.org/2000/svg"><path d="M128,176a48.05,48.05,0,0,0,48-48V64a48,48,0,0,0-96,0v64A48.05,48.05,0,0,0,128,176ZM96,64a32,32,0,0,1,64,0v64a32,32,0,0,1-64,0Zm40,143.6V232a8,8,0,0,1-16,0V207.6A80.11,80.11,0,0,1,48,128a8,8,0,0,1,16,0,64,64,0,0,0,128,0,8,8,0,0,1,16,0A80.11,80.11,0,0,1,136,207.6Z"></path></svg>
<span class="text-sm font-medium">Artists</span>
</a>
<a class="flex items-center gap-3 px-4 py-2.5 rounded-lg sidebar-link" href="genres">
<svg fill="currentColor" height="24px" viewBox="0 0 256 256" width="24px" xmlns="http://www.w3.org/2000/svg"><path d="M210.3,56.34l-80-24A8,8,0,0,0,120,40V148.26A48,48,0,1,0,136,184V98.75l69.7,20.91A8,8,0,0,0,216,112V64A8,8,0,0,0,210.3,56.34ZM88,216a32,32,0,1,1,32-32A32,32,0,0,1,88,216ZM200,101.25l-64-19.2V50.75L200,70Z"></path></svg>
<span class="text-sm font-medium">Genres</span>
</a>
</nav>


<div class="px-4 py-6 mt-auto">
<a class="flex items-center gap-3 px-4 py-2.5 rounded-lg sidebar-link" href="#">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
<span class="text-sm font-medium">Logout</span>
</a>
</div>
</aside>

<main class="flex-1 p-8">
<div class="max-w-7xl mx-auto">
<header class="mb-8">
<h1 class="text-4xl font-bold text-[var(--text-primary)] tracking-tight">Dashboard</h1>
</header>

<section class="mb-8">
  <h2 class="text-xl font-bold text-[var(--text-primary)] mb-4">Overview</h2>
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
    <div class="bg-white rounded-lg shadow-sm border border-[var(--border-color)] p-6">
      <h3 class="text-sm font-bold text-[var(--text-secondary)] mb-1">Total Artists</h3>
      <p class="text-3xl font-bold text-[var(--text-primary)]"><?= $total_artists ?></p>
    </div>
    <div class="bg-white rounded-lg shadow-sm border border-[var(--border-color)] p-6">
      <h3 class="text-sm font-bold text-[var(--text-secondary)] mb-1">Total Albums</h3>
      <p class="text-3xl font-bold text-[var(--text-primary)]"><?= $total_albums ?></p>
    </div>
    <div class="bg-white rounded-lg shadow-sm border border-[var(--border-color)] p-6">
      <h3 class="text-sm font-bold text-[var(--text-secondary)] mb-1">Total Records</h3>
      <p class="text-3xl font-bold text-[var(--text-primary)]"><?= $total_records ?></p>
    </div>
  </div>
</section>

</div>
</main>
</div>

</body></html>