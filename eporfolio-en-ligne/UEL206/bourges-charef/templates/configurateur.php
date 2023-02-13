<!DOCTYPE html>
<html lang="fr">
    <head>
	    <title>Groupe 11 - Période 2 Refonte du site Ford</title>
	    <meta charset="UTF-8">
        <link href="../assets/css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width">
        <script src="../assets/js/script.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    <body>
        <!-- HEADER -->
        <header>
			<?php include("includes/header.php") ?>
		</header>
        <!-- FIL D'ARIANE -->
        <div class="navigation">
            <a href="../index.php" title="Accueil">Accueil</a>
            <a href="configurateur.php" title="Configurateur">Configurateur</a>
        </div>
        <div class="content">
            <i class="fa-solid fa-filter" id="filtersIcon"></i>
            <!-- SELECTION PANEL -->
            <div class="selection">
                <i class="fa-solid fa-xmark" id="closeIcon"></i>
                <form method="" action="">
                    <fieldset>
                        <legend>Type</legend>
                        <label for="type-select">Type</label>
                        <select name="type" id="type-select">
                            <option value="">--Sélectionnez--</option>
                            <option value="suv-crossover">SUV & Crossover</option>
                            <option value="hybride">Hybrides</option>
                            <option value="performance">Performance</option>
                            <option value="utilitaires">Utilitaires</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <legend>Budget maximum</legend>
                        <label for="price-select">Budget maximum</label>
                        <input type="range" id="price-select" name="price" min="2000" max="90000" step="1000" value="90000">
                        <div class="ticks">
                            <span class="tick"></span>
                            <span class="tick"></span>
                            <span class="tick"></span>
                            <span class="tick"></span>
                            <span class="tick"></span>
                            <span class="tick"></span>
                            <span class="tick"></span>
                            <span class="tick"></span>
                            <span class="tick"></span>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Puissance</legend>
                        <label for="power-output-select">Puissance</label>
                        <select name="puissance" id="power-output-select">
                            <option value="92">92 kW / 125 CH</option>
                            <option value="92">92 kW / 125 CH</option>
                            <option value="92">92 kW / 125 CH</option>
                            <option value="92">92 kW / 125 CH</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <legend>Couleur carrosserie</legend>
                        <p>Couleur carrosserie</p>
                        <div class="colors">
                            <input type="radio" id="bleu-abysse" name="color" value="Bleu_abysse">
                            <label for="bleu-abysse">Bleu abysse</label>

                            <input type="radio" id="corail" name="color" value="Corail">
                            <label for="corail">Corail</label>

                            <input type="radio" id="moutarde" name="color" value="Moutarde" checked>
                            <label for="moutarde">Moutarde</label>

                            <input type="radio" id="bleu-island" name="color" value="Bleu_island">
                            <label for="bleu-island">Bleu island</label>

                            <input type="radio" id="rouge-fantastic" name="color" value="Rouge_fantastic">
                            <label for="rouge-fantastic">Rouge fantastic</label>

                            <input type="radio" id="blanc-glacier" name="color" value="Blanc_glacier">
                            <label for="blanc-glacier">Blanc glacier</label>

                            <input type="radio" id="noir-agathe" name="color" value="Noir_agathe">
                            <label for="noir-agathe">Noir agathe</label>
                        </div>
                    </fieldset>
                </form>              
            </div>  
            <!-- VOITURES -->
            <div class="results">
                <div class="card-result">
                    <img src="../assets/images/cars/eco-sport.jpg" alt="Image de voiture">
                    <div class="price">
                        20.000€
                    </div>
                    <div class="card-description">
                        <h2>1.0 ecoboost hybrid 125 ch powershift</h2> 
                        <ul>
                            <li><span>Accélération 0-100 km/h :</span> 9,6 secs</li>
                            <li><span>Puissance :</span> 92 kW / 125 CH</li>
                            <li><span>Couple :</span> 170 NM</li>
                            <li><span>Crit' Air :</span> 1*</li>
                            <li><span>Transmission :</span> Auto Powershift DCT</li>
                        </ul>
                        <a href="#" title="Choisir ce véhicule">choisir ce véhicule<span></span></a>
                    </div>
                </div>
                <div class="card-result">
                    <img src="../assets/images/cars/eco-sport.jpg" alt="Image de voiture">
                    <div class="price">
                        20.000€
                    </div>
                    <div class="card-description">
                        <h2>1.0 ecoboost hybrid 125 ch powershift</h2> 
                        <ul>
                            <li><span>Accélération 0-100 km/h :</span> 9,6 secs</li>
                            <li><span>Puissance :</span> 92 kW / 125 CH</li>
                            <li><span>Couple :</span> 170 NM</li>
                            <li><span>Crit' Air :</span> 1*</li>
                            <li><span>Transmission :</span> Auto Powershift DCT</li>
                        </ul>
                        <a href="#" title="Choisir ce véhicule">choisir ce véhicule<span></span></a>
                    </div>
                </div>
                <div class="card-result">
                    <img src="../assets/images/cars/eco-sport.jpg" alt="Image de voiture">
                    <div class="price">
                        20.000€
                    </div>
                    <div class="card-description">
                        <h2>1.0 ecoboost hybrid 125 ch powershift</h2> 
                        <ul>
                            <li><span>Accélération 0-100 km/h :</span> 9,6 secs</li>
                            <li><span>Puissance :</span> 92 kW / 125 CH</li>
                            <li><span>Couple :</span> 170 NM</li>
                            <li><span>Crit' Air :</span> 1*</li>
                            <li><span>Transmission :</span> Auto Powershift DCT</li>
                        </ul>
                        <a href="#" title="Choisir ce véhicule">choisir ce véhicule<span></span></a>
                    </div>
                </div>
                <div class="card-result">
                    <img src="../assets/images/cars/eco-sport.jpg" alt="Image de voiture">
                    <div class="price">
                        20.000€
                    </div>
                    <div class="card-description">
                        <h2>1.0 ecoboost hybrid 125 ch powershift</h2> 
                        <ul>
                            <li><span>Accélération 0-100 km/h :</span> 9,6 secs</li>
                            <li><span>Puissance :</span> 92 kW / 125 CH</li>
                            <li><span>Couple :</span> 170 NM</li>
                            <li><span>Crit' Air :</span> 1*</li>
                            <li><span>Transmission :</span> Auto Powershift DCT</li>
                        </ul>
                        <a href="#" title="Choisir ce véhicule">choisir ce véhicule<span></span></a>
                    </div>
                </div>
            </div>       
        </div>
        <!-- NEWSLETTER -->
        <?php include("includes/newsletter.php") ?>
        <!-- FOOTER -->
        <?php include("includes/footer.php") ?>
    </body>
</html>
