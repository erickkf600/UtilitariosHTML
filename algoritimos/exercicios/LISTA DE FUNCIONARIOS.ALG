Algoritmo "Lista de funcionarios"
//Desenvolva um programa que leia a quantidade de funcionários em uma
// empresa e, para cada funcionário leia seu nome e seu tempo de serviço
// (em meses). Se o funcionário possuir mais de 12 meses na empresa,
// escreva a mensagem “<NOME> tem direito a férias”. Caso contrário,
// escreva a mensagem “<NOME> não tem direito a férias”. Ao final,
// exiba quantos funcionários possuem direito a férias e quantos não possuem.

Var
n:caracter
f, temp:inteiro          //f=numero de funcionarios, n=nome
                         //temp=tempo de serviço

Inicio
f <- 0
para f de 1 ate 5 faca
 escreval("Funcionario",f)
  escreva("Nome: ")
   leia(n)
    escreva("Tempo de serviço: ")
     leia (temp)
       se (temp > 12) entao
        escreval(n, " pode tirar ferias")
         senao
         escreval(n, " ainda não pode tirar ferias")
         fimse
        escreval("===========================")
        fimpara
Fimalgoritmo