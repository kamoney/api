# kamoney_api

Nós da Kamoney, fazemos pública ao nossos clientes, nossa API, em versão inicial. Estamos expandindo essa API, para que todas as funcionalidades que estaremos liberando, estejam igualmente disponíveis nessa API. Esta página, detalha os métodos existentes, assim como, exemplos práticos de requisição e retorno de dados, para facilitar o uso e implementação.

Todos as consultas que executam com sucesso retornam o HTTP Status 200, com os dados em formato JSON (application/json), de acordo com cada método.

Em caso de falha, o HTTP Status será divergente do código 200.

EM CASO DE SUCESSO
HTTP Status 200

{}
EM CASO DE FALHA
HTTP Status diferente de 200

{"error": "Descrição do erro presente"}
AUTENTICAÇÃO
Para utilização desta API, você deve possuir uma chave pública e uma chave secreta.

Acesse o menu API (submenu minha conta), e crie uma nova chave para API.

ATENÇÃO: Anote sua chave secreta gerada, em um lugar seguro. Ela é de sua total responsabilidade e não será exibida novamente em nosso site, sob qualquer hipótese.

Nosso sistema irá gerar um par de chaves pública e secreta, ambas criptografadas, que deverão serem utilizadas para qualquer método descrito nessa API.

ATENÇÃO: As chaves pública e secreta é de posse exclusivamente sua, e não deve ser repassada para demais usuários. A segurança dessas chaves, é exclusiva do usuário.

CABEÇALHO DE REQUISIÇÃO
Deverão ser envidas, duas informações juntamente com o cabeçalho da sua sua requisição.

public: Sua chave pública.

sign: Um HMAC (Hash-based Message Authentication Code), dos dados da requisição, criptografado utilizando sua chave secreta.

OBS: É necessário, em todas as requisições, enviar pelo menos um dado nonce, contendo o microtime atual.

ATENÇÃO: Não envie sua chave secreta. Ela não deve ser esposta em nenhum momento. Caso isso ocorra, exclusa imediatamente sua API, e gete uma nova, por questões de segurança

EXEMPLO DE HMAC EM PHP
Acesse nosso repositório GitHub, para ver um exemplo de como realizar um request para nossa API.

https://github.com/kamoney/api

ENDPOINT BASE
A URL base da API é https://api.kamoney.com.br/.

VERSÃO DA API CORRENTE
Versão 1.0
