# Projeto Final – [Rafael Ronaldo e Iorrane Maciel] _ [Técnicas e Desenvolvimento de Algoritmos]

## 🐾 Sistema de Adoção de Animais (AdotePET)

Este projeto é um sistema web simples desenvolvido em PHP com banco de dados MySQL para gerenciar o processo de adoção de animais. Ele implementa a funcionalidade completa de **CRUD (Create, Read, Update, Delete)** para Raças, Animais e Adotantes, e adiciona uma lógica de **transação de adoção** que registra o evento e atualiza o status do animal.

### Entidades Principais:

1.  **Raças**: Cadastro e gerenciamento de tipos de raças e portes.
2.  **Adotantes**: Cadastro de pessoas interessadas em adotar (dados pessoais e contato).
3.  **Animais**: Cadastro de animais disponíveis, incluindo seu status (Disponível/Adotado).
4.  **Adoções**: Tabela de relacionamento que registra a data e qual animal foi para qual adotante.

---

## 🛠️ Instruções de Execução do Projeto

Para rodar este projeto em ambiente local, siga os passos abaixo:

### Pré-requisitos:

* Servidor web local (Ex: **XAMPP**, WAMP ou Laragon).
* PHP (versão 7.x ou superior).
* MySQL/MariaDB.

### 1. Configuração do Banco de Dados

1.  Inicie os serviços do **Apache** e **MySQL** no seu XAMPP/WAMP.
2.  Acesse o **phpMyAdmin** (`http://localhost/phpmyadmin`).
3.  Crie um novo banco de dados com o nome exato: `banco_de_dados`.
4.  No banco de dados `banco_de_dados`, clique na aba SQL e execute o conteúdo completo do arquivo `banco_de_dados.sql` (disponível neste repositório) para criar todas as tabelas necessárias (`racas`, `animais`, `adotantes`, `adocoes`).

### 2. Configuração do Código-Fonte

1.  Baixe ou clone este repositório para a pasta de projetos do seu servidor web (Ex: `C:\xampp\htdocs`).
2.  Certifique-se de que a pasta raiz do projeto está nomeada como `Sistema_de_Adocao_UDF` (ou o nome que você usou no XAMPP).
3.  O arquivo `config.php` já está configurado para:
    * `HOST`: `localhost`
    * `USER`: `root`
    * `PASS`: `` (vazio, padrão do XAMPP)
    * `BASE`: `banco_de_dados`

### 3. Acesso ao Sistema

1.  Abra seu navegador.
2.  Acesse o endereço: `http://localhost/Sistema_de_Adocao_UDF/index.php`

---

## 📄 Documentação Complementar (Análise do CRUD)

### Processo Analisado: Cadastro de Adotante

O processo de **Cadastro de Adotantes** (aplicado no arquivo `cadastrar-adotante.php` para o formulário e `salvar-adotante.php` para a lógica) segue o ciclo Create (C) do CRUD, sendo essencial para registrar novos interessados no sistema.

