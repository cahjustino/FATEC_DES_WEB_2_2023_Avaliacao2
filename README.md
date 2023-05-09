# FATEC_DES_WEB_2_2023_Avaliacao2
 2° Avaliação Desenvolvimento Web 
Desenvolvimento de  uma pagina  de cadastro de alunos com crud em PHP,Mysql,HTML.

Como realizar esta avaliação ?
1.	Crie um repositório no seu github com o nome " FATEC_DES_WEB_2_2023_Avaliacao2 "
2.	Publicar no Teams o repositório que será avaliado pelo professor Orlando.
código
Crie um cadastro CRUD (Create Read Update e Delete) para um vestibular temático. O cadastro de candidatos deve conter os campos:
•	Nome do candidato
•	RG ou CPF
•	telefone
•	Campo booleano para orientado de escola pública
Não é necessário login/logout.
1- Classe com abstrações do banco de dados (40% da nota)
Você deve desenvolver uma classe em que o construtor conecte ao SGBD MySQL, o destruidor encerre a conexão e que tenha os métodos apropriados para realizar as operações CRUD do cadastro. Os nomes dos métodos e parâmetros ficam por sua conta.
Todas as credenciais para conexão com o banco de dados devem estar encapsuladas como atributos privados desta classe.
2- CRUD em ação (40% da nota)
Outros códigos PHP farão uso da classe desenvolvida por você. Este código não precisa saber detalhes sobre as operações em banco de dados.
Operações necessárias:
•	Criar => Cadastrar o candidato
•	Ler => Relatório dos candidatos inscritos
•	Update => Permitir atualizar os dados do candidato, exceto o id (chave primária)
•	Delete => Permitir removedor do cadastro do candidato
3- Documentação (20% da nota)
Prepare um README.md com instruções de como replicar seu projeto e envie o arquivo .SQL com o dump do MySQL para que seu código.
•	Tecnologias: PHP OO e SGBD MySQL.
