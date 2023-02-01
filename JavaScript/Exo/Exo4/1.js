const notes = [10, 20, 30, 40, 50];

// ----------------------1-------------------
for (const [index, note] of notes.entries()) {
  console.log(`Note ${index} : ${note}`);
}
// ----------------------2-------------------
const notes2 = notes.map(function(note){
    return note ** note;

});
console.log(notes2);

// ----------------------3-------------------

const personne = [
    { name: 'Riri', age: 25 },
    { name: 'Fifi', age: 23 },
    { name: 'Loulou', age: 22 },
    { name: 'Titi', age: 24 }
  ];
  
  const nameRemove = 'Riri';
  
  const filtrepersonne = personne.filter(personne => personne.name !== nameRemove);
  console.log(filtrepersonne);