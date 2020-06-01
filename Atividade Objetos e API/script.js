//Exercicio 1
console.log('########## EXERCÍCIO 1 ###########\n')
var receita = {
    titulo: 'Lasanha',
    porcoes: 4,
    ingredientes: [
        'Massa de lasanha',
        'Molho de tomate',
        'Mussarela',
        'Presunto',
        'Carne moída'
    ]
};

console.log('Prato: '+receita.titulo);
console.log('Porções: '+receita.porcoes);
console.log('Ingredientes: '+receita.ingredientes[0]+ ", " +receita.ingredientes[1]+ ", " + receita.ingredientes[2]+ ", " +receita.ingredientes[3]+ ", " +receita.ingredientes[4]);


//Exercicio 2
console.log('\n########## EXERCÍCIO 2 ###########\n');
var livros = [
    {
        titulo: 'Harry Potter e a Pedra Filosofal',
        autor: 'J. K. Rownling',
        livroLido: true
    },
    {
        titulo: 'Harry Potter e a Câmara Secreta',
        autor: 'J. K. Rownling',
        livroLido: true
    },
    {
        titulo: 'Harry Potter e o Prisioneiro de Azkaban',
        autor: 'J. K. Rownling',
        livroLido: true
    },
    {
        titulo: 'Harry Potter e o Cálice de Fogo',
        autor: 'J. K. Rownling',
        livroLido: false
    },
];

for (var i = 0; i < livros.length; i++) {
    if (livros[i].livroLido) {
        console.log('Livro '+ (i+1) + " {\nTítulo: "+ livros[i].titulo + "\nAutor: " + livros[i].autor + "\nStatus: Você já leu este livro.\n}\n");
    } else {
        console.log('Livro '+ (i+1) + " {\nTítulo: "+ livros[i].titulo + "\nAutor: " + livros[i].autor + "\nStatus: Você ainda não leu este livro.\n}\n");
    }
}

//Exercicio 3
console.log('\n########## EXERCÍCIO 3 ###########\n');

    fetch('https://api.github.com/users/hellolusca')
    .then(response => response.json())
    .then(data => {
        console.log(data)
    })
    .catch(error => console.log(error));


//Exercicio 4
console.log('\n########## EXERCÍCIO 4 ###########\n');

    fetch('https://dog.ceo/api/breeds/image/random')
    .then(response => response.json())
    .then(data => {
        console.log(data)
    })
    .catch(error => console.log(error));

//Exercicio 5
console.log('\n########## EXERCÍCIO 5 ###########\n');

    fetch('https://dog.ceo/api/breeds/image/random')
    .then(response => response.json())
    .then(data => {
        console.log(`<img src="`+data.message+`alt="Random Photo of a Dog"/>`)
    })
    .catch(error => console.log(error));

//Exercicio 6
console.log('\n########## EXERCÍCIO 6 ###########\n');

    fetch('https://dog.ceo/api/breeds/image/random')
    .then(response => response.json())
    .then(data => {
        console.log(`<img src="`+data.message+`alt="Random Photo of a Dog"/>`)
        document.getElementById("photo").src = data.message;
        
    })
    .catch(error => console.log(error));

//Exercicio 8
console.log('\n########## EXERCÍCIO 8  ###########\n');
fetch('https://aws.random.cat/meow')
    .then(response => response.json())
    .then(data => {
        console.log(`<img src="`+data.file+`alt="Random Photo of a cat"/>`);
        document.getElementById("cat").src = data.file;
    })
    .catch(error => console.log(error));
