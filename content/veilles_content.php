<h2 class="media-titre cache primary">Manuel Durand Veilles technologiques</h2>
<section class="veilles-container">

    <ul id="accordion">
        <a href="#bootstrap">
            <li class="veille-card">
        </a>
        <label for="first" class="primary bold first-word titre">Bootstrap<span>&#x3e;</span></label>
        <input type="radio" name="accordion" id="first">

        <div class="content">
            <div class="texte" id="bootstrap">
                <p>Bootstrap est un "framework" opensource pour CSS et JavaScript, développé par Twitter à l'origine, en 2011.</p>

                <p>Bootstrap se définit comme une collection d'outils utiles à la création du design
                    de sites et d'applications web.
                    <br><br>
                    C'est un ensemble qui contient des codes HTML et CSS, des formulaires, boutons, outils de navigation et autres éléments interactifs,
                    ainsi que des extensions JavaScript en option.
                </p>
                <br>
                <p><span class="primary bold"> C'est l'un des projets les plus populaires sur la plate-forme de gestion de développement GitHub. </span><br>

                    Bootstrap est une aide précieuse pour la création de sites web adaptatifs, c'est à dire dont la vue s'adapte à la taille de l'écran,
                    en tenant compte des caractéristiques de l'appareil utilisé, smartphone, tablette, ordinateur portable, ordinateur de bureau…</p>

                <p>La dernière version est Bootstrap 5, depuis juin 2020.</p>
                <p class="primary">Principales modifications de la version 5 :</p>
                <ul>
                    <li>- Abandon de la bibliothèque Jquery pour du simple Javascript</li>
                    <li>- Abandon d'Internet Explorer 10 et 11</li>
                </ul>
                <div class="texte">

                    Il y a plusieurs manières d'utiliser Bootstrap :
                    La plus rapide est d'utiliser un lien vers le fichier CSS hébergé sur BootstrapCDN.

                    <p>
                        <important class="primary">=> CDN : Content Delevery Network, soit réseau de distribution de contenu,</important>
                        qui permet de fournir rapidement des fichiers en ligne à des utilisateurs distants en les repliant sur des serveurs dédiés
                        à des emplacements géographiques stratégiques. Cela permet d'améliorer les performances
                        et la disponibilité du contenu pour les utilisateurs en réduisant les temps de chargement et la latence.
                    </p>
                    Ce lien est à ajouter avant les autres liens de fichiers CSS, dans l'entête du fichier HTML.
                    Voici le lien à copier :
                    <a href="https://getbootstrap.com/" target="_blank" title="clic pour aller sur le site"> <img class="capture" src="assets/img/code_bootstrap.jpg"></a>
                </div>


                <h3 class="primary titre">Les conteneurs</h3>


                <div class="texte">
                    la classe <span class="primary"> .container</span> permet d'envelopper les contenus de la page en
                    centrant le contenu et en appliquant des marges horizontales: cela aère la lecture.

                    Il y a différents choix de conteneurs en plus du simple .container :<br>
                    <ul>
                        <li>
                            <span class="primary">.container-fluid</span> permet d'occuper toujours 100 % de la largeur de l'écran,
                            cela enlève les marges horizontales appliquées par défaut.
                        </li>
                        <li>
                            <span class="primary">depuis Bootstrap 5 :</span> .container-{breakpoint} permettent d'adapter le conteneur en fonction de la taille de l'utilisateur:
                            la largeur est de 100% jusqu'au « breakpoint».
                            <p>Voir l'illustration dans la documentation <a href="https://getbootstrap.com/docs/5.1/examples/grid/#containers">ici</a>.</p>
                        </li>
                    </ul>
                </div>
                <h3 class="primary titre">La grille de Bootstrap</h3>
                <div class="texte">

                    La mise en page de Bootstrap est organisée sur une grille à 12 colonnes.
                    <br>
                    <ul>
                        <li>La classe <span class="primary">.row</span> permet d'imbriquer une ligne dans la page,</li>
                        <li>la classe <span class="primary">.col</span> permet d'imbriquer dans la ligne une ou plusieurs colonnes, jusqu'à 12.</li>
                    </ul>
                    <div class="texte">

                        Pour répartir par exemple 2 ou 3 colonnes de manière non-uniforme, on spécifie dans la classe la proportion voulue, la somme faisant 12.
                        Ex pour 3 colonnes dont une fait la moitié de la page et les 2 autres chacune un quart :<br>


                        <img class="capture" src="assets/img/bootstrap2.png">

                    </div>
                    <h3 class="primary titre">Les classes prédéfinies</h3>

                    <div class="texte">
                        Bootstrap permet l'utilisation de classes pré-définies,

                        par exemple pour les marges, padding, et les espaces entre les colonnes :

                        <ul>
                            <li>- p-5 = padding 5 pixels</li>
                            <li>- m-10 = marge de 10 px</li>
                            <li>- px-4 = padding de 4 px</li>
                            <li>- g = espacement entre les colonnes ( g pour gutters en anglais, x pour horizontal, y pour vertical)</li>
                        </ul>


                        <span class="primary">pour les couleurs : </span>
                        <ul>
                            <li>bg-light par exemple,et aussi</li>
                            <li>-primary : bleu</li>
                            <li>-secondary : gris</li>
                            <li>-success : vert</li>
                            <li>-danger : rouge</li>
                            <li>-warning : orange</li>
                            <li>-info : turquoise</li>
                            <li>-dark ...</li>
                            <li>-white...</li>
                            <li>-transparent...</li>
                        </ul>

                        <p>lien vers la documentation <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/">getbootstrap.com</a></p>
                    </div>


                </div>
            </div>
        </div>
        </li>

        <a href="#git">
            <li class="veille-card">
        </a>
        <label for="second" class="primary bold first-word titre">Git, la gestion de versions<span>&#x3e;</span></label>
        <input type="radio" name="accordion" id="second">
        <div class="content">
            <div id="git">
                <h2 class="primary">Git et la gestion de versions</h2>

                <br>
                <article class="texte">
                    <div>
                        Un gestionnaire de version est un système qui enregistre l'évolution d'un fichier ou d'un ensemble de fichiers au cours du temps
                        de manière à ce qu'on puisse rappeler une version antérieure d'un fichier à tout moment.
                        Il est généralement utilisé avec des fichiers sources de logiciels, mais on peut l'utiliser avec pratiquement tous types de fichiers.
                    </div>

                    <h3 class="primary titre">
                        V.C.S. : Version Control System
                    </h3>
                    <p>
                        Si vous êtes un dessinateur ou un développeur web,
                        et que vous voulez conserver toutes les versions d'une image ou d'une mise en page,
                        un système de gestion de version est un outil utile.
                    </p>
                    <p>
                        Il vous permet de ramener un fichier à un état précédent, de ramener le projet complet à un état précédent,
                        de visualiser les changements au cours du temps, de voir qui a modifié quelque chose qui pourrait causer un problème,
                        qui a introduit un problème et quand, et plus encore.
                        Utiliser un VCS signifie aussi généralement que si vous vous trompez ou que vous perdez des fichiers, vous pouvez facilement revenir à un état stable.
                        De plus, vous obtenez tous ces avantages avec peu de travail additionnel.
                    </p>
                    <h3 class="primary titre">Les systèmes de versions locaux</h3>
                    <article>
                        <p>
                            La méthode courante pour la gestion de version est généralement de recopier les fichiers dans un autre répertoire
                            (peut-être avec un nom incluant la date dans le meilleur des cas). Cette méthode est la plus courante parce que c'est la plus simple,
                            mais c'est aussi la moins fiable. Il est facile d'oublier le répertoire dans lequel vous êtes et d'écrire accidentellement
                            dans le mauvais fichier ou d'écraser des fichiers que vous vouliez conserver.
                        </p>
                        <p>
                            Pour traiter ce problème, les programmeurs ont développé il y a longtemps des VCS locaux qui utilisaient
                            une base de données simple pour conserver les modifications d'un fichier, comme illustrés ci-dessous.
                        </p>
                        <figure class=" flex-cont">
                            <img class="capture" src="assets/img/git_cap1.png" alt="gestion_locale">
                            <img class="capture" src="assets/img/git_cap2.png" alt="gestion_locale">
                        </figure>
                    </article>
                    <h3 class="primary">Système de verion distribué (DVCS)</h3>
                    <figure>
                        <img class="capture" src="assets/img/git_cap3.png" alt="schéma de gestion distribué">
                    </figure>
                    <p>
                        Dans un DVCS (tel que Git, Mercurial, Bazaar ou Darcs), les clients n'extraient plus seulement la dernière version d'un fichier,
                        mais ils dupliquent complètement le dépôt.

                        Ainsi, si le serveur disparaît et si les systèmes collaboraient via ce serveur,
                        n'importe quel dépôt d'un des clients peut être copié sur le serveur
                        pour le restaurer. Chaque extraction devient une sauvegarde complète de toutes les données.
                    </p>
                    <h3 class="primary">Git, des instantanés, pas des différences</h3>
                    <p>
                        Git fut créé en 2005 par Linus Tornvalds, créateur de Linux, pour remplacer le DVCS BitKeeper qui hébergeait le projet Linux.
                    </p>
                    <article>
                        La différence majeure entre Git et les autres VCS (Subversion et autres) réside dans la manière dont Git considère les données.
                        Au niveau conceptuel, la plupart des autres systèmes gèrent l'information comme une liste de modifications de fichiers.
                        Ces systèmes (CVS, Subversion, Perforce, Bazaar et autres) considèrent l'information qu'ils gèrent comme une liste de fichiers et les modifications
                        effectuées sur chaque fichier dans le temps.
                        <div>
                            Git pense ses données plus comme un instantané d’un mini système de fichiers. À chaque fois que vous validez ou enregistrez
                            l’état du projet dans Git,
                            il prend effectivement un instantané du contenu de votre espace de travail à ce moment et enregistre une référence à cet instantané.
                            Pour être efficace, si les fichiers '’ont pas changé, Git ne stocke pas le fichier à nouveau, juste une référence
                            vers le fichier original qu’il a déjà enregistré. Git pense ses données plus à la manière d'un flux d'instantanés.
                        </div>
                        <div>
                            La plupart des opérations de Git ne nécessitent que des fichiers et ressources locaux — généralement aucune information venant d'un autre ordinateur du réseau n’est nécessaire.
                            Comme vous disposez de l’historique complet du projet localement sur votre disque dur, la plupart des opérations semblent instantanées.
                            Par exemple, pour parcourir l’historique d'un projet, Git n'a pas besoin d'aller le chercher sur un serveur pour vous l'afficher ;
                            il n’a qu’à simplement le lire directement dans votre base de données locale. Cela signifie que vous avez quasi-instantanément accès à l'historique du projet.
                        </div>
                        <p class="primary bold">Git gère trois états dans lesquels les fichiers peuvent résider : modifié, indexé et validé.</p>
                        <ol>
                            <li>Modifié (modified) signifie que vous avez modifié le fichier mais qu'il n'a pas encore été validé.</li>
                            <li>Indexé (staged) signifie que vous avez marqué un fichier modifié dans sa version actuelle
                                pour qu’il fasse partie du prochain instantané du projet.</li>
                            <li>Validé (commited) signifie que les données sont stockées en sécurité dans votre base de données locale.</li>
                        </ol>
                        <div>
                            Le répertoire Git est l’endroit où Git stocke les méta-données et la base de données des objets de votre projet.
                            C’est la partie la plus importante de Git, et l'est ce qui est copié lorsque vous clonez un dépôt depuis un autre ordinateur.
                            Le répertoire de travail est une extraction unique d'une version du projet. Ces fichiers sont extraits depuis la base de données compressée dans le répertoire
                            Git et placés sur le disque pour pouvoir être utilisés ou modifiés.

                            La zone d’index est un simple fichier, généralement situé dans le répertoire Git,
                            qui stocke les informations concernant ce qui fera partie du prochain instantané. On l'appelle aussi des fois la zone de préparation.
                        </div>
                    </article>
                    <div>
                        <h3 class="primary">L’utilisation standard de Git se passe comme suit :</h3>
                        <ol>
                            <li>vous modifiez des fichiers dans votre répertoire de travail.</li>
                            <li>vous indexez les fichiers modifiés, ce qui ajoute des instantanés de ces fichiers dans la zone d'index.</li>
                            <li>vous validez, ce qui a pour effet de basculer les instantanés des fichiers de l'index dans la base de données du répertoire Git.</li>
                        </ol>
                    </div>
                    <cite>Source : Pro Git, écrit par
                        Scott Chacon et Ben Straub</cite>
                </article>



            </div>
        </div>
        </li>
        <a href="#laravel">
            <li class="veille-card">
        </a>
        <label for="third" class="primary bold first-word titre">Laravel<span>&#x3e;</span></label>
        <input type="radio" name="accordion" id="third">
        <div class="content">
            <div id="laravel">
                <article class="texte">
                    <p class="primary bold">Laravel est un framework PHP open-source populaire utilisé pour le développement de sites web et d'applications. </p>

                    <p>Il a été créé en 2011 par Taylor Otwell et est devenu un des frameworks PHP les plus populaires avec une large communauté de développeurs.</p>
                    <br>
                    <p> Laravel se distingue par ses fonctionnalités intuitives et faciles à utiliser, telles que l'injection de dépendances,
                        la gestion de routes, la gestion de bases de données et le système de modèles <span class="primary">Eloquent</span> pour la gestion des données.
                        Il offre également un ensemble de commandes pour automatiser les tâches répétitives telles que la génération de code, le déploiement et le test.</p>
                    <br>
                    <p>

                        <span class="primary"> Laravel utilise le design pattern MVC (Model-View-Controller),</span>
                        qui sépare les couches de logique de l'application pour une meilleure organisation et une maintenance plus facile.
                        Il propose également une variété d'outils de sécurité pour protéger les applications contre les vulnérabilités courantes
                        telles que les attaques par injection SQL et les failles XSS.

                    </p>
                    <br>
                    <p>

                        L'un des avantages de Laravel est sa facilité de démarrage.
                        Avec un générateur de code intégré et une documentation claire, les débutants peuvent rapidement développer des applications de qualité.
                        De plus, la communauté de développeurs actifs fournit une aide en ligne gratuite et une variété de packages disponibles pour étendre les fonctionnalités de Laravel.

                    </p>
                    <br>
                    <p>
                        En conclusion, Laravel est un excellent choix pour les développeurs débutants et les entreprises souhaitant développer des applications web performantes
                        et faciles à utiliser.
                    </p>
                </article>

            </div>
        </div>
        </li>
        <li class="veille-card">
            <label for="fourth" class="primary bold first-word titre">Qu'est-ce qu'une A.P.I. ?<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="fourth">
            <div class="content">
                <article class="texte">
                    <p>API signifie "Application Programming Interface".
                        C'est un ensemble de règles et de spécifications pour accéder à une application ou un service en ligne. </p>

                    <p>Les API permettent aux développeurs de créer des applications qui interagissent avec d'autres applications ou
                        services en ligne sans avoir à connaître tous les détails de la logique interne.</p>
                    <br>
                    <p>
                        Par exemple, si l'on veut intégrer les informations météorologiques dans une application ou un site,
                        on peut utiliser l'API météorologique pour accéder aux données en temps réel.
                        L'application enverra une requête à l'API, qui lui renverra les données souhaitées généralement en JSON ou XML.
                        L'application peut alors utiliser ces données pour afficher les informations météorologiques à l'utilisateur.

                    </p>
                    <br>
                    <p>Cela peut également aider à centraliser les données et les fonctionnalités pour une utilisation facile dans plusieurs applications.</p>

                    <p>


                        Les API peuvent être divisées en deux types principaux : les API REST (Representational State Transfer) et les API SOAP (Simple Object Access Protocol).
                        Les API REST sont de plus en plus populaires pour le développement d'applications web en raison de leur simplicité et de leur flexibilité.
                        Les API SOAP sont utilisées pour les applications plus complexes qui nécessitent une sécurité accrue et une gestion des erreurs plus robuste.
                    </p>

                    <br>
                    <p>
                        Lorsqu'une application envoie une requête à une API, elle utilise généralement une méthode telle que GET ou POST pour spécifier l'action souhaitée.
                        Les réponses à ces requêtes peuvent inclure des données telles que des images, des articles, des informations sur les utilisateurs, etc.
                        Les API peuvent également renvoyer des codes d'état pour indiquer le succès ou l'échec de la requête.

                    </p>
                    <br>
                    <p>

                        En utilisant des API, les développeurs peuvent facilement accéder aux données et aux fonctionnalités de différentes applications sans avoir
                        à se soucier de la complexité de l'intégration.
                        Les API permettent également aux entreprises de partager facilement leurs données et leurs fonctionnalités avec les développeurs tiers,
                        ce qui peut stimuler la croissance et l'innovation.

                        Les API sont donc des éléments clés pour la communication entre les applications en ligne et peuvent aider à
                        développer des applications plus riches et plus complexes en reliant des services et des fonctionnalités existants.

                    </p>
                    <br>
                    <p>

                    </p>

                </article>
            </div>
        </li>
        <li class="veille-card">
            <label for="fifth" class="primary ">x<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="fifth">
            <div class="fin-accordion">
            </div>
        </li>
        <div>
        </div>
    </ul>

</section>