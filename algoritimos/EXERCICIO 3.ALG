Algoritmo "EXERCICIO 3"
// Escreva um algoritmo que leia o nome do aluno, 3 notas , fa�a a soma destas notas e calcule a m�dia.
//Ao final dever� emitir a mensagem com nome do aluno e a sua situa��o "aprovado" ou "reprovado".
//A m�dia dever� ser maior que sete para a aprova��o.

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
   escreva ("Voc� esta reprovado")
  fimse
Fimalgoritmo