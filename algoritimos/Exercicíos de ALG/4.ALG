Algoritmo "4"
//As maçãs custam R$ 0,30 cada se forem compradas menos do que uma dúzia,
//R$ 0,25 se forem compradas pelo menos doze. Escreva um programa
//que leia o número de maçãs compradas, calcule e escreva
//o valor total da compra.

Var
macas:inteiro
vtm:real  //valor total de maçãs.

Inicio
 escreva("Quantas maçãs comprou ")
  leia(macas)
   se (macas < 12) entao
     vtm<- (macas*0.30)
    senao
   vtm<- (macas*0.25)
  fimse
 escreva("Valor total da compra ",vtm)
Fimalgoritmo