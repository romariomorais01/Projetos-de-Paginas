<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Interativa com efeitos</title>
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
            max-width: 800px;
            margin: auto;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 40px;
        }

        .acordeon {
            text-align: left;
        }

        .acordeon-item {
            margin-bottom: 15px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        .acordeon-titulo {
            background-color: #ff6f61;
            color: white;
            padding: 15px;
            cursor: pointer;
            font-size: 20px;
        }

        .acordeon-conteudo {
            display: none;
            padding: 20px;
            background-color: #fff;
            font-size: 18px;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo!</h1>

        <div class="acordeon">
            <div class="acordeon-item">
                <div class="acordeon-titulo">Quem eu sou?</div>
                <div class="acordeon-conteudo">
                    Sou um entusiasta da tecnologia, apaixonado por aprender e criar soluções com código.
                </div>
            </div>

            <div class="acordeon-item">
                <div class="acordeon-titulo">O que aprendi?</div>
                <div class="acordeon-conteudo">
                    Aprendi HTML, CSS, PHP e jQuery — ferramentas essenciais para desenvolver páginas web interativas.
                </div>
            </div>

            <div class="acordeon-item">
                <div class="acordeon-titulo">Como aprendi?</div>
                <div class="acordeon-conteudo">
                    Com dedicação, prática e apoio de plataformas como a DIO, além de muita curiosidade e persistência.
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $(".acordeon-titulo").click(function () {
                // Fecha todos os conteúdos
                $(".acordeon-conteudo").slideUp();

                // Abre apenas o conteúdo clicado
                if (!$(this).next().is(":visible")) {
                    $(this).next().slideDown();
                }
            });
        });
    </script>
</body>
</html>