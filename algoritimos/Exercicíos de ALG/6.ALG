Algoritmo "6"
//Escreva um programa para ler o número de gols marcados pelo Grêmio e o
//número de gols marcados pelo Inter em um Campeonato. Escrever o nome do
//vencedor. Caso não haja vencedor deverá ser impressa a palavra EMPATE.
Var
grem,inter:inteiro
Inicio
 escreva("Gols do Gremio ")
   leia(grem)
    escreva("Gols do Inter ")
     leia(inter)

       se (grem > inter) entao
      escreva ("GREMIO")
     fimse
    se (inter > grem) entao
   escreva ("INTER")
  senao
 escreva("EMPATE")
fimse
Fimalgoritmo