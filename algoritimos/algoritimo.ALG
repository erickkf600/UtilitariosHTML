Algoritmo "semnome"
//Escreva um programa que leia as notas dos 3 alunos e em seguida mostre se esta
//de recuperação, aprovado, reprovado e calcule a média.
Var

n1,n2,n3,n4,n5,n6,n7,n8,n9,n10,n11,n12,media:real
aluno1,aluno2,aluno3:caracter
Inicio

escreva("Digite o nome do aluno:")
  leia(aluno1)
    escreva("digite a 1ª nota:")
      leia(n1)
        escreva("digite a 2ª nota:")
          leia(n2)
            escreva("digite a 3ª nota:")
               leia(n3)
                 escreva("digite a 4ª nota:")
                    leia(n4)
                      media<-(n1+n2+n3+n4)
                         escreval("A média final foi: ",media)
                           se (media>=20) entao
                            escreval("Aprovado: ")
                             senao
                               escreval("Reprovado: ")

                           fimse

escreva("Digite o nome do aluno:")
leia(aluno2)
  escreva("Digite nota 1: ")
   leia(n5)
     escreva("Digite nota 2: ")
       leia(n6)
       escreva("Digite nota 3: ")
          leia(n7)
             escreva("Digite nota 4: ")
              leia(n8)
                Media <-(n5+n6+n7+n8)/4
                  escreval("A média final foi: ",media)
                        se (media>=5) entao
                          se (media<5) entao
                            escreval("Aprovado: ")
                             senao
                               escreval("Reprovado: ")

                             fimse

escreva("Digite o nome do aluno:")
  leia(aluno3)
   escreva("Digite Nota 1: ")
     leia(n9)
       escreva("Digite Nota 2: ")
          leia(n10)
            escreva("Digite Nota 3:")
              leia(n11)
                escreva("Digite Nota 4: ")
                  leia(n12)
                    Media <-(n9+n10+n11+n12)/4
                     escreval("A média final foi: ",media)
                          se (media>=6) entao
                            escreval("Aprovado: ")
                             senao
                               escreval("Reprovado: ")
                         fimse
                     
Fimalgoritmo