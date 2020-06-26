$( document ).ready(function() {
    fetch("https://jsonplaceholder.typicode.com/posts", { 
        method: "GET",
        headers: { 
            "Content-type": "application/json; charset=UTF-8",
            "Accept": "application/json"
        } 
    }) 
    .then(response => response.json())
    .then(
        function(data) {  
        var countleft = 0;
        var length = data.length;
        var divisao1 = length/2
        var countright = divisao1+1;
        
        while (countleft < divisao1) {
            var div = document.getElementById("conteudo-left");
            var newSection = document.createElement("section");
            var conteudo = document.createTextNode("Name: "+data[countleft].name+"\nEmail: "+data[countleft].email+"\nPost: "+data[countleft].body);
            newSection.appendChild(conteudo);
            div.appendChild(newSection);
            countleft++
        }

        while (countright < length) {
            var div = document.getElementById("conteudo-right");
            var newSection = document.createElement("section");
            var conteudo = document.createTextNode("Name: "+data[countright].name+"\nEmail: "+data[countright].email+"\nPost: "+data[countright].body);
            newSection.appendChild(conteudo);
            div.appendChild(newSection);
            countright++
        }  
    });
});

function enviarPost() {
    var name = $('#name').val();
    var email = $('#email').val();
    var post = $('#post').val();
    
    fetch("https://jsonplaceholder.typicode.com/posts", { 
        method: "POST",
        body: JSON.stringify({
        name: name,
        email: email,
        post: post
        }), 
        headers: { 
            "Content-type": "application/json; charset=UTF-8",
            "Accept": "application/json"
        } 
    }) 
    .then(response => response.json())
    .then(
        function(data) {
        console.log(data);
        alert("Postado!")        
        }
    ); 
}
