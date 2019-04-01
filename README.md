# EstudoCrud
Estudo de CRUD básico com PHP (SQl e metodos HTTP)

CRUD

Operações básica de manipulação de dados, seja em memoria ou em banco de dados

Create - Cria algum dado 

Read - Le algum dado sem alterar seu estado

Update - Atualiza dado

Delete - Deleta dado
__________________________________________________________________________________________

EM SQL {

Create - Insert:

Exemplo pseudo-código:
Insert into tabela (campo1,campo2,campo3) values ('valor1','valor2','valor3');

-------------------------------------------------------------------------------------

Read - Select:

Exemplo pseudo-código:

Select * from tabela

Select * from tabela where id = 1; (le todos os campos onde a pk for 1)

Select * from tabela where campo like 'a%';  (le qualquer campo que começa com a e termina com qualquer coisa)

Select * from tabela where campo like '%a'; (le qualquer campo começa com qualquer coisa  e termina com a)


Select * from tabela where nome like '%$consulta%'; (procura a consulta dentro do banco, busca por letras juntos, 
ex retorna Carlos, caso "AR")

Obs: "like" usando ao inves do "=" em Strings.

-------------------------------------------------------------------------------------

Update - Update 

UPDATE tabela set campo = '$variavel', campo2 = '$variavel2'  where pk = 3;

Obs: - IMPORTANTE DE USAR O WHERE SE NÃO IRA ATUALIZAR TODOS OS REGISTROS DA TABELA NO CAMPO ESCOLHIDO

-------------------------------------------------------------------------------------
Delete - Delete:

delete from tabela where id = 1;


}

__________________________________________________________________________________________

EM HTTP {

VERBOS OU METODOS CRUD

POST            Creates a new resource.

GET             Retrieves a resource.

PUT             Updates an existing resource.

DELETE          Deletes a resource.

}
