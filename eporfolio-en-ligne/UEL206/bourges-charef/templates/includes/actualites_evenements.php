<section id="actu">
	<div class="header-img header-actu">
		<div class="text-header text-header-contact">
			<h1>Actualités et événements</h1>
			<p>Suivez toute l'actualité de Ford</p>
		</div>
		<a href="#" class="btn blue-btn btn-actu" title="Découvrez toute notre actualité">Toute l'actualité</a>
	</div>
	<?php 
		$actualite = [
			['image' => "/UEL206/bourges-charef/assets/images/contact/joyeuses-fetes.jpg", 'date' => '20 Déc.', 'titre' => 'ford vous souhaite de joyeuses fêtes de fin d\'année', 'url-lien' => '#', 'texte' => 'Lire l\'actualité'],
			['image' => '/UEL206/bourges-charef/assets/images/contact/ford-focus.jpg', 'date' => '10 Déc.', 'titre' => 'sortie de la nouvelle ford focus', 'url-lien' => '#', 'texte' => 'Lire l\'actualité'],
			['image' => '/UEL206/bourges-charef/assets/images/contact/wolrd.jpg', 'date' => '04 Déc.', 'titre' => 'les 7 nouveaux véhicules connectés qui ouvrent la voie à un avenir 100% électrique en europe pour ford', 'url-lien' => '#', 'texte' => 'Lire l\'actualité']
		];
	?>
	<div class="actualites">
		<?php 
		foreach ($actualite as $key => $value) { ?>
			<div class="actualite">
				<div>
					<img src="<?php echo $actualite[$key]['image']; ?>">
					<div class="actualite-date"><?php echo $actualite[$key]['date']; ?></div>
				</div>
				<div class="actualite-content">
					<h2><?php echo $actualite[$key]['titre']; ?></h2>
					<a href = '<?php echo $actualite[$key]['url-lien']; ?>' class="btn blue-btn"><?php echo $actualite[$key]['texte']; ?></a>
				</div>
			</div> 
		<?php } ?>
	</div>
</section>