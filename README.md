Nós da Kamoney, fazemos pública ao nossos clientes, nossa API, em versão inicial. Estamos expandindo essa API, para que todas as funcionalidades que estaremos liberando, estejam igualmente disponíveis nessa API. Esta página, detalha os métodos existentes, assim como, exemplos práticos de requisição e retorno de dados, para facilitar o uso e implementação.

Todos as consultas que executam com sucesso retornam o HTTP Status 200, com os dados em formato JSON (application/json), de acordo com cada método.

Em caso de falha, o HTTP Status será divergente do código 200. 

<h3>Em caso de sucesso</h3>

<strong>HTTP Status 200</strong>

<pre>
<code>{}</code>
</pre>

<h3>Em caso de falha</h3>

<strong>HTTP Status diferente de 200</strong>

<pre>
<code>{"error": "Descrição do erro presente"}</code>
</pre>

<h3>Autenticação</h3>

Para utilização desta API, você deve possuir uma chave pública e uma chave secreta.

Acesse o menu API (submenu minha conta), e crie uma nova chave para API.

<strong>ATENÇÃO: Anote sua chave secreta gerada, em um lugar seguro. Ela é de sua total responsabilidade e não será exibida novamente em nosso site, sob qualquer hipótese.</strong>

Nosso sistema irá gerar um par de chaves pública e secreta, ambas criptografadas, que deverão serem utilizadas para qualquer método descrito nessa API.

<strong>ATENÇÃO: As chaves pública e secreta é de posse exclusivamente sua, e não deve ser repassada para demais usuários. A segurança dessas chaves, é exclusiva do usuário.</strong>

<h3>Cabeçalho de requisição</h3>

Deverão ser envidas, duas informações juntamente com o cabeçalho da sua sua requisição. 

<code>public:</code> Sua chave pública.

<code>sign:</code> Um HMAC (Hash-based Message Authentication Code), dos dados da requisição, criptografado utilizando sua chave secreta.

<strong>OBS:</strong> É necessário, em todas as requisições, enviar pelo menos um dado nonce, contendo o microtime atual.

<strong>ATENÇÃO: Não envie sua chave secreta. Ela não deve ser esposta em nenhum momento. Caso isso ocorra, exclusa imediatamente sua API, e gete uma nova, por questões de segurança</strong>

<h3>Exemplo de HMAC em PHP</h3>

Acesse nosso repositório GitHub, para ver um exemplo de como realizar um request para nossa API.

<a href="https://github.com/kamoney/api" target="_blank">https://github.com/kamoney/api</a>

<h3>Endpoint base</h3>

A URL base da API é <strong>https://api.kamoney.com.br/</strong>.

<h3>Versão da API corrente</h3>

Versão 1.0
