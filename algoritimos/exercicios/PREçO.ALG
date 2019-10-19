Algoritmo "Preço"
//Faça um algoritmo que receba o preço de custo e o preço de venda
//de 40 produtos. Mostre como resultado se houve lucro, prejuízo ou
//empate para cada produto. Informe media de preço de custo e do preço de venda.
var
s:inteiro
ven, cust, mcust, mven:real     //ven= preço de venda/ mven= media de venda
                               //cust= preço de custo/ mcust= media de custo
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