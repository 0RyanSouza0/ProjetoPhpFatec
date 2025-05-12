<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulário de Inscrição</title>
    <style>
      *{
        padding: 0px;
        margin:0px;
        box-sizing:border-box;      }
      body {

        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        padding: 2rem;
        background-image: url("img/fundo.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        backdrop-filter: blur(10px);
      }

      form {
        max-width: 600px;
        margin: auto;
        background: rgba(174, 113, 113, 0.461);
        padding: 2rem;
        color: white;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      }

      fieldset {
        border: none;
        padding: 0;
        margin-bottom: 1.5rem;
      }

      legend {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 1rem;
        color:white;
      }

      label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: bold;
      }

      input,
      select,
      textarea {
        width: 100%;
        padding: 0.75rem;
        margin-bottom: 1.5rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1rem;
      }

      button {
        background-color: #007bff;
        color: white;
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s ease;
        margin-right: 1rem;
      }

      button:hover {
        background-color: #0056b3;
      }

      button[type="reset"] {
        background-color: #6c757d;
      }

      button[type="reset"]:hover {
        background-color: #5a6268;
      }
    </style>
  </head>
  <body>
    <form action="back/insert_dados.php" method="POST">
      <fieldset>
        <legend>Informações Pessoais</legend>

        <section>
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" required />
        </section>

        <section>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />
        </section>

        <section>
          <label for="telefone">Telefone:</label>
          <input type="tel" id="telefone" name="telefone" required />
        </section>

        <section>
          <label for="data_nascimento">Data de Nascimento:</label>
          <input
            type="date"
            id="data_nascimento"
            name="data_nascimento"
            required
          />
        </section>

        <section>
          <label for="genero">Gênero:</label>
          <select id="genero" name="genero" required>
            <option value="">Selecione</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
            <option value="nao_informar">Prefiro não informar</option>
          </select>
        </section>
      </fieldset>

      <fieldset>
        <legend>Informações do Evento</legend>

        <section>
          <label for="tipo_inscricao">Tipo de Inscrição:</label>
          <select id="tipo_inscricao" name="tipo_evento_inscricao" required>
            <option value="">Selecione</option>
            <option value="palestrante">Palestrante</option>
            <option value="participante">Participante</option>
            <option value="voluntario">Voluntário</option>
          </select>
        </section>

        <section>
          <label for="mensagem">Mensagem:</label>
          <textarea
            id="mensagem"
            name="descricao_evento"
            rows="4"
            maxlength="200"
            required
          ></textarea>
        </section>
      </fieldset>

      <section>
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
      </section>
    </form>
  </body>
</html>
