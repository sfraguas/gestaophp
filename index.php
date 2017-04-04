<!DOCTYPE html>
  <html>
    <head>
    
    </head>
    <body>
      <section style="padding:20px;margin-top:30px;background-color:#1abc9c;height:1500px;">
        <?php
          include methods.php;
          $aux = 1;
          if($aux == 1)
          {
            echo '<form action="methods.php" method="registerPalestra"> <input type="text" placeholder="Código da palestra"> </br> <input type="submit" value="Registrar-se em palestra"> </form>';
            echo getPalestrasRegistradas();
          } else {
              echo '<form action="methods.php" method="setUser"> <input type="textbox" placeholder="Nome de Usuário"/> </br> <input type="submit" value="Registrar"> </form>';
              echo getUsers();
          }
        ?>
        <!--<h1>Fixed Top Navigation Bar</h1>
        <h2>Scroll this page to see the effect</h2>
        <h2>The navigation bar will stay at the top of the page while scrolling</h2>
        <p>Some text some text some text some text..</p>-->
      </section>

    </body>
  </html>
