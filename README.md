# Sistema autenticação de usuários 
Dupla: Gabriel Veloso (RA:1990821) e Gabriela Lima (RA:2014108):

SISTEMA DE USUÁRIO E AUTENTICAÇÃO 

Este é um projeto em PHP para criação e autenticação de usuários visando a segurança. O código permite adicionar usuários, cadastrando nome, e-mail, id e uma senha que é protegida através do hash, utilizando as boas práticas: DRY, KISS E PSR-12, gerando um fluxo realista.

Como Executar:
Salve o código em um arquivo com a extensão .php (ex: index.php).

Abra o terminal (ou o Prompt de Comando/PowerShell no Windows).

Navegue até a pasta onde você salvou o arquivo.

Funcionalidades:
Gerenciamento de usuários: Um array simples com dados do usuário (id, nome, email, senha).

Validação de e-mail: a autenticação do e-mail é feita através da extensão utilizando o filter_validate_email que verifica a presença do "@" e também dos domínios aceitáveis de e-mail como por exemplo: @gmail.com, @hotmail.com, @outlook.com e outros.

Princípios de Design Aplicados
O projeto foi construído seguindo dois princípios de design essenciais para um código limpo e fácil de manter:

DRY (Don't Repeat Yourself - Não se Repita): A lógica de atualização de estoque, que seria repetida em várias funções, foi isolada em uma única função (atualizarEstoque). Isso evita erros e torna o código mais fácil de modificar.

KISS (Keep It Simple, Stupid - Mantenha Simples): Cada função tem uma única responsabilidade. Por exemplo, a função de adicionar item só adiciona, e a de listar só lista. Essa clareza torna o código mais fácil de entender e depurar.
