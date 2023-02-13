<!DOCTYPE html>
<html lang="fr">
    <head>
	    <title>Groupe 11 - Période 1 Refonte du site Ford</title>
	    <meta charset="UTF-8">
        <link href="assets/css/style.css" rel="stylesheet">
      	<link rel="icon" type="image/ico" href="favicon.ico">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <!-- HEADER -->
        <header>
			<?php include("templates/includes/header.php") ?>
			<div class="header-img header-index">
				<div class="text-header">
					<h1>Connectivité Fordpass</h1>
					<p>Facilitez votre quotidien avec le contrôle à distance</p>
					<a href="#" title="En savoir plus sur la connectivité Fordpass" class="btn blue-btn">Découvrir</a>
				</div>
			</div>
		</header>
        <!-- OFFRES -->
		<section class="promo">
			<h2>Profitez de nos offres du moment</h2>
			<a class="btn white-btn" href="#" title="Découvrir les offres Ford">Voir les offres</a>
		</section>
        <!-- VEHICULES -->
        <section class="vehicles">
            <h2>Un véhicule pour chaque style de vie</h2>
            <a href="#" title="Découvrir les véhicules Ford" class="btn blue-btn">Voir tous nos véhicules</a>
            <div id="vehicles">
                <a href="#" title="En savoir plus sur la Nouvelle focus">
                    <article class="vehicle">
                        <img src="assets/images/cars/nouvelle-focus.jpg" alt="Image de voiture">
                        <div class="text-container">
                            <h3>Nouvelle focus</h3>
                            <p>SUV & CROSSOVER</p>
                        </div>
                    </article>
                </a>
                <a href="#" title="En savoir plus sur l'Eco sport'">
                    <article class="vehicle">
                        <img src="assets/images/cars/eco-sport.jpg" alt="Image de voiture">
                        <div class="text-container">
                            <h3>Eco sport</h3>
                            <p>SUV & CROSSOVER</p>
                        </div>
                    </article>
                </a>
                <a href="#" title="En savoir plus sur la Ford GT">
                    <article class="vehicle">
                        <img src="assets/images/cars/gt.jpg" alt="Image de voiture">
                        <div class="text-container">
                            <h3>Ford GT</h3>
                            <p>PERFORMANCE</p>
                        </div>
                    </article>
                </a>
            </div>
        </section>
        <!-- STYLES -->
        <section class="styles">
            <h2>Choisis ton style</h2>
            <div id="styles">
                <article class="style">
                    <img src="assets/images/styles/suv.jpg" alt="Image de paysage urbain">
                    <div class="text-container">
                        <h3>01</h3>
                        <a href="#">SUV & CROSSOVER</a>
                    </div>
                </article>
                <article class="style">
                    <img src="assets/images/styles/hybrides.jpg" alt="Image de paysage rural">
                    <div class="text-container">
                        <h3>02</h3>
                        <a href="#">HYBRIDES</a>
                    </div>
                </article>
                <article class="style">
                    <img src="assets/images/styles/performances.jpg" alt="Image de voiture">
                    <div class="text-container">
                        <h3>03</h3>
                        <a href="#">PERFORMANCE</a>
                    </div>
                </article>
                <article class="style">
                    <img src="assets/images/styles/utilitaires.jpg" alt="Image de voiture">
                    <div class="text-container">
                        <h3>04</h3>
                        <a href="#">UTILITAIRES</a>
                    </div>
                </article>
            </div>
        </section>
        <!-- ACTUALITES ET EVENEMENTS -->
        <?php include("templates/includes/actualites_evenements.php") ?>
        <!-- NEWSLETTER -->
        <?php include("templates/includes/newsletter.php") ?>
        <!-- FOOTER -->
        <?php include("templates/includes/footer.php") ?>
    </body>
</html>
