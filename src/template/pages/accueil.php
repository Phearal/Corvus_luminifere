<section id="home-title-section">
    <h3>Activités Corvus</h3>
    <div class="separator"></div>
    <h1>Ateliers & expos</h1>
    <a href="#activites" id="#link-activites" aria-label="Aller à la section sur les activités">
        <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.9393 13.0607C11.5251 13.6464 12.4749 13.6464 13.0607 13.0607L22.6066 3.51472C23.1924 2.92894 23.1924 1.97919 22.6066 1.3934C22.0208 0.807617 21.0711 0.807617 20.4853 1.3934L12 9.87868L3.51472 1.39339C2.92894 0.807606 1.97919 0.807606 1.3934 1.39339C0.807617 1.97918 0.807616 2.92893 1.3934 3.51471L10.9393 13.0607ZM10.5 11L10.5 12L13.5 12L13.5 11L10.5 11Z" fill="white"/>
        </svg>
    </a>
</section>
<main>
    <section class="section-activites" id="activites">
        <h2>Nos activités</h2>
        <div class="separator"></div>
        <div class="article-container">
            <article>
                <img class="img-default" src="<?= IMAGES ?>/activites/activites.jpg" alt="Crayons et peincaux nécessaires aux ateliers créatifs.">
                <h3>Les ateliers</h3>
                <p><strong>Ateliers de dessin et peinture</strong> pour enfants, ados et adultes. Laissez vous guider pas à pas quel que soit votre niveau, dans un cadre de bienveillance, de calme et de détente.</p>
                <a href="index.php?page=ateliers" class="btn-link">Découvrir</a>
            </article>
            <article>
                <img class="img-default" src="<?= IMAGES ?>/expositions/expositions.jpg" alt="Exposition du 27 Février 2018, les visiteurs examinent les toiles.">
                <h3>Les expositions</h3>
                <p>L’atelier organise régulièrement des <strong>expositions artistiques</strong> afin de mettre en avant le travail des participants aux ateliers ou d’artistes locaux.</p>
                <a href="index.php?page=expositions" class="btn-link">Découvrir</a>
            </article>
        </div>
    </section>

    <section class="section-origines">
        <div></div>
        <article>
            <h2>Origines du projet</h2>
            <div class="separator"></div>
            <p>Au cœur d'une amitié partagée et d'une passion commune pour l'art, un groupe d'amis décida un jour de transformer un simple grenier en un <strong>atelier créatif</strong>. Inspirés par les corbeaux qui survolaient leur ville, porteurs de mystères et de créativité, ils baptisèrent leur projet Corvus luminifère. Guidés par la lueur douce des lanternes suspendues, ils créèrent un espace où chaque coup de pinceau devint une histoire à raconter. Ainsi naquit un lieu où artistes novices et chevronnés se rassemblent, partagent et exposent. "Corvus luminifère" devint le sanctuaire où la passion artistique s'illumine, où chaque visiteur est invité à découvrir et nourrir sa propre créativité. Bienvenue dans notre histoire, devenez une part de Corvus luminifère.</p>
        </article>
    </section>

    <section class="section-ateliers">
        <article>
            <h2>Ateliers de dessin et peinture</h2>
            <div class="separator"></div>
            <p>Nos ateliers sont animés par des enseignants passionnés et dévoués qui favorisent un accompagnement personnalisé, guidant chaque apprenant avec soin et attention. Que vous soyez débutant ou artiste chevronné, nos ateliers offrent un espace inclusif pour explorer, apprendre et grandir. Rejoignez-nous pour partager des moments de création uniques, où la camaraderie et l'inspiration se mêlent pour former une expérience artistique exceptionnelle.</p>
            <a href="index.php?page=ateliers" class="btn-link">Découvrir</a>
        </article>
        <div class="grid-row">
            <div class="grid-col">
                <img class="fade-in-left" src="<?= IMAGES ?>/grid/grid1.jpg" alt="Atelier de dessin enfants">
                <img class="fade-in-bottom" src="<?= IMAGES ?>/grid/grid2.jpg" alt="Grande exposition de peinture">
            </div>
            <div class="grid-col">
                <img class="fade-in-top" src="<?= IMAGES ?>/grid/grid3.jpg" alt="Exposition art moderne">
                <img class="fade-in-right" src="<?= IMAGES ?>/grid/grid4.jpg" alt="Cours de peinture adulte">
            </div>
        </div>
        
    </section>

    <section class="section-newsletter">
        <form action="accueil.php" method="POST">
            <h2>S'inscrire à la newsletter</h2>
            <div class="separator"></div>
            <div>
                <label for="email" class="hide">Adresse e-mail :</label>
                <input type="email" id="email" name="email" placeholder="Entrer une adresse email valide" required>
                <button type="submit" class="btn-link">Envoyer</button>
            </div>
        </form>
    </section>
</main>