Algoritmo "semnome"
// Disciplina  :  [Linguagem e L�gica de Programa��o] 
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 17/11/2017
Var
// Se��o de Declara��es das vari�veis 
prod:caracter
preco,desc,valorf:real

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
escreva("produtos: ")
leia:(prod)
escreva("preco: ")
leia(preco)
escreva("desconto: ")
leia(desc)
valorf:=preco-(preco*(desc/100))
escreva("valor com desconto: ",valorf)


Fimalgoritmo