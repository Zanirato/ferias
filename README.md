# Férias

Com intuito educativo e para relembrar o uso das linguagens HTML, CSS, SQL e PHP, foi dado uma atividade que tinha como objetivo a criação de uma página web que contasse o que cada um fez nas férias.
  
  
  
  <br>
  
### 1. Criação do protótipo (Figma)

Antes de tudo, é importante a criação de um protótipo para idealizar a página. Mesmo que não seja seguido a risca, tentei seguir o máximo possível o projeto inicial, sejam as cores ou a distribuição dos itens no site. O protótipo foi feito no site figma, sendo não funcional.

<br>

  ![Captura de tela 2025-02-03 133645](https://github.com/user-attachments/assets/85e60811-4a63-4d45-87e4-f6fa422de11a)

<br>  
  
### 2. Criação da estrutura (HTML)

Primeiramente, reparei quais eventos seriam utilizados na página. Após isso, iniciei a criação da estrutura da página, utilizando o HTML. Foi feito um header, as sections dentro da main, - que separaria os eventos que me aconteceram nas férias - um aside com as curiosidades desses eventos e um footer para finalizar a página. Com a divisão dos itens do site, foi finalizado a parte da estrutura.
  
  
 <br> 
  
### 3. Estilização da página (CSS)

Após, iniciei a estilização. Separei as cores que seriam usadas e onde cada item ficaria. Cada bloco foi estilizado de forma diferente, mas utilizando uma paleta de cores fixa para que a página não ficasse confusa.  
  
  
<br>  
  
### 4. Criação do Banco de dados

Com a finalização da página, foi pedido para que criassemos um banco de dados, para que nele aparece o nome e o email dos usuários cadastrados. Antes de fazer o banco de dados, foi criada outra página para cadastro. Segue os códigos utilizados para a criação do banco de dados:  
  
  
```SQL
CREATE DATABASE login;
USE login;
```

```SQL
CREATE TABLE usuarios(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);
```

### 5. Conexão do Banco de Dados

