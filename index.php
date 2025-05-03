<!DOCTYPE html>
<html>
<head>
    <title>Ocenjujemo filme</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Ocenjujemo filme</h1>
        <nav>
            <a href="index.php">Filmi</a> |
            <?php
                session_start();
                if (isset($_SESSION['uporabnik_id'])) {
                    echo "<a href='profil.php'>Profil</a> | <a href='odjava.php'>Odjava</a>";
                } else {
                    echo "<a href='registracija.php'>Registracija</a> | <a href='prijava.php'>Prijava</a>";
                }
            ?>
        </nav>
        <div class="search-bar">
            <form action="isci.php" method="GET">
                <input type="text" name="iskalni_niz" placeholder="Išči film...">
                <button type="submit">Išči</button>
            </form>
        </div>
    </header>

    <main>
        <h2>Popularni filmi</h2>
        <div class="grid-container-zacetna-stran">
            <div class="grid-slike">
                <a href="">
                <figure>
                <img src="slike/shrek.jpg" width="300px" height="auto">
                <figcaption style="color: black;">Shrek</figcaption>
              </figure>
            </a>
            </div>
            <div class="grid-slike">
                <a href="">
                <figure>
                <img src="slike/shark-tale.jpg" width="300px" height="auto">
                <figcaption style="color: black;">Shark tale</figcaption>
              </figure>
            </a>
            </div>
            <div class="grid-slike">
                <a href="galerija-vozil.html#tovorni">
                <figure>
                <img src="slike/shrek.jpg" width="300px" height="auto">
                <figcaption style="color: black;">Tovorna vozila</figcaption>
              </figure>
            </a>
            </div>
            <div class="grid-slike">
                <a href="galerija-vozil.html#motorji">
                <figure>
                <img src="slike/shrek.jpg" width="300px" height="auto">
                <figcaption style="color: black;">Motorna kolesa</figcaption>
              </figure>
            </a>
            </div>
        </div>
        <div class="filmi">
            <?php

            ?>
        </div>
    </main>

    <footer>
        
    </footer>

</body>
</html>