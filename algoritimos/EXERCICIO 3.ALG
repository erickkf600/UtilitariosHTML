Algoritmo "EXERCICIO 3"
// Escreva um algoritmo que leia o nome do aluno, 3 notas , faça a soma destas notas e calcule a média.
//Ao final deverá emitir a mensagem com nome do aluno e a sua situação "aprovado" ou "reprovado".
//A média deverá ser maior que sete para a aprovação.

Var
n1,n2,n3,media:real
nomealu:caracter

Inicio
 escreva ("entre com o nome " )
  leia (nomealu)
   escreva("entre com a nota " )
    leia(n1)
     escreva("entre com a nota " )
      leia(n2)
       escreva("entre com a nota " )
        leia(n3)

       media <- (n1+n2+n3)/3
      se (media >= 7) entao
     escreva ("aluno aprovado")
    senao
   escreva ("Você esta reprovado")
  fimse
Fimalgoritmo