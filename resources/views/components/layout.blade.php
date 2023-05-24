<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @vite(['resources/css/app.css' , 'resources/js/app.js'])
    <title>diNuovo</title>
</head>
<body class="bg-whiteC" >

    <x-navbar/>

    <div class="min-vh-100">
        {{ $slot }}
    </div>
    

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>

    <x-footer/>
</body>
</html>