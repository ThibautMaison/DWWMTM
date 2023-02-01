const notes = [5,10,15,20];
console.log(notes);

// la fonction pop() permet de supprimer un élément de la liste
notes.pop();
console.log(notes);

// la fonction push() permet d'ajouter un élément à la fin de la liste
notes.push(5,19);
console.log(notes);

// la fonction map permet de recuperer un tableau avec les valeurs de chaque élément
const notes2 = notes.map(function(note){
    // return math.pow(note,2);
    return note ** note;

});
console.log(notes2);

notes.map(note => note * 2);
console.log(notes);

// recuperer la note 3

const index = notes.findIndex(function (note){
    return note === 15;
})
console.log(index);

const etudiants = [
    ["riri",5,10,15,20],
    ["fifi",15,12,16,19],
    ["riri",6,11,13,3],
]

const valeur = etudiants.find(function(etudiant){
    return etudiant[0] === "fifi";
});
console.log(valeur);

