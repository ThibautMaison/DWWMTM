const display = document.getElementById("display");
const input = document.getElementById("input");
const select = document.getElementById("select");
const submit = document.getElementById("submit");

// formules
const euro_to_livresterling = 0.88;
const euro_to_dollar = 1.04;
const euro_to_dollarCA = 1.38;
const euro_to_yen = 145;
const euro_to_pesos = 20;
const euro_to_dirham = 11.11;
const euro_to_roupie = 84.5;

// Calcul et affichage 
submit.onclick = () => {
    console.log(select.value);
    let result = "";
    const euro = input.value;
    switch(select.value) {
        case "Livre Sterling" :
        result = `${euro} = ${euro * euro_to_livresterling}` ;
        break;
        case "Dollar":
        result = `${euro} = ${euro * euro_to_dollar}` ;
        break;
        case "DollarCA":
        result = `${euro} = ${euro * euro_to_dollarCA}` ;
        break;
        case "Yen":
        result = `${euro} = ${euro * euro_to_yen}` ;
        break;
        case "Pesos":
        result = `${euro} = ${euro * euro_to_pesos}` ;
        break;
        case "Dirham":
        result = `${euro} = ${euro * euro_to_dirham}` ;
        break;
        case "Roupie":
        result = `${euro} = ${euro * euro_to_roupie}` ;
        break;
    }
}


