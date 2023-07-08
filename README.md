# VirtualClin

Link do Postman:
https://elements.getpostman.com/redirect?entityId=23208865-d2c5c7b0-3af1-47b4-a79b-ab0649fae333&entityType=collection

Passo a passo de instalação:

Importar o repositório Git disponibilizado;

Criar um arquivo .env com base no arquivo .env.exemple disponível, informando os dados do ambiente

Criar e inicializar os containers através do comando: make build

Atualizar o composer através do comando: make composer-update

Gerar as tabelas do banco e subir dados seed através do comando: make data
