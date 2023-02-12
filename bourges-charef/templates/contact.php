<!DOCTYPE html>
<html lang="fr">
    <head>
	    <title>Groupe 11 - Période 3 Refonte du site Ford</title>
	    <meta charset="UTF-8">
        <link href="../assets/css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <!-- HEADER -->
        <header>
			<?php include("includes/header.php") ?>
            <div class="header-img header-contact">
				<div class="text-header text-header-contact">
					<h1>Votre concession Ford à Limoges</h1>
					<p>Soufflé marzipan soufflé biscuit caramels candy canes. Marshmallow marzipan wafer gummies cupcake powder bonbon macaroon. Tootsie roll candy croissant shortbread halvah macaroon cheesecake gummies.</p>
                    <p>Muffin brownie candy canes cheesecake jujubes donut gingerbread. Sesame snaps lollipop danish sweet roll halvah chocolate topping. Pie candy canes marshmallow gummies fruitcake brownie brownie. Cake chocolate cake sweet caramels oat cake.</p>
				</div>
			</div>
		</header>
        <!-- FIL D'ARIANE -->
        <div class="navigation">
            <a href="../index.php" title="Accueil">Accueil</a>
            <a href="configurateur.php" title="Configurateur">Configurateur</a>
        </div>
        <!-- INFORMATIONS -->
        <section id="informations">
            <div id="info-container">
                <div id="adresse">
                    <h2>Concession Ford Limoges</h2>
                    <p>Rue de Limoges</p>
                    <p>87000 Limoges</p>
                    <p>France</p>
                    <a href="#" class="btn white-btn">S'y rendre</a>
                </div>
                <div id="horaires">
                    <h2>Horaires du magasin</h2>
                    <table>
                        <tr>
                            <td>Lundi</td>
                            <td>Fermé</td>
                            <td>14:00 - 18:00</td>
                        </tr>
                        <tr>
                            <td>Mardi</td>
                            <td>08:00 - 12:30</td>
                            <td>13:30 - 18:30</td>
                        </tr>
                        <tr>
                            <td>Mercredi</td>
                            <td>08:00 - 12:30</td>
                            <td>13:30 - 18:30</td>
                        </tr>
                        <tr>
                            <td>Jeudi</td>
                            <td>08:00 - 12:30</td>
                            <td>13:30 - 18:30</td>
                        </tr>
                        <tr>
                            <td>Vendredi</td>
                            <td>08:00 - 12:30</td>
                            <td>13:30 - 18:30</td>
                        </tr>
                        <tr>
                            <td>Samedi</td>
                            <td>08:00 - 12:30</td>
                            <td>13:30 - 18:30</td>
                        </tr>
                        <tr>
                            <td>Dimanche</td>
                            <td>Fermé</td>
                            <td>Fermé</td>
                        </tr>
                    </table>
                </div>
                <div id="contact">
                    <h2>Contact</h2>
                    <a href="#" class="btn white-btn">Prendre rdv</a>
                    <a href="#" class="btn white-btn">Facebook</a>
                    <a href="#" class="btn white-btn">Appelez-nous</a>
                </div>
            </div>
        </section>
        <!-- SERVICES -->
        <section id="services">
            <div class="header-img header-services">
				<div class="text-header text-header-contact">
					<h1>Les services de votre concession</h1>
					<p>Soufflé marzipan soufflé biscuit caramels candy canes. Marshmallow marzipan wafer gummies cupcake powder bonbon macaroon. Tootsie roll candy croissant shortbread halvah macaroon cheesecake gummies.</p>
				</div>
			</div>
            <div class="services">
                <div class="service">
                    <h2>Matériel</h2>
                    <p>Trouvez toutes les accessoires et pièces détachées</p>
                    <a href="#"><span></span></a>
                </div>
                <div class="service">
                    <h2>Equipe</h2>
                    <p>Une équipe d'experts pour vous consseiller</p>
                    <a href="#"><span></span></a>
                </div>
                <div class="service">
                    <h2>Essais</h2>
                    <p>Réservez un essai gratuit auprès de nos équipes</p>
                    <a href="#"><span></span></a>
                </div>
            </div>
        </section>
        <!-- RENDEZ-VOUS -->
        <section id="rdv">
            <div class="header-img header-rdv">
				<div class="text-header text-header-contact">
					<h1>Prendre rendez-vous</h1>
					<p>Soufflé marzipan soufflé biscuit caramels candy canes.</p>
				</div>
			</div>
            <div class="rdv">
                <form method="" action="">
                    <fieldset>
                        <legend>Vos coordonnées</legend>

                        <label for="nom">Votre nom/prénom</label>
                        <input type="text" id="nom" name="nom" required
                            minlength="4" maxlength="25">

                        <label for="email">Votre mail</label>
                        <input type="email" id="email" name="email" placeholder="votremail@mail.com" required>

                        <label for="tel">Votre téléphone</label>
                        <input type="tel" id="tel" name="tel" placeholder="0555000000" required>
                        
                    </fieldset>
                    <fieldset>
                        <legend>Votre demande</legend>

                        <label for="sujet">Sujet</label>
                        <select name="sujet" id="sujet" required>
                            <option value="rdv">Prendre un rendez-vous</option>
                            <option value="rdv">Prendre un rendez-vous</option>
                            <option value="rdv">Prendre un rendez-vous</option>
                        </select>

                        <label for="message">Votre message</label>
                        <textarea id="message" name="message" rows="10" placeholder="Saisissez votre message" required></textarea>
                    </fieldset>
                    <input type="submit" value="Envoyer ma demande">
                </form>
            </div>
        </section>
        <!-- ACTUALITES ET EVENEMENTS -->
        <?php include("includes/actualites_evenements.php") ?>
        <!-- NEWSLETTER -->
        <?php include("includes/newsletter.php") ?>
        <!-- FOOTER -->
        <?php include("includes/footer.php") ?>
    </body>
</html>
