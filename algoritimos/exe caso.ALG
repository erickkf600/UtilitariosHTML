Algoritmo "semnome"
//Calculadora basica com "escolha"
Var
numero1:real
numero2:real
operacao:caractere
resultado:real
Inicio
escreva("Digite o primeiro número: ")
leia(numero1)
escreva("Digite a operação: ")
leia(operacao)
escreva("Digite o segundo numero: ")
leia(numero2)

escolha operacao
caso "+"
   resultado := numero1 + numero2
caso "-"
   resultado := numero1 - numero2
caso "*"
   resultado := numero1 * numero2
caso "/"
   resultado := numero1 / numero2
fimescolha
escreva ("Resultado ",resultado)
Fimalgoritmo