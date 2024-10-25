
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz da Alegria</title>
    <link rel="stylesheet" href="Style.css">
    <style>
       .correct {
            background-color: #d4edda;
            color: #155724;
            font-weight: bold;
        }

        .incorrect {
            background-color: #f8d7da;
            color: #721c24;
            font-weight: bold;
        }

        /* Estilo para marcar a resposta correta após submissão */
        .correct-answer {
            background-color: #cce5ff;
            color: #004085;
            font-weight: bold;
            border: 1px solid #b8daff;
            padding: 5px;
            border-radius: 5px;
        }

        /* Fontes e estilos para titulos e respostas */
        h1, h2 {
            font-family: 'Great Vibes', cursive;
            color: #333;
            font-size: 36px;
            margin-bottom: 10px;
        }

        label, .options {
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
            color: #666;
        }

        .question {
            margin-bottom: 20px;
        }

        .options input[type="radio"] {
            margin-right: 10px;
        }

        #result {
            font-family: 'Montserrat', sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Quiz da Alegria</h1>
        <form id="quizForm">
            <!-- Barra de Progresso -->
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
            
            <!-- Perguntas -->
            <!-- Pergunta 1 - Matemática -->
            <div class="question" data-correct="c">
                <label>1. Qual é o valor de 2²?</label>
                <div class="options">
                    <label><input type="radio" name="question1" value="a"> 2</label><br>
                    <label><input type="radio" name="question1" value="b"> 3</label><br>
                    <label><input type="radio" name="question1" value="c"> 4</label><br>
                    <label><input type="radio" name="question1" value="d"> 5</label><br>
                </div>
            </div>
            
            <!-- Pergunta 2 - Português -->
            <div class="question" data-correct="a">
                <label>2. Qual é o plural de "cidadão"?</label>
                <div class="options">
                    <label><input type="radio" name="question2" value="a"> Cidadãos</label><br>
                    <label><input type="radio" name="question2" value="b"> Cidadães</label><br>
                    <label><input type="radio" name="question2" value="c"> Cidades</label><br>
                    <label><input type="radio" name="question2" value="d"> Cidadãs</label><br>
                </div>
            </div>
            
            <!-- Pergunta 3 - História -->
            <div class="question" data-correct="d">
                <label>3. Quem foi o primeiro presidente do Brasil?</label>
                <div class="options">
                    <label><input type="radio" name="question3" value="a"> Getúlio Vargas</label><br>
                    <label><input type="radio" name="question3" value="b"> Juscelino Kubitschek</label><br>
                    <label><input type="radio" name="question3" value="c"> Marechal Deodoro da Fonseca</label><br>
                    <label><input type="radio" name="question3" value="d"> Prudente de Morais</label><br>
                </div>
            </div>
            
            <!-- Pergunta 4 - Geografia -->
            <div class="question" data-correct="b">
                <label>4. Qual é o rio mais longo do mundo?</label>
                <div class="options">
                    <label><input type="radio" name="question4" value="a"> Rio Amazonas</label><br>
                    <label><input type="radio" name="question4" value="b"> Rio Nilo</label><br>
                    <label><input type="radio" name="question4" value="c"> Rio Yangtzé</label><br>
                    <label><input type="radio" name="question4" value="d"> Rio Mississippi</label><br>
                </div>
            </div>
            
            <!-- Pergunta 5 - Matemática -->
            <div class="question" data-correct="a">
                <label>5. Qual é o valor de π (Pi) arredondado para duas casas decimais?</label>
                <div class="options">
                    <label><input type="radio" name="question5" value="a"> 3.14</label><br>
                    <label><input type="radio" name="question5" value="b"> 2.71</label><br>
                    <label><input type="radio" name="question5" value="c"> 1.41</label><br>
                    <label><input type="radio" name="question5" value="d"> 3.33</label><br>
                </div>
            </div>

            <!-- Pergunta 6 - Português -->
            <div class="question" data-correct="d">
                <label>6. Qual é o sujeito na frase "O livro foi lido por Maria"?</label>
                <div class="options">
                    <label><input type="radio" name="question6" value="a"> Maria</label><br>
                    <label><input type="radio" name="question6" value="b"> Lido</label><br>
                    <label><input type="radio" name="question6" value="c"> Foi</label><br>
                    <label><input type="radio" name="question6" value="d"> O livro</label><br>
                </div>
            </div>
            
            <!-- Pergunta 7 - História -->
            <div class="question" data-correct="a">
                <label>7. Em que ano ocorreu a Proclamação da República no Brasil?</label>
                <div class="options">
                    <label><input type="radio" name="question7" value="a"> 1889</label><br>
                    <label><input type="radio" name="question7" value="b"> 1822</label><br>
                    <label><input type="radio" name="question7" value="c"> 1930</label><br>
                    <label><input type="radio" name="question7" value="d"> 1964</label><br>
                </div>
            </div>
            
            <!-- Pergunta 8 - Geografia -->
            <div class="question" data-correct="c">
                <label>8. Qual é o país com a maior população do mundo?</label>
                <div class="options">
                    <label><input type="radio" name="question8" value="a"> Estados Unidos</label><br>
                    <label><input type="radio" name="question8" value="b"> Índia</label><br>
                    <label><input type="radio" name="question8" value="c"> China</label><br>
                    <label><input type="radio" name="question8" value="d"> Indonésia</label><br>
                </div>
            </div>

            <!-- Pergunta 9 - Matemática -->
            <div class="question" data-correct="d">
                <label>9. Qual é a raiz quadrada de 64?</label>
                <div class="options">
                    <label><input type="radio" name="question9" value="a"> 6</label><br>
                    <label><input type="radio" name="question9" value="b"> 7</label><br>
                    <label><input type="radio" name="question9" value="c"> 9</label><br>
                    <label><input type="radio" name="question9" value="d"> 8</label><br>
                </div>
            </div>
            
            <!-- Pergunta 10 - Português -->
            <div class="question" data-correct="a">
                <label>10. Qual é o sinônimo de "feliz"?</label>
                <div class="options">
                    <label><input type="radio" name="question10" value="a"> Contente</label><br>
                    <label><input type="radio" name="question10" value="b"> Triste</label><br>
                    <label><input type="radio" name="question10" value="c"> Bravo</label><br>
                    <label><input type="radio" name="question10" value="d"> Nervoso</label><br>
                </div>
            </div>
            
            <!-- Botão de Envio -->
            <button type="submit">Enviar</button>
        </form>
        <div id="result" style="display:none;">
            <h2>Resultados</h2>
            <p id="score"></p>
        </div>
    </div>
    
    <script>
        document.getElementById('quizForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            let correctAnswers = 0;
            const questions = document.querySelectorAll('.question');
            
            questions.forEach((question, index) => {
                const correctAnswer = question.getAttribute('data-correct');
                const selectedOption = document.querySelector(`input[name="question${index + 1}"]:checked`);
                
                if (selectedOption) {
                    const label = selectedOption.parentElement;
                    if (selectedOption.value === correctAnswer) {
                        correctAnswers++;
                        label.classList.add('correct');
                    } else {
                        label.classList.add('incorrect');
                    }
                }

                // Marcar a resposta correta em azul
                const correctOption = document.querySelector(`input[name="question${index + 1}"][value="${correctAnswer}"]`);
                if (correctOption) {
                    correctOption.parentElement.classList.add('correct-answer');
                }
            });
            
            // Mostrar o resultado
            document.getElementById('score').innerText = `Você acertou ${correctAnswers} de ${questions.length} perguntas.`;
            document.getElementById('result').style.display = 'block';
            
            // Desabilitar todas as opções
            const options = document.querySelectorAll('input[type="radio"]');
            options.forEach(option => {
                option.disabled = true;
            });
        });
    </script>
</body>
</html>
