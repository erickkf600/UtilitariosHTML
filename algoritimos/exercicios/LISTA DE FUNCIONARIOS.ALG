Algoritmo "Lista de funcionarios"
//Desenvolva um programa que leia a quantidade de funcion�rios em uma
// empresa e, para cada funcion�rio leia seu nome e seu tempo de servi�o
// (em meses). Se o funcion�rio possuir mais de 12 meses na empresa,
// escreva a mensagem �<NOME> tem direito a f�rias�. Caso contr�rio,
// escreva a mensagem �<NOME> n�o tem direito a f�rias�. Ao final,
// exiba quantos funcion�rios possuem direito a f�rias e quantos n�o possuem.

Var
n:caracter
f, temp:inteiro          //f=numero de funcionarios, n=nome
                         //temp=tempo de servi�o

Inicio
f <- 0
para f de 1 ate 5 faca
 escreval("Funcionario",f)
  escreva("Nome: ")
   leia(n)
    escreva("Tempo de servi�o: ")
     leia (temp)
       se (temp > 12) entao
        escreval(n, " pode tirar ferias")
         senao
         escreval(n, " ainda n�o pode tirar ferias")
         fimse
        escreval("===========================")
        fimpara
Fimalgoritmo