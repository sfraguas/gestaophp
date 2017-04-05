<!DOCTYPE html>
  <html>
    <head>
    
    </head>
    <body>
      <section style="padding:20px;margin-top:30px;background-color:#1abc9c;height:1500px;">
        <?php
          // still testing methods
          //include methods.php;
          $active = false; //isLogged();
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
            //echo <<< USER 
              //  <form action="methods.php" method="setUser"> 
                //  <input type="textbox" placeholder="Nome de Usuário"/> 
                  //</br> 
            //      <input type="submit" value="Registrar"> 
              //  </form>
//USER;
          }
        ?>
      </section>

    </body>
  </html>
