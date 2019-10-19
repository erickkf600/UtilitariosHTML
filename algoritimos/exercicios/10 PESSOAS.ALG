Algoritmo "10 Pessoas"
//Desenvolva um programa que leia o nome e a idade de 10 pessoas e
// exiba: o nome e a idade da pessoa mais nova.
Var
n, nv:caracter
i, id, idn:inteiro

Inicio
nv <- ""
idn <- 80
para i de 1 ate 10 faca
 escreval(i)
  escreva("Nome: ")
   leia(n)
    escreva("idade: ")
     leia (id)
      escreval("=======")
       se (id < idn) entao
        idn <- id
         nv <- n
        fimse
      fimpara
     escreval("======================================")
    se (idn < id) entao
 escreval(nv, " É a pessoa mais nova e possui ", idn, " anos")
fimse
Fimalgoritmo