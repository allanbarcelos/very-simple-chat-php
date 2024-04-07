# Chat em PHP com Memcached

Português| [English](README.md)

Este é um simples chat em PHP que utiliza o Memcached para armazenar mensagens em tempo real. Ele inclui uma interface de usuário básica e integração com o servidor de Memcached para persistência das mensagens.

## Requisitos

- Docker
- Memcached
- Navegador web

## Instalação e Execução

1. Certifique-se de ter o Docker instalado em sua máquina.
2. Clone este repositório em seu ambiente de desenvolvimento.
3. No terminal, navegue até o diretório raiz do projeto.
4. Execute o comando `docker-compose up -d` para iniciar os containers.
5. Acesse o chat em seu navegador web em `http://localhost`.

## Configuração

- O arquivo `php/php.ini` contém configurações específicas do PHP, como limites de memória e tempo de execução.
- O arquivo `apache/httpd.conf` contém configurações específicas do Apache, como o diretório raiz e os logs.

## Como Usar

- Abra o chat em seu navegador.
- Escolha um nome de usuário quando solicitado.
- Digite sua mensagem na caixa de entrada e pressione "Enviar" ou a tecla Enter.
- As mensagens serão exibidas na caixa de chat em tempo real.

## Licença

Este projeto é licenciado sob a [Licença MIT](https://opensource.org/licenses/MIT).

---

Este projeto foi desenvolvido como exemplo para fins educacionais. Sinta-se à vontade para utilizá-lo e modificá-lo conforme suas necessidades.
