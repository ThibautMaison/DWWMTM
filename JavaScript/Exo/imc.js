let weight, height;

weight = 90;
height = 1.80;

if (isNaN(weight) || isNaN(height)) {
  console.log("Vous devez entrer des valeurs numériques valides pour le poids et la taille.");
} else {
  let bmi = weight / (height * height);
  if (bmi < 18.5) {
    console.log("IMC : " + bmi + ". Vous êtes en sous-poids.");
  } else if (bmi >= 18.5 && bmi <= 24.9) {
    console.log("IMC : " + bmi + ". Vous êtes en bonne santé.");
  } else if (bmi >= 25 && bmi <= 29.9) {
    console.log("IMC : " + bmi + ". Vous êtes en surpoids.");
  } else if (bmi >= 30) {
    console.log("IMC : " + bmi + ". Vous êtes en obésité.");
  }
}