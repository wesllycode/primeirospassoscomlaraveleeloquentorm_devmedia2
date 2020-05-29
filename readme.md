# Sobre o Projeto

Criação de um CRUD com Laravel 6.0 para entender o relacionamento 1:N

# Sobre o código
 * Laravel 6.0
 * nginx:1.17.0-alpine
 * php:7.3-fpm
 * redis:alpine
 * phpmyadmin:latest
 * Mysql 8.0

# Atenção
<p> Existe a versão alpine e sem ela. A diferença que a versão alpine ela mais leve, por exemplo
a versão <b>nginx-1.17.0-alpine</b> tem <b>19MB</b> enquanto o <b>nginx-1.17.0</b> tem <b>109 MB</b>.</p>

<p>Para acessar o container com a versão alpine, use o comando:</p>

```
docker exec -it nomedocontainerapp ash
```

# Alterar o nome do Container
Nessa parte do código, você pode alterar o nome do container
de acordo com a sua necessidade para melhor identificar o <b>container</b>.

```
container_name: "coloqueNomeAquiDoSeuContainer"
```
# Ordem de comando

Execute o comando para gerar o build da imagem
```
docker-compose up -d --build
```

Uma observação vai demorar pouco pegar tudo, esperar copiar os arquivos do mysql para DBDATA

E não esqueça de dá o comando 
```
chmod -R 777 dbdata
```

Acessar o container da aplicação   
```
docker exec -it nome_container_php_fpm /bin/bash
```
Digite esse comando  
```
cd /var/www/
```
Verifique se o arquivo <strong>.env.example</strong> foi copiado, usando o comando ls -la
Se estiver tudo okay, vai poder  visualizar sua aplicação funcionando.

* PHPMYADMIN -> localhost:8082
* SITE_LARAVEL -> localhost:8081

<p>Precisa está dentro do container do php-fpm  na pasta <strong>/var/www/</strong>
para executar os comando do laravel como.

```
php artisan migrate
php artisan make:model algumacoisa
```

<p> São apenas alguns exemplos </p>

# DOCKER-COMPOSE.yaml
Essas são configurações que você editar para conectar ao seu banco de dados <br>
e também para configurar o <strong> Mysql </strong>

## configuração do service app
```
environment:
      - DB_DATABASE=laravel
      - DB_PASSWORD=root
      - DB_USERNAME=root
      - DB_HOST=db
```

## configuração do service mysql
```
  environment:     
      - MYSQL_DATABASE=laravel
      - MYSQL_ROOT_PASSWORD=root
      - MYSQL_USER=root
      - MYSQL_PASSWORD=root
```

## Teste para verificar se o banco de dados se está OKAY
```
   healthcheck:
      test: ["CMD-SHELL", 'mysql -uroot --database=laravel --password=root --execute="SELECT count(table_name) > 0 FROM information_schema.tables;" --skip-column-names -B']
      interval: 10s
      timeout: 10s
      retries: 4
```
Código acima vai verificar se o banco de dado está funcional e está conectando, entretanto, quando você inicia pela primeira vez vai dá erro.

```
docker-compose up -d --build
```

Para provisionar o banco de dados demora mais do que outros containers. Contudo, pode alterar o  tempo do <strong> Interval </strong> para que seja de acordo com o tempo que leva para criar o container do <strong> mysql </strong>.

## Configurar  Nginx
#### No arquivo dockerfile do nginx 
```
server {
    listen 80;
    index index.php index.html;
    root /var/www/public;

    location ~ \.php$ {
        try_files $uri =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass app:9000;
        fastcgi_index index.php;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param PATH_INFO $fastcgi_path_info;
    }

    location / {
        try_files $uri $uri/ /index.php?$query_string;
        gzip_static on;
    }
}
```
Atenção nessa parte <strong> fastcgi_pass app:9000; </strong> o nome <strong> app </strong> é do service que está no <strong> docker-compose </strong>, se alterar o nome do service no <strong>docker-compose </strong> é preciso alterar aqui também, porque aqui faz a mágica acontece e parte mais importante, pois é daqui que ele vai redirecionar a sua aplicação para porta 9000

## Na hora de ignorar algumas pastas

Tente ignorar a pasta dbdata para upar para o repositório. Sempre que possível gere um arquivo sql do banco de dados e salva na pasta SQL.

O motivo é porque vai ficar muito grande seu repositório.


# Como ignorar a pasta

[Onde aprendi](https://gist.github.com/kelvinst/7d508da482d13bb301c9)

## Como fazer um `.gitignore` local?

Bom, este é um recurso, como muitos outros, bem escondido do git. Então resolvi fazer um post para explicar a situação em que pode-se usar e como fazer essa magia negra. :ghost:

## O problema

Você provavelmente já adicionou algum dia um arquivo no projeto que não deveria ser commitado certo? E como você fez para ignorar esse arquivo mesmo? Provavelmente adicionou no arquivo `.gitignore`.

OK então, aí você commitou esse arquivo `.gitignore` e pronto, mais ninguém poderá criar um arquivo com o mesmo nome e commitar. Mas espera aí! Não era isso que você queria! Você só queria ignorar esse arquivo na sua máquina, se alguém, algum dia por obséquio achar esse um nome bom para seu arquivo, que assim seja.

Então como fazer isso? Não commitar o arquivo `.gitignore` e colocar o `.gitignore` dentro do `.gitignore` para não commitar ele por quando tiver alteração. Bom, essa opção se você pensar um pouco vai notar porque não funciona: se você disser para o git ignorar o `.gitignore`, como é que você vai commitar o `.gitignore` com o `.gitignore` ignorado (nossa, quanta ignorância :grin:).

OK, como posso fazer então?

## A solução!

Então, aqui vai uma maneira para você fazer isso. Em todo repositório git existe um arquivo `.git/info/exclude`. Ele funciona exatamente como um arquivo `.gitignore` só que ele não é commitado! Então é só colocar uma linha com o nome do seu arquivo nele e :tada:!

