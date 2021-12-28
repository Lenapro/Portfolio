<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href ="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.6/aos.css" rel="stylesheet">
    <title>My portfolio</title>
</head>
<body>
<!-- ======= Mobile nav toggle button ======= -->
<i class="fas fas-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->

<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      <img src="images/image2.png" alt="" class="img-fluid rounded-circle">
      <h1 class="text-light"><a href="index.html">Helena POATY </a></h1>
      <div class="social-links mt-3 text-center">
        <a href="#" class="twitter"><i class="fab fa-whatsapp"></i></a>
        <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>

    <nav id="navbar" class="nav-menu navbar">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="fas fa-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="fas fa-user"></i> <span>A propos</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="fas fa-file"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="fas fa-book-open"></i> <span>Portfolio</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="fas fa-server"></i> <span>Services</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="fas fa-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->

<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-up">
      <h1>Helena POATY</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="flip-left">A propos</h2>
          <p data-aos="fade-up">Etudiante en Bachelor à l'ETNA, <strong>Ecole des Technologies Numériques Avancées ETNA</strong>, je suis une développeuse Web en devenir. J'aime créer des sites et acquérir de nouvelles compétences. Grâce à mon activité sportive (handball) que je pratique depuis huit ans déjà, je sais travailler en équipe. Par-dessus tout, faire valloir mes compétences est l'une de mes plus grandes qualités. </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="images/image2.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Développeuse Web</h3>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="fas fa-chevron-right"></i> <strong>Anniversaire:</strong> <span>14 Mai 2000</span></li>
                  <li><i class="fas fa-chevron-right"></i> <strong>Github:</strong> <span>https://github.com/Lenapro</span></li>
                  <li><i class="fas fa-chevron-right"></i> <strong>Téléphone:</strong> <span>+33 06 05 62 94 96</span></li>
                  <li><i class="fas fa-chevron-right"></i> <strong>Adresse:</strong> <span>94000, Créteil</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="fas fa-chevron-right"></i> <strong>Age:</strong> <span>21 ans</span></li>
                  <li><i class="fas fa-chevron-right"></i> <strong>Niveau d'étude:</strong> <span>Bac +3</span></li>
                  <li><i class="fas fa-chevron-right"></i> <strong>Email:</strong> <span>helenapoaty28@gmail.com</span></li>
                  <li><i class="fas fa-chevron-right"></i> <strong>Ecole:</strong> <span>ETNA, Ivry-Sur-Seine</span></li>
                </ul>
              </div>
            </div>
            <h3 data-aos="flip-down">
              Pourquoi le développement Web?
            </h3>
            <p> J'ai longtemps chercher sur quel domaine je devrais évoluer en Informatique, jusqu'à ce que j'ai un super accrochage avec le web. Lorsque j'ai découvert cette branche de l'Informatique, j'ai été en accord direct avec celle-ci. Aujourd'hui, c'est vraiment une véritable passion.</p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="flip-down">Compétences</h2>
          <p data-aos="fade-left">Au cours de mon cursus scolaire, j'ai eu à développer certaines compétences en Web.</p>
        </div>
        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Bootstrap/JavaScript/Jquery <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Angular <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Laravel <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/Shopify/Prestashop <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Mysql<i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Python/Django <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">UI/UX design <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Formation et Expérience</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            
            <h3 class="resume-title">Formation</h3>
            <div class="resume-item">
              <h4>Bachelor en Responsable de Projet Web et Mobile</h4>
              <h5>2021 - 2022</h5>
              <p><em><strong>ETNA, Ivry-Sur-Seine</strong></em></p>
              <p>Je suis en pleine préparation de mon Bachelor en Développement Web et Mobile. 
                J'ai une formation intensive appelée Piscine entre octobre et fin novembre.
              </p>
            </div>
            <div class="resume-item">
              <h4>Etudiante en Prépa Informatique</h4>
              <h5>2020 - 2021</h5>
              <p><em><strong>CESI, La Couronne</strong>
                </em></p>
              <p>J'ai fait ma deuxième année de classe préparatoire en Informatique au CESI. La formation était plutôt généralisée: 
                <ul>
                  <li>Système Embarqué</li>
                  <li>Programmation Orientée Objet</li>
                  <li>Systèmes et Réseaux</li>
                  <li>Développemnt Web</li>
                </ul>
              </p>
            </div>
            <div class="resume-item">
              <h4>Etudiante en Classe préparatoire</h4>
              <h5>2018 - 2020</h5>
              <p><em><strong>INPHB, Côte d'Ivoire - Yamoussoukro</strong>
                </em></p>
              <p>j'ai eu à faire ma première année en Mathématiques Physiques et Sciences Industrielles ensuite en deuxième année, j'ai fait juste Mathématiques et Physiques.</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Experience</h3>
            <div class="resume-item">
              <h4>Programmation Web</h4>
              <h5>Création d'un site web de recherche de stage</h5>
              <ul>
                <li> Réalisation du Frontend avec HTML, CSS et Bootstrap</li>
                <li>Utilisation de JS et JQuery pour la dynamisation des pages</li>
                <li>Réalisation du Backend avec PHP sans Framework et MySQLcomme Base de Données</li>
                <li> Responsive design avec les classes Bootstrap</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Projet Facebook-Clone</h4>
              <h5>Création d'un site Web qui reprend certaines fonctionnalités de Facebook</h5>
              <ul>
                <li>Frontend: réalisation du site avec Angular</li>
                <li> Backend: utilisation du Framework Django, Base de donnée Mysql</li>
                <li>Fonctionnalités: webservices (envoie et récupération de l'email et le mot de passe, récupération d'une photo)</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Projet Doo-jet</h4>
              <h5> Création d'un site web de location de scooters des mers</h5>
              <ul>
                <li>Réalisation du Frontend avec HTML, CSS et Bootstrap</li>
                <li> Utilisation de JS, AJAX et JQuery pour la dynamisation des pages</li>
                <li> Réalisation du Backend avec PHP et MySQL comme Base de Données</li>
                <li> Responsive design avec les classes Bootstrap</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>
    
    <!-- End Resume Section -->
    <!-- ======= Portfolio Section ======= -->

 <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>J'ai eu à travailler sur plusieurs projets pour pouvoir développer mes compétences, essayer d'autres technologies en dehors de ceux que je maitrise déjà.</p>
        </div>
        <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-md-4" data-aos="flip-down">
            <div class="work-box">
                <div class="work-img">
                  <img src="images/image5.png" alt="" class="img-fluid">
                </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="flip-down">
            <div class="work-box">
                <div class="work-img">
                  <img src="images/image6.png" alt="" class="img-fluid">
                </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="flip-down">
            <div class="work-box">
                <div class="work-img">
                  <img src="images/image7.png" alt="" class="img-fluid">
                </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="flip-down">
            <div class="work-box">
                <div class="work-img">
                  <img src="images/image11.png" alt="" class="img-fluid">
                </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="flip-down">
            <div class="work-box">
                <div class="work-img">
                  <img src="images/image9.png" alt="" class="img-fluid">
                </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="flip-down">
            <div class="work-box">
                <div class="work-img">
                  <img src="images/image10.png" alt="" class="img-fluid">
                </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="flip-down">
            <div class="works-box">
                <div class="work-img">
                  <img src="images/image8.png" alt="" class="img-fluid">
                </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- End Portfolio Section -->
    <!-- ======= Services Section ======= -->
    
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="flip-down">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="service-box col-md-6 shadow" id="service" data-aos="flip-down">
            <div class="service-ico">
              <span class="ico-circle icon">
              <i class="fas fa-briefcase"></i>
              </span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Web Design</h2>
              <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
              </p>
            </div>
          </div>
          <div class="service-box col-md-6 shadow " id="box" data-aos="flip-down">
            <div class="service-ico">
              <span class="ico-circle icon">
              <i class="fas fa-tasks"></i>
              </span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Web Design</h2>
              <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
              <i class="fas fa-map-marker-alt"></i>
                <h4>Localisation:</h4>
                <p>17 Boulevard John Kennedy, 94000 Créteil</p>
              </div>

              <div class="email">
                <i class="fas fa-envelope"></i>
                <h4>Email:</h4>
                <p>helenapoaty28@gmail.com</p>
              </div>

              <div class="phone">
                <i class="fas fa-phone"></i>
                <h4>Call:</h4>
                <p>+33 06 05 62 94 96</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.6/aos.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>


</body>
</html>