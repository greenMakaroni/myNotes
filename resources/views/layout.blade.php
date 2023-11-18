<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
 
    <!-- Tailwind Config -->
   <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                    keyframes: {
                        'displayMessage': {
                            '0%' : {opacity: 0},
                            '15%' : {opacity: 1},
                            '75%' : {opacity: 1},
                            '100%' : {opacity: 0},
                        }
                    },
                    animation: {
                        displayMessage: '6s displayMessage forwards'
                    }
                },
            },
        };
    </script>
    
    <!-- Google Icons config -->
    <style>
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }
        </style>
    <title> My notes </title>
</head>
<body class="w-[100vw] p-[25px]">
    {{-- pop up message --}}
  

    {{-- VIEW --}}
    @yield('content')
</body>
</html>