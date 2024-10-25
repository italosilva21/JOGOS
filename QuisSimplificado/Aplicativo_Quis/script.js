// script.js
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("quizForm");
    const progressBar = document.querySelector(".progress");
    const resultContainer = document.getElementById("result");
    const scoreDisplay = document.getElementById("score");

    // Atualizar a barra de progresso
    form.addEventListener("change", function() {
        const totalQuestions = form.querySelectorAll(".question").length;
        const answeredQuestions = form.querySelectorAll(".question input:checked").length;
        const progressPercentage = (answeredQuestions / totalQuestions) * 100;
        progressBar.style.width = progressPercentage + "%";
    });

    // Enviar o formulário
    form.addEventListener("submit", function(e) {
        e.preventDefault();
        
        let score = 0;
        const questions = form.querySelectorAll(".question[data-correct]");

        questions.forEach((question, index) => {
            const correctAnswer = question.getAttribute("data-correct");
            const selectedAnswer = form.querySelector(`input[name="question${index + 1}"]:checked`);

            if (selectedAnswer && selectedAnswer.value === correctAnswer) {
                score++;
            }
        });

        // Exibir resultados
        resultContainer.style.display = "block";
        scoreDisplay.textContent = `Você acertou ${score} de ${questions.length} perguntas.`;

        form.reset();
        progressBar.style.width = "0%";
    });
});
