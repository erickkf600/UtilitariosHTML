Algoritmo "semnome"
// Disciplina  :  [Linguagem e Lógica de Programação] 
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 17/11/2017
Var
// Seção de Declarações das variáveis 
prod:caracter
preco,desc,valorf:real

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreva("produtos: ")
leia:(prod)
escreva("preco: ")
leia(preco)
escreva("desconto: ")
leia(desc)
valorf:=preco-(preco*(desc/100))
escreva("valor com desconto: ",valorf)


Fimalgoritmo