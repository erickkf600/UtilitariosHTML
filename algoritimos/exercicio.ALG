Algoritmo "semnome"
// Disciplina  :  [Linguagem e L�gica de Programa��o] 
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 17/11/2017
Var
// Se��o de Declara��es das vari�veis 
cli,prod:caracter     //cli -> cliente     prod -> produto
quant:inteiro       //  quant -> quantidade
prec,total:real      // prec -> pre�o    total -> total de compra

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
escreva("Nome do Cliente ")
leia(cli)
escreva("Nome do produto ")
leia(prod)
escreva("Pre�o ")
leia(prec)
escreva("quantidade ")
leia(quant)
escreva("total de compra ")
total:=(prec*quant)
escreva("total de compras � ",total)


Fimalgoritmo