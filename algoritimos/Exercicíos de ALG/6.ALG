Algoritmo "6"
//Escreva um programa para ler o n�mero de gols marcados pelo Gr�mio e o
//n�mero de gols marcados pelo Inter em um Campeonato. Escrever o nome do
//vencedor. Caso n�o haja vencedor dever� ser impressa a palavra EMPATE.
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