Algoritmo "Pre�o"
//Fa�a um algoritmo que receba o pre�o de custo e o pre�o de venda
//de 40 produtos. Mostre como resultado se houve lucro, preju�zo ou
//empate para cada produto. Informe media de pre�o de custo e do pre�o de venda.
var
s:inteiro
ven, cust, mcust, mven:real     //ven= pre�o de venda/ mven= media de venda
                               //cust= pre�o de custo/ mcust= media de custo
inicio
 para s de 1 ate 40 faca
 escreval ("Produto", s)
  escreval("")
  escreva("Vendas: ")
   leia(ven)
    mven <- (mven + ven)
     escreva("Custo: ")
      leia(cust)
       mcust <- (mcust + cust)
        se (ven < cust) entao
         escreval("#PREJUZO#")
         escreval("==========")
          senao
         se (ven = cust) entao
        escreval("*EMPATE*")
        escreval("==========")
       fimse
      se (ven > cust) entao
     escreval("$LUCRO$")
     escreval("==========")
    fimse
   fimse
  fimpara
 escreval("Media de custo : ",mcust/40)
escreval("Meidia de vendas : ",mven/40)
fimalgoritmo