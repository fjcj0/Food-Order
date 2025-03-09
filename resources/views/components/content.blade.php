<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Carter+One&family=Caveat+Brush&family=Cherry+Cream+Soda&family=Fredericka+the+Great&family=Hachi+Maru+Pop&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Karla:ital,wght@0,200..800;1,200..800&family=Lacquer&family=Luckiest+Guy&family=Matemasie&family=Parkinsans:wght@300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Revolution&family=Quicksand:wght@300..700&family=Rammetto+One&family=Signika+Negative:wght@300..700&family=Sriracha&family=Yuji+Mai&display=swap');
        /*
       1-font-family: "Sriracha", cursive;
       2-  font-family: "Carter One", system-ui;
       3-font-family: "Rammetto One", sans-serif;
       4-font-family: "Yuji Mai", serif;
       5-  font-family: "Quicksand", serif;
       6-font-family: "Protest Revolution", serif;
       7-font-family: "Poppins", serif;
       8-font-family: "Parkinsans", serif;
       9-  font-family: "Karla", serif;
       10- font-family: "Hachi Maru Pop", serif;
       11-   font-family: "Cherry Cream Soda", system-ui;
       12-font-family: "Matemasie", sans-serif;
       13-font-family: "Fredericka the Great", serif;
       14-font-family: "Caveat Brush", cursive;
       15-font-family: "Luckiest Guy", cursive;
       16-font-family: "Lacquer", system-ui;
       17-  font-family: "Signika Negative", sans-serif;
       18-font-family: "Josefin Sans", sans-serif;
        */
        *{
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            box-sizing: border-box;
        }
        body{
            min-height: 100vh;
        }
        a{
            text-decoration: none
        }
        section{
            padding: 5rem 0rem
        }
        .form-sign-in i{
            position: relative;
            top: 0.9rem;
            left: 0.4rem;
        }
        header{
            font-family: "Josefin Sans", sans-serif;
            position: fixed;
            z-index: 999;
            width: 100%;
            top: 0;
        }
        h1{
            font-family: "Luckiest Guy", cursive;
        }
        .home{
            margin-bottom: 5rem;
        }
        .home p{
            font-family: "Josefin Sans", sans-serif;
        }
        .home a{
            font-family: "Josefin Sans", sans-serif;
        }
        .home h3{
            font-family: "Josefin Sans", sans-serif;
        }
        .pos-right-div{
            position: relative;
            right:15rem;
        }
        .home-container-one p{
            max-width: 50%;
        }
        .crafting-flavor a{
            font-family: "Josefin Sans", sans-serif;
        }
        .crafting-flavor p{
            font-family: "Josefin Sans", sans-serif;
        }
        .compasion{
            margin: 5rem 0rem;
        }
        .compasion p{
            font-family: "Josefin Sans", sans-serif;
        }
        .compasion a{
            font-family: "Josefin Sans", sans-serif;
        }
        .latest{
            margin:5rem 0rem;
        }
        .header-card{
            font-family: "Luckiest Guy", cursive;
        }
        .card p{
            font-family: "Josefin Sans", sans-serif;
            margin: 1rem 0;
        }
        .information h3{
            font-family: "Josefin Sans", "sans-serif";
        }
        .contact{
            margin: 5rem 0;
        }
        .submit-btn{
            font-family: "Josefin Sans", sans-serif;
        }
        .infomration-item{
            width: 50%;
            height:100%;
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: start;
        }
        .infomration-item h3,.infomration-item p,.infomration-item button{
            font-family: "Josefin Sans", sans-serif;
        }
        .item-card .image{
            width:50%;
            height:100%;
        }
        .item-card .image img{
            width: 25rem;
        }
        .buttons-control{
            display: none;
        }
        .hidden-header{
            transform: translateY(-6.5rem);
        }
        @media only screen and (max-width: 1272px){
            .compasion{
            margin-bottom: 30rem;
            }
            .home{
                flex-wrap:wrap;
            }
            .home-container-one{
                width: 100%;
                display: flex;
                justify-content: center;
            }
            .home-container-two{
                margin-top: 3rem;
                justify-content: center;
                align-items: center;
                width: 100%;
            }
            .grid-two-craft{
                margin-top: 3rem;
            }
            .pos-right-div{
                right: 0;
            }
            .home-container-one p{
                max-width: 100%;
            }
            .reverse-column{
               flex-direction: column-reverse;
            }
            .justify-content-end {
                justify-content:center !important;
            }
            .image-craft{
                margin-top: 3rem
            }
            .item-card{
                flex-direction: column;
            }
            .infomration-item{
                widows: 100%;
                height: 50%;
            }
            .item-card .image{
                width: 100%;
                height: 50%;
                border-bottom: 2px solid #333333;
            }
            .item-card .image img{
                margin-bottom: 0.5rem;
            }
            .infomration-item{
                width: 100%;
                height: 50%;
            }
            .infomration-item h1{
                margin-top: 1rem;
            }
        }
        @media only screen and (max-width: 991px){
            header{
                transition: transform 0.3s ease;
            }
            .buttons-control{
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }
        @media only screen and (max-width: 590px){
            .item-card .image img{
                width: 100%;
            }
        }
    </style>
<body>
    <x-header></x-header>
    </header>
    {{$slot}}
    <x-footer></x-footer>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const header = document.querySelector('header');
        const toggleButton = document.getElementById('button-toggle');
        const icon = toggleButton.querySelector('i');
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
</html>
