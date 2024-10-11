function operaciones(){
    let n1, n2, tipoope, ope, 
    let n1=parseInt(document.getElementById("n1").value);
    let n2=parseInt(document.getElementById("n2").value);
    let tipoop=parseInt(document.getElementById("tipo").value);

    if (isNumber(n1) && isNumber(n2)){
        switch(tipoop){
            case "+":op=n1+n2;
            break
            case "-":op=n1-n2;
            break
            case "*":op=n1*n2;
            break
            case "/":op=n1/n2;
        }

        let respuesta=document-getElementById("resultado")
        respuesta.innerHTML= `<h3>${n1} ${tipoop} ${n2} = ${op}</h3>`
    }else{
        alert("ingresa solo numeros por favor")
    }

    

    
}

function isNumber(n){
    return isNaN(parseInt(n) && isFinite(n));
}