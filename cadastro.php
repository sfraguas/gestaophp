<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
      *{
        border: 0;
        margin: 0;
        paddin:0;
        font-family: ahaha;
      }
      body,html {
        height: 100%;
        background-color: #ECEFF4;
      }
      form {
        text-align: center;
      }
      fieldset {
        width: 200px;
        margin:auto;
        background-color: lightsteelblue;
        border-radius: 8px;
        border: none;
      }
      fieldset legend {
        background-color: lightsteelblue;
        padding: 5px 10px;
        border-radius: 8px;
      }
      .cadastro input[type="text"] {
          background-color: #847AD1;
      }
      input[type="submit"] {
          margin: 0px auto;
          padding: 10px 20px;
      }
      .botao {
          width: 100%;
          display: flex;
          justify-content: center;
          align-items: center;
      }
      button {
          padding: 10px;
          background-color: #F76653;
          border-radius: 100px;
          color: #D15847;
      }
    </style>
  </head>

  <body>

    <div class="tudo" >
      <form class="cadastro" method="POST" action="cadastro.php">
        <fieldset>
          <legend>Cadastro:</legend>
          <label for="user">usuário</label>
          <input id="user" name="formUsername" placeholder="" type="text"><br>
          <div class="botao">
            <button type="submit" name="submit"><i class="material-icons">send</i></button>
          </div>
        </fieldset>
      </form>
    </div>

  </body>

</html>
