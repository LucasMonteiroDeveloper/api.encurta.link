<h1>Encurtador de URL</h1>

## Sobre o Projeto

O encurtamento de Link é uma prática usada para transformar uma URL longa em um link muito mais curto e de fácil memorização. Sendo ideal para utilização em divulgação de links em redes sociais e envios de mensagens SMS.

O api.encurta.link conta com um sofisticado e robusto sistema de encurtamento de URL. Foi desenvolvido em PHP , Laravel e Vue.js.
Assim como <b>Hashids</b> para  gerar IDs semelhantes ao YouTube a partir de números.
> Os hashids requerem uma extensão <a href="https://www.php.net/manual/en/book.bc.php">bcmathou</a> ou <a href="https://www.php.net/manual/en/book.gmp.php">gmppara</a> funcionar.

Com um painel de monitoramento, onde é possível acompanhar quantos cliques seus links estão recebendo.

## Começando
Exija esse pacote no diretório raiz do seu projeto.
```
gh repo clone LucasMonteiroDeveloper/api.encurta.link
```


Para rodar os Migrates, use o comando:
```ruby
php artisan migrator
```

## Armadilhas
Ao decodificar, a saída é sempre uma matriz de números (mesmo se você codificou apenas um número):<br><br/>
<b>Possivéis erros são, erro na autenticação de usuário.</b> Refaça os passos e tente novamente.

Você também pode fazer isso manualmente com um Api Cliente...

## Consumindo a API com um Api Cliente

Com o metódo <code>POST</code> utilize as seguintes execuções
```
http://127.0.0.1:8000/links
```

Insira um Link manualmente editando o <b>Body</b> da request, em formato <code>JSON</code>
```ruby
{
    "url": "https://google.com"
}
```

Agora Adicione um <b>Usuário</b> do mesmo jeito.
```
http://127.0.0.1:8000/users
```
- Alterando o body
```ruby
{
    "name": "Isabele teste Autenticação",
    "email": "teste@teste.com",
    "password": "123456"
}
```

<h3>Autenticando Usuário:</h3>
Agora a autenticação é bem simples, vamos usar o seguinte comando:

```
http://127.0.0.1:8000/auth/login
```

Ponto de atenção aqui, para autenticar o usuário você deve passar o mesmo <b>Email</b> e <b>Senha</b> que foi utilizando ao inserir o usuário.

```ruby
 {
    "email": "teste@teste.com",
    "password": "123456"
}
```

A sua <b>Saída</b> será um <code>Token</code> igual a esse <code>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImp0aSI6IkNGb1dYY3hqQnRkT0hETnQifQ.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMCIsInN1YiI6IjEiLCJqdGkiOiJDRm9XWGN4akJ0ZE9IRE50IiwiaWF0IjoxNjg1NDIwODI3LCJuYmYiOjE2ODU0MjA4MjcsImV4cCI6MTY4NTQyNDQyNywicmxpIjoxNjg1ODU2NDI3LCJlbWFpbCI6Im1vbnRlaXJvLmRsdWNhc0BnbWFpbC5jb20iLCJuYW1lIjoiTHVjYXMgTW9udGVpcm8ifQ.HhTeK2dnHEfqRyc_BXcPcNmwx3bdiJ_YsS8vZmHKuyE</code>


- Autenticação:
```
http://127.0.0.1:8000/auth/refresh
```

Adicone uma <code>key = Authorization</code> e um value com o prefixo <code>Bearer</code> seguido do token gerado. Ficando assim <code>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImp0aSI6IkNGb1dYY3hqQnRkT0hETnQifQ.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMCIsInN1YiI6IjEiLCJqdGkiOiJDRm9XWGN4akJ0ZE9IRE50IiwiaWF0IjoxNjg1NDIwODI3LCJuYmYiOjE2ODU0MjA4MjcsImV4cCI6MTY4NTQyNDQyNywicmxpIjoxNjg1ODU2NDI3LCJlbWFpbCI6Im1vbnRlaXJvLmRsdWNhc0BnbWFpbC5jb20iLCJuYW1lIjoiTHVjYXMgTW9udGVpcm8ifQ.HhTeK2dnHEfqRyc_BXcPcNmwx3bdiJ_YsS8vZmHKuyE</code>


- Pegando a URL encurtada
method <code>GET</code> 
```
http://127.0.0.1:8000/links/1
```
o '1' iz a posição do link cadastrado, se você cadastrar outro link, depois de seguir esses passos e quiser gerar o encurtador, basta usar a posição '2' e assim sucessivamente

Isso vai gerar a sua URL encurtada!







