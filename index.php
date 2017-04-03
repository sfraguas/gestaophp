<!DOCTYPE html>
  <html>
    <head>
      <style>
        body {margin:0;}

        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
          position: fixed;
          top: 0;
          width: 100%;
        }

        li {
          float: left;
        }

        li a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        li a:hover:not(.active) {
          background-color: #111;
        }

        .active {
          background-color: #4CAF50;
        }
      </style>
    </head>
    <body>

      <ul>
        <li><a class="active" href="index.php">Index</a></li>
        <li><a href="eventos.php">Eventos</a></li>
        <li><a href="combinacoes.php">Combinacoes</a></li>
        <li><a href="#about">About</a></li>
      </ul>

      <section style="padding:20px;margin-top:30px;background-color:#1abc9c;height:1500px;">
        <?php
          include methods.php;
          $aux = 1;
          if($aux == 1)
          {
            echo '<form action="methods.php" method="registerPalestra"> <input type="text" placeholder="Código da palestra"> </br> <input type="submit" value="Registrar-se em palestra"> </form>';
          } else {
              echo '<form action="methods.php" method="setUser"> <input type="textbox" placeholder="Nome de Usuário"/> </br> <input type="submit" value="Registrar"> </form>';
          }
        ?>
        <!--<h1>Fixed Top Navigation Bar</h1>
        <h2>Scroll this page to see the effect</h2>
        <h2>The navigation bar will stay at the top of the page while scrolling</h2>
        <p>Some text some text some text some text..</p>-->
      </section>

    </body>
  </html>
