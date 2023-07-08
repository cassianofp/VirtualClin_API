# VirtualClin

VirtualClin: API para a organização de profissionais da área da saúde.
 
Área de Atuação
O serviço proposto busca atuar na área da saúde, trabalhando como uma ferramenta capaz de auxiliar os profissionais da área no agendamento e organização de pacientes e consultas.
 
Público Alvo
O público alvo se dá por profissionais da área da saúde que não dispõem de pessoas ou empresas que cuidem do agendamento de consultas e controle de pacientes, como nutricionistas, médicos e psicólogos que organizam sua própria agenda. 
Objetivos
Servir como back-end capaz de auxiliar no cadastro de pacientes, usuários e, futuramente, no agendamento de consultas. Coletando e armazenando os dados de interesse de forma simples e disponibilizando para rápido acesso.
Como objetivos específicos, é possível listar os abaixo:

Cadastrar, atualizar, listar e deletar os dados de usuários
Cadastrar, atualizar, listar e deletar os dados de pacientes
Utilizar de rotas simples e de fácil compreensão
Futuramente, funcionar como uma agenda, relacionando pacientes e usuários.
Funcionamento
Através do GitHub disponibilizado será possível instalar a consumir a API, junto a isso, fica a critério do usuário a aplicação de um sistema front-end para utilização em conjunto com a API. Até o presente momento todas as rotas são públicas, entretanto, espera-se implementar novas features, como consulta de CPF, com rotas que exigem autenticação.


Link do Postman:
https://elements.getpostman.com/redirect?entityId=23208865-d2c5c7b0-3af1-47b4-a79b-ab0649fae333&entityType=collection

Passo a passo de instalação:

Importar o repositório Git disponibilizado;

Criar um arquivo .env com base no arquivo .env.exemple disponível, informando os dados do ambiente

Criar e inicializar os containers através do comando: make build

Atualizar o composer através do comando: make composer-update

Gerar as tabelas do banco e subir dados seed através do comando: make data
