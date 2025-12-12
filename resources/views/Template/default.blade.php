<!Doctype html>

<html>
<head>
    <title>This is my HTML</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Sarabun", sans-serif;
            background-image: url("https://pictures.altai-travel.com/1160x0/mount-everest-nepal-istock-3746.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255,255,255,0.4);
            z-index: -1;
        }

        </style>
    </head>

    <body>
        <div class="container border rounded p-4 mt-5 mx-auto"
        style="max-width: 700px; background: #ffffff;">
            <h1 class="mb-4 text-center">File Default</h1>
            @yield('content')
        </div>
        @stack('scripts')
    </body>
</html>
