# CleanDay
Projeto TCC

# CleanDay

Projeto realizado para o TCC, programação de um site sobre coleta seletiva para busca de ecopontos mais próximos.
Este é um projeto TCC usando Laravel que visa fornecer informações sobre os ecopontos de coleta seletiva mais próximos em uma determinada região. O site permite aos usuários localizar ecopontos, obter informações sobre os tipos de materiais aceitos, a maneira correta de separar e contribuir com informações adicionais.


# Tabela de Conteúdo

- [Visão Geral](#visão-geral)
- [Instalação](#instalação)
- [Uso](#uso)
- [Contribuição](#contribuição)
- [Licença](#Licença)
- [Contato](#Contato)

## Visão Geral

Neste projeto, utilizamos o framework Laravel para criar um site interativo de coleta seletiva de ecopontos. Os principais recursos incluem:

- Pesquisa de ecopontos com base na localização.
- Detalhes sobre os materiais aceitos em cada ecoponto.
- Como Separar cada material
- Capacidade de adicionar novos ecopontos e informações sobre eles.

## Instalação

Siga estas etapas para configurar e executar o projeto localmente:

1. Clone o repositório:
git clone https://github.com/MargarethSasaki/CleanDay.git

2. Entre na pasta do projeto
cd cleanday

3. Instale as dependências
composer install

4. Copie o arquivo .env.example para .env e configure as informações do banco de dados, entre outras configurações:
cp .env.example .env

5. Gere a chave de criptografia do aplicativo:
php artisan key:generate

6. Execute as migrações para criar as tabelas do banco de dados:
php artisan migrate

7. Inicie o servidor de desenvolvimento:
php artisan serve

## Uso

O usuário pode efetuar o cadastro no site, pesquisar ecopontos, adicionar novas informações como outros pontos de coletas conhecidos e pesquisar sobre materiais reciclaveis.

## Contribuição

Encorajamos a contribuição da comunidade para a melhoria deste projeto. Para contribuir, siga estas diretrizes:

Abra um "issue" para discutir o que você deseja implementar ou relatar um problema.
Faça um "fork" do repositório, crie uma branch com uma descrição significativa e faça suas alterações.
Envie um "pull request" explicando suas alterações e referenciando o "issue" correspondente.

## Licença
Este projeto é licenciado sob a Licença MIT - consulte o arquivo LICENSE.md para obter detalhes.

## Contato
Para entrar em contato com os mantenedores do projeto, envie um email para cleanday@gmail.com


 
