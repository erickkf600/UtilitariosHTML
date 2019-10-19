Algoritmo "semnome"
// Disciplina  :  [Linguagem e Lógica de Programação] 
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 17/11/2017
Var
// Seção de Declarações das variáveis 
cli,prod:caracter     //cli -> cliente     prod -> produto
quant:inteiro       //  quant -> quantidade
prec,total:real      // prec -> preço    total -> total de compra

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreva("Nome do Cliente ")
leia(cli)
escreva("Nome do produto ")
leia(prod)
escreva("Preço ")
leia(prec)
escreva("quantidade ")
leia(quant)
escreva("total de compra ")
total:=(prec*quant)
escreva("total de compras é ",total)


Fimalgoritmo