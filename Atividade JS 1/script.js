// Função criada em um ficheiro externo que mostra uma mensagem
function questaoum() {
    alert('AIA');
}

function acendeLampada() {
    document.getElementById("lampada").src = "acesa.jpg";
}

function apagaLampada() {
    document.getElementById("lampada").src = "apagada.jpg";
}

function quebraLampada() {
    document.getElementById("lampada").src = "quebrada.jpg";
}

function questaocinco() {
    var name = prompt('Digite seu primeiro e ultimo nome.');
    var nomes = name.split(' ');
    var nome = nomes[0];
    var sobrenome = nomes[1];
    alert('Nome: '+nomes[0]+'    Sobrenome: '+nomes[1])
}

function questaocincoa() {
    let nome = document.getElementById("nome").value;
    let sobrenome = document.getElementById("sobrenome").value;
    alert('Olá, '+nome+" "+sobrenome);
}

function questaoseis () {
    let numeros = document.getElementById("media").value;
    let numarray = numeros.split(",");
    let aux = 0;

    for (let i = 0; i < numarray.length; i++) {
        aux = aux + parseInt(numarray[i]);
    }

    let media = aux/numarray.length;
    alert('A média é: '+media)
}

function questaosete() {
    let numeros = document.getElementById("quadrado").value;
    let numarray = numeros.split(",");
    
    let quad1 = parseInt(numarray[0]) * parseInt(numarray[0]);
    let quad2 = parseInt(numarray[1]) * parseInt(numarray[1]);
    let quad3 = parseInt(numarray[2]) * parseInt(numarray[2]);
    let quad4 = parseInt(numarray[3]) * parseInt(numarray[3]);
    let quad5 = parseInt(numarray[4]) * parseInt(numarray[4]);

    alert('Quadrado do 1° número: '+quad1+"\nQuadrado do 2° número: "+quad2+"\nQuadrado do 3° número: "+quad3+"\nQuadrado do 4° número: "+quad4+"\nQuadrado do 5° número: "+quad5);
}

function questaooito () {
    let numeros = document.getElementById("maior").value;
    let numarray = numeros.split(",");

    let maior = 0;

    for (let i = 0; i < numarray.length; i++) {
        if (parseInt(numarray[i])  > maior ) {
            maior = numarray[i];
        }
    }

    alert('O maior número digitado é o: '+maior)
}

function questaonove () {
    let numeros = document.getElementById("idade").value;
    let numarray = numeros.split(",");

    let maiores = 0;
    let menores = 0;

    for (let i = 0; i < numarray.length; i++) {
        if (parseInt(numarray[i])  >= 18 ) {
            maiores = maiores + 1;
        } else {
            menores = menores + 1;
        }
    }

    alert('Maiores de idade: '+maiores+'\nMenores de idade: '+menores);

}

function questaodez() {
    let nomes = document.getElementById("nomes").value;
    let nomesarray = nomes.split(",");
    let resposta = "Nomes digitados:\n";

    for (let i = nomesarray.length - 1; i >= 0; i--) {
        resposta = resposta + (i+1)+"°. "+nomesarray[i]+"\n";
    }

    alert(resposta);
}