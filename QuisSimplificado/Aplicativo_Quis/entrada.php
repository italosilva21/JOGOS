<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz da Alegria</title>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Lato:wght@300&family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 600px;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        #welcomeScreen h1 {
            font-family: 'Pacifico', cursive;
            font-size: 38px;
            color: #4a90e2;
            margin-bottom: 15px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        #welcomeScreen p {
            font-family: 'Lato', sans-serif;
            font-size: 18px;
            margin-bottom: 25px;
            color: #555;
        }

        #welcomeScreen button {
            font-family: 'Montserrat', sans-serif;
            background-color: #4CAF50;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }

        #welcomeScreen button:hover {
            background-color: #3e8e41;
            transform: scale(1.05);
        }
        
        #welcomeScreen button:active {
            background-color: #369036;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="welcomeScreen">
            <h1>Bem-vindo ao Quiz da Alegria 😁!</h1>
            <p>Teste seus conhecimentos com até 10 perguntas desafiadoras e divertidas!</p>
            <a href="index.php">
                <button>Começar o Quiz</button>
            </a>
        </div>
    </div>
</body>
</html>
