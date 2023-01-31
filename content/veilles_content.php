<h2 class="media-titre cache primary">Manuel Durand Veilles technologiques</h2>
<section class="veilles-container">

    <ul id="accordion">
        <li class="veille-card">
            <label for="first" class="primary bold first-word titre">Bootstrap<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="first">

            <div class="content">
                <div class="texte">
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

        <li class="veille-card">
            <label for="second" class="primary bold first-word titre">Git / Github<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="second">
            <div class="content">
                <div class="">
                    <p>Bootstrap est un "framework" opensource pour CSS et JavaScript, développé par Twitter à l'origine, en 2011.</p>

                    <p>Bootstrap se définit comme une collection d'outils utiles à la création du design
                        de sites et d'applications web. (graphisme, animation et interactions avec la page dans le navigateur, etc.)
                        C'est un ensemble qui contient des codes HTML et CSS, des formulaires, boutons, outils de navigation et autres éléments interactifs,
                        ainsi que des extensions JavaScript en option. </p>
                    <br>
                    <p><span class="primary bold"> C'est l'un des projets les plus populaires sur la plate-forme de gestion de développement GitHub. </span>

                        C'est une aide précieuse pour la création de sites web adaptatifs, c'est à dire dont la vue s'adapte à la taille de l'écran,
                        en tenant compte des caractéristiques de l'appareil utilisé, smartphone, tablette, ordinateur portable, ordinateur de bureau…</p>



                </div>
            </div>
        </li>
        <li class="veille-card">
            <label for="third" class="primary bold first-word titre">Laravel<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="third">
            <div class="content">
                <div class="">
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
                        et faciles à utiliser. Avec une communauté active et une documentation abondante, Laravel offre une plateforme stable et évolutive pour les projets futurs.
                    </p>

                </div>
            </div>
        </li>
        <li class="veille-card">
            <label for="fourth" class="primary bold first-word titre">Qu'est-ce qu'une A.P.I. ?<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="fourth">
            <div class="content">
                <div class="">
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

                </div>
            </div>
        </li>
        <li class="veille-card">
            <label for="fifth" class="primary ">x<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="fifth">
            <div class="fin-accordion">
                <div class="">


                </div>
            </div>
        </li>
        <div>
        </div>



    </ul>




</section>