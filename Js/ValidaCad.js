
//Valida cada campo do formulário
function valida() {
    //pega o valor de cada campo
    var nome = document.getElementById("nome").value;
    var telefone = document.getElementById("telefone").value;
    
    var nome1 = 0;
    var telefone1 = 0;

    //Verifica nome, nome1 != 0 -> erro
    for(var i = 0;  i < nome.length; i++){
        if(nome[i] == ' ' || nome[i] == 'a' || nome[i] == 'b' || nome[i] == 'c' ||nome[i] == 'd' || nome[i] == 'e' || nome[i] == 'f' || nome[i] == 'g' ||
        nome[i] == 'h' || nome[i] == 'i' || nome[i] == 'j' || nome[i] == 'k' ||nome[i] == 'l' || nome[i] == 'm' || nome[i] == 'n' || nome[i] == 'o' ||
        nome[i] == 'p' || nome[i] == 'q' || nome[i] == 'r' || nome[i] == 's' ||nome[i] == 't' || nome[i] == 'u' || nome[i] == 'v' || nome[i] == 'v' ||
        nome[i] == 'x' || nome[i] == 'y' || nome[i] == 'w' || nome[i] == 'z'|| nome[i] == 'A' || nome[i] == 'B' || nome[i] == 'C' ||nome[i] == 'D' || nome[i] == 'E' || nome[i] == 'F' || nome[i] == 'G' ||
        nome[i] == 'H' || nome[i] == 'I' || nome[i] == 'J' || nome[i] == 'K' ||nome[i] == 'L' || nome[i] == 'M' || nome[i] == 'N' || nome[i] == 'O' ||
        nome[i] == 'P' || nome[i] == 'Q' || nome[i] == 'R' || nome[i] == 'S' ||nome[i] == 'T' || nome[i] == 'U' || nome[i] == 'v' || nome[i] == 'V' ||
        nome[i] == 'X' || nome[i] == 'Y' || nome[i] == 'W' || nome[i] == 'Z'){
        }else{
            nome1++;
        }
    }
    //verifica telefone, senha != 0 -> erro
    for(var i = 0;  i < telefone.length; i++){
        if(telefone.length > 11 || telefone.length < 11){
            telefone1++;
        }
        if(telefone[i] != 0 ||telefone[i] != 1 ||telefone[i] != 2 ||telefone[i] != 3 ||telefone[i] != 4 ||telefone[i] != 5 ||telefone[i] != 6 ||telefone[i] != 7 ||telefone[i] != 8 ||telefone[i] != 9 ){
            telefone1++;
        }
        
    }
    let vazio =0;

    //Verifica se os campos estão vazios
    if(nome.length == 0 ||telefone.length == 0 ){
        vazio++;
    }
    


    if (vazio != 0){
        alert("Campos vazios não são permitidos!");
    }
    if (nome1 != 0){
        alert("Nome invalido");
        nome.focus();
    }
    if (telefone1 != 0){
        alert("Telefone invalido");
        telefone.focus();
    }
    
    if(erro == 0){
        alert(erro);
    formulario.submit();
    }
    
}
