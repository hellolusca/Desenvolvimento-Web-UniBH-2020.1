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