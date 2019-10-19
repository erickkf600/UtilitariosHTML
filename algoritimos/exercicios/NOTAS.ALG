Algoritmo "Notas"
// Criar programa aque calcule a média de duas notas e imprima:
//Excelente para média igual ou maior que 9;
//Muito Bom para média entre 8 e 8.9;
//Bom para média entre 7 e 7.9;
//Regular para média entre 6 e 6.9;
//Para média menor que 6, imprima Reprovado.
Var
n1,n2,media:real
Inicio
 escreva("entre com a nota " )
  leia(n1)
   escreva("entre com a nota " )
    leia(n2)
     media <- (n1+n2)/2
      escreval ("media: ",media)
       se (media >= 9) entao
        escreva ("Execelte")
         fimse
          se (media >= 8) e (media<= 8.9) entao
         escreva ("Muito bom")
        fimse
       se (media >= 7) e (media<= 7.9) entao
      escreva("Bom")
     fimse
    se (media >= 6) e (media<= 6.9) entao
   escreva ("Regular")
  fimse
 se (media < 6) entao
escreva("REPROVADO")
fimse
Fimalgoritmo
