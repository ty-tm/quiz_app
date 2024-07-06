document.addEventListener('DOMContentLoaded', () => {
    const startButton = document.getElementById('start-quiz');
    const questionContainer = document.getElementById('question-container');
    const questionElement = document.getElementById('question');
    const timerElement = document.getElementById('timer');
    const answerElement = document.getElementById('answer');

    startButton.addEventListener('click', startQuiz);

    function startQuiz() {
        startButton.style.display = 'none';
        questionContainer.style.display = 'block';
        loadQuestion();
    }

    function loadQuestion() {
        fetch('get_question.php')
            .then(response => response.json())
            .then(data => {
                questionElement.textContent = data.question;
                answerElement.textContent = data.answer;
                answerElement.style.display = 'none';
                startTimer();
            });
    }

    function startTimer() {
        let timeLeft = 5;
        timerElement.textContent = timeLeft;

        const timer = setInterval(() => {
            timeLeft--;
            timerElement.textContent = timeLeft;

            if (timeLeft <= 0) {
                clearInterval(timer);
                showAnswer();
            }
        }, 1000);
    }

    function showAnswer() {
        answerElement.style.display = 'block';
        setTimeout(() => {
            loadQuestion();
        }, 3000);
    }
});

function showQuestion(question) {
    questionElement.textContent = question;
    questionElement.classList.add('fade-in');
}

function showAnswer(answer) {
    answerElement.textContent = answer;
    answerElement.classList.add('slide-in');
    answerElement.style.display = 'block';
}