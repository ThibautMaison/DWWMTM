const result = document.querySelector("#result");
const resetButton = document.querySelector(".btn");
function checkAnswers() {
  let score = 0;
  let total = 5;
  let answers = [
    "a",
    "b",
    "c",
    "a",
    "b"
  ];

  for (let i = 0; i < total; i++) {
    let radios = document.getElementsByName("question" + (i + 1));
    let question = document.querySelector("#Question" + (i + 1));
    for (let j = 0; j < radios.length; j++) {
      if (radios[j].checked) {
        if (radios[j].value === answers[i]) {
          score++;
          question.style.backgroundColor = "green";
          break;
        } else {
          question.style.backgroundColor = "red";
          break;
        }
      }
    }
  }
  if (score === total) {
      result.innerHTML = "🙂 Félicitations, vous avez obtenu " + score + " sur " + total + " ! Toutes les réponses sont correctes. 🙂";
  } else {
      result.innerHTML = "😠 Désolé, vous avez seulement obtenu " + score + " sur " + total + ". Il y a une ou plusieurs réponses incorrectes.😠";
  }


  resetButton.addEventListener("click", function() {
    for (let i = 0; i < total; i++) {
      let question = document.querySelector("#Question" + (i + 1));
      question.style.backgroundColor = "";
      let radios = document.getElementsByName("question" + (i + 1));
      for (let j = 0; j < radios.length; j++) {
        radios[j].checked = false;
      }
    }
    result.innerHTML = "";
    score = 0;
  });

}
