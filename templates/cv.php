<?php
$id = $params['collaborater'];

require_once('../data/get-data.php');

if (!$infos = getData($id)) {
    throw new Exception('404: Page note found');
}

$name = utf8_encode($infos[1]);
$surname = utf8_encode($infos[2]);
$job = utf8_encode($infos[3]);
$tel = utf8_encode($infos[4]);
$mail = utf8_encode($infos[5]);
$vcfLink = utf8_encode($infos[6]);

$pageTitle = $surname . ' ' . $name;
$pageName = "cv";

?>

<header>
    <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
            <div class="container">
                <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip" data-original-title="" title="">archimed-GE</a>
                    <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">A propos</a></li>
                        <!--<li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>-->
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                        <!--<li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li>-->
                        <!--<li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<div class="page-content">
    <div>
        <div class="profile-page">
            <div class="wrapper">
                <div class="page-header page-header-small" filter-color="green">
                    <div class="page-header-image" data-parallax="true" style="background-image: url(&quot;../images/cc-bg-1.jpg&quot;); transform: translate3d(0px, 68px, 0px);"></div>
                    <div class="container">
                        <div class="content-center">
                            <div class="cc-profile-image">
                                <a href="#">
                                    <img src="../images/<?= $id ?>.jpg" alt="Image">
                                </a>
                            </div>
                            <div class="h2 title"><?= $surname . " " . $name ?></div>
                            <p class="category text-white"><?= $job ?></p><a class="btn btn-primary smooth-scroll mr-2 aos-init aos-animate" href="../vcf/<?= $id ?>.vcf" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Connect</a><!--<a class="btn btn-primary" href="#" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>-->
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="button-container">
                                <a class="btn btn-default btn-round btn-lg btn-icon" href="https://www.linkedin.com/company/archimed-ge/" rel="tooltip" title="" data-original-title="Suivez-nous sur LinkedIn">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a class="btn btn-default btn-round btn-lg btn-icon" href="https://www.instagram.com/archimedge/" rel="tooltip" title="" data-original-title="Suivez-nous sur Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a><!--<a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a>-->
                                <a class="btn btn-default btn-round btn-lg btn-icon" href="https://fr-fr.facebook.com/ArchimedGe/" rel="tooltip" title="" data-original-title="Suivez-nous sur Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="about">
            <div class="container">
                <div class="card aos-init aos-animate" data-aos="fade-up" data-aos-offset="10">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card-body">
                                <div class="h4 mt-0 title">A propos</div>
                                <p>Salut! Je suis <?= $surname . ' ' . $name ?>, <?= $job ?> de la société archimed-GE, Géomètres-Experts Associés.</p>
                                <p>archimed-GE c'est 3 agences de Géomètres-Experts prêts à
                                    se mesurer à tous les défis, des équipes spécialisées et dimensionnées
                                    pour tout type de projet. <a href="https://archimed-ge.com/" target="_blank">En apprendre plus</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card-body">
                                <div class="h4 mt-0 title">Contact</div>
                                <!--<div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
              <div class="col-sm-8">24</div>
            </div>-->
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                                    <div class="col-sm-8"><?= $mail ?></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Tél:</strong></div>
                                    <div class="col-sm-8">+33 <?= $tel ?></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Adresse:</strong></div>
                                    <div class="col-sm-8">9 rue Albert Calmette, Strasbourg</div>
                                </div>
                                <!--<div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
              <div class="col-sm-8">English, German, French</div>
            </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="h4 text-center mb-4 title">Portfolio</div>
                        <div class="nav-align-center">
                            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#web-development" role="tablist"><i class="fa fa-camera" aria-hidden="true"></i></a></li>
                                <!--<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#graphic-design" role="tablist"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>-->
                                <!--<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Photography" role="tablist"><i class="fa fa-camera" aria-hidden="true"></i></a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content gallery mt-5">
                    <div class="tab-pane active" id="web-development">
                        <div class="ml-auto mr-auto">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="cc-porfolio-image img-raised aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                                            <figure class="cc-effect"><img src="../images/project-1.jpg" alt="Image">
                                                <figcaption>
                                                    <div class="h4">Implantations</div>
                                                    <p>Travaux d'implantations / Chantiers de construction</p>
                                                </figcaption>
                                            </figure>
                                        </a></div>
                                    <div class="cc-porfolio-image img-raised aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                                            <figure class="cc-effect"><img src="../images/project-2.jpg" alt="Image">
                                                <figcaption>
                                                    <div class="h4">Scan et Modélisation 3D</div>
                                                    <p>Nuage de points / Projets architecturaux</p>
                                                </figcaption>
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cc-porfolio-image img-raised aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                                            <figure class="cc-effect"><img src="../images/project-3.jpg" alt="Image">
                                                <figcaption>
                                                    <div class="h4">Levés Architecturaux</div>
                                                    <p>Levés d'intérieur, façades, coupes</p>
                                                </figcaption>
                                            </figure>
                                        </a></div>
                                    <div class="cc-porfolio-image img-raised aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                                            <figure class="cc-effect"><img src="../images/project-4.jpg" alt="Image">
                                                <figcaption>
                                                    <div class="h4">Missions Topographiques</div>
                                                    <p>Relevé topographiques / Travaux spéciaux</p>
                                                </figcaption>
                                            </figure>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <!--<div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>-->
            <div class="h4 title text-center"><?= $surname . ' ' . $name ?> - archimed-GE</div>
            <div class="text-center text-muted">
                <p>Copyright © 2023 archimed-GE<!--<br>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a>--></p>
            </div>
        </footer>
        <script src="../js/jquery.3.2.1.min.js?ver=1.1.0"></script>
        <script src="../js/popper.min.js?ver=1.1.0"></script>
        <script src="../js/bootstrap.min.js?ver=1.1.0"></script>
        <script src="../js/now-ui-kit.js?ver=1.1.0"></script>
        <script src="../js/aos.js?ver=1.1.0"></script>
        <script src="../js/main.js?ver=1.1.0"></script>

    </div>
    <script>
        (async () => {
            class WtdRoot extends HTMLElement {
                constructor() {
                    super();

                    this.attachShadow({
                        mode: 'open'
                    });
                }
            }

            window.customElements.define('wtd-root', WtdRoot);
        })();
    </script>
    <script>
        (async () => {
            class WtdDiv extends HTMLElement {
                constructor() {
                    super();

                }
            }

            window.customElements.define('wtd-div', WtdDiv);
        })();
    </script>
    <script>
        window.wtdExtensionInjected = true
    </script><wtd-div id="wanteeedContainer" style="position: fixed; display: block; top: 0px; right: 0px; z-index: 2147483647;"><wtd-root id="comparator"></wtd-root><iframe id="wanteeedPanel" data-version="1.70.1" allowtransparency="true" style="background-color: rgb(255, 255, 255); border: medium; border-radius: 3px; box-shadow: rgb(181, 181, 181) 1px 1px 3px 2px; clip: auto; display: none; margin-left: auto; margin-right: 12px; margin-top: 12px; position: relative; z-index: 2147483647; height: 1px; width: 1px;"></iframe></wtd-div><iframe id="wanteeedTestMaker" data-version="1.70.1" allowtransparency="true" style="border: medium; clip: auto; display: none; left: 0px; overflow: hidden; position: fixed; top: 10px; transition: all 0.2s ease-out 0s; z-index: 45739864; height: 1px; width: 1px;"></iframe>
    <link href="https://fonts.googleapis.com/" rel="preconnect">
    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="">