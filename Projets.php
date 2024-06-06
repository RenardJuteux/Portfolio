<?php
$jsonData = file_get_contents('SAE.json');
$projets = json_decode($jsonData, true)['Projets'];
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Mes projets</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <header>
                <div id="navi">
                <a href="Accueil.html" ><p>Accueil</p></a>
                <a href="#"><p class="current">Projets</p></a>
                </div>
            </header>
            <main>
                <div id="projets">
                    <?php for ($i = 0; $i < count($projets); $i++): ?>
                    <div class="projet">
                        <h2><?php echo htmlspecialchars($projets[$i]['name']); ?></h2>
                        <p><strong>Statut:</strong> <?php echo htmlspecialchars($projets[$i]['statut']); ?></p>
                        <p><strong>Objectif:</strong> <?php echo htmlspecialchars($projets[$i]['objectif']); ?></p>
                        <p><strong>Intitulé:</strong> <?php echo htmlspecialchars($projets[$i]['intitulé']); ?></p>
                        <p><strong>Thème:</strong> <?php echo htmlspecialchars($projets[$i]['thème']); ?></p>
                        <p><strong>Nous:</strong> <?php echo htmlspecialchars($projets[$i]['nous']); ?></p>
                        <p><strong>Je:</strong> <?php echo htmlspecialchars($projets[$i]['je']); ?></p>
                        <p><strong>Attente:</strong> <?php echo htmlspecialchars($projets[$i]['attente']); ?></p>
                        <p><strong>Compétence:</strong> <?php echo htmlspecialchars($projets[$i]['compétence']); ?></p>
                    </div>
                    <?php endfor; ?>
                </div>
            </main>
        </body>
    </html>