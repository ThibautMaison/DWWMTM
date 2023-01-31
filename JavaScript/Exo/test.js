nbr = 5;
var f = 1;
for (let i = 1; i <= nbr; i++) {
  f = f * i;
}

const Ville1 = {
  nom: "Paris",
  lat: 48.8534,
  long: 2.3488,
};
const Ville2 = {
  nom: "Bordeaux",
  lat: 44.8333,
  long: 2.378,
};
const Ville3 = {
  nom: "Dunkerque",
  lat: 51.035,
  long: 2.378,
};
village = [Ville1, Ville2, Ville3];
for (let indice of village) {
  console.log(
    `------${indice.nom}------\nLatitude : ${indice.lat}\nLongitude : ${indice.long}\n`
  );
}



const notes = [5, 10, 15, 20];
function avg(notes) {
  let sum = 0;
  notes.forEach(function (item) {
    sum += item;
  });
  return sum / notes.length;
}
let avgNotes = avg(notes);
console.log(`La moyenne est : ${avgNotes}`);



function calculateAverage(notes) {
    let total = 0;
    for (let i in notes) {
      total += notes[i];
    }
    return total / notes.length;
  }
  let average = calculateAverage(notes);
  console.log(`La moyenne est : ${average}`);



  function calculateAverageNb(notes) {
    let total = 0;
    for (let grade of notes) {
      total += grade;
    }
    return total / notes.length;
  }
  
  let averageNb = calculateAverageNb(notes);
  console.log(`La moyenne est : ${averageNb}`);

let randoms = [];
for (let i = 0; i < 10; i++) {
  randoms[i] = Math.floor(Math.random() * 2);
}
let piles = 0;
let faces = 0;
for (let i = 0; i < 10; i++) {
  if (randoms[i] === 0) {
    piles++;
  } else {
    faces++;
  }
}
console.log(`Il y a ${piles} piles et ${faces} faces.`);
