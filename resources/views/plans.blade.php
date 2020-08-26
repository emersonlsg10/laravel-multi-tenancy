<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ainsten Tech</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #dedede;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            max-height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: space-evenly;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .content {
            text-align: center;
            text-decoration: none !important;
            background-color: #fff;
            border: 1px solid #cecece;
            border-radius: 5px;
            height: 250px;
            width: 200px;
        }

        .plan_name {
            border-bottom: 1px solid #cecece;
            border-radius: 5px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
            color: white;
            font-weight: bolder;
            text-align: left;
            height: 25px;
            padding: 5px;
        }

        .plan_value {
            margin-top: 10px;
            font-size: 25px;
            color: black;
        }

        .plan_info {
            font-size: 13px;
            font-weight: bolder;
        }

        .link_plan {
            color: #636b6f;
        }
    </style>
</head>

<body>
    <div style="text-align: center; font-size: 35px; margin-top: 25vh; margin-bottom: 50px;">
        Escolha o plano que deseja assinar:
    </div>
    <div class="flex-center">
        <div class="content">
            <a class="link_plan" style="text-decoration: none" href="{{ url()->current().'/register-plan/mensal'}}">
                <div class="plan_name" style="background-color: #E15043">
                    <strong>
                        Plano Mensal
                    </strong>
                </div>
                <div class="plan_value">
                    <strong>
                        R$ 89,00
                    </strong>
                </div>
                <div class="plan_info">
                    <p>Gestão Comercial Completa</p>
                    <p>Acessos simultâneos ilimitados</p>
                    <p>20 usuários</p>
                    <p>WebDesk</p>
                    <p>Emitir boleto</p>
                </div>
            </a>
        </div>
        <div class="content">
            <a class="link_plan" style="text-decoration: none" href="{{ url()->current().'/register-plan/semestral'}}">
                <div class="plan_name" style="background-color: #F29D10">
                    <strong>
                        Plano Semestral
                    </strong>
                </div>
                <div class="plan_value">
                    <strong>
                        R$ 79,00
                    </strong>
                </div>
                <div class="plan_info">
                    <p>Gestão Comercial Completa</p>
                    <p>Acessos simultâneos ilimitados</p>
                    <p>20 usuários</p>
                    <p>WebDesk</p>
                    <p>Emitir boleto</p>
                </div>
            </a>
        </div>
        <div class="content">
            <a class="link_plan" style="text-decoration: none;" href="{{ url()->current().'/register-plan/anual'}}">

                <div class="plan_name" style="background-color: #27AE61">
                    <strong>
                        Plano Anual
                    </strong>
                </div>
                <div class="plan_value">
                    <strong>
                        R$ 69,00
                    </strong>
                </div>
                <div class="plan_info">
                    <p>Gestão Comercial Completa</p>
                    <p>Acessos simultâneos ilimitados</p>
                    <p>20 usuários</p>
                    <p>WebDesk</p>
                    <p>Emitir boleto</p>
                </div>
            </a>
        </div>
    </div>
</body>

</html>