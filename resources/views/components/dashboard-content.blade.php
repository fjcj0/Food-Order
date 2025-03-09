<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Carter+One&family=Caveat+Brush&family=Cherry+Cream+Soda&family=Fredericka+the+Great&family=Hachi+Maru+Pop&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Karla:ital,wght@0,200..800;1,200..800&family=Lacquer&family=Luckiest+Guy&family=Matemasie&family=Parkinsans:wght@300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Revolution&family=Quicksand:wght@300..700&family=Rammetto+One&family=Signika+Negative:wght@300..700&family=Sriracha&family=Yuji+Mai&display=swap');
        /*
       1-font-family: "Sriracha", cursive;
       2-font-family: "Carter One", system-ui;
       3-font-family: "Rammetto One", sans-serif;
       4-font-family: "Yuji Mai", serif;
       5-font-family: "Quicksand", serif;
       6-font-family: "Protest Revolution", serif;
       7-font-family: "Poppins", serif;
       8-font-family: "Parkinsans", serif;
       9-font-family: "Karla", serif;
       10-font-family: "Hachi Maru Pop", serif;
       11-font-family: "Cherry Cream Soda", system-ui;
       12-font-family: "Matemasie", sans-serif;
       13-font-family: "Fredericka the Great", serif;
       14-font-family: "Caveat Brush", cursive;
       15-font-family: "Luckiest Guy", cursive;
       16-font-family: "Lacquer", system-ui;
       17-font-family: "Signika Negative", sans-serif;
       18-font-family: "Josefin Sans", sans-serif;
        */
        * {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            box-sizing: border-box;
            font-family: "Josefin Sans", sans-serif;
        }
        body {
            min-height: 100vh;
        }
        .links-dashboard li{
            margin: 0.6rem 0rem;
            width: 90%;
            margin-left: 0.5rem;
        }
        .links-dashboard a{
            cursor: pointer;
            transform: 0.3s ease;
        }
        .links-dashboard a:hover{
            background: #a2a8d3;
        }
        .content-slot-dashboard{
            position: absolute;
            width: calc(100% - 280px);
            right: 0;
        }
        .hidden-header{
            transform: translateY(-6.5rem);
        }
        .silder-nav{
            height:100vh; position:fixed;
        }
        .buttons-control{
            display: none;
        }
        .chart{
            width: 30rem;
        }
        .content-dashboard{
            margin-top:4.5rem;
        }
        .addition-info{
            display: flex;
        }
        .login-signup{
            display: flex;
        }
        @media only screen and (max-width: 991px) {
            .content-slot-dashboard {
                width: 100%;
            }
            .silder-nav {
                position: fixed;
                transform: translateX(-105%);
                z-index: 998;
                margin-left: 0.5rem;
                transition: transform 0.3s ease-in-out;
                height:75%;
                border-radius: 15px;
            }
            header{
                transition: transform 0.3s ease;
            }
            .silder-nav.show-slider {
                transform: translateX(0);
            }
            .buttons-control{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .chart{
                width: 100%;
            }
            .hr-dis{
                display: none;
            }
            .addition-info{
                display: none;
            }
            .login-signup{
                display: none;
            }
        }
    </style>
    <script>
        document.getElementById('toggle-nav').addEventListener('click', function () {
            const sliderNav = document.querySelector('.silder-nav');
            sliderNav.classList.toggle('show-slider');
        });
    </script>
</head>
<body>
    <x-header></x-header>
    <div class="content-dashboard d-flex">
        <div class="d-flex flex-column text-white bg-dark silder-nav" style="width: 280px;">
            <a href="/dashboard/home" class="d-flex align-items-center text-white text-decoration-none">
                <img src="https://img.icons8.com/?size=100&id=64686&format=png&color=000000" alt="" class="bi me-2" style="width:4rem;">
                <span class="fs-4">Dashboard</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column links-dashboard">
                <li class="nav-item">
                    <a href="/dashboard/home" class="nav-link text-white" aria-current="page">
                    <img src="https://img.icons8.com/?size=100&id=41651&format=png&color=000000" alt="" class="bi me-1" style="width:2.3rem; position:relative; bottom: 0.2rem;" >
                        Home
                    </a>
                </li>
                <li>
                    <a href="/dashboard/order" class="nav-link text-white">
                    <img src="https://img.icons8.com/?size=100&id=VRbCAbUTUPby&format=png&color=000000" alt="" class="bi me-1" style="width:2.3rem; position:relative;" >
                        Orders
                    </a>
                </li>
                <li>
                    <a href="/dashboard/product" class="nav-link text-white">
                    <img src="https://img.icons8.com/?size=100&id=8chNl15hy6jY&format=png&color=000000" alt="" class="bi me-1" style="width:2.3rem; position:relative;" >
                        Products
                    </a>
                </li>
                <li>
                    <a href="/dashboard/setting" class="nav-link text-white">
                    <img src="https://img.icons8.com/?size=100&id=13108&format=png&color=000000" alt="" class="bi me-1" style="width:2.3rem; position:relative;" >
                        Settings
                    </a>
                </li>
                <li>
                    <a href="/dashboard/profile" class="nav-link text-white">
                    <img src="https://img.icons8.com/?size=100&id=SS5zeu5HKnnG&format=png&color=000000" alt="" class="bi me-1" style="width:2.3rem; position:relative;" >
                       Profile
                    </a>
                </li>
            </ul>
            <hr class="hr-dis">
            <div class="addition-info flex-column">
                <a href="https://www.blue.ps" class="mx-3 btn btn-outline-warning" style="cursor: pointer;">Company Information</a>
                <a href="https://porfile-ips.netlify.app" class="my-3 mx-3 btn btn-info text-white" style="cursor: pointer;">Programmer Page</a>
            </div>
            <hr class="hr-dis">
            @guest
            <div class="login-signup flex-column align-items-start gap-1">
                <a href="/login" class="nav-link text-white btn btn-secondary mx-4 py-2 px-4"><img class="bi me-2" src="https://img.icons8.com/?size=100&id=9LO6DNAjbKMt&format=png&color=000000" alt="" style="width:2.3rem;">Sign In</a>
                <a href="/register" class="nav-link text-white btn btn-secondary mx-4 py-2 px-4"><img class="bi me-2" src="https://img.icons8.com/?size=100&id=13918&format=png&color=000000" alt="" style="width:2.3rem;">Sign Up</a>
            </div>
            @endguest
            @auth
            <form action="/logout" method="post" class="log-out">
                @csrf
                @method('post')
                <button class="btn btn-warning mx-4" type="submit"><img class="bi me-2" src="https://img.icons8.com/?size=100&id=114185&format=png&color=000000" style="width:2.3rem;" alt="">Logout</button>
            </form>
            @endauth
        </div>
        <div class="content-slot-dashboard">
            {{$slot}}
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sliderButton = document.getElementById('button-slider-nav');
            const sliderNav = document.querySelector('.silder-nav');
            const header = document.querySelector('header');
            const toggleButton = document.getElementById('button-toggle');
            const icon = toggleButton.querySelector('i');
            sliderButton.addEventListener('click', function() {
                sliderNav.classList.toggle('show-slider');
                if (sliderNav.classList.contains('show-slider')) {
                    sliderNav.style.transform = 'translateX(0)';
                } else {
                    sliderNav.style.transform = 'translateX(-105%)';
                }
            });
            toggleButton.addEventListener('click', function() {
                if (header.classList.contains('hidden-header')) {
                    header.classList.remove('hidden-header');
                    icon.classList.remove('fa-down-long');
                    icon.classList.add('fa-up-long');
                } else {
                    header.classList.add('hidden-header');
                    icon.classList.remove('fa-up-long');
                    icon.classList.add('fa-down-long');
                }
            });
        });
    </script>
</body>
</html>
