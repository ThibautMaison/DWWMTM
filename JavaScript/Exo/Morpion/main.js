const cells = document.querySelectorAll('[data-cell]');
const gameStatus = document.getElementById('gameStatus');
const endGameStatus = document.getElementById('endGameStatus');
const playerOne = '🤡'; const playerTwo = '😈';
let playerTurn = playerOne;

const winningPatterns = [
  [0, 1, 2],
  [3, 4, 5],
  [6, 7, 8],
  [0, 3, 6],
  [1, 4, 7],
  [2, 5, 8],
  [0, 4, 8],
  [2, 4, 6]
];

cells.forEach(cell => {
  cell.addEventListener('click', playGame, { once: true });
});

function playGame(e) {
  e.target.innerHTML = playerTurn;

  if (checkWin(playerTurn)) {
    updateGameStatus("wins" + playerTurn);
    return endGame();
  } else if (checkDraw()) {
    updateGameStatus("draw");
    return endGame();
  }

  updateGameStatus(playerTurn);
  playerTurn == playerOne ? playerTurn = playerTwo : playerTurn = playerOne;
}

function checkWin(playerTurn) {
  return winningPatterns.some(combination => {
    return combination.every(index => {
      return cells[index].innerHTML == playerTurn;
    });
  });
}

function checkDraw() {
  return [...cells].every(cell => {
    return cell.innerHTML == playerOne || cell.innerHTML == playerTwo;
  });
}

function updateGameStatus(status) {
  let statusText;

  switch (status) {
    case '🤡':
      statusText = "Le joueur 2 (😈) a gagné!";
      statusText = "Au tour du joueur 2 ()";
      break;
    case '😈':
      statusText = "Au tour du joueur 1 (🤡)";
      break;
    case 'wins🤡':
      statusText = "Le joueur 1 (🤡) a gagné!";
      break;
    case 'wins😈':
      statusText = "Le joueur 2 (😈) a gagné!";
      break;
    case 'draw':
      statusText = "Egalité! Personne ne gagne!";
      break;
  }

  gameStatus.innerHTML = statusText;
  endGameStatus.innerHTML = statusText;
}

function endGame() { document.getElementById('gameEnd').style.display = "block" }
function reloadGame() { window.location.reload() }