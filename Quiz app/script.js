const quizData = [
  {
    question: "Do you have any goals or dreams?",
    a: "100 % yes",
    b: "Somehow",
    c: "Not at alll",
    d: "Working on it",
    correct: "a",
  },
  {
    question: "What step do you need to take closer to your goal?",
    a: "Breaking your goal into small step",
    b: "Taking action on your goal",
    c: "Waiting to see your goals come true",
    d: "Working on it",
    correct: "a",
  },
  {
    question: "Do you have any difficulties?",
    a: "100 % yes",
    b: "Somehow",
    c: "Not at alll",
    d: "Working on it",
    correct: "a",
  },
  {
    question: "what do you think?",
    a: "100 % yes",
    b: "Somehow",
    c: "Not at alll",
    d: "Working on it",
    correct: "a",
  },
  {
    question: "what do you think?",
    a: "100 % yes",
    b: "Somehow",
    c: "Not at alll",
    d: "Working on it",
    correct: "a",
  },
];

const quiz = document.getElementById("quiz");
const answerEls = document.querySelectorAll(".answer");
const questionEl = document.getElementById("question");
const a_text = document.getElementById("a_text");
const b_text = document.getElementById("b_text");
const c_text = document.getElementById("c_text");
const d_text = document.getElementById("d_text");
const submitBtn = document.getElementById("submit");

let currentQuiz = 0;
let score = 0;

loadQuiz();

function loadQuiz() {
  deselectAnswers();
  const currentQuizData = quizData[currentQuiz];

  questionEl.innerText = currentQuizData.question;
  a_text.innerText = currentQuizData.a;
  b_text.innerText = currentQuizData.b;
  c_text.innerText = currentQuizData.c;
  d_text.innerText = currentQuizData.d;
}

function deselectAnswers() {
  answerEls.forEach((answerEl) => (answerEls.checked = false));
}

function getSelected() {
  let answer;
  answerEls.forEach((answerEl) => {
    if (answerEl.checked) {
      answer = answerEl.id;
    }
  });
  return answer;
}

submitBtn.addEventListener("click", () => {
  const answer = getSelected();
  if (answer) {
    if (answer === quizData[currentQuiz].correct) {
      score++;
    }
    currentQuiz++;
    if (currentQuiz < quizData.length) {
      loadQuiz();
    } else {
      quiz.innerHTML = `
            <h2>you  answered ${score}/${quizData.length}  questions correctly </h2>

            <button onclick="location.reload()">Reload</button>`;
    }
  }
});
