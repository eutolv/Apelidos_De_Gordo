Claro! Aqui está um modelo de README bem estruturado para o seu projeto:

---

# Apelidos de Gordo

Este é um projeto web simples que sorteia apelidos aleatórios para "gordos". A aplicação utiliza PHP para recuperar um apelido aleatório de um banco de dados MySQL, JavaScript para a interação com o usuário e CSS para a estilização e animações.

## Tecnologias Utilizadas

- **HTML**: Estrutura básica da página.
- **PHP**: Para realizar o sorteio de apelidos aleatórios a partir de um banco de dados.
- **MySQL**: Banco de dados para armazenar os apelidos.
- **JavaScript (jQuery)**: Para enviar requisições AJAX e atualizar a página sem a necessidade de recarregar.
- **CSS**: Estilização e animações, incluindo o efeito de estrelas caindo.

## Funcionalidades

- **Sorteio de Apelido**: Ao clicar no botão "Sorteie o Apelido", um apelido aleatório é sorteado e exibido na tela.
- **Efeito Visual**: Estrelas caem no fundo da página como parte da experiência interativa.
  
## Estrutura de Arquivos

- `index.html`: A página principal, onde o botão de sorteio é exibido e o apelido é mostrado.
- `sorteio.php`: O arquivo PHP que lida com a consulta ao banco de dados e retorna o apelido sorteado.
- `apelido.css`: Arquivo de estilo CSS para a paginação e animações.

## Como Usar

### 1. Configurar o Banco de Dados

Crie um banco de dados MySQL chamado `apelidos_de_gordo` e crie uma tabela `apelido` com a estrutura abaixo:

```sql
CREATE TABLE apelido (
    id INT AUTO_INCREMENT PRIMARY KEY,
    apelido VARCHAR(255) NOT NULL
);
```

Depois, insira alguns apelidos na tabela:

```sql
INSERT INTO apelido (apelido) VALUES ('Dom Peso Primeiro');
INSERT INTO apelido (apelido) VALUES ('Elisa Lanches');
INSERT INTO apelido (apelido) VALUES ('Padre Infarto de Melo');
-- Adicione mais apelidos conforme necessário
```

### 2. Subir os Arquivos para o Servidor

- Coloque os arquivos `index.html`, `sorteio.php`, e `apelido.css` no diretório raiz do seu servidor web.
- Certifique-se de que o PHP está corretamente configurado no seu servidor.
  
### 3. Testar o Sorteio

Abra o `index.html` no navegador e clique no botão "Sorteie o Apelido". O sorteio será realizado com base nos apelidos armazenados no banco de dados, e o apelido sorteado será exibido na tela.

## Explicação do Código

### **index.html**

- O arquivo HTML é onde a estrutura básica da página é configurada, com um botão que aciona o sorteio e uma área onde o apelido sorteado será exibido.
- Utiliza jQuery para enviar uma requisição AJAX para o arquivo PHP (`sorteio.php`) quando o botão de sorteio é clicado.

### **sorteio.php**

- Este arquivo PHP conecta-se ao banco de dados MySQL e seleciona um apelido aleatório da tabela `apelido`.
- O resultado é retornado e exibido na página HTML.

### **apelido.css**

- O CSS define a aparência da página e inclui animações como o efeito das estrelas caindo no fundo da página.
- O estilo também é aplicado ao botão de sorteio e à área de exibição do apelido sorteado.

## Como Contribuir

1. Faça um fork deste repositório.
2. Crie uma branch para a sua nova funcionalidade (`git checkout -b feature/nova-funcionalidade`).
3. Faça suas alterações e commit (`git commit -am 'Adicionando nova funcionalidade'`).
4. Envie para o repositório remoto (`git push origin feature/nova-funcionalidade`).
5. Abra um pull request.

## Licença

Este projeto é licenciado sob a [MIT License](LICENSE).
