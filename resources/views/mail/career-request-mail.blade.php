<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Flow+Circular&family=Francois+One&family=Inconsolata:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E">
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&display=swap" rel="stylesheet">
    <style>
        .yellow{
            background-color: rgb(255, 245, 121);
        }

        .font1{
            font-family: 'staatliches';
        }

        .font-weight{
            font-weight: bold;
        }

        .bordo{
            border: 5px solid #4A4737;
        }

        .font-custom{
            font-size: 18px;
            margin-top: 0px;
            font-family: Verdana, Geneva, Tahoma, sans-serif
        } 

        .font-5{
            font-size: 30px;
        }

        .div-pers{
            width: 50%;
            margin: auto;
            
        }
        .messaggio{
            font-size: 16px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .fontpiccolo{
            font-size: 16px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .fontgrande {
            font-size: 23px;
            font-family: 'Francois One';
            margin-top: 0px
        }

        .fontgrande1 {
            font-size: 45px;
            font-family: 'Francois One';
            margin-top: 0px
        }
    </style>
</head>
<body class="yellow">

    <i class="fa-regular fa-lemon h-logo text-center display-1 justify-content-center d-flex align-items-center my-5"></i>
    <h1 class="text-center display-1 font1 my-5">ABBIAMO RICEVUTO LA TUA RICHIESTA!</h1>

    <p class="text-center fontpiccolo">ruolo:</p>
    <p class="text-center fontgrande1">{{$info['role']}}</p>

    <p class="text-center fontpiccolo">email:</p>
    <p class="text-center fontgrande">{{$info['email']}}</p>


    {{-- <p class="text-center font-5 my-3 ">
        <span class="font-weight" >{{$info['role']}}</span> 
    </p>
    <p class="text-center font-5 my-3">
        <span class="font-weight ">{{$info['email']}}</span> 
    </p> --}}

    {{-- <h4 class="text-center font-5"></h4> --}}
    <div class="div-pers align-items-center justify-content-center d-flex flex-column">
        <p class="mt-5 align-items-center justify-content-center d-flex text-center messaggio ">il tuo messaggio:</p>
        <p class="align-items-center justify-content-center d-flex font-custom text-center">{{$info['message']}}</p>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>