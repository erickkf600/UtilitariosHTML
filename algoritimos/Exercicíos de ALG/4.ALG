Algoritmo "4"
//As ma��s custam R$ 0,30 cada se forem compradas menos do que uma d�zia,
//R$ 0,25 se forem compradas pelo menos doze. Escreva um programa
//que leia o n�mero de ma��s compradas, calcule e escreva
//o valor total da compra.

Var
macas:inteiro
vtm:real  //valor total de ma��s.

Inicio
 escreva("Quantas ma��s comprou ")
  leia(macas)
   se (macas < 12) entao
     vtm<- (macas*0.30)
    senao
   vtm<- (macas*0.25)
  fimse
 escreva("Valor total da compra ",vtm)
Fimalgoritmo