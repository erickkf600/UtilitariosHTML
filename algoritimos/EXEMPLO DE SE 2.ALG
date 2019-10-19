Algoritmo "Exemplo de SE 2"

Var
sal,salN:real


Inicio
escreva("Digite o salario atual: ")
  leia(sal)
    se sal > 1000 entao
     salN <- sal+(sal*5/100)
    senao
     salN <- sal+(sal*7/100)
   fimse
escreva("Salario Novo=",salN)
Fimalgoritmo