//variavel tipo boolean= true || false 

var isEnabled = false
 /*console é uma variavel global
 log é uma function*/ 
console.log (isEnabled)

//array e indices 
// indices é as posições da array
var names = ['Kayck', 'Rossi', 'Conceição'];
console.log (names)
console.log (names[0])

//metodo push para inserir valor na array

names.push('gabriel') //inseriu um novo valor
console.log(names.length) //length fala quantos itens existe dentro do meu array

//outro metodo de array já com orientação obejto 

var teams = new Array();
teams.push('Brasil') //Tá inserindo um valor na array
console.log (teams) //tá imprimindo as variaveis 

//estrutura de condição/repetição

function testenames(name){
    //return name.length retorna quantos caracteres tem no nome
    if (name.length >10) {
        return "Nome gigante hein!!!"
   }else{
    return"Nome pequeno em lindo!!!"
   }
}
console.log(testenames("Nycole Ribeiro Ferreira Santos"));

function IsEqual(name) {  //Validando se a informação é verdadeira ou não
    if (name == "kayck"){   //==(é igual)
        return 'Kayck é muito lindo!'
    }else if (name == "conceição"){
        return 'Conceição é muito feio slc veinho!'
    } else{
        return 'rala daqui otário!!!'
    }
} //Tá confirmando se a informação que foi colocada no console é igaul a que está no parametro 

console.log(IsEqual("kayck")) 

function testVariables() {
    let name = "Gabriel Rossi" //Consegue alterar a variavel depois --- Variavel Const não consegue alterar
    //if
    //for
    name = "Rossi gabriel" //alterou o nome da variavel 
    console.log (name);
}

//maneira certa de se montar uma function

const imprimeNome = (nome) => console.log (nome);
imprimeNome ("Kleber João");

