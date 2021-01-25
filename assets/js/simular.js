function calcularRisco(vp, r) {
    let investimento = parseFloat(prompt("Informe o valor total do investimento: R$"));
    

    console.log(r);
    if(investimento > vp) {
        let retorno = (investimento * porcentagem(r))/100

        alert("Valor do retorno: R$ " +retorno.toFixed(2));
    } else {
        alert("Erro: Investimento não pode ser menor que o valor do projeto.");
    }
}

function porcentagem(rsc) {
    switch(rsc) {
        case 0:
            return 5;
        case 1:
            return 10;
        case 2:
            return 20;
    }
}