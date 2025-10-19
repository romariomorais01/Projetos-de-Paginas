<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo ao Meu Site!</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            margin: 0;
            padding: 0;
            text-align: center;
            color: #333;
        }

        .container {
            padding: 60px 20px;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease-in-out;
        }

        p {
            font-size: 20px;
            margin-bottom: 40px;
            animation: fadeInUp 1.5s ease-in-out;
        }

        button {
            padding: 15px 30px;
            font-size: 18px;
            background-color: #ff6f61;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff3b2e;
        }

        .mensagem {
            display: none;
            margin-top: 30px;
            font-size: 22px;
            color: #2c3e50;
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo!</h1>
        <p>Este é o meu primeiro experimento interativo com PHP, HTML e jQuery.</p>
        <button id="mostrarMensagem">Vamos tentar?</button>
        <div class="mensagem">🚀 Obrigado DIO por me auxiliar nesse processo</div>
    </div>

    <script>
        $(document).ready(function () {
            $("#mostrarMensagem").click(function () {
                $(".mensagem").fadeIn(1000);
            });
        });
    </script>
</body>
</html>