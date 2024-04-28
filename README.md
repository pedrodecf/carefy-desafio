# Carefy Desafio

- [x] Criar uma página que irá listar o aniversário de todos os colaboradores, destacando aqueles que estão fazendo aniversário no dia, seja ele de empresa ou de vida. Os dados devem ser importados diretamente do Google Spreadsheets (202402 - DADOS) em tempo real. Aqueles que saíram da empresa devem ser ignorados.

## Pré-requisitos para rodar a aplicação

- Docker instalado na sua máquina.
- Git instalado para clonar o repositório do projeto.

## Configuração

1. **Clone o Repositório**

   Primeiro, clone o repositório do projeto para a sua máquina local usando o comando Git:

   ```bash
   git clone https://github.com/pedrodecf/carefy-desafio.git
   ```

2. **Acesse a Pasta do Projeto**

   Navegue até a pasta do projeto clonado:

   ```bash
   cd carefy-desafio
   ```

3. **Atualize as Dependências**

   Use o Composer para atualizar as dependências do projeto:

   ```bash
   composer update
   ```

4. **Configuração do Google Cloud**

   - Acesse o [Google Cloud Console](https://console.cloud.google.com/).
   - Crie uma nova credencial para o seu projeto.
   - Baixe o arquivo de credenciais e renomeie-o para `credentials.json`.
   - Coloque o arquivo `credentials.json` na pasta `config` do projeto.
   
   > [!NOTE]
   > **Vídeo tutorial para criar uma credencial:** [Clique aqui para acessar o vídeo](https://youtu.be/KjlUVl4phAo)

5. **Inicie o Servidor**

   Inicie o servidor usando Docker Compose:

   ```bash
   docker-compose up -d
   ```

6. **Acesse o Projeto**

   Após iniciar o servidor, acesse o projeto no navegador através do endereço:

   ```
   http://localhost:8000
   ```

## Notas Adicionais

- Certifique-se de que o Docker esteja em execução antes de iniciar o servidor.
- Se você encontrar problemas com as permissões ao acessar o arquivo `credentials.json`, verifique as permissões do arquivo e ajuste-as conforme necessário.
- Para parar o servidor, use o comando:

 ```bash
 docker-compose down
 ```

## Suporte

Se você encontrar problemas ou tiver dúvidas, não hesite em entrar em contato.