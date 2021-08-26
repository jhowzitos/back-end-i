<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css" type ="text/css"> 
    <title>Document</title> 
 
 
</head>
<body>
    
    <Header> 
               <h1>
                <dl>
                    <dt> ZÉ  & DONA MARIA</dt>
                    <dd>DOCES CASEIROS </dd>
                </dl>
                </h1>                
    </Header>
    <nav> 
                <ul style= "list-style-type: none;">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?pagina=QuemSomos.php">Quem Somos</a></li>
                        <li><a href="index.php?pagina=Contato.php">Contato</a></li>
                        <li><a href="index.php?pagina=Localização.php">Localização</a></li>
                </ul>
            </nav>    

    
        <main>
      
   
   <?php
            if (isset($_GET["pagina"]) && !empty($_GET["pagina"])) {
                $pagina = $_GET["pagina"];
                include ($pagina);
            } else {
                include ("Home.php");
                
            }
           ?>

        </main>
    
      
        <footer>
              <dl>
                  <dt>NOME</dt>
                  <dd>Jonathan Henrique Granado Perroni</dd> <br>
                  <dt>RA</dt>
                  <dd>20034857-5</dd> <br>
                  <dt>INSTITUDO DE ENSINO UNICESUMAR - EAD</dt>
                  <dd>Superior De Tecnologia Em Sistema Para Internet</dd> <br>
                  <dt>CURSO</dt>
                  <dd>Programação Back End 1</dd><br>
              </dl>  
        </footer>

</body>
</html>
<input type="hidden"# back-end-i
# back-end-i
# back-end-i
# back-end-i
# back-end-i

# back-end-i
# back-end-i
# back-end-i
# back-end-i
# back-end-i
# back-end-i
# back-end-i
# back-end-i
# back-end-i
