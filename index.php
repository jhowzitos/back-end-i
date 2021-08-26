<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
  <style>
       *{
           box-sizing: border-box;
       }
        body {
            font-family: Arial;
            margin: 0; 
            background: #cdcdcd;
        }
      header {
          text-align: center;
          background: Darkorange;
          padding: 15px;
          
      }
      header  h1 {
          font-size: 50PX;
          font-family:Comic Sans MS, Comic Sans, cursive;
          font-weight: bold;
      }
      header h1 dl dd {
          font-size: 25px;
          font-family:Comic Sans MS, Comic Sans, cursive;
          font-weight: bold;
      }
      nav ul {
        list-style-type: none;
        background-color: black;
        overflow: hidden;
        margin: 0;
        padding:0;
      }
       nav a {
        color: white;
        text-decoration: none;
        padding: 20px; 
        display: block;
        font-weight: bold;

       }
       nav li {
           float: left;
       }
       nav a:hover {
           background-color: white;
           color: Darkorange;                 
       }

       .row {
           padding: 0 20px;
           display: table;
          
          
       }
       section {
           float: left;
           width: 50%;
           padding: 10px;
         
       }
       .card {
           background-color: white;
           padding: 0 20px;
           margin-top: 5 px;
           display: table;
                  }
     .cards {
           background-color: white;
           padding: 0 20px;
           margin-top: 5 px;
           display: table;
           width: 200%;
                  }
        aside {
            float: left;
            width: 50%;
            padding: 10px;
            
        }
        img{
            width: 40%;
        }
        footer{
            padding: 20px;
            color: white;
            font-weight: bold;
            background-color: black;
            margin-top: 20px;
        }
        footer dl dd {
            color: Darkorange;
            margin-left: 0;
        }
  </style>
 
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
