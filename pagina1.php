<?php include($_SERVER['DOCUMENT_ROOT']."/templates/top.php");?>

    <div id="container">
        <a href="pagina2.php?contingut=Llibre"><input type="submit" value="LLIBRES"/></a>
        <?php
            if ($_SESSION["rol"] != "Usuari") {
                echo "<a href='pagina2.php?contingut=Usuari''><input type='submit' value='USUARIS'/></a>";
            }
            if ($_SESSION["rol"]=="BibliotecariCap") {
                echo "<a href='pagina2.php?contingut=Bibliotecari'><input type='submit' value='BIBLIOTECARIS'/></a>";
            }
        ?>
        <a href="./webPages/visualitzacioP.php?contingut=dadesPersonals"><input type="submit" value="DADES PERSONALS"/></a>
    </div>


<?php include("templates/bottom.php")?>