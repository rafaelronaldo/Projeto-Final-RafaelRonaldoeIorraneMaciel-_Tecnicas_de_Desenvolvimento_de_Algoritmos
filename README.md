# 🐶 Sistema de Adoção de Pets (CRUD com Relacionamento)

Sistema web desenvolvido para o gerenciamento de adoções de animais em uma ONG fictícia. Este projeto foi criado como atividade avaliativa para a disciplina de **Programação Web** no **Centro Universitário Do Distrito Federal - UDF**.

O objetivo principal do trabalho foi implementar **dois CRUDs** (Create, Read, Update, Delete) que possuam um **relacionamento de banco de dados (1:N)**.

## 📋 Funcionalidades

### 1. Gerenciamento de Raças (Tabela Pai)
* **Cadastrar:** Permite registrar novas raças e portes.
* **Listar:** Visualização de todas as raças cadastradas.
* **Editar:** Atualização de nomes ou portes incorretos.
* **Excluir:** Remoção de registros do banco.

### 2. Gerenciamento de Animais (Tabela Filha)
* **Cadastrar com Relacionamento:** Ao cadastrar um animal, o sistema busca as raças no banco e cria um `<select>` dinâmico. O usuário não digita o ID, ele escolhe o nome da raça.
* **Listagem Inteligente:** Utiliza `INNER JOIN` no SQL para exibir o **Nome da Raça** na tabela de animais, ao invés de apenas mostrar o código numérico.
* **Editar e Excluir:** Gerenciamento completo dos dados dos pets.

---

## 🚀 Tecnologias Utilizadas

* **PHP 8** (Estruturado/Procedural)
* **MySQL / MariaDB** (Banco de Dados Relacional)
* **Bootstrap 5** (Framework CSS para estilização responsiva)
* **HTML5 / CSS3**
* **XAMPP** (Servidor local Apache + MySQL)

---


