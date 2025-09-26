let nombre = prompt("Escribe tu nombre");
let edad = parseInt(prompt("Escribe tu edad"));
let rango;

if (edad <= 12) {
    rango = "niño";
} else if (edad >= 13 && edad <= 17) {
    rango = "adolescente";
} else if (edad >= 17 && edad <= 64) {
    rango = "trabajador";
}
else {
    rango = "jubilado";
}

document.write(nombre + " tiene " + edad + " años y por tanto es tipo " + rango);