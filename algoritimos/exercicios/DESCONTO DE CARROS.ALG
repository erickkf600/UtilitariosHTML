Algoritmo "Desconto de carros"
//A concession�ria de ve�culos CARANGO VELHO est� vendendo os seus
//ve�culos com desconto. Fa�a um  algoritmo que calcule e exiba o valor
//do desconto e o valor a ser pago pelo cliente de v�rios carros.
//O desconto  dever� ser calculado de acordo com o ano do ve�culo.
//At� 2000 - 12% e acima de 2000 - 7%. O sistema dever� perguntar
//se deseja continuar calculando desconto at� que a resposta seja:
//(N)  . Informar total de carros com  ano at� 2000 e total geral
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
                 escreval("Pre�o final do carro: R$",valf)
                  escreval
                 escreva("Realiza outra opera��o? [S]  [N]")
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
    escreval(t2mil," carros do ano de at� 2000 foram vendidos")
   escreval("Total geral: ",tot)
fimalgoritmo