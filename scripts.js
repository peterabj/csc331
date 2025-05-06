
let currentQuestion = 1;
let score = 0;

// Correct answers
const correctAnswers = {
  Es: 8, 
  Md: 7,
  Hd: 2,
  Ex: 9
};

function nextQuestion() {
    if (currentQuestion <= 4) {
       
        let inputId = ['Es', 'Md', 'Hd', 'Ex'][currentQuestion - 1];
        checkAnswer(inputId);

       
        const currentDiv = document.getElementById(`q${currentQuestion}`);
        currentDiv.classList.remove('active');

        currentQuestion++;

        
        if (currentQuestion <= 4) {
            const nextDiv = document.getElementById(`q${currentQuestion}`);
            nextDiv.classList.add('active');
        } else {
            alert("Quiz finished! Your score is: " + score);
        }

        // Update score display
        document.getElementById("scoreDisplay").innerText = `Score: ${score}`;
    }
}

function checkAnswer(inputId) {
    const userInput = document.getElementById(inputId).value;
    const correct = correctAnswers[inputId];

    if (parseInt(userInput) === correct) {
        score++;
    }
}
