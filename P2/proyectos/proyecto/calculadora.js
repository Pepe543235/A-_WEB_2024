function operaciones() {
    let valor = parseInt(document.getElementById("valor").value);
    let tipoop = document.getElementById("tipo").value;

    if (isNumber(valor)) {
        let op;
        let respuesta = document.getElementById("resultado");
        switch (tipoop) {
            case "dap":
                op = valor * 20.03;
                v="Pesos";
                break;
            case "pad":
                op = valor * 0.050;
                v="Dolares";
                break;
            case "eap":
                op = valor * 21.68;
                v="pesos";
                break;
            default:
                op = "Operación no válida";
        }
        switch (v) {
            case "Pesos":
                respuesta.innerHTML = `<img src="economy.png" id="icono"> <h2>${op} ${v}</h2>`;
                break;
            case "Dolares":
                respuesta.innerHTML = `<img src="coin.png" id="icono"> <h2>${op} ${v}</h2>`;
                break;
            case "pesos":
                respuesta.innerHTML = `<img src="euro.png" id="icono"> <h2>${op} ${v}</h2>`;
                break;
        }
        
    } else {
        let respuesta = document.getElementById("resultado");
        respuesta.innerHTML = `<h2>ingresa solo numeros por favor</h2>`;
        alert("ingresa solo numeros por favor");
    }
}

function isNumber(n) {
    return !isNaN(parseInt(n)) && isFinite(n);
}
