Algoritmo "Exercicio 2"

Var
idade:inteiro
nome,classe:caracter

Inicio
    escreva("Nome do eleitor ")
      leia(nome)
         escreva("Idade do eleitor ")
           leia(idade)

             se (idade >= 18) e (idade <= 65) entao
              escreva ("O ", nome,  " é eleitor obrigatório")
             senao
            se (idade < 16) entao
           escreva ("O ", nome,  " não pode votar")
         senao
       se (idade >= 16) e (idade < 18) ou (idade > 65)entao
      escreva ("O ", nome, " tem voto facultativo")
     fimse
    fimse
   fimse
Fimalgoritmo