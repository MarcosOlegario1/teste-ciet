
## Como rodar este projeto

Requerimentos

 -> Docker/composer
 -> PHP ^8.1
 -> Fé

Como rodar a aplicação:

    -> Clone do projeto
   
    -> Composer install
    
    -> cp .env.example .env
    
    -> php artisan key:generate
    
    -> php artisan serve
    
    * Criar um arquivo items.txt na pasta public (questão 7 vai ser necessário).
    
    * Na pasta public deve ser colocado o arquivo XML que será utilizado na questão 5, na controller tem um link que utilizei de exemplo.
    
    * acessar a url que ele vai devolver ex: localhost:8000/ ou 127.0.0.1:8000 (tudo depende se estiver rodando direto na maquina ou wsl por exemplo).