## Projeto em desenvolvimento
# gerenciador-financas
Sistema de gerenciamento de finanças pessoais em PHP, permitindo que os usuários cadastrem receitas, despesas e visualizem o saldo atual. Inclui funcionalidades de autenticação com registro e login de usuários, utilizando MySQL para persistência de dados.

## Funcionalidades

- Registro de usuários com senha criptografada
- Login e logout de usuários
- Cadastro de receitas e despesas
- Visualização de transações cadastradas
- Categorias para organizar as transações
- Visualização de saldo atual

## Tecnologias

- **PHP** para desenvolvimento do back-end
- **MySQL** para persistência de dados
- **Bootstrap** para estilização básica da interface
- **XAMPP** para ambiente de desenvolvimento local
- **HTML/CSS** para o front-end

## Instalação

1. Clone o repositório:
    ```bash
    git clone https://github.com/SEU_USUARIO/gerenciador-de-financas-pessoais.git
    ```

2. Configure o banco de dados:
   - Crie um banco de dados MySQL chamado `gerenciadordefinancas`.
   - Execute o script SQL para criar as tabelas (encontrado em `/config/database.sql`).

3. Configure o arquivo `db.php` com as credenciais corretas para seu ambiente:
    ```php
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gerenciadordefinancas";
        $conn = new mysqli($servername, $username, $password, $dbname);
    ?>
    ```

4. Execute o projeto:
   - Utilize um servidor local (ex: XAMPP ou WAMP) e coloque o projeto na pasta `htdocs`.

## Funcionalidades Futuras

- Implementação de gráficos para visualização de despesas
- Exportação de relatórios financeiros em PDF
- Configuração de limites de orçamento
- Integração com APIs de bancos para sincronização automática

## Contribuição

Se você quiser contribuir, por favor, faça um fork do repositório, crie uma nova branch e envie um pull request. Sugestões e melhorias são sempre bem-vindas.


