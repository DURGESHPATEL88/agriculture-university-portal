@extends('layouts/blankLayout')

@section('title', 'Agriculture University Portal | Excellence in Agricultural Education')

@section('page-style')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/front-page-index.css')}}" />
@endsection

@section('content')
<div class="agri-landing">

  <!-- ===== NAVIGATION ===== -->
  <nav class="navbar navbar-expand-lg agri-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <span class="brand-icon"><i class="fas fa-seedling"></i></span>
        Agri University
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#agriNavbar" aria-controls="agriNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="agriNavbar">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#programs">Programs</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#news">News</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          @if (Route::has('login'))
            @auth
              <li class="nav-item ms-lg-2">
                <a href="{{ url('/dashboard') }}" class="btn-apply-now">Dashboard</a>
              </li>
            @else
              <li class="nav-item ms-lg-2">
                <a href="{{ route('login') }}" class="nav-link">Login</a>
              </li>
              <li class="nav-item ms-lg-1">
                <a href="{{ Route::has('register') ? route('register') : '#' }}" class="btn-apply-now">Apply Now</a>
              </li>
            @endauth
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <!-- ===== HERO SECTION ===== -->
  <header class="agri-hero" id="home">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="hero-badge">
            <span class="badge-dot"></span>
            Admissions Open for 2026–27
          </div>
          <h1 class="hero-title">
            Cultivating <span class="highlight">Future Leaders</span> in Agriculture
          </h1>
          <p class="hero-subtitle">
            Join a world-class agricultural university dedicated to innovation, sustainability, and nurturing the next generation of farming scientists & agri-entrepreneurs.
          </p>
          <div class="hero-buttons">
            <a href="#programs" class="btn-hero-primary">
              <i class="fas fa-graduation-cap"></i> Explore Programs
            </a>
            <a href="#about" class="btn-hero-secondary">
              <i class="fas fa-play-circle"></i> Virtual Tour
            </a>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-1">
          <div class="hero-stats-card">
            <div class="row">
              <div class="col-lg-12 col-4">
                <div class="stat-item">
                  <span class="stat-number">50+</span>
                  <span class="stat-label">Academic Programs</span>
                </div>
              </div>
              <div class="col-lg-12 col-4">
                <div class="stat-item">
                  <span class="stat-number">12:1</span>
                  <span class="stat-label">Student-Faculty Ratio</span>
                </div>
              </div>
              <div class="col-lg-12 col-4">
                <div class="stat-item">
                  <span class="stat-number">95%</span>
                  <span class="stat-label">Placement Rate</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ===== STATS BAR ===== -->
  <section class="agri-stats-bar">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-3">
          <div class="stat-box animate-on-scroll">
            <div class="stat-icon"><i class="fas fa-users"></i></div>
            <span class="stat-num">15,000+</span>
            <span class="stat-text">Students Enrolled</span>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-box animate-on-scroll">
            <div class="stat-icon"><i class="fas fa-flask"></i></div>
            <span class="stat-num">200+</span>
            <span class="stat-text">Research Projects</span>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-box animate-on-scroll">
            <div class="stat-icon"><i class="fas fa-leaf"></i></div>
            <span class="stat-num">500+</span>
            <span class="stat-text">Acres Campus</span>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-box animate-on-scroll">
            <div class="stat-icon"><i class="fas fa-award"></i></div>
            <span class="stat-num">A+</span>
            <span class="stat-text">NAAC Accreditation</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== ACADEMIC PROGRAMS ===== -->
  <section class="agri-programs" id="programs">
    <div class="container">
      <div class="text-center">
        <span class="section-badge"><i class="fas fa-circle"></i> Our Faculties</span>
        <h2 class="section-heading">Academic Excellence</h2>
        <div class="accent-line"></div>
        <p class="section-subheading">
          Explore our comprehensive range of agricultural programs designed to meet the needs of modern farming and sustainable development.
        </p>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="program-card animate-on-scroll">
            <div class="program-icon icon-green"><i class="fas fa-seedling"></i></div>
            <h4>Agriculture & Crop Science</h4>
            <p>Study modern farming techniques, crop genetics, and sustainable agriculture practices for maximum yield.</p>
            <a href="#" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="program-card animate-on-scroll">
            <div class="program-icon icon-amber"><i class="fas fa-cow"></i></div>
            <h4>Animal Husbandry & Veterinary</h4>
            <p>Comprehensive programs in livestock management, dairy science, and veterinary medicine for healthier herds.</p>
            <a href="#" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="program-card animate-on-scroll">
            <div class="program-icon icon-blue"><i class="fas fa-water"></i></div>
            <h4>Fisheries & Aquaculture</h4>
            <p>Dive into marine biology, aquaculture technology, and sustainable fish farming practices.</p>
            <a href="#" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="program-card animate-on-scroll">
            <div class="program-icon icon-brown"><i class="fas fa-tree"></i></div>
            <h4>Forestry & Environmental Science</h4>
            <p>Learn about forest management, ecology, climate change mitigation, and environmental conservation.</p>
            <a href="#" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="program-card animate-on-scroll">
            <div class="program-icon icon-teal"><i class="fas fa-cogs"></i></div>
            <h4>Agricultural Engineering</h4>
            <p>Innovate with agricultural machinery, irrigation systems, and precision farming technologies.</p>
            <a href="#" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="program-card animate-on-scroll">
            <div class="program-icon icon-purple"><i class="fas fa-apple-whole"></i></div>
            <h4>Food Technology & Nutrition</h4>
            <p>Explore food processing, preservation, quality assurance, and nutritional science for better health.</p>
            <a href="#" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== ABOUT SECTION ===== -->
  <section class="agri-about" id="about">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <div class="about-image-wrapper animate-on-scroll">
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="University Campus">
            <div class="about-experience-badge">
              <div class="exp-number">65+</div>
              <div class="exp-text">Years of Excellence</div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <span class="section-badge"><i class="fas fa-circle"></i> About Us</span>
            <h2>Nurturing Agricultural Excellence Since 1961</h2>
            <p>
              Our university stands as a beacon of agricultural education, fostering innovation and research that drives the future of sustainable farming. With state-of-the-art laboratories, vast experimental farms, and a globally recognized faculty, we empower students to become industry leaders.
            </p>

            <div class="about-feature">
              <div class="about-feature-icon"><i class="fas fa-microscope"></i></div>
              <div>
                <h5>Advanced Research Labs</h5>
                <p>State-of-the-art biotechnology, soil science, and plant pathology laboratories.</p>
              </div>
            </div>
            <div class="about-feature">
              <div class="about-feature-icon"><i class="fas fa-globe-americas"></i></div>
              <div>
                <h5>International Collaborations</h5>
                <p>Partnerships with 50+ universities worldwide for student exchange and joint research.</p>
              </div>
            </div>
            <div class="about-feature">
              <div class="about-feature-icon"><i class="fas fa-tractor"></i></div>
              <div>
                <h5>Hands-on Training</h5>
                <p>500+ acres of experimental farms for practical learning and field research.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== NEWS & EVENTS ===== -->
  <section class="agri-news" id="news">
    <div class="container">
      <div class="text-center">
        <span class="section-badge"><i class="fas fa-circle"></i> Latest Updates</span>
        <h2 class="section-heading">News & Events</h2>
        <div class="accent-line"></div>
        <p class="section-subheading">
          Stay connected with the latest happenings, research breakthroughs, and campus events at our university.
        </p>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="news-card animate-on-scroll">
            <div class="news-image">
              <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Agricultural Research">
            </div>
            <div class="news-body">
              <div>
                <span class="news-date"><i class="far fa-calendar-alt"></i> Mar 05, 2026</span>
                <span class="news-category">Research</span>
              </div>
              <h5>Breakthrough in Drought-Resistant Crop Varieties</h5>
              <p>Our research team has developed new drought-resistant wheat varieties that can withstand extreme climate conditions.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="news-card animate-on-scroll">
            <div class="news-image">
              <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="University Event">
            </div>
            <div class="news-body">
              <div>
                <span class="news-date"><i class="far fa-calendar-alt"></i> Feb 20, 2026</span>
                <span class="news-category">Event</span>
              </div>
              <h5>International Agricultural Science Conference 2026</h5>
              <p>Join world-renowned scientists discussing the future of sustainable agriculture and food security on our campus.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="news-card animate-on-scroll">
            <div class="news-image">
              <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Student Achievement">
            </div>
            <div class="news-body">
              <div>
                <span class="news-date"><i class="far fa-calendar-alt"></i> Feb 10, 2026</span>
                <span class="news-category">Achievement</span>
              </div>
              <h5>Students Win National Agri-Innovation Competition</h5>
              <p>Our students secured first place at the National Agri-Innovation Challenge with their smart irrigation solution.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CTA SECTION ===== -->
  <section class="agri-cta">
    <div class="container">
      <h2>Ready to Shape the Future of Agriculture?</h2>
      <p>Applications for the 2026–27 academic session are now open. Take the first step towards a rewarding career in agriculture.</p>
      <a href="{{ Route::has('register') ? route('register') : '#' }}" class="btn-cta">
        <i class="fas fa-paper-plane"></i> Apply Today
      </a>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer class="agri-footer" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="footer-brand">
            <span class="footer-icon"><i class="fas fa-seedling"></i></span>
            Agriculture University
          </div>
          <p class="footer-desc">
            Empowering students to become global leaders in agriculture through education, innovation, research, and community engagement since 1961.
          </p>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 mb-4">
          <h5>Quick Links</h5>
          <ul class="footer-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Admissions</a></li>
            <li><a href="#">Academics</a></li>
            <li><a href="#">Campus Life</a></li>
            <li><a href="#">Placements</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4">
          <h5>Resources</h5>
          <ul class="footer-links">
            <li><a href="#">Library</a></li>
            <li><a href="#">Student Portal</a></li>
            <li><a href="#">Alumni Network</a></li>
            <li><a href="#">Research Papers</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </div>
        <div class="col-lg-4 mb-4">
          <h5>Contact Us</h5>
          <div class="contact-info">
            <p><i class="fas fa-map-marker-alt"></i> University Campus Road, Agricultural City, India</p>
            <p><i class="fas fa-phone"></i> +91 (0000) 123-4567</p>
            <p><i class="fas fa-envelope"></i> info@agriuniversity.edu.in</p>
            <p><i class="fas fa-clock"></i> Mon - Sat: 9:00 AM - 5:00 PM</p>
          </div>
        </div>
      </div>
      <hr>
      <div class="footer-bottom">
        &copy; {{ date('Y') }} Agriculture University. All Rights Reserved. | Designed with <i class="fas fa-heart" style="color: #e74c3c;"></i> for Excellence
      </div>
    </div>
  </footer>

