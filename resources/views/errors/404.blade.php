<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link data-n-head="true" rel="icon" type="image/png" size="16" data-hid="favicon-16" href="https://web-door.net/images/logo/logo4.png">
    <title>404</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body, html {
            width: 100%;
            height: 100%;
            background-color: #1b1e21;
        }

        body {

            background-repeat: no-repeat;
            background-size: contain;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .box .glitch {
            color: #fff;
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-size: 100px;
            position: relative;
            padding: 30px;
        }
        .box .glitch:before, .box .glitch:after {
            content: "404 ERROR!";
            color: #fff;
            position: absolute;
            top: 0;
            overflow: hidden;
            padding: 30px;
        }
        .box .glitch:before {
            left: 3px;
            text-shadow: -3px 0 red;
            animation: glitch-before 2s linear 0s infinite alternate;
        }
        .box .glitch:after {
            left: -3px;
            text-shadow: -3px 0 blue;
            animation: glitch-after 2s linear 0s infinite alternate;
        }

        @keyframes glitch-before {
            0% {
                clip: rect(27px, 589px, 79px, 30px);
            }
            5% {
                clip: rect(37px, 589px, 132px, 30px);
            }
            10% {
                clip: rect(98px, 589px, 30px, 30px);
            }
            15% {
                clip: rect(134px, 589px, 140px, 30px);
            }
            20% {
                clip: rect(38px, 589px, 100px, 30px);
            }
            25% {
                clip: rect(89px, 589px, 17px, 30px);
            }
            30% {
                clip: rect(74px, 589px, 90px, 30px);
            }
            35% {
                clip: rect(62px, 589px, 138px, 30px);
            }
            40% {
                clip: rect(103px, 589px, 34px, 30px);
            }
            45% {
                clip: rect(50px, 589px, 146px, 30px);
            }
            50% {
                clip: rect(61px, 589px, 126px, 30px);
            }
            55% {
                clip: rect(92px, 589px, 135px, 30px);
            }
            60% {
                clip: rect(138px, 589px, 42px, 30px);
            }
            65% {
                clip: rect(148px, 589px, 99px, 30px);
            }
            70% {
                clip: rect(150px, 589px, 112px, 30px);
            }
            75% {
                clip: rect(26px, 589px, 91px, 30px);
            }
            80% {
                clip: rect(17px, 589px, 120px, 30px);
            }
            85% {
                clip: rect(14px, 589px, 72px, 30px);
            }
            90% {
                clip: rect(116px, 589px, 98px, 30px);
            }
            95% {
                clip: rect(48px, 589px, 100px, 30px);
            }
            100% {
                clip: rect(87px, 589px, 130px, 30px);
            }
        }
        @keyframes glitch-after {
            0% {
                clip: rect(115px, 589px, 88px, 30px);
            }
            5% {
                clip: rect(98px, 589px, 81px, 30px);
            }
            10% {
                clip: rect(88px, 589px, 75px, 30px);
            }
            15% {
                clip: rect(3px, 589px, 91px, 30px);
            }
            20% {
                clip: rect(81px, 589px, 25px, 30px);
            }
            25% {
                clip: rect(106px, 589px, 84px, 30px);
            }
            30% {
                clip: rect(127px, 589px, 82px, 30px);
            }
            35% {
                clip: rect(111px, 589px, 7px, 30px);
            }
            40% {
                clip: rect(28px, 589px, 51px, 30px);
            }
            45% {
                clip: rect(150px, 589px, 51px, 30px);
            }
            50% {
                clip: rect(51px, 589px, 73px, 30px);
            }
            55% {
                clip: rect(36px, 589px, 126px, 30px);
            }
            60% {
                clip: rect(52px, 589px, 44px, 30px);
            }
            65% {
                clip: rect(74px, 589px, 73px, 30px);
            }
            70% {
                clip: rect(124px, 589px, 112px, 30px);
            }
            75% {
                clip: rect(41px, 589px, 18px, 30px);
            }
            80% {
                clip: rect(24px, 589px, 108px, 30px);
            }
            85% {
                clip: rect(47px, 589px, 15px, 30px);
            }
            90% {
                clip: rect(137px, 589px, 132px, 30px);
            }
            95% {
                clip: rect(10px, 589px, 115px, 30px);
            }
            100% {
                clip: rect(131px, 589px, 28px, 30px);
            }
        }
    </style>
</head>
<body>
<div class="box">
    <h1 class="glitch">404 ERROR!</h1>
</div>
</body>
</html>
