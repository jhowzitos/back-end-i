<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <Header> 
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