</div>
@endsection

@section('page-script')
<script>
  // Scroll Animation Observer
  document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add('animated');
          }, index * 100);
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    });

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
      observer.observe(el);
    });

    // Smooth scroll for nav links
    document.querySelectorAll('.agri-navbar .nav-link[href^="#"]').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        // Close mobile menu
        const navbarCollapse = document.querySelector('#agriNavbar');
        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
          const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
          if (bsCollapse) bsCollapse.hide();
        }
      });
    });

    // Active nav link on scroll
    const sections = document.querySelectorAll('section[id], header[id]');
    window.addEventListener('scroll', function() {
      let current = '';
      sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        if (scrollY >= sectionTop) {
          current = section.getAttribute('id');
        }
      });
      document.querySelectorAll('.agri-navbar .nav-link').forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
          link.classList.add('active');
        }
      });
    });

    // Counter animation for stats
    const counters = document.querySelectorAll('.stat-num, .stat-number');
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const text = el.textContent;
          // Only animate if starts with a number
          const match = text.match(/^(\d[\d,]*)/);
          if (match) {
            const target = parseInt(match[1].replace(/,/g, ''));
            const suffix = text.replace(match[1], '');
            let count = 0;
            const duration = 2000;
            const increment = target / (duration / 16);
            const timer = setInterval(() => {
              count += increment;
              if (count >= target) {
                el.textContent = target.toLocaleString() + suffix;
                clearInterval(timer);
              } else {
                el.textContent = Math.floor(count).toLocaleString() + suffix;
              }
            }, 16);
          }
          counterObserver.unobserve(el);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(counter => counterObserver.observe(counter));

    // ===== STICKY NAVBAR (JS-based) =====
    const navbar = document.querySelector('.agri-navbar');
    if (navbar) {
      const navbarHeight = navbar.offsetHeight;
      // Create spacer to prevent content jump
      const spacer = document.createElement('div');
      spacer.style.height = navbarHeight + 'px';
      navbar.parentNode.insertBefore(spacer, navbar.nextSibling);
      // Move navbar to body for true fixed positioning
      document.body.prepend(navbar);
      navbar.style.position = 'fixed';
      navbar.style.top = '0';
      navbar.style.left = '0';
      navbar.style.right = '0';
      navbar.style.width = '100%';
      navbar.style.zIndex = '1050';
    }
  });
</script>
@endsection

