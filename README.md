# **ManagePro**

## Introdução

​	Sistema desenvolvido para a empresa Lorem Ipsum Inc. Tem como objetivo o gerenciamento de projetos, pela sua duração, riscos e retorno esperado.

## Arquitetura

### Front-end

​	Para a camada de visão foram utilizados as principais tecnologias WEB (**HTML**, **CSS** e **JavaScript**).

### Back-end

​	Para o controle dos serviços foi utilizada a linguagem PHP combinada ao banco de dados **MySQL** para a persistência dos dados.

### Dependências
Para a execução do back-end foram utilizadas as seguintes aplicações: 

- XAMPP na versão 7.4.10 que contendo:
  - Servidor Apache na versão 2.4.46(Unix);
  - PHP 7.4.10;
  - Gerenciamento de Banco: phpMyAdmin 5.0.2.

### Execução

1. Ligar o servidor;
2. Adicionar a pasta do projeto em: **/opt/lampp/htdocs**;
3. Importar o banco por meio do phpMyAdmin:
   1. Clique em **novo**;
   2. Aba **importar**;
   3. Escolha o arquivo: **managepro.sql**, no diretório **assets/database**;
   4. Aperte em executar.
4. Uma vez criado o banco, por meio de um navegador de internet digite: **localhost/managepro/** e o sistema estará em execução para testes.

