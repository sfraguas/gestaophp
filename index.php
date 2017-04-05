<!DOCTYPE html>
  <html>
    <head>
    
    </head>
    <body>
      <section style="padding:20px;margin-top:30px;background-color:#1abc9c;height:1500px;">
        <?php
          // still testing methods
          //include methods.php;
          $active = true; //isLogged();
          if($active == true)
          {
            echo <<< REGP
                <form action="methods.php" method="registerPalestra"> 
                  <input type="text" placeholder="Código da palestra"> 
                  </br> 
                  <input type="submit" value="Registrar-se em palestra"> 
                </form>
REGP;
          } else {
            echo <<< SIGNUP
                <form action="methods.php" method="setUser"> 
                  <input type="text" placeholder="Nome de Usuário"> 
                  </br> 
                  <input type="submit" value="Registrar"> 
                </form>
SIGNUP;
          }
        ?>
      </section>

    </body>
  </html>
