<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet</title>
    <link rel="stylesheet" href="walletbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;

        }

        html,
        body {
            background-size: 100%;
            background-repeat: no-repeat;
            box-sizing: border-box;
            font-family: sans-serif;        }

        body {
            background: rgb(6, 115, 136);
            background: linear-gradient(156deg, rgba(6, 115, 136, 1) 0%, rgba(18, 161, 137, 1) 41%, rgba(35, 20, 247, 1) 100%);
            background-size: 300% 300%;
            color: white;
            display: grid;
            place-items: center;
            font-family: sans-serif;
            overflow: hidden;
            animation: bg 10s linear infinite;
        }

        @keyframes bg {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;

            }
        }

        .circle {
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgb(255, 212, 35);
            background: linear-gradient(90deg, rgba(255, 212, 35, 1) 0%, rgba(22, 194, 254, 1) 100%);
            border-radius: 50%;
            left: 20%;
            top: 20%;
            z-index: -1;
            animation: bounce-in-top 1.1s both;
        }

        @keyframes bounce-in-top {
            0% {
                -webkit-transform: translateY(-500px);
                transform: translateY(-500px);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
                opacity: 0;
            }

            38% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
                opacity: 1;
            }

            55% {
                -webkit-transform: translateY(-65px);
                transform: translateY(-65px);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            72% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            81% {
                -webkit-transform: translateY(-28px);
                transform: translateY(-28px);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            90% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            95% {
                -webkit-transform: translateY(-8px);
                transform: translateY(-8px);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }
        }


        .second {
            top: unset;
            right: 30%;
            bottom: 20%;
            left: unset;
            background: rgb(49, 35, 255);
            background: linear-gradient(90deg, rgba(49, 35, 255, 1) 0%, rgba(251, 22, 254, 1) 100%);
            width: 250px;
            height: 250px;
            animation: bounce-in-top 1.1s 0.2s both;
        }

        .card {
            /*background:hsla(0, 0%, 100%, 0.3);*/
            background: rgb(255, 255, 255);
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.67102591036414565) 0%, rgba(255, 255, 255, 0.1085609243697479) 100%);
            border: 2px solid hsla(0, 0%, 100%, 0.3);
            backdrop-filter: blur(8px);
            width: 400px;
            height: 250px;
            border-radius: 20px;
            padding: 2rem;
            margin-top: 230px;
            transform-style: preserve-3d;
            transform: perspective(1000px);
            overflow: hidden;
        }

        h2 {
            transform: translateZ(30px);
            /*text-shadow: 0 0 5px hsla(0, 0%, 50%, 0.7);*/
        }

        .chip {
            width: 50px;
            height: 40px;
            border-radius: 5px;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
            overflow: hidden;
        }

        .line {
            background: white;
            height: 24%;
        }


        .line:not(:nth-of-type(1)) {
            margin-top: 1px;
        }

        .number {
            font-family: monospace;
            font-size: 1.8rem;
            letter-spacing: 1px;

        }

        .dates-and-logo {
            justify-content: space-between;
            align-items: center;
            margin-top: 0.3rem;
        }

        .logo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: hsl(40, 100%, 50%);
            position: absolute;
            right: 40px;
            margin-top: -2.1rem;
        }

        .logo::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: hsl(10, 100%, 50%);
            border-radius: inherit;
            left: -25px;
        }
    </style>
</head>

<body>
<div class="menu-bar">
    <ul>

        <li > <a href="walletbar.php" ><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
        <li><a href="payment.php" ><i class="fa fa-credit-card" aria-hidden="true"></i>Payment</a></li>
        <li><a href="buy.php" ><i class="fa fa-shopping-cart" aria-hidden="true"></i>Buy from mechant</a>





        </li>

        <li><a href="ttr.php" ><i class="fa fa-exchange" aria-hidden="true">Transfer</i></a></li>

        <li><a href="chargewallet.php" ><i class="fa fa-money" aria-hidden="true">Charge wallet</i></a></li>
        <li><a href="#" ><i class="fa fa-info" aria-hidden="true"></i></i>Wallet info</a>


            <div class="sub-menu-1">
                <ul>

                    <li><a href="information1.php" ><i class="fa fa-info" aria-hidden="true">Wallet information</i></a></li>

                    <li><a href="information2.php" ><i class="fa fa-info" aria-hidden="true">Wallet actions</i></a></li>


                </ul>

            </div>






        </li>

        <li><a href="wallet1.php" ><i class="fa fa-sign-out" aria-hidden="true">Log out</i></a></li>


    </ul>

</div>

<div class="circle"></div>
<div class="circle second"></div>
<div class="card" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
    <h2>E-Wallet </h2>
    <div class="chip">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="number">
        0000 1111 4444 5555
    </div>
    <div class="dates-and-logo">
        <p>05/9/2022</p>
        <p>Wallet hub</p>
        <div class="logo"></div>
    </div>

</div>
</body>

</html>




</li>





</ul>
</div>
</body>
</html>