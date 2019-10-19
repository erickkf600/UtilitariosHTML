Algoritmo "Números iguais ou diferentes"
// Faça  um algoritmo que leia dois números e identifique
//se são iguais ou diferentes. Caso eles sejam iguais
//imprima uma mensagem dizendo que eles são iguais. Caso sejam diferentes,
//informe qual número é o maior, e uma mensagem que são diferentes.
Var
x,y:real
Inicio
 escreva("Primeiro numero: ")
  leia(x)
   escreva("Segundo Numero: ")
    leia(y)
    escreval("==========")

     se (x = y)entao
      escreva("Numeros iguais")
       senao
      se (x < y) entao
     escreval("Numeros diferentes")
     escreval("")
    escreva (x, " é menor que ", y)
   senao
  escreva (x, " é maior que ", y)
 fimse
fimse
Fimalgoritmo