# CRUD PHP com Bootstrap

Este é um projeto CRUD (Create, Read, Update, Delete) desenvolvido em PHP com Bootstrap, MySQL e JavaScript para um processo seletivo de desenvolvedor web. O objetivo do projeto é demonstrar habilidades em desenvolvimento web e gerenciamento de banco de dados.

## Tecnologias Utilizadas

- **PHP**: Linguagem principal do projeto.
- **Bootstrap**: Utilizado para a estilização da interface.
- **MySQL**: Banco de dados utilizado, gerenciado via MySQL Workbench.
- **JavaScript e HTML**: Incluídos dentro do PHP para manipulações dinâmicas da interface.

## Requisitos

- PHP instalado na máquina (versão 7.4+ recomendada).
- MySQL Workbench para gerenciar o banco de dados.
- Navegador web (Chrome, Firefox, etc.).

## Instalação e Execução

1. Clone este repositório:
   ```bash
   git clone https://github.com/jandsonrj/crud-php.git

2. Acesse a pasta do projeto:
    ```bash
    cd crud-php/Projeto-fiocruz

3. Importe o banco de dados no MySQL Workbench:

- Abra o MySQL Workbench.
- Importe o arquivod dump ```crud.sql``` localizado na pasta ```db``` dentro do projeto para sua conexão no MySQL Workbench.

4. Inicie o servidor PHP:
    ```bash
    php -S localhost:8080

5. Abra o navegador e acesse:
    ```bash
    http://localhost:8080

## Funcionalidades

- Criar: Adicionar novos registros ao banco de dados.
- Ler: Visualizar registros existentes.
- Atualizar: Editar informações dos registros.
- Deletar: Remover registros do banco de dados.

## Estrutura do Projeto

- /db: Contém o arquivo ```crud.sql``` para importar o banco de dados.
- /Projeto-fiocruz: Contém o código principal do projeto.


## Licença
Este projeto é licenciado sob a [LICENSE](LICENSE) MIT.

Desenvolvido por [@jandsonrj](https://github.com/jandsonrj).