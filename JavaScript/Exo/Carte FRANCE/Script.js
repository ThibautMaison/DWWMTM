const FR_GES = document.querySelector("#FR-GES");
const FR_NAQ = document.querySelector("#FR-NAQ");
const FR_ARA = document.querySelector("#FR-ARA");
const FR_BFC = document.querySelector("#FR-BFC");
const FR_BRE = document.querySelector("#FR-BRE");
const FR_CVL = document.querySelector("#FR-CVL");
const FR_COR = document.querySelector("#FR-COR");
const FR_IDF = document.querySelector("#FR-IDF");
const FR_OCC = document.querySelector("#FR-OCC");
const FR_HDF = document.querySelector("#FR-HDF");
const FR_NOR = document.querySelector("#FR-NOR");
const FR_PDL = document.querySelector("#FR-PDL");
const FR_PAC = document.querySelector("#FR-PAC");

const TabRegion = [FR_GES, FR_NAQ, FR_ARA, FR_BFC, FR_BRE, FR_CVL, FR_COR, FR_IDF, FR_OCC, FR_HDF, FR_NOR, FR_PDL, FR_PAC];

const result = document.querySelector("#resultat");

const regionData = [
    { name: "Grand Est", longitude: 30.0, area: 150, population: 80000 },
    { name: "Nouvelle-Aquitaine", longitude: 30.0, area: 150, population: 80000 },
    { name: "Auvergne-Rhône-Alpes", longitude: 60.0, area: 300, population: 150000 },
    { name: "Bourgogne-Franche-Comté", longitude: 45.5, area: 200, population: 100000 },
    { name: "Bretagne", longitude: 30.0, area: 150, population: 80000 },
    { name: "Centre-Val de Loire", longitude: 60.0, area: 300, population: 150000 },
    { name: "Corse", longitude: 45.5, area: 200, population: 100000 },
    { name: "Île-de-France", longitude: 30.0, area: 150, population: 80000 },
    { name: "Occitanie", longitude: 60.0, area: 300, population: 150000 },
    { name: "Hauts-de-France", longitude: 45.5, area: 200, population: 100000 },
    { name: "Normandie", longitude: 30.0, area: 150, population: 80000 },
    { name: "Pays de la Loire", longitude: 60.0, area: 300, population: 150000 },
    { name: "Provence-Alpes-Côte d'Azur", longitude: 45.5, area: 200, population: 100000 },

];
for (let i = 0; i < TabRegion.length; i++) {
    TabRegion[i].addEventListener("mouseenter", function () {
        result.innerHTML = "Nom : " + regionData[i].name + "<br>" + "Longitude : " + regionData[i].longitude + "<br>" + "Superficie : " + regionData[i].area + "<br>" + "Population : " + regionData[i].population;
    });
}