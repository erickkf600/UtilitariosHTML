Algoritmo "Desconto de carros"
//A concessionária de veículos CARANGO VELHO está vendendo os seus
//veículos com desconto. Faça um  algoritmo que calcule e exiba o valor
//do desconto e o valor a ser pago pelo cliente de vários carros.
//O desconto  deverá ser calculado de acordo com o ano do veículo.
//Até 2000 - 12% e acima de 2000 - 7%. O sistema deverá perguntar
//se deseja continuar calculando desconto até que a resposta seja:
//(N)  . Informar total de carros com  ano até 2000 e total geral
var
pro, select:caractere
ano, tot, t2mil:inteiro
val, valf,desc:real
inicio
 pro <- "S"
  enquanto pro <> "N" faca
   escreva("Insira o valor do carro: R$")
    leia(val)
     escreva("Insira o Ano do carro: ")
      leia(ano)
       se ano <= 2000 entao
        desc <- 12
        t2mil <- t2mil + 1
          tot <- tot + 1
           senao
            desc <- 7
             tot <- tot + 1
              fimse
               desc <- (desc * val)/100
                valf <- (val - desc)
                 escreval("Preço final do carro: R$",valf)
                  escreval
                 escreva("Realiza outra operação? [S]  [N]")
                leia(select)
               escreval("======================================================")
              escreval("")
             escolha select
            caso "S"
           pro <- "S"
          caso "N"
         pro <- "N"
       fimescolha
     fimenquanto
    escreval(t2mil," carros do ano de até 2000 foram vendidos")
   escreval("Total geral: ",tot)
fimalgoritmo