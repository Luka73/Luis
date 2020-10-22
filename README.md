Projeto completo em PHP para criar um Locadora de films.: Chaque entité possede un module et chaque module est composé d'un css exclusive et d'un js(avec 2 fichier: un pour l'écoute des événements et l'autre pour les fonction lié à ceux événements, puis un fichier index.php pour rendre la page index du module en question.

Estrutura das Pastas:

CONTROLLER:recebe as requisicoes(dados) proviniente da view(Forms) para registrar na BD;
DAO:classes com responsabilidade de acessar os dados no banco de dados;
MODEL: onde fica todas as estidades do sistema;
VIEW: as interfaces disponiveis;
DAO: cada classes é criada ja com uma instancia da conexao usando a API (PDO) para a realizacao do CRUD de cada entidade. 

TECNOLOGIA USADA:
-Requisicoes Ajax
-API(PDO) para conecxao na base de dados
