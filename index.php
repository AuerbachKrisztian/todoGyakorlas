<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stilus.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <header><h1>Teendők<h1></header>
        <main>
            <article>
                <h1>TODO lista</h1>
                <form method="POST"> 
                <input type="text" id="feladat" placeholder="Tanév vége">
                <input type="date" id="ido"  placeholder="2021.04.30.">
                <button type="submit" id="submit" class="submit">Add</button>
                </form>
                <div id="terulet"></div>
            </article>
            <table>
                            
    <tr>
        <th>Feladat</th>
        <th>Időpont</th>

    </tr>
            <?php
    include_once 'kapcsolat.php';

    $sql = "SELECT * FROM todotabla";
    $eredmeny = mysqli_query($kapcsolat, $sql);

    while ($adat = mysqli_fetch_array($eredmeny)) {
        ?>
        <tr>
            <td><?php echo $adat['todo']; ?> </td>
            <td><?php echo $adat['datum']; ?> </td>


            <td><a href="modosit.php?ID=<?php echo $adat['ID']; ?>">Modositás</a></td>
            <td><a href="torol.php?ID=<?php echo $adat['ID']; ?>">Töröl</a></td>
        </tr>
        
        
        <?php
    }
   
    if (isset($_POST['submit'])) {
    $feladat = $_POST['feladat'];
    $datum = $_POST['ido'];
    $sql = "INSERT INTO todotabla(todo,datum) VALUES('$feladat','$datum')";

    $feltolt = mysqli_query($kapcsolat, $sql);
    
    if ($feltolt) {
        echo '<script> alert("Sikeres feltöltés")</script>';
    }
    mysqli_close($kapcsolat);
}
    ?>
 </table>
            
           
        </main>
 <footer>Auerbach Krisztián</footer>
    </body>
</html>
