<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/documentation.css">
        <title>&lt;CodePhenix&gt; Documentation</title>
    </head>
    <body>
      <?php include '../assets/structure/header.php' ;?>
      <main>
        <a href="#" id="back-to-top" class="btn btn-default">&uarr;</a>
        <aside>
          <ul class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <li>
                <h3>Layout</h3>
            </li>
            <li>
              <button class="nav-link active" id="grid-tab" data-bs-toggle="pill" data-bs-target="#grid" type="button" role="tab" aria-controls="grid" aria-selected="false">
                Grid
              </button>
            </li>
            <li>
              <button class="nav-link" id="container-tab" data-bs-toggle="pill" data-bs-target="#container" type="button" role="tab" aria-controls="container" aria-selected="false">
                Container / Breakpoints
              </button>
            </li>
            <li>
              <button class="nav-link" id="flexbox-tab" data-bs-toggle="pill" data-bs-target="#flexbox" type="button" role="tab" aria-controls="flexbox" aria-selected="false">
                Flexbox
              </button>
            </li>
            <li>
              <button class="nav-link" id="position-tab" data-bs-toggle="pill" data-bs-target="#position" type="button" role="tab" aria-controls="position" aria-selected="false">
                Position
              </button>
            </li>
            <li>
                <h3>Utilitaires</h3>
            </li>
            <li>
              <button class="nav-link" id="color-tab" data-bs-toggle="pill" data-bs-target="#color" type="button" role="tab" aria-controls="structure" aria-selected="false">
                Color
              </button>
            </li>
            <li>
              <button class="nav-link" id="border-tab" data-bs-toggle="pill" data-bs-target="#border" type="button" role="tab" aria-controls="border" aria-selected="false">
                Border
              </button>
            </li>
            <li>
              <button class="nav-link" id="margin-padding-tab" data-bs-toggle="pill" data-bs-target="#margin-padding" type="button" role="tab" aria-controls="margin-padding" aria-selected="false">
                Margin/padding
              </button>
            </li>
            <li>
              <button class="nav-link" id="shadow-tab" data-bs-toggle="pill" data-bs-target="#shadow" type="button" role="tab" aria-controls="shadow" aria-selected="false">
                Shadow
              </button>
            </li>
            <li>
              <button class="nav-link" id="sizing-tab" data-bs-toggle="pill" data-bs-target="#sizing" type="button" role="tab" aria-controls="sizing" aria-selected="false">
                Sizing
              </button>
            </li>
            <li>
              <button class="nav-link" id="text-tab" data-bs-toggle="pill" data-bs-target="#text" type="button" role="tab" aria-controls="text" aria-selected="false">
                Text
              </button>
            </li>
            <li>
              <button class="nav-link" id="visible-tab" data-bs-toggle="pill" data-bs-target="#visible" type="button" role="tab" aria-controls="visible" aria-selected="false">
                Opacity / Overflow / Visibility
              </button>
            </li>
            <li>
              <h3>Composants</h3>
            </li>
            <li>
              <button class="nav-link" id="accordeon-tab" data-bs-toggle="pill" data-bs-target="#accordeon" type="button" role="tab" aria-controls="accordeon" aria-selected="false">
                Accordéon & collapse
              </button>
            </li>
            <li>
              <button class="nav-link" id="badge-tab" data-bs-toggle="pill" data-bs-target="#badge" type="button" role="tab" aria-controls="badge" aria-selected="false">
                Badge
              </button>
            </li>
            <li>
              <button class="nav-link" id="button-tab" data-bs-toggle="pill" data-bs-target="#button" type="button" role="tab" aria-controls="button" aria-selected="false">
                Button
              </button>
            </li>
            <li>
              <button class="nav-link" id="card-tab" data-bs-toggle="pill" data-bs-target="#card" type="button" role="tab" aria-controls="card" aria-selected="false">
                Card
              </button>
            </li>
            <li>
              <button class="nav-link" id="caroussel-tab" data-bs-toggle="pill" data-bs-target="#caroussel" type="button" role="tab" aria-controls="caroussel" aria-selected="false">
                Caroussel
              </button>
            </li>
            <!-- <li>
              <button class="nav-link" id="dropdown-tab" data-bs-toggle="pill" data-bs-target="#dropdown" type="button" role="tab" aria-controls="dropdown" aria-selected="false">
                Dropdown
              </button>
            </li> -->
            <li>
              <button class="nav-link" id="modal-tab" data-bs-toggle="pill" data-bs-target="#modal" type="button" role="tab" aria-controls="modal" aria-selected="false">
                Modal
              </button>
            </li>
            <li>
              <button class="nav-link" id="navbar-tab" data-bs-toggle="pill" data-bs-target="#navbar" type="button" role="tab" aria-controls="navbar" aria-selected="false">
                Nav
              </button>
            </li>
            <li>
                <h3><a href="icons-bootstrap/index.htm" target="_blank" role="button">Icons</a></h3>
            </li>
          </ul>
      </aside>
      <section class="tab-content" id="v-pills-tabContent">
          <article class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                <h3>Les grilles</h3>
                <div class="accordion accordion-flush" id="grid-accordeon">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="grid-titre">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#grid-contenu" aria-expanded="false" aria-controls="grid-contenu">
                          <h4>Grid</h4>
                        </button>
                      </h2>
                      <div id="grid-contenu" class="accordion-collapse collapse" aria-labelledby="grid-titre" data-bs-parent="#grid-accordeon">
                        <div class="accordion-body">
                          <div class="row">
                              <div class="col-6 bg-dark" >
                                  <code>
                                      &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"container"</span>> <br>
                                    &nbsp;&nbsp;          &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"row"</span>> <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;                &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col-8"</span>>col-8 &lt;/<span class="balise">div</span>> <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;                &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col-4"</span>>col-4 &lt;/<span class="balise">div</span>> <br>
                                    &nbsp;&nbsp;       &lt;/<span class="balise">div</span>> <br>
                                    &nbsp;&nbsp;        &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"row"</span>> <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;            &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col"</span>>col &lt;/<span class="balise">div</span>> <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;            &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col"</span>>col &lt;/<span class="balise">div</span>> <br>
                                    &nbsp;&nbsp;       &lt;/<span class="balise">div</span>> <br>
                                       &lt;/<span class="balise">div</span>> <br>
                                  </code>
                                </div>
                                <div class="col-6 demo">
                                        <div class="row w-100">
                                                <div class="col-8">col-8</div>
                                                <div class="col-4">col-4</div>
                                        </div>
                                        <div class="row w-100">
                                            <div class="col">col</div>
                                            <div class="col">col</div>
                                        </div>
                                </div>
                          </div>
                          <p>
                              La propriété grid est une propriété centrale de l'environnement Bootstrap. La grille permet d'organiser ses éléments facilement et intuitivement; c'est la grid également donnée à Bootstrap tout son intérêt sur le plan responsif.
                          </p>
                          <p>
                              <h4>La grid Bootstrap : Comment ça marche ? </h4>
                              <h6>Une grid sur plusieur niveau</h6>
                              <ul>
                                  <li>Containers donnent un moyen de centrer et/ou contrôler le padding et la margin des éléments d'un site.</li>
                                  <li>Rows sont des "wrapper" (emballage) pour les colonnes.</li>
                                  <li>Le contenu d'une grid ne peut être situé que dans les colonnes.</li>
                                  <li>Les grid column sont diviées en 12 sous-parties par rangées. <code>col-4</code> est donc une column qui prend 4 sous-parties de la rangée. 4 <code>col-3</code> prendront donc tout l'espace de la rangée.</li>
                                  <li>Si la taille des colonnes n'est pas spécifiée, elles prendront automatiquement un <code>width</code> de telle sorte que les colonnes prennent toute la place de la rangée.</li>
                              </ul>
                          </p>
                          <h4>Changer la largeur de la fenêtre pour voir les effets</h4>
                          <div class="row">
                                <div class="col-6 bg-dark" >
                                    <code>
                                       &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"container"</span>><br>
                                    &nbsp;&nbsp;       &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"row"</span>> <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;               &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col-lg-4 col-6"</span>>col&lt;/<span class="balise">div</span>> <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;               &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col-lg-4 col-6"</span>>col&lt;/<span class="balise">div</span>> <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;               &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col-lg-4 col-6"</span>>col&lt;/<span class="balise">div</span>> <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;               &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col-lg-4 col-6"</span>>col&lt;/<span class="balise">div</span>> <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;               &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col-lg-4 col-6"</span>>col&lt;/<span class="balise">div</span>> <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;               &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col-lg-4 col-6"</span>>col&lt;/<span class="balise">div</span>> <br>
                                    &nbsp;&nbsp;      &lt;/<span class="balise">div</span>><br>
                                      &lt;/<span class="balise">div</span>>
                                    </code>
                                </div>
                              <div class="col-6">
                                  <div class="demo">
                                      <div class="row">
                                              <div class="col-lg-4 col-6">col</div>
                                              <div class="col-lg-4 col-6">col</div>
                                              <div class="col-lg-4 col-6">col</div>
                                              <div class="col-lg-4 col-6">col</div>
                                              <div class="col-lg-4 col-6">col</div>
                                              <div class="col-lg-4 col-6">col</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <p>
                              <h4>Breakpoint</h4>
                              La deuxième notion essentielle de Bootstrap, allant en tandem avec la grille, est les breakpoints. Les breakpoints sont des <code>@media queries</code> intégrés  aux classes Bootstrap. Plus besoins d'écrire dans la feuille CSS plus configuration en fonction de la taille de l'écran, c'est possible directement avec des classes.
                          </p>
                          <h4>Notation</h4>
                          Les breakpoint se précises dans les colonnes avec la notation suivante : <code>col-{breakpoint}-{columnSize}</code>
                          <table class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th></th>
                                <th class="text-center">
                                  Extra small<br />
                                  <small>&lt;576px</small>
                                </th>
                                <th class="text-center">
                                  Small<br />
                                  <small>&ge;576px</small>
                                </th>
                                <th class="text-center">
                                  Medium<br />
                                  <small>&ge;768px</small>
                                </th>
                                <th class="text-center">
                                  Large<br />
                                  <small>&ge;992px</small>
                                </th>
                                <th class="text-center">
                                  Extra large<br />
                                  <small>&ge;1200px</small>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th class="text-nowrap" scope="row">Max container width</th>
                                <td>None (auto)</td>
                                <td>540px</td>
                                <td>720px</td>
                                <td>960px</td>
                                <td>1140px</td>
                              </tr>
                              <tr>
                                <th class="text-nowrap" scope="row">Class prefix</th>
                                <td><code>.col-</code></td>
                                <td><code>.col-sm-</code></td>
                                <td><code>.col-md-</code></td>
                                <td><code>.col-lg-</code></td>
                                <td><code>.col-xl-</code></td>
                              </tr>
                              <tr>
                                <th class="text-nowrap" scope="row"># of columns</th>
                                <td colspan="5">12</td>
                              </tr>
                            </tbody>
                          </table>
                          <h3>Rows & Columns</h3>
                          <p>
                              A l'interieur du container, la classe <code>.row</code> est utilisé comme un container pour les grid columns. Les Rows doivent toujours être placé dans un container (<code>.container</code> ou <code>.container-fluid</code>) pour s'assurer de l'espace entre les différent éléments de la page, en particulier avec le bord de la page.
                          </p>
                          <h3>Les spécificités de <code>.row</code></h3>
                          <img class="w-100" src="../assets/img/documentation/row&container.png" alt="row&contianer">
                          <p>
                              La ligne Bootstrap <code>.row</code> utilise des marges négatives (-15px) pour contrecarrer le padding (15px) du conteneur. Le résultat final est l’absence d’espacement visuel (marge ou remplissage) sur les côtés de la rangée à l’intérieur du conteneur. Il y a plusieurs raisons pour lesquelles l’approche de la « marge négative » est utilisée dans Bootstrap.

                              Tous les systèmes de grille ont un espacement ou des « gutter » autour des colonnes. Dans le cas de Bootstrap, le gutter est créée à l’aide d’un padding de 15px autour de chaque colonne. Le gutter effective affichée entre les colonnes voisines est de 30px. Les colonnes extérieures (la plus à gauche et la plus à droite) doivent avoir 1/2 du gutter (15px) à l’extérieur pour garder l’espacement cohérent.

                          </p>
                          <img class="w-100" src="../assets/img/documentation/container&row&column.png" alt="container&row&column">

                          <p>
                              Au lieu d’utiliser une classe spécifique comme "<code>.first</code>" ou "<code>.last</code>" sur ces colonnes de grille externe, Bootstrap utilise des marges négatives. Cela égalise les gutter des colonnes les plus à gauche et à droite avec le bord extérieur du conteneur <code>.row</code>.<br>

                              L’espace visuel entre chaque colonne (appelée gutter) est créé avec un padding (15px) à gauche et à droite de chaque colonne. En conséquence, le gutter effectif entre le contenu de chaque colonne est de 30px (15px à gauche + 15px à droite). Les premières colonnes (les plus à gauche) et les dernières colonnes (les plus à droite) s’alignent parfaitement sur le bord de la ligne grâce à cette margin négative discutée plus haut.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="row-titre">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#row-contenu" aria-expanded="false" aria-controls="row-contenu">
                          <h4>Row</h4>
                        </button>
                      </h2>
                      <div id="row-contenu" class="accordion-collapse collapse" aria-labelledby="row-titre" data-bs-parent="#grid-accordeon">
                        <div class="accordion-body">
                          <p>Il est possible de définir un nombre de colonne maximum par la ligne :</p>
                          <div class="row">
                            <div class="col-6 bg-dark" >
                                <code>
                                  &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"row row-cols-3"</span>><br>
                              &nbsp;&nbsp;      &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col"</span>>Column&lt;/<span class="balise">div</span>> <br>
                              &nbsp;&nbsp;      &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col"</span>>Column&lt;/<span class="balise">div</span>> <br>
                              &nbsp;&nbsp;      &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col"</span>>Column&lt;/<span class="balise">div</span>> <br>
                              &nbsp;&nbsp;      &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col"</span>>Column&lt;/<span class="balise">div</span>> <br>
                                    &lt;/<span class="balise">div</span>>
                                </code>
                            </div>
                            <div class="col-6 demo">
                              <div class="row row-cols-3">
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                              </div>
                            </div>
                          </div>
                          <p>On peut préciser le nombre maximum de colonne par ligne pour les différentes tailles d'écrans :</p>
                          <div class="row">
                            <div class="col-6 bg-dark" >
                                <code>
                                  &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"row row-cols-1 row-cols-sm-2 row-cols-md-4"</span>><br>
                              &nbsp;&nbsp;      &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col"</span>>Column&lt;/<span class="balise">div</span>> <br>
                              &nbsp;&nbsp;      &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col"</span>>Column&lt;/<span class="balise">div</span>> <br>
                              &nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col"</span>>Column&lt;/<span class="balise">div</span>> <br>
                              &nbsp;&nbsp;      &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col"</span>>Column&lt;/<span class="balise">div</span>> <br>
                                    &lt;/<span class="balise">div</span>>
                                </code>
                            </div>
                            <div class="col-6 demo">
                              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="column-titre">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#column-contenu" aria-expanded="false" aria-controls="column-contenu">
                          <h4>Columns</h4>
                        </button>
                      </h2>
                      <div id="column-contenu" class="accordion-collapse collapse" aria-labelledby="column-titre" data-bs-parent="#grid-accordeon">
                        <div class="accordion-body">
                          <p>Il est possible de laiser des colonnes vide et décaller des colonnes en utilisant <code>offset</code> : </p>
                          <div class="row">
                            <div class="col-6 bg-dark">
                              <code>
                                &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"row"</span>><br>
                              &nbsp;&nbsp;    &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col-4"</span>>Column&lt;/<span class="balise">div</span>> <br>
                              &nbsp;&nbsp;    &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col-4 offset-4"</span>>Column&lt;/<span class="balise">div</span>> <br>
                                &lt;/<span class="balise">div</span>><br>
                                &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"row"</span>><br>
                              &nbsp;&nbsp;    &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col-sm-6 col-md-5 col-lg-6"</span>>Column&lt;/<span class="balise">div</span>> <br>
                              &nbsp;&nbsp;    &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0"</span>>Column&lt;/<span class="balise">div</span>> <br>
                                &lt;/<span class="balise">div</span>>
                              </code>
                            </div>
                            <div class="col-6 demo">
                              <div class="row">
                                <div class="col-4">Column</div>
                                <div class="col-4 offset-4">Column</div>
                              </div>
                              <div class="row">
                                <div class="col-sm-6 col-md-5 col-lg-6">Column</div>
                                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">Column</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>


          </article>
          <article class="tab-pane fade" id="border" role="tabpanel" aria-labelledby="border-tab">
                  <h3>  border</h3>
                  <div class="row">
                      <div class="col-6 exemple">
                          <button>border</button>
                          <button>border-bottom</button>
                          <button>border border-start-0</button>
                          <button>border border-danger</button>
                          <button>border border-5</button>
                      </div>
                      <div class="col-6">
                          <div class="demo">
                            <div class="border">Contenu</div>
                          </div>
                      </div>
                  </div>
                  <p>
                      La propriété CSS <code>border</code> permet de définir les propriétés liées à la bordure.
                  </p>
                  <h4>Notation</h4>

                  <h4>Additivité</h4>
                  <ul>
                      <li><code>border-top</code></li>
                      <li><code>border-end</code></li>
                      <li><code>border-bottom</code></li>
                      <li><code>border-start</code></li>
                  </ul>
                  <p>
                      La propriété <code>border</code> doit être écrite avant de donner des propriétés supplémentaires.
                  </p>
                  <h4>Soustractivité</h4>
                  <ul>
                      <li><code>border-top-0</code></li>
                      <li><code>border-end-0</code></li>
                      <li><code>border-bottom-0</code></li>
                      <li><code>border-start-0</code></li>
                      <li><code>border-0</code> - "efface" les bordures</li>
                  </ul>
                  <h4>Border Color</h4>
                  <p>
                      Les bordures peuvent être customisées à l'aide du code couleur Bootstrap.
                  </p>
                  <ul>
                      <li><code>border border-primary</code></li>
                      <li><code>border border-secondary</code></li>
                      <li><code>border border-success</code></li>
                      <li><code>border border-danger</code></li>
                      <li><code>border border-warning</code></li>
                      <li>etc...</li>
                  </ul>
                  <h4>Border width</h4>
                  <ul>
                      <li><code>border border-1</code></li>
                      <li><code>border border-2</code></li>
                      <li><code>border border-3</code></li>
                      <li><code>border border-4</code></li>
                      <li><code>border border-5</code></li>
                  </ul>
          </article>
          <article class="tab-pane fade" id="color" role="tabpanel" aria-labelledby="color-tab">
              <div class="section-exemple">
                  <h3>  color & background-color</h3>
                  <div class="row">
                      <div class="col-6 exemple">
                          <button>text-primary</button>
                          <button>text-danger</button>
                          <button>bg-success</button>
                          <button>bg-warning</button>
                          <button>bg-info</button>
                      </div>
                      <div class="col-6">
                          <div class="demo">
                            <div class="">Text text text text</div>
                          </div>
                      </div>
                  </div>
              </div>
              <p>
                  Bootstrap propose une palette de couleurs intégrées. Ce code couleur permet de donner une cohérence au design général de la page. Par exemple, un message d'erreur avec la classe <code>.danger</code> sera rouge.
              </p>
              <h4>Les différentes couleurs disponibles</h4>
              <ul>
                  <li><code>primary</code><div class="box bg-primary border"></div></li>
                  <li><code>secondary</code><div class="box bg-secondary border"></div></li>
                  <li><code>success</code><div class="box bg-success border"></div></li>
                  <li><code>danger</code> <div class="box bg-danger border"></div></li>
                  <li><code>warning</code> <div class="box bg-warning border"></div></li>
                  <li><code>info</code> <div class="box bg-info border"></div></li>
                  <li><code>light</code> <div class="box bg-light border"></div></li>
                  <li><code>dark</code> <div class="box bg-dark border p-0"></div></li>
                  <li><code>muted</code> <div class="box bg-muted border"></div></li>
                  <li><code>white</code> <div class="box bg-white border"></div></li>
              </ul>
              <h4>Notation</h4>
              <p>Pour changer la couleur d'un texte on utilisera les classes suivant la notation : <code>text-{color}</code>.</p>
              <ul>
                  <li><code>text-primary</code></li>
                  <li><code>text-secondary</code></li>

                  <li>etc...</li>
              </ul>
              <p>Pour changer la propriété background-color on utilisera les classes suivant la notation : <code>bg-{color}</code>.</p>
              <ul>
                  <li><code>bg-primary</code></li>
                  <li><code>bg-secondary</code></li>
                  <li>etc...</li>
              </ul>
          </article>
          <article class="tab-pane fade" id="container" role="tabpanel" aria-labelledby="container-tab">
            <h3>Container</h3>
            <p>
                Les container sont les éléments de mise en page le plus basique dans Bootstrap et sont nécessaires lors de l’utilisation de Grid par défaut. Les containers peuvent être utilisé pour centrer des éléments. Bien que les conteneurs puissent être imbriqués, c'est à éviter sous peine de devoir compenser les marges par defaults des containers.
            </p>

            <p>
                Les containers permettent très rapidement et facilement de donner un aspect responsive à une page. En effet, les containers ont un max-width par défaut.<br>
                Par exemple : <code>.container-md</code>, prend 100% de l'espace disponible, pour des écrans plus petits que le breakpoint (ici md : 768px) puis le container pour des écrans plus grands est capés à 720px.
            </p>

            <table class="table text-left">
              <thead>
                <tr>
                  <th></th>
                  <th>
                    Extra small<br>
                    <span class="font-weight-normal">&lt;576px</span>
                  </th>
                  <th>
                    Small<br>
                    <span class="font-weight-normal">≥576px</span>
                  </th>
                  <th>
                    Medium<br>
                    <span class="font-weight-normal">≥768px</span>
                  </th>
                  <th>
                    Large<br>
                    <span class="font-weight-normal">≥992px</span>
                  </th>
                  <th>
                    Extra large<br>
                    <span class="font-weight-normal">≥1200px</span>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><code>.container</code></td>
                  <td class="text-muted">100%</td>
                  <td>540px</td>
                  <td>720px</td>
                  <td>960px</td>
                  <td>1140px</td>
                </tr>
                <tr>
                  <td><code>.container-sm</code></td>
                  <td class="text-muted">100%</td>
                  <td>540px</td>
                  <td>720px</td>
                  <td>960px</td>
                  <td>1140px</td>
                </tr>
                <tr>
                  <td><code>.container-md</code></td>
                  <td class="text-muted">100%</td>
                  <td class="text-muted">100%</td>
                  <td>720px</td>
                  <td>960px</td>
                  <td>1140px</td>
                </tr>
                <tr>
                  <td><code>.container-lg</code></td>
                  <td class="text-muted">100%</td>
                  <td class="text-muted">100%</td>
                  <td class="text-muted">100%</td>
                  <td>960px</td>
                  <td>1140px</td>
                </tr>
                <tr>
                  <td><code>.container-xl</code></td>
                  <td class="text-muted">100%</td>
                  <td class="text-muted">100%</td>
                  <td class="text-muted">100%</td>
                  <td class="text-muted">100%</td>
                  <td>1140px</td>
                </tr>
                <tr>
                  <td><code>.container-fluid</code></td>
                  <td class="text-muted">100%</td>
                  <td class="text-muted">100%</td>
                  <td class="text-muted">100%</td>
                  <td class="text-muted">100%</td>
                  <td class="text-muted">100%</td>
                </tr>
              </tbody>
            </table>
          </article>
          <article class="tab-pane fade" id="flexbox" role="tabpanel" aria-labelledby="flexbox-tab">
                <h3>  Flexbox</h3>
                <div class="accordion accordion-flush" id="flexbox-accordeon">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="direction-titre">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#direction-contenu" aria-expanded="false" aria-controls="direction-contenu">
                          <h4>flex-direction</h4>
                        </button>
                      </h2>
                      <div id="direction-contenu" class="accordion-collapse collapse" aria-labelledby="direction-titre" data-bs-parent="#flexbox-accordeon">
                        <div class="accordion-body">
                          <div class="row">
                              <div class="col-6 exemple">
                                  <button>flex-column</button>
                                  <button>flex-column-reverse</button>
                                  <button>flex-row</button>
                                  <button>flex-row-reverse</button>
                              </div>
                              <div class="col-6">
                                  <div class="demo">
                                    <div>
                                      <div class="w-100">1</div>
                                      <div class="w-100">2</div>
                                      <div class="w-100">3</div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <p>
                              La classe <code>d-flex</code> transforme un élément en Flexbox.<br>
                              La propriété <code>flex-direction</code> définit la façon dont les éléments flexibles sont placés dans un conteneur flexible : elle définit l'axe principal et la direction des éléments (normale ou inversée).
                          </p>
                          <h4>Notation</h4>
                          <p>
                              <ul>
                                  <li><code>flex-column</code></li>
                                  <li><code>flex-column-reverse</code></li>
                                  <li><code>flex-row</code></li>
                                  <li><code>flex-row-reverse</code></li>
                              </ul>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="justify-titre">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#justify-contenu" aria-expanded="false" aria-controls="justify-contenu">
                          <h4>justify-content</h4>
                        </button>
                      </h2>
                      <div id="justify-contenu" class="accordion-collapse collapse" aria-labelledby="justify-titre" data-bs-parent="#flexbox-accordeon">
                        <div class="accordion-body">
                          <div class="row">
                              <div class="col-6 exemple">
                                  <button>justify-content-start</button>
                                  <button>justify-content-end</button>
                                  <button>justify-content-center</button>
                                  <button>justify-content-between</button>
                                  <button>justify-content-around</button>
                              </div>
                              <div class="col-6">
                                  <div class="demo">
                                    <div>
                                      <div class="w-25">1</div>
                                      <div class="w-25">2</div>
                                      <div class="w-25">3</div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <p>
                              La propriété CSS justify-content indique la façon dont l'espace doit être réparti entre et autour des éléments selon l'axe principal d'une Flexbox.<br>
                              La classe <code>.justify-content</code> change l'alignement des items sur l'axe principal de la Flexbox (par défaut sur l'axe horizontal, l'axe vertical si <code>flex-direction : column</code>).
                          </p>
                          <h4>Notation</h4>
                          <p>
                              <ul>
                                  <li><code>justify-content-start</code></li>
                                  <li><code>justify-content-end</code></li>
                                  <li><code>justify-content-center</code></li>
                                  <li><code>justify-content-between</code></li>
                                  <li><code>justify-content-around</code></li>
                              </ul>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="align-titre">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#align-contenu" aria-expanded="false" aria-controls="align-contenu">
                          <h4>align-items</h4>
                        </button>
                      </h2>
                      <div id="align-contenu" class="accordion-collapse collapse" aria-labelledby="align-titre" data-bs-parent="#flexbox-accordeon">
                        <div class="accordion-body">
                          <div class="row">
                              <div class="col-6 exemple">
                                  <button>align-items-start</button>
                                  <button>align-items-end</button>
                                  <button>align-items-center</button>
                                  <button>align-items-stretch</button>
                              </div>
                              <div class="col-6">
                                  <div class="demo">
                                    <div>
                                      <div class="w-25">1</div>
                                      <div class="w-25">2</div>
                                      <div class="w-25">3</div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <p>
                              La propriété <code>align-self</code> définit elle l'alignement d'un objet au sein de son conteneur. Cette propriété contrôle l'alignement par rapport à l'axe secondaire (par défaut sur l'axe vertical, l'axe horizontal si flex-direction : column).
                          </p>
                          <h4>Notation</h4>
                          <p>
                              <ul>
                                  <li><code>align-items-start</code></li>
                                  <li><code>align-items-end</code></li>
                                  <li><code>align-items-center</code></li>
                                  <li><code>align-items-stretch</code></li>
                              </ul>
                          </p>
                        </div>
                      </div>
                    </div>
                </div>

          </article>
          <article class="tab-pane fade" id="margin-padding" role="tabpanel" aria-labelledby="margin-padding-tab">
            <h3>  Margin & Padding</h3>
            <div class="row">
                <div class="col-6 exemple">
                    <button>p-4</button>
                    <button>py-5</button>
                    <button>mx-5</button>
                    <button>m-0</button>
                </div>
                <div class="col-6">
                    <div class="demo">
                      <div id="demo-mp"><div>Text</div></div>
                    </div>
                </div>
            </div>
            <p>
                Les attributs de Margin et Padding permettent de gérer les espaces entre différents éléments html.<br>
                La propriété padding permet de définir les différents écarts de remplissage sur les quatre côtés d'un élément.<br>
                La propriété margin définit la taille des marges sur les quatre côtés de l'élément.<br>
            </p>
            <h4>Notation</h4>
            <p>
                Les classes <code>.margin</code> et <code>.padding</code> suivent le format suivant : <code>{property}{sides}-{size}</code>.
            </p>
            <p>
                Où <code>property</code> correspond à :</p>
                <ul>
                    <li><code>m</code> - pour la classe qui definit <code>margin</code></li>
                    <li><code>p</code> - pour la classe qui definit <code>padding</code></li>
                </ul>
              <p>  Où <code>sides</code> correspond à :</p>
                <ul>
                    <li><code>t</code> - pour la classe qui definit <code>margin-top</code> ou <code>padding-top</code></li>
                    <li><code>b</code> - pour la classe qui definit <code>margin-bottom</code> ou <code>padding-bottom</code></li>
                    <li><code>s</code> - pour la classe qui definit <code>margin-left</code> ou <code>padding-left</code></li>
                    <li><code>e</code> - pour la classe qui definit <code>margin-right</code> ou <code>padding-right</code></li>
                    <li><code>x</code> - pour la classe qui definit <code>*-right</code> ou <code>*-left</code> (où * correspond à <code>property</code>)</li>
                    <li><code>y</code> - pour la classe qui definit <code>*-top</code> ou <code>*-bottom</code> (où * correspond à <code>property</code>)</li>
                    <li>blank - pour la classe qui definit <code>padding</code> ou <code>margin</code> sur les 4 côtés</li>
                </ul>
              <p>  Où <code>size</code> correspond à :</p>
                <ul>
                    <li><code>0</code> - pour la classe qui definit <code>margin</code> or <code>padding</code> à 0</li>
                    <li><code>1</code> - pour la classe qui definit <code>margin</code> or <code>padding</code> à 0.25rem</li>
                    <li><code>2</code> - pour la classe qui definit <code>margin</code> or <code>padding</code> à 0.5rem</li>
                    <li><code>3</code> - pour la classe qui definit <code>margin</code> or <code>padding</code> à 1rem</li>
                    <li><code>4</code> - pour la classe qui definit <code>margin</code> or <code>padding</code> à 1.5rem</li>
                    <li><code>5</code> - pour la classe qui definit <code>margin</code> or <code>padding</code> à 3rem</li>
                    <li><code>auto</code> - pour la classe qui definit <code>margin</code> or <code>padding</code> à auto</li>
                </ul>
            <p>
                Il est également possible d'appliquer des breakpoints aux classes <code>margin</code> et <code>padding</code> (les mêmes que pour les grid). Les breakpoints utilisés conjointement avec les classes <code>margin</code> et <code>padding</code> sont des outils très puissants pour donner un aspect responsive à une page.<br>
                On a alors la notation suivantes : <code>{{property}{sides}-{breakpoint}-{size}</code>, avec <code>breakpoint</code> prenant les valeurs
                <code data-toggle="tooltip" data-placement="top" title="≥576px"><u>sm</u></code>,
                <code data-toggle="tooltip" data-placement="top" title="≥768px"><u>md</u></code>,
                <code data-toggle="tooltip" data-placement="top" title="≥992px"><u>lg</u></code> et
                <code data-toggle="tooltip" data-placement="top" title="≥1200px"><u>xl</u></code>.
            </p>
          </article>
          <article class="tab-pane fade" id="position" role="tabpanel" aria-labelledby="position-tab">
            <h3>Position</h3>
            <p>
                Des classes de positionnement Boostrap sont disponibles.
            </p>
            <ul>
                <li><code>.position-static</code> - comportement par défaut</li>
                <li><code>.position-relative</code></li>
                <li><code>.position-absolute</code></li>
                <li><code>.position-fixed</code></li>
                <li><code>.fixed-top</code> - positionnement en haut de la fenêtre</li>
                <li><code>.fixed-bottom</code> - positionnement en bas de la fenêtre</li>
            </ul>
          </article>
          <article class="tab-pane fade" id="shadow" role="tabpanel" aria-labelledby="shadow-tab">
            <h3>  Shadow</h3>
            <div class="row">
                <div class="col-6 exemple">
                    <button>shadow-none</button>
                    <button>shadow-sm</button>
                    <button>shadow</button>
                    <button>shadow-lg</button>
                </div>
                <div class="col-6">
                    <div class="demo">
                      <div>Text</div>
                    </div>
                </div>
            </div>
            <p>La classe CSS <code>.shadow</code> permet de définir la propriétés <code>box-shadow</code> d'un élément.</p>
            <h4>Notation</h4>
            <ul>
                <li><code>shadow-sm</code> - small shadow</li>
                <li><code>shadow</code> - regular shadow</li>
                <li><code>shadow-lg</code> - large shadow</li>
                <li><code>shadow-none</code> pour enlever l'ombre d'un élément</li>
            </ul>
          </article>
          <article class="tab-pane fade" id="sizing" role="tabpanel" aria-labelledby="sizing-tab">
            <h3>  Sizing</h3>
            <div class="row">
                <div class="col-6 exemple">
                  <button>h-100</button>
                  <button>w-100</button>
                  <button>w-25</button>
                  <button>h-75</button>
                  <button>w-75 h-25</button>
                </div>
                <div class="col-6">
                    <div class="demo">
                      <div id="size">Text</div>
                    </div>
                </div>
            </div>
            <h4>Notation</h4>
            <p>Les classes de <code>.width</code> et de <code>.height</code> suivent le format suivant : <code>{property}-{size}</code>.</p>
            <p>Où <code>property</code> correspond à :</p>
                <ul>
                    <li><code>w</code> - pour la classe qui definit <code>width</code></li>
                    <li><code>h</code> - pour la classe qui definit <code>height</code></li>
                </ul>
            <p>Où <code>size</code> peut prendre les valeurs 0, 25, 50, 75, 100.  </p>
          </article>
          <article class="tab-pane fade" id="text" role="tabpanel" aria-labelledby="text-tab">
            <h3>Text</h3>
            <div class="row">
                <div class="col-6 exemple">
                    <button>fw-bold</button>
                    <button>fs-3</button>
                    <button>text-uppercase</button>
                    <button>text-center</button>
                </div>
                <div class="col-6">
                    <div class="demo">
                      <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                </div>
            </div>
            <p>Les différentes classes disponible dans Bootstrap sur le Text :</p>
            <h4>Font size</h4>
            <ul>
                <li><code>fs-1</code></li>
                <li><code>fs-2</code></li>
                <li><code>fs-3</code></li>
                <li><code>fs-4</code></li>
                <li><code>fs-5</code></li>
                <li><code>fs-6</code></li>
            </ul>
            <h4>Text alignment</h4>
            <ul>
                <li><code>text-center</code></li>
                <li><code>text-end</code></li>
                <li><code>text-justify</code></li>
            </ul>
            <h4>Font weight</h4>
            <ul>
                <li><code>fw-bold</code></li>
                <li><code>fw-normal</code></li>
                <li><code>fw-light</code></li>
            </ul>
            <h4>Text transform</h4>
            <ul>
                <li><code>text-lowercase</code></li>
                <li><code>text-uppercase</code></li>
                <li><code>text-capitalize</code></li>
            </ul>
            <h4>Text wrapping</h4>
            <ul>
                <li><code>text-nowrap</code></li>
                <li><code>text-truncate</code></li>
            </ul>
          </article>
          <article class="tab-pane fade" id="visible" role="tabpanel" aria-labelledby="visible-tab">
            <h3>Visbilité</h3>
            <div class="row">
                <div class="col-6 exemple">
                    <button>opacity-50</button>
                    <button>overflow-hidden</button>
                    <button>overflow-auto</button>
                    <button>invisible</button>
                </div>
                <div class="col-6">
                    <div class="demo">
                      <div id="wh50">
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                      </div>
                    </div>
                </div>
            </div>
            <h4>Opacity</h4>
            <ul>
                <li><code>opacity-25</code></li>
                <li><code>opacity-50</code></li>
                <li><code>opacity-75</code></li>
                <li><code>opacity-100</code></li>
            </ul>
            <h4>Overflow</h4>
            <ul>
                <li><code>overflow-hidden</code></li>
                <li><code>overflow-scroll</code></li>
                <li><code>overflow-auto</code></li>
                <li><code>overflow-visible</code></li>
            </ul>
            <h4>Visibility</h4>
            <ul>
                <li><code>invisible</code></li>
                <li><code>visible</code></li>
            </ul>
          </article>
          <article class="tab-pane fade" id="accordeon" role="tabpanel" aria-labelledby="accordeon-tab">
            <h3>Accordion</h3>
            <div class="accordion accordion-flush" id="collapse-accordeon">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="accordeon-titre">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordeon-contenu" aria-expanded="false" aria-controls="accordeon-contenu">
                      <h4>Accordion</h4>
                    </button>
                  </h2>
                  <div id="accordeon-contenu" class="accordion-collapse collapse" aria-labelledby="accordeon-titre" data-bs-parent="#collapse-accordeon">
                    <div class="accordion-body">
                      <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong>
                          </div>
                        </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                              </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="bg-dark">
                        <code>
                         &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"accordion"</span> <span class="function">id</span>=<span class="valeur">"accordionExample"</span></span>><br>
                        &nbsp;&nbsp;     &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"accordion-item"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">h2</span> <span class="attribut">class</span>=<span class="valeur">"accordion-header"</span> <span class="function">id</span>=<span class="valeur">"headingOne"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &lt;<span class="balise">button</span> <span class="attribut">class</span>=<span class="valeur">"accordion-button"</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">data-bs-toggle</span>=<span class="valeur">"collapse"</span>
                                  <span class="attribut">data-bs-target</span>=<span class="valeur">"#collapseOne"</span> <span class="attribut">aria-expanded</span>=<span class="valeur">"true"</span> <span class="attribut">aria-controls</span>=<span class="valeur">"collapseOne"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          Accordion Item #1<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;/<span class="balise">button</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;      &lt;/<span class="balise">h2</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;       &lt;<span class="balise">div</span> <span class="function">id</span>=<span class="valeur">"collapseOne"</span> <span class="attribut">class</span>=<span class="valeur">"accordion-collapse collapse show"</span> <span class="attribut">aria-labelledby</span>=<span class="valeur">"headingOne"</span>
                               <span class="attribut">data-bs-parent</span>=<span class="valeur">"#accordionExample"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"accordion-body"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &lt;<span class="balise">strong</span>>This is the first item's accordion body.&lt;/<span class="balise">strong</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;/<span class="balise">div</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;      &lt;/<span class="balise">div</span>><br>
                        &nbsp;&nbsp;    &lt;/<span class="balise">div</span>><br>
                        &nbsp;&nbsp;     &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"accordion-item"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">h2</span> <span class="attribut">class</span>=<span class="valeur">"accordion-header"</span> <span class="function">id</span>=<span class="valeur">"headingTwo"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &lt;<span class="balise">button</span> <span class="attribut">class</span>=<span class="valeur">"accordion-button collapsed"</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">data-bs-toggle</span>=<span class="valeur">"collapse"</span>
                                  <span class="attribut">data-bs-target</span>=<span class="valeur">"#collapseTwo"</span> <span class="attribut">aria-expanded</span>=<span class="valeur">"false"</span> <span class="attribut">aria-controls</span>=<span class="valeur">"collapseTwo"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          Accordion Item #2<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;/<span class="balise">button</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;      &lt;/<span class="balise">h2</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;       &lt;<span class="balise">div</span> <span class="function">id</span>=<span class="valeur">"collapseTwo"</span> <span class="attribut">class</span>=<span class="valeur">"accordion-collapse collapse"</span> <span class="attribut">aria-labelledby</span>=<span class="valeur">"headingTwo"</span>
                               <span class="attribut">data-bs-parent</span>=<span class="valeur">"#accordionExample"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"accordion-body"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &lt;<span class="balise">strong</span>>This is the second item's accordion body.&lt;/<span class="balise">strong</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;/<span class="balise">div</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;      &lt;/<span class="balise">div</span>><br>
                        &nbsp;&nbsp;    &lt;/<span class="balise">div</span>><br>
                        &nbsp;&nbsp;     &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"accordion-item"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">h2</span> <span class="attribut">class</span>=<span class="valeur">"accordion-header"</span> <span class="function">id</span>=<span class="valeur">"headingThree"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &lt;<span class="balise">button</span> <span class="attribut">class</span>=<span class="valeur">"accordion-button collapsed"</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">data-bs-toggle</span>=<span class="valeur">"collapse"</span>
                                  <span class="attribut">data-bs-target</span>=<span class="valeur">"#collapseThree"</span> <span class="attribut">aria-expanded</span>=<span class="valeur">"false"</span> <span class="attribut">aria-controls</span>=<span class="valeur">"collapseThree"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          Accordion Item #3<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;/<span class="balise">button</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;      &lt;/<span class="balise">h2</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;       &lt;<span class="balise">div</span> <span class="function">id</span>=<span class="valeur">"collapseThree"</span> <span class="attribut">class</span>=<span class="valeur">"accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"accordion-body"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &lt;<span class="balise">strong</span>>This is the third item's accordion body.&lt;/<span class="balise">strong</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;/<span class="balise">div</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;      &lt;/<span class="balise">div</span>><br>
                        &nbsp;&nbsp;    &lt;/<span class="balise">div</span>><br>
                          &lt;/<span class="balise">div</span>>
                        </code>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="collapse-titre">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-contenu" aria-expanded="false" aria-controls="collapse-contenu">
                      <h4>Collapse</h4>
                    </button>
                  </h2>
                  <div id="collapse-contenu" class="accordion-collapse collapse" aria-labelledby="collapse-titre" data-bs-parent="#collapse-accordeon">
                    <div class="accordion-body">
                      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                         Button demo
                       </button>
                      <div class="collapse" id="collapseExample">
                       <div class="card card-body">
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                       </div>
                      </div>
                      <div class="bg-dark">
                        <code>
                            &lt;<span class="balise">button</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-primary"</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">data-bs-toggle</span>=<span class="valeur">"collapse"</span>
                            <span class="attribut">data-bs-target</span>=<span class="valeur">"#collapseExample"</span> <span class="attribut">aria-expanded</span>=<span class="valeur">"false"</span> <span class="attribut">aria-controls</span>=<span class="valeur">"collapseExample"</span>><br>
                          &nbsp;&nbsp;   Button demo<br>
                           &lt;/<span class="balise">button</span>><br>
                           &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"collapse"</span> <span class="function">id</span>=<span class="valeur">"collapseExample"</span>><br>
                        &nbsp;&nbsp;    &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"card card-body"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                        &nbsp;&nbsp;   &lt;/<span class="balise">div</span>><br>
                          &lt;/<span class="balise">div</span>>
                        </code>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="ccm-titre">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ccm-contenu" aria-expanded="false" aria-controls="ccm-contenu">
                      <h4>Comment ça marche ?</h4>
                    </button>
                  </h2>
                  <div id="ccm-contenu" class="accordion-collapse collapse" aria-labelledby="ccm-titre" data-bs-parent="#collapse-accordeon">
                    <div class="accordion-body">
                      <ul>
                          <li>Un bouton. On lui donnera les propriétés suivantes : </li>
                          <ul class="pl-4">
                              <li><code>data-toggle="collapse"</code> pour donner le comportement au bouton.</li>
                              <li><code>data-target="#cardHidden"</code> et <code>aria-controls="cardHidden"</code> pour lier le bouton à la card "caché". Ici <code>data-target</code> et  <code>aria-controls</code> correspond à l'ID du container de la <code>card-body</code></li>
                          </ul>
                      </ul>
                      <ul>
                          <li>Un container (celui dans lequel on va placer la <code>card-body</code>) avec les propriétés suivantes :</li>
                          <ul class="pl-4">
                              <li><code>class="collapse"</code> pour donner le comportement à la card-body.</li>
                              <li><code>id="cardHidden"</code></li>
                          </ul>
                          <ul class="pl-5">
                              <li>Un div avec la classe <code>card-body</code>. Il s'agit du contenue de la card.</li>
                          </ul>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
          </article>
          <article class="tab-pane fade" id="badge" role="tabpanel" aria-labelledby="badge-tab">
            <h3>Les badges</h3>
            <p>                Les Badges permettent de mettre en avant une information.</p>
            <h5>Example heading <span class="badge bg-secondary">New</span></h5>
            <h5>Example heading <span class="badge bg-danger">Danger</span></h5>
            <div class="bg-dark"><code>
              &lt;<span class="balise">h5</span>>Example heading   &lt;<span class="balise">span</span> <span class="attribut">class</span>=<span class="valeur">"badge bg-secondary"</span>>New&lt;/<span class="balise">span</span>>&lt;/<span class="balise">h5</span>><br>
              &lt;<span class="balise">h5</span>>Example heading   &lt;<span class="balise">span</span> <span class="attribut">class</span>=<span class="valeur">"badge bg-danger"</span>>Danger&lt;/<span class="balise">span</span>>&lt;/<span class="balise">h5</span>>
            </code></div>
            <button type="button" class="btn btn-primary position-relative">
              Profile
              <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                <span class="visually-hidden">New alerts</span>
              </span>
              </button>
              <div class="bg-dark"><code>
                  &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-primary position-relative"</span>><br>
                &nbsp;&nbsp;  Profile<br>
                &nbsp;&nbsp;    &lt;<span class="balise">span</span> <span class="attribut">class</span>=<span class="valeur">"position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle"</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">span</span> <span class="attribut">class</span>=<span class="valeur">"visually-hidden"</span>>New alerts&lt;/<span class="balise">span</span>><br>
                &nbsp;&nbsp;  &lt;/<span class="balise">span</span>><br>
                &lt;/<span class="balise">button</span>>
              </code></div>
              <button type="button" class="btn btn-primary position-relative">
              Inbox
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                99+
                <span class="visually-hidden">unread messages</span>
              </span>
            </button>
            <div class="bg-dark"><code>
                &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-primary position-relative"</span>><br>
            &nbsp;&nbsp;  Inbox<br>
            &nbsp;&nbsp;    &lt;<span class="balise">span</span> <span class="attribut">class</span>=<span class="valeur">"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"</span>><br>
            &nbsp;&nbsp;&nbsp;&nbsp;    99+<br>
            &nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">span</span> <span class="attribut">class</span>=<span class="valeur">"visually-hidden"</span>>unread messages&lt;/<span class="balise">span</span>><br>
            &nbsp;&nbsp;  &lt;/<span class="balise">span</span>><br>
              &lt;/<span class="balise">button</span>>
            </code></div>
          </article>
          <article class="tab-pane fade" id="button" role="tabpanel" aria-labelledby="button-tab">
            <h3>  Button</h3>
                <button type="button" href="#" class="btn btn-primary">Primary</button>
                <button type="button" href="#" class="btn btn-secondary">Secondary</button>
                <button type="button" href="#" class="btn btn-success">Success</button>
                <button type="button" href="#" class="btn btn-danger">Danger</button>
                <button type="button" href="#" class="btn btn-warning">Warning</button>
                <button type="button" href="#" class="btn btn-info">Info</button>
                <button type="button" href="#" class="btn btn-light">Light</button>
                <button type="button" href="#" class="btn btn-dark">Dark</button>
                <button type="button" href="#" class="btn btn-link">Link</button>
                <div class="bg-dark"><code>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-primary"</span>>Primary&lt;/<span class="balise">button</span>><br>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-secondary"</span>>Secondary&lt;/<span class="balise">button</span>><br>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-success"</span>>Success&lt;/<span class="balise">button</span>><br>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-danger"</span>>Danger&lt;/<span class="balise">button</span>><br>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-warning"</span>>Warning&lt;/<span class="balise">button</span>><br>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-info"</span>>Info&lt;/<span class="balise">button</span>><br>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-light"</span>>Light&lt;/<span class="balise">button</span>><br>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-dark"</span>>Dark&lt;/<span class="balise">button</span>><br>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-link"</span>>Link&lt;/<span class="balise">button</span>><br>
                </code></div>
            <h3>Buttons</h3>
            <p>
                La classe <code>.btn</code> est à utiliser avec les balises <code>&lt;button&gt;</code> et <code>&lt;a&gt;</code> (lorsque l'on utilise la balise <code>&lt;a&gt;</code>, il faut préciser <code>role="button"</code>).<br>
                Avant d'assigner une couleur au bouton (ou une autre propriété) il faut donner la classe <code>btn</code>.<br>
                Pour ajouter un lien à un boutton, il suffit d'ajouter un <code>href="chemin_lien"</code>.
            </p>
            <h3>Button-outline</h3>
                <button type="button" class="btn btn-outline-primary">Primary</button>
                <button type="button" class="btn btn-outline-secondary">Secondary</button>
                <button type="button" class="btn btn-outline-success">Success</button>
                <button type="button" class="btn btn-outline-danger">Danger</button>
                <button type="button" class="btn btn-outline-warning">Warning</button>
                <button type="button" class="btn btn-outline-info">Info</button>
                <button type="button" class="btn btn-outline-light">Light</button>
                <button type="button" class="btn btn-outline-dark">Dark</button>
                <div class="bg-dark"><code>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-outline-primary"</span>>Primary&lt;/<span class="balise">button</span>><br>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-outline-secondary"</span>>Secondary&lt;/<span class="balise">button</span>><br>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-outline-success"</span>>Success&lt;/<span class="balise">button</span>><br>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-outline-danger"</span>>Danger&lt;/<span class="balise">button</span>><br>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-outline-warning"</span>>Warning&lt;/<span class="balise">button</span>><br>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-outline-info"</span>>Info&lt;/<span class="balise">button</span>><br>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-outline-light"</span>>Light&lt;/<span class="balise">button</span>><br>
                    &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-outline-dark"</span>>Dark&lt;/<span class="balise">button</span>><br>
                </code></div>
            <h3>Désactivé</h3>
            <button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>
            <button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
            <div class="bg-dark"><code>
                &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-lg btn-primary"</span> disabled>Primary button&lt;/<span class="balise">button</span>><br>
                &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-secondary btn-lg"</span> disabled>Button&lt;/<span class="balise">button</span>><br>
            </code></div>
          </article>
          <article class="tab-pane fade" id="card" role="tabpanel" aria-labelledby="card-tab">
            <h3>  Card</h3>
            <div class="card w-50">
              <img src="../assets/img/computer.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="bg-dark"><code>
               &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"card w-50"</span>><br>
              &nbsp;&nbsp;    &lt;<span class="balise">img</span> <span class="attribut">src</span>=<span class="valeur">"..."</span> <span class="attribut">class</span>=<span class="valeur">"card-img-top"</span> <span class="attribut">alt</span>=<span class="valeur">"..."</span>><br>
              &nbsp;&nbsp;   &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"card-body"</span>><br>
              &nbsp;&nbsp;&nbsp;&nbsp;    &lt;<span class="balise">h5</span> <span class="attribut">class</span>=<span class="valeur">"card-title"</span>>Card title&lt;/<span class="balise">h5</span>><br>
              &nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">p</span> <span class="attribut">class</span>=<span class="valeur">"card-text"</span>>Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/<span class="balise">p</span>><br>
              &nbsp;&nbsp;&nbsp;&nbsp;    &lt;<span class="balise">a</span> <span class="attribut">href</span>=<span class="valeur">"#"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-primary"</span>>Go somewhere&lt;/<span class="balise">a</span>><br>
              &nbsp;&nbsp;  &lt;/<span class="balise">div</span>><br>
              &lt;/<span class="balise">div</span>>
            </code></div>
          </article>
          <article class="tab-pane fade" id="caroussel" role="tabpanel" aria-labelledby="caroussel-tab">
            <h3>  Carousel</h3>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="w-100 bg-primary demoSlide">SLIDE 1</div>
                </div>
                <div class="carousel-item">
                  <div class="w-100 bg-primary opacity-25 demoSlide">SLIDE 2</div>
                </div>
                <div class="carousel-item">
                  <div class="w-100 bg-primary opacity-50 demoSlide">SLIDE 3</div>
                </div>
              </div>
            </div>
            <div class="bg-dark"><code>
               &lt;<span class="balise">div</span> <span class="function">id</span>=<span class="valeur">"carouselExampleSlidesOnly"</span> <span class="attribut">class</span>=<span class="valeur">"carousel slide"</span> <span class="attribut">data-bs-ride</span>=<span class="valeur">"carousel"</span>><br>
               &nbsp;&nbsp; &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"carousel-inner"</span>><br>
              &nbsp;&nbsp;&nbsp;&nbsp;   &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"carousel-item active"</span>><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">img</span> <span class="attribut">src</span>=<span class="valeur">"..."</span> <span class="attribut">class</span>=<span class="valeur">"d-block w-100"</span> <span class="attribut">alt</span>=<span class="valeur">"..."</span>><br>
              &nbsp;&nbsp;&nbsp;&nbsp;  &lt;/<span class="balise">div</span>><br>
              &nbsp;&nbsp;&nbsp;&nbsp;   &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"carousel-item"</span>><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">img</span> <span class="attribut">src</span>=<span class="valeur">"..."</span> <span class="attribut">class</span>=<span class="valeur">"d-block w-100"</span> <span class="attribut">alt</span>=<span class="valeur">"..."</span>><br>
              &nbsp;&nbsp;&nbsp;&nbsp;  &lt;/<span class="balise">div</span>><br>
              &nbsp;&nbsp;&nbsp;&nbsp;   &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"carousel-item"</span>><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">img</span> <span class="attribut">src</span>=<span class="valeur">"..."</span> <span class="attribut">class</span>=<span class="valeur">"d-block w-100"</span> <span class="attribut">alt</span>=<span class="valeur">"..."</span>><br>
              &nbsp;&nbsp;&nbsp;&nbsp;  &lt;/<span class="balise">div</span>><br>
           &nbsp;&nbsp;  &lt;/<span class="balise">div</span>><br>
            &lt;/<span class="balise">div</span>>
            </code></div>
            <h3>Features des Carousel :</h3>
            <h5>Slide automatique</h5>
            <p>
                Les contenue d'un carousel ne se déroule pas automatiquement de base. Il faut ajouter la classe <code>.slide</code> au container avec la class <span class="carousel"></span>.
            </p>
            <h5>Controleur</h5>
            <p>
               Les contrôleurs peuvent également être rajoutés ou non (si l'on opte pour une diapositive automatique par exemple). L'implémentation est présenté ci-dessus avec les liens ayant les classes <code>.carousel-control-prev</code> et <code>carousel-control-next</code>
            </p>
            <h5>Indicateur</h5>
            <p>
              Dans le container ayant la classe <code>carousel</code>, on peut choisir d'y ajouter des indicateurs, montrant quel slide est visible.
              <img src="indicateur.png" alt="indicateurs" style="width: 800px;">
            </p>
            <ul>
              <li><code>carousel-dark</code> Permet de posser les textes et les controles en noir, sinon ils seront en blanc par défaut.</li>
              <li><code>carousel-fade</code> Permet de changer l'animation du changement de slide en fondue.</li>
            </ul>
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="w-100 bg-primary demoSlide">SLIDE 1</div>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="w-100 bg-info demoSlide">SLIDE 2</div>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <div class="bg-dark"><code>
                 &lt;<span class="balise">div</span> <span class="function">id</span>=<span class="valeur">"carouselExampleCaptions"</span> <span class="attribut">class</span>=<span class="valeur">"carousel slide carousel-fade carousel-dark"</span> <span class="attribut">data-bs-ride="carousel"</span>><br>
                &nbsp;&nbsp;     &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"carousel-indicators"</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;        &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">data-bs-target</span>=<span class="valeur">"#carouselExampleCaptions"</span> <span class="attribut">data-bs-slide-to</span>=<span class="valeur">"0"</span>
                        <span class="attribut">class</span>=<span class="valeur">"active"</span> <span class="attribut">aria-current</span>=<span class="valeur">"true"</span> <span class="attribut">aria-label</span>=<span class="valeur">"Slide 1"</span>>&lt;/<span class="balise">button</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;        &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">data-bs-target</span>=<span class="valeur">"#carouselExampleCaptions"</span> <span class="attribut">data-bs-slide-to</span>=<span class="valeur">"1"</span>
                        <span class="attribut">aria-label</span>=<span class="valeur">"Slide 2"</span>>&lt;/<span class="balise">button</span>><br>
                &nbsp;&nbsp;    &lt;/<span class="balise">div</span>><br>
                &nbsp;&nbsp;     &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"carousel-inner"</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;       &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"carousel-item active"</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &lt;<span class="balise">img</span> <span class="attribut">src</span>=<span class="valeur">"..."</span> <span class="attribut">class</span>=<span class="valeur">"d-block w-100"</span> <span class="attribut">alt</span>=<span class="valeur">"..."</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"carousel-caption d-none d-md-block"</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &lt;<span class="balise">h5</span>>First slide label&lt;/<span class="balise">h5</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            &lt;<span class="balise">p</span>>Some representative placeholder content for the first slide.&lt;/<span class="balise">p</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;/<span class="balise">div</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;      &lt;/<span class="balise">div</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;       &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"carousel-item"</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &lt;<span class="balise">img</span> <span class="attribut">src</span>=<span class="valeur">"..."</span> <span class="attribut">class</span>=<span class="valeur">"d-block w-100"</span> <span class="attribut">alt</span>=<span class="valeur">"..."</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"carousel-caption d-none d-md-block"</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &lt;<span class="balise">h5</span>>Second slide label&lt;/<span class="balise">h5</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            &lt;<span class="balise">p</span>>Some representative placeholder content for the second slide.&lt;/<span class="balise">p</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;/<span class="balise">div</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;      &lt;/<span class="balise">div</span>><br>
                &nbsp;&nbsp;    &lt;/<span class="balise">div</span>><br>
                &nbsp;&nbsp;      &lt;<span class="balise">button</span> <span class="attribut">class</span>=<span class="valeur">"carousel-control-prev"</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">data-bs-target</span>=<span class="valeur">"#carouselExampleCaptions"</span>
                      <span class="attribut">data-bs-slide</span>=<span class="valeur">"prev"</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;        &lt;<span class="balise">span</span> <span class="attribut">class</span>=<span class="valeur">"carousel-control-prev-icon"</span> <span class="attribut">aria-hidden</span>=<span class="valeur">"true"</span>>&lt;/<span class="balise">span</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;        &lt;<span class="balise">span</span> <span class="attribut">class</span>=<span class="valeur">"visually-hidden"</span>>Previous&lt;/<span class="balise">span</span>><br>
                &nbsp;&nbsp;    &lt;/<span class="balise">button</span>><br>
                &nbsp;&nbsp;      &lt;<span class="balise">button</span> <span class="attribut">class</span>=<span class="valeur">"carousel-control-next"</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">data-bs-target</span>=<span class="valeur">"#carouselExampleCaptions"</span>
                      <span class="attribut">data-bs-slide</span>=<span class="valeur">"next"</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;        &lt;<span class="balise">span</span> <span class="attribut">class</span>=<span class="valeur">"carousel-control-next-icon"</span> <span class="attribut">aria-hidden</span>=<span class="valeur">"true"</span>>&lt;/<span class="balise">span</span>><br>
                &nbsp;&nbsp;&nbsp;&nbsp;        &lt;<span class="balise">span</span> <span class="attribut">class</span>=<span class="valeur">"visually-hidden"</span>>Next&lt;/<span class="balise">span</span>><br>
                &nbsp;&nbsp;    &lt;/<span class="balise">button</span>><br>
                  &lt;/<span class="balise">div</span>>
              </code></div>

          </article>
          <article class="tab-pane fade" id="dropdown" role="tabpanel" aria-labelledby="dropdown-tab">
            <h3>  Dropdown menu</h3>

              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>

          </article>
          <article class="tab-pane fade" id="modal" role="tabpanel" aria-labelledby="modal-tab">
            <h3> Fenêtre modal</h3>
            <p>
                Les fenêtres modales font apparaître un élément de la page, jusque-là invisible.<br>
                Composé de deux élément : il y a un boutton qui trigger l'action d'afficher la fenêtre et la dite fenêtre pouvant prendre de multiples formes, comme un formulaire, une galerie, du text, une carte etc...
            </p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Launch demo modal</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            </div>
            </div>
            <div class="bg-dark"><code>
                &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-primary"</span> <span class="attribut">data-bs-toggle</span>=<span class="valeur">"modal"</span>
                <span class="attribut">data-bs-target</span>=<span class="valeur">"#exampleModal"</span>><br>
            &nbsp;&nbsp;  Launch demo modal<br>
              &lt;/<span class="balise">button</span>><br>
               &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"modal fade"</span> <span class="function">id</span>=<span class="valeur">"exampleModal"</span> <span class="attribut">tabindex="-1"</span>
               <span class="attribut">aria-labelledby</span>=<span class="valeur">"exampleModalLabel"</span> <span class="attribut">aria-hidden</span>=<span class="valeur">"true"</span>><br>
            &nbsp;&nbsp;   &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"modal-dialog"</span>><br>
            &nbsp;&nbsp;&nbsp;&nbsp;   &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"modal-content"</span>><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"modal-header"</span>><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">h5</span> <span class="attribut">class</span>=<span class="valeur">"modal-title"</span> <span class="function">id</span>=<span class="valeur">"exampleModalLabel"</span>>Modal title&lt;/<span class="balise">h5</span>><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn-close"</span> <span class="attribut">data-bs-dismiss</span>=<span class="valeur">"modal"</span>
                    <span class="attribut">aria-label</span>=<span class="valeur">"Close"</span>>&lt;/<span class="balise">button</span>><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &lt;/<span class="balise">div</span>><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"modal-body"</span>><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &lt;/<span class="balise">div</span>><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"modal-footer"</span>><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-secondary"</span>
                    <span class="attribut">data-bs-dismiss</span>=<span class="valeur">"modal"</span>>Close&lt;/<span class="balise">button</span>><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;<span class="balise">button</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">class</span>=<span class="valeur">"btn btn-primary"</span>>Save changes&lt;/<span class="balise">button</span>><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &lt;/<span class="balise">div</span>><br>
            &nbsp;&nbsp;&nbsp;&nbsp;  &lt;/<span class="balise">div</span>><br>
            &nbsp;&nbsp;  &lt;/<span class="balise">div</span>><br>
              &lt;/<span class="balise">div</span>>
            </code></div>
          </article>
          <article class="tab-pane fade" id="navbar" role="tabpanel" aria-labelledby="navbar-tab">
            <h3>Navigation</h3>
            <div class="accordion accordion-flush" id="nav-accordeon">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="nav-titre">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nav-contenu" aria-expanded="false" aria-controls="nav-contenu">
                      <h4>Nav</h4>
                    </button>
                  </h2>
                  <div id="nav-contenu" class="accordion-collapse collapse" aria-labelledby="nav-titre" data-bs-parent="#nav-accordeon">
                    <div class="accordion-body">
                      <nav class="navbar navbar-expand-lg bg-light">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">
                            <img src="../assets/img/documentation/bootstrap.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Bootstrap
                          </a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link" href="#">Rubrique 1</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Rubrique 2</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Rubrique 3
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <li><a class="dropdown-item" href="#">Catégorie 1</a></li>
                                  <li><a class="dropdown-item" href="#">Catégorie 2</a></li>
                                  <li><a class="dropdown-item" href="#">Catégorie 3</a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                      <div class="bg-dark"><code>
                        &lt;<span class="balise">nav</span> <span class="attribut">class</span>=<span class="valeur">"navbar navbar-expand-lg"</span>><br>
                        &nbsp;&nbsp;   &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"container-fluid"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;    &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"navbar-brand"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;        &lt;<span class="balise">img</span> <span class="attribut">src</span>=<span class="valeur">"..."</span> <span class="attribut">class</span>=<span class="valeur">"d-inline-block align-text-top"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;      Bootstrap<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;    &lt;/<span class="balise">a</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">button</span> <span class="attribut">class</span>=<span class="valeur">"navbar-toggler"</span> <span class="attribut">type</span>=<span class="valeur">"button"</span> <span class="attribut">data-bs-toggle</span>=<span class="valeur">"collapse"</span>
                              <span class="attribut">data-bs-target</span>=<span class="valeur">"#navbarNavDropdown"</span> <span class="attribut">aria-controls</span>=<span class="valeur">"navbarNavDropdown"</span> <span class="attribut">aria-expanded</span>=<span class="valeur">"false"</span>
                              <span class="attribut">aria-label</span>=<span class="valeur">"Toggle navigation"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;<span class="balise">span</span> <span class="attribut">class</span>=<span class="valeur">"navbar-toggler-icon"</span>>&lt;/<span class="balise">span</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;    &lt;/<span class="balise">button</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;     &lt;<span class="balise">div</span> <span class="attribut">class</span>=<span class="valeur">"collapse navbar-collapse"</span> <span class="function">id</span>=<span class="valeur">"navbarNavDropdown"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">ul</span> <span class="attribut">class</span>=<span class="valeur">"navbar-nav"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"nav-item"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"nav-link"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Rubrique 1&lt;/<span class="balise">a</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;/<span class="balise">li</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"nav-item"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"nav-link"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Rubrique 2&lt;/<span class="balise">a</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;/<span class="balise">li</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"nav-item dropdown"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"nav-link dropdown-toggle"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span> <span class="function">id</span>=<span class="valeur">"navbarDropdownMenuLink"</span>
                                  <span class="attribut">role</span>=<span class="valeur">"button"</span> <span class="attribut">data-bs-toggle</span>=<span class="valeur">"dropdown"</span> <span class="attribut">aria-expanded</span>=<span class="valeur">"false"</span>>Rubrique 3&lt;/<span class="balise">a</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &lt;<span class="balise">ul</span> <span class="attribut">class</span>=<span class="valeur">"dropdown-menu"</span> <span class="attribut">aria-labelledby</span>=<span class="valeur">"navbarDropdownMenuLink"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            &lt;<span class="balise">li</span>>&lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"dropdown-item"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Catégorie 1&lt;/<span class="balise">a</span>>&lt;/<span class="balise">li</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            &lt;<span class="balise">li</span>>&lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"dropdown-item"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Catégorie 2&lt;/<span class="balise">a</span>>&lt;/<span class="balise">li</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            &lt;<span class="balise">li</span>>&lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"dropdown-item"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Catégorie 3&lt;/<span class="balise">a</span>>&lt;/<span class="balise">li</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          &lt;/<span class="balise">ul</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &lt;/<span class="balise">li</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &lt;/<span class="balise">ul</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;    &lt;/<span class="balise">div</span>><br>
                        &nbsp;&nbsp;  &lt;/<span class="balise">div</span>><br>
                        &lt;/<span class="balise">nav</span>>
                      </code></div>
                      <h4>Notation</h4>
                        <ul>
                            <li>Les Navbars requierent un wrapper <code>.navbar</code>, que l'on note <code>.navbar-expand{-sm|-md|-lg|-xl}</code> pour une navbar responsive (menu hamburger).</li>
                            <li>On utilise les classes de spacing et marges pour paramétrer les espacements entre les éléments de la navbar.</li>
                            <li><code>.navbar-brand</code> Pour le titre du site/nom de la marque, qui reste fixe sur la navbar</li>
                            <li><code>.navbar-nav</code> Ce qui contient les items de la navbar</li>
                            <li><code>.navbar-toggler</code> appelle les pluggin de collapse menu (menu hamburger)</li>
                            <li><code>.navbar-text</code> pour ajouter un String.</li>
                            <li><code>navbar-light</code> écrit le texte de la navigation en noir.</li>
                            <li><code>navbar-dark</code> écrit le texte de la navigation en blanc.</li>
                        </ul>
                        <p>Le composant <code>.nav</code> combiné avec les classes liées aux Flexbox permet un contrôle complet.</p>
                        <p>Le style des Navbar est très rapidement paramétrable avec les classes <code>navbar-light</code> et <code>navbar-dark</code> placé sur la balise <code>nav</code> combiné avec les différentes classes liées aux couleurs.</p>
                        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                          <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                              Navbar
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                              <ul class="navbar-nav">
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Rubrique 1</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Rubrique 2</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Rubrique 3</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </nav>
                        <div class="bg-dark"><code>
                          &lt;<span class="balise">nav</span> <span class="attribut">class</span>=<span class="valeur">"navbar navbar-dark bg-primary"</span>><br>
                            <span class="commentaire">&lt;!-- code de la navigation --></span><br>
                          &lt;/<span class="balise">nav</span>>
                        </code></div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="onglet-titre">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#onglet-contenu" aria-expanded="false" aria-controls="onglet-contenu">
                      <h4>Onglets</h4>
                    </button>
                  </h2>
                  <div id="onglet-contenu" class="accordion-collapse collapse" aria-labelledby="onglet-titre" data-bs-parent="#nav-accordeon">
                    <div class="accordion-body">
                      <ul class="nav">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled">Disabled</a>
                        </li>
                      </ul>
                      <div class="bg-dark"><code>
                        &lt;<span class="balise">ul</span> <span class="attribut">class</span>=<span class="valeur">"nav"</span>><br>
                        &nbsp;&nbsp;  &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"nav-item"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;    &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"nav-link active"</span> <span class="attribut">aria-current</span>=<span class="valeur">"page"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Active&lt;/<span class="balise">a</span>><br>
                        &nbsp;&nbsp;  &lt;/<span class="balise">li</span>><br>
                        &nbsp;&nbsp;  &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"nav-item"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;    &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"nav-link"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Link&lt;/<span class="balise">a</span>><br>
                        &nbsp;&nbsp;  &lt;/<span class="balise">li</span>><br>
                        &nbsp;&nbsp;  &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"nav-item"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;    &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"nav-link"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Link&lt;/<span class="balise">a</span>><br>
                        &nbsp;&nbsp;  &lt;/<span class="balise">li</span>><br>
                        &nbsp;&nbsp;  &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"nav-item"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;    &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"nav-link disabled"</span>>Disabled&lt;/<span class="balise">a</span>><br>
                        &nbsp;&nbsp;  &lt;/<span class="balise">li</span>><br>
                        &lt;/<span class="balise">ul</span>>
                      </code></div>
                      <ul class="nav nav-tabs">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                          </li>
                        </ul>
                        <div class="bg-dark"><code>
                          &lt;<span class="balise">ul</span> <span class="attribut">class</span>=<span class="valeur">"nav nav-tabs"</span>><br>
                          &nbsp;&nbsp;    &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"nav-item"</span>><br>
                          &nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"nav-link active"</span> <span class="attribut">aria-current</span>=<span class="valeur">"page"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Active&lt;/<span class="balise">a</span>><br>
                          &nbsp;&nbsp;    &lt;/<span class="balise">li</span>><br>
                          &nbsp;&nbsp;    &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"nav-item"</span>><br>
                          &nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"nav-link"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Link&lt;/<span class="balise">a</span>><br>
                          &nbsp;&nbsp;    &lt;/<span class="balise">li</span>><br>
                          &nbsp;&nbsp;    &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"nav-item"</span>><br>
                          &nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"nav-link"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Link&lt;/<span class="balise">a</span>><br>
                          &nbsp;&nbsp;    &lt;/<span class="balise">li</span>><br>
                          &nbsp;&nbsp;    &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"nav-item"</span>><br>
                          &nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"nav-link disabled"</span>>Disabled&lt;/<span class="balise">a</span>><br>
                          &nbsp;&nbsp;    &lt;/<span class="balise">li</span>><br>
                            &lt;/<span class="balise">ul</span>>
                        </code></div>
                        <ul class="nav nav-pills nav-fill">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Much longer nav link</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                          </li>
                        </ul>
                        <div class="bg-dark"><code>
                          &lt;<span class="balise">ul</span> <span class="attribut">class</span>=<span class="valeur">"nav nav-pills nav-fill"</span>><br>
                          &nbsp;&nbsp;  &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"nav-item"</span>><br>
                          &nbsp;&nbsp;&nbsp;&nbsp;    &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"nav-link active"</span> <span class="attribut">aria-current</span>=<span class="valeur">"page"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Active&lt;/<span class="balise">a</span>><br>
                          &nbsp;&nbsp;  &lt;/<span class="balise">li</span>><br>
                          &nbsp;&nbsp;  &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"nav-item"</span>><br>
                          &nbsp;&nbsp;&nbsp;&nbsp;    &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"nav-link"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Much longer nav link&lt;/<span class="balise">a</span>><br>
                          &nbsp;&nbsp;  &lt;/<span class="balise">li</span>><br>
                          &nbsp;&nbsp;  &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"nav-item"</span>><br>
                          &nbsp;&nbsp;&nbsp;&nbsp;    &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"nav-link"</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Link&lt;/<span class="balise">a</span>><br>
                          &nbsp;&nbsp;  &lt;/<span class="balise">li</span>><br>
                          &nbsp;&nbsp;  &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"nav-item"</span>><br>
                          &nbsp;&nbsp;&nbsp;&nbsp;    &lt;<span class="balise">a</span> <span class="attribut">class</span>=<span class="valeur">"nav-link disabled"</span>>Disabled&lt;/<span class="balise">a</span>><br>
                          &nbsp;&nbsp;  &lt;/<span class="balise">li</span>><br>
                          &lt;/<span class="balise">ul</span>>
                        </code></div>
                      <p>On peut désactiver un des boutons d'un navbar avec la classe <code>.disabled</code></p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="ariane-titre">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ariane-contenu" aria-expanded="false" aria-controls="ariane-contenu">
                      <h4>fil d'ariane</h4>
                    </button>
                  </h2>
                  <div id="ariane-contenu" class="accordion-collapse collapse" aria-labelledby="ariane-titre" data-bs-parent="#nav-accordeon">
                    <div class="accordion-body">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                      </nav>
                      <div class="bg-dark"><code>
                        &lt;<span class="balise">nav</span> <span class="attribut">aria-label</span>=<span class="valeur">"breadcrumb"</span>><br>
                        &nbsp;&nbsp;  &lt;<span class="balise">ol</span> <span class="attribut">class</span>=<span class="valeur">"breadcrumb"</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;    &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"breadcrumb-item"</span>>&lt;<span class="balise">a</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Home&lt;/<span class="balise">a</span>>&lt;/<span class="balise">li</span>><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;    &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"breadcrumb-item active"</span> aria-current="page">Library&lt;/<span class="balise">li</span>><br>
                        &nbsp;&nbsp;  &lt;/<span class="balise">ol</span>><br>
                        &lt;/<span class="balise">nav</span>>
                      </code></div>

                      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                      </nav>
                      <div class="bg-dark"><code>
                        &lt;<span class="balise">nav</span> <span class="attribut">style</span>=<span class="valeur">"--bs-breadcrumb-divider: '>';"</span> <span class="attribut">aria-label</span>=<span class="valeur">"breadcrumb"</span>><br>
                      &nbsp;&nbsp;    &lt;<span class="balise">ol</span> <span class="attribut">class</span>=<span class="valeur">"breadcrumb"</span>><br>
                      &nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"breadcrumb-item"</span>>&lt;<span class="balise">a</span> <span class="attribut">href</span>=<span class="valeur">"#"</span>>Home&lt;/<span class="balise">a</span>>&lt;/<span class="balise">li</span>><br>
                      &nbsp;&nbsp;&nbsp;&nbsp;      &lt;<span class="balise">li</span> <span class="attribut">class</span>=<span class="valeur">"breadcrumb-item active"</span> aria-current="page">Library&lt;/<span class="balise">li</span>><br>
                      &nbsp;&nbsp;    &lt;/<span class="balise">ol</span>><br>
                        &lt;/<span class="balise">nav</span>>
                      </code></div>
                    </div>
                  </div>
                </div>
            </div>
          </article>
      </section>
      </main>
      <script src="../assets/js/doc.js" type="text/javascript"></script>
      <!-- Liaison au script Bootstap -->
      <script src="../assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>