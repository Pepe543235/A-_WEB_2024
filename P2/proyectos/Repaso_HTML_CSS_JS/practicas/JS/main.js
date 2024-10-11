// Este es un comentario

/* Esto es un comentario
de varias
lineas */

// Alerta
// alert("Soy una alerta")

// Variables
var nombre = "Juan";
let nombre2 = "Pedro";
let edad = 30;
let logica = true;
let estatura = 1.75;

// Mostrar en pantalla
let datos = document.getElementById("información");
datos.innerHTML = `
<br>
<hr>
<h1>La persona: ${nombre} tiene la edad de: ${edad} años</h1>
<hr>
<br>
`;

let datos2 = document.getElementById("informacion2");
datos2.innerHTML = `
<br>
<hr>
<h2>Este es otro contenido</h2>
<hr>
`;

// Condicionales
if (estatura >= 1.90) {
    datos.innerHTML += `<hr> <h3>Es una persona alta</h3> <hr>`;
} else {
    datos.innerHTML += `<h3>Es una persona promedio</h3> <hr>`;
}

// Ciclos
for (let i = 1; i <= 5; i++) {
    datos.innerHTML += `<h4>For. El número es: ${i}</h4>`;
}

let a = 1;
while (a <= 5) {
    datos.innerHTML += `<h4>While: El número es: ${a}</h4>`;
    a++;
}

let b = 1;
do {
    datos.innerHTML += `<h4>Do While: El número es: ${b}</h4>`;
    b++;
} while (b <= 5);

// Funciones
function suma() {
    let n1 = 2;
    let n2 = 4;
    let resultado = n1 + n2;
    console.log("La suma es: " + resultado);
    datos.innerHTML += `<h3>La suma es: ${resultado}</h3>`;
}

function suma2() {
    let n1 = 2;
    let n2 = 4;
    return n1 + n2;
}

let sum = suma2();
datos.innerHTML += `<h3>La suma es: ${sum}</h3>`;

// Recibe parámetros 
function suma3(numero1, numero2) {
    return numero1 + numero2;
}

sum = suma3(8, 5);
datos.innerHTML += `<h3>La suma es: ${sum}</h3>`;

// Arreglos
let animales = [];
animales[0] = "Perico";
animales[1] = "Leon";
animales[2] = "Perro";
datos.innerHTML += `<h3>El animal en la posición 1 es: ${animales[1]}</h3>`;

for (let i = 0; i < animales.length; i++) {
    datos.innerHTML += `<h3>El animal en la posición ${i} es: ${animales[i]}</h3>`;
}


let datos2 = document.getElementById("informacion2");
datos2.innerHTML= `
<br>
<hr>
<h2>Este es otro contenido</h2>
<hr>
`;

//funcio normal
function sumaR(a,b)
{
    return a+b
}

datos.innerHTML += `<h3>El animal en la posición ${i} es: ${sumaR[3,6]}</h3>`;

const sumaFlecha=(a,b)=>a+b;

datos.innerHTML += `<h3>El animal en la posición ${i} es: ${sumaR[3,6]}</h3>`;
