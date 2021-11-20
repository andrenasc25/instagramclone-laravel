## Sobre o Projeto

É um clone do site instagram.com feito em laravel 8. Ainda está em andamento mas já conta com várias funcionalidades do site real.

## Tecnologias utilizadas

Para o backend está sendo utilizado Laravel 8 e Mysql Workbench para gerenciamento do banco de dados. Para o front end está sendo usado Html, Css e Javascript puros além de algumas bibliotecas para funções específicas como Bootstrap 5, Vue.js e Axios para requisições Http.

## Como instalar

Após a configuração do arquivo .env basta rodar o comando:
```
php artisan migrate --seed
```
O site já vai estar instalado e populado com alguns usuários.
É necessário também fazer um link entre o storage a pasta storage dentro de public, usando o comando:
```
php artisan storage:link
```

###### Opcional

Para fazer **cadastro de novo usuário** é necessário usar a biblioteca de envio de email do Laravel. Para isso é necessário configurar o arquivo .env com credenciais de um servidor smtp, o seguinte exemplo usa configurações para o gmail:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=465
MAIL_USERNAME=endereco@email.com
MAIL_PASSWORD=senhadoemail
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"
```
Você pode colocar em 'MAIL_USERNAME' e em 'MAIL_PASSWORD' as credenciais do seu próprio email, funciona normalmente. Mas por questão de segurança você também pode configurar uma senha de app na sua conta gmail e colocar em 'MAIL_PASSWORD', seguindo o [Tutotial](https://support.google.com/mail/answer/185833?hl=pt-BR), funciona da memsa maneira.

## Login como Usuário Comum

Usuários já cadastrados\
login: user@user.com\
senha: 12345\
\
login: another@user.com\
senha: 12345\
\
login: third@user.com\
senha: 12345

## Banco de dados

O Banco de dados relacional foi feito com restrições para ligar as chaves extrangeiras das tabelas quando necessário.

![alt text](http://andrenascimento.com/external_images/instagram-clone/eer-diagram.png)

## Imagens do site

###### Página principal

![alt text](http://andrenascimento.com/external_images/instagram-clone/home.png)

###### Página de configurações

![alt text](http://andrenascimento.com/external_images/instagram-clone/config.png)

###### Página de perfil de usuário

![alt text](http://andrenascimento.com/external_images/instagram-clone/profile.png)

###### Página de chat

![alt text](http://andrenascimento.com/external_images/instagram-clone/chat.png)

## O que ainda precisa ser feito

Ainda é necessário implementar diversas funcionalidades, dentre elas:
- Comentar em uma postagem
- Adicionar story
- Dar 'likes' nas postagens
- Implementar a página de 'explore'
- Implementar o chat
- Adicionar funcionalidade de salvar postagens
- Adicionar as demais páginas da rota /config, atualmente está funcionando a atualização de informações pessoais
- A pesquisa por usuários, hashtags e locais
- As sugestões de novos usuários na página principal