<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial;
            margin: 0;
            
        }
        header h1 {
            font-family:Comic Sans MS, Comic Sans, cursive;
            text-align: center;
            background: black;
            color: #ed9121;
            margin: 0;
            padding: 80px;
            font-size: 100px;
            
        }
       header nav ul {
           list-style-type: none;
           background: #ed9121;
           overflow: hidden;
           margin: 0;
           padding: 0;
       }
       header nav a {
           color: white;
           text-decoration: none;
           padding: 16px;
           display: block;
           font-size: 20px;
           color: black;
           font-weight: bold;
           

       }
       header nav li {
           float: left;
       }
       header nav a:hover {
           background-color: white ;
           color: #ed9121;
       }
    </style>
</head>
<body>
    
    <Header> 
                <h1>ZÉ  & DONA MARIA</h1>
                
            <nav> 
                <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?pagina=QuemSomos.php">Quem Somos</a></li>
                        <li><a href="index.php?pagina=Contato.php">Contato</a></li>
                        <li><a href="index.php?pagina=Localização.php">Localização</a></li>
                </ul>
            </nav>    
    </Header>
    
        <main>
           <?php
            if (isset($_GET["pagina"]) && !empty($_GET["pagina"])) {
                $pagina = $_GET["pagina"];
                include ($pagina);
            } else {
                //include ("Home.php");
                echo "Pagina Principal";

            }
           ?>
        </main>
        <aside>
            barra lateral
        </aside>
        <footer>
            roda pé
        </footer>

</body>
</html># back-end-i
# back-end-i
