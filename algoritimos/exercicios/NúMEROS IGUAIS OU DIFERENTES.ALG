Algoritmo "N�meros iguais ou diferentes"
// Fa�a  um algoritmo que leia dois n�meros e identifique
//se s�o iguais ou diferentes. Caso eles sejam iguais
//imprima uma mensagem dizendo que eles s�o iguais. Caso sejam diferentes,
//informe qual n�mero � o maior, e uma mensagem que s�o diferentes.
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
    escreva (x, " � menor que ", y)
   senao
  escreva (x, " � maior que ", y)
 fimse
fimse
Fimalgoritmo