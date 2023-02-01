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
      for (let j = 0; j < radios.length; j++) {
        if (radios[j].checked && radios[j].value === answers[i]) {
          score++;
          break;
        }
      }
    }
    const result = document.querySelector("#result");
    if (score === total) {
        result.innerHTML = "🙂 Félicitations, vous avez obtenu " + score + " sur " + total + " ! Toutes les réponses sont correctes. 🙂";
    } else {
        result.innerHTML = "😠 Désolé, vous avez seulement obtenu " + score + " sur " + total + ". Il y a une ou plusieurs réponses incorrectes.😠";
    }
  }