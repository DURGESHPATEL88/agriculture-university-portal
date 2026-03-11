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

          <!-- About University Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#about" role="button" aria-expanded="false">About</a>
            <ul class="dropdown-menu agri-dropdown">
              <li><a class="dropdown-item" href="#about"><i class="fas fa-university me-2"></i>About University</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-bullseye me-2"></i>Vision & Mission</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-users me-2"></i>Vice-Chancellor</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-landmark me-2"></i>Administration</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-certificate me-2"></i>Accreditations (ICAR/NAAC)</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-map-marked-alt me-2"></i>Campus Tour</a></li>
            </ul>
          </li>

          <!-- ★ Faculties Mega Menu ★ -->
          <li class="nav-item dropdown mega-dropdown" id="facultiesMegaMenu">
            <a class="nav-link dropdown-toggle" href="#programs" role="button" aria-expanded="false">
              <i class="fas fa-graduation-cap me-1"></i>Faculties
            </a>
            <div class="dropdown-menu agri-mega-menu">
              <div class="mega-menu-inner">
                <div class="mega-menu-header">
                  <h5><i class="fas fa-graduation-cap me-2"></i>Our Faculties & Departments</h5>
                  <p>Explore 7 faculties with 30+ departments across agricultural and allied sciences</p>
                </div>
                <div class="mega-menu-grid">

                  <!-- Faculty 1: Agriculture Science -->
                  <div class="mega-menu-col">
                    <div class="faculty-group">
                      <h6 class="faculty-title"><i class="fas fa-seedling"></i> Faculty of Agriculture</h6>
                      <ul class="dept-list">
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Agronomy</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Soil Science</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Plant Pathology</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Entomology</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Genetics & Plant Breeding</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Agricultural Economics</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Extension Education</a></li>
                      </ul>
                    </div>
                  </div>

                  <!-- Faculty 2: Veterinary & Animal Science -->
                  <div class="mega-menu-col">
                    <div class="faculty-group">
                      <h6 class="faculty-title"><i class="fas fa-paw"></i> Faculty of Veterinary Science</h6>
                      <ul class="dept-list">
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Animal Husbandry</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Veterinary Medicine</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Dairy Science</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Livestock Production</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Poultry Science</a></li>
                      </ul>
                    </div>
                  </div>

                  <!-- Faculty 3: Agricultural Engineering -->
                  <div class="mega-menu-col">
                    <div class="faculty-group">
                      <h6 class="faculty-title"><i class="fas fa-cogs"></i> Faculty of Agri. Engineering</h6>
                      <ul class="dept-list">
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Farm Machinery</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Irrigation & Drainage</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Food Process Engineering</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Renewable Energy</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Soil & Water Conservation</a></li>
                      </ul>
                    </div>
                  </div>

                  <!-- Faculty 4: Basic Sciences -->
                  <div class="mega-menu-col">
                    <div class="faculty-group">
                      <h6 class="faculty-title"><i class="fas fa-flask"></i> Faculty of Basic Sciences</h6>
                      <ul class="dept-list">
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Chemistry & Biochemistry</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Mathematics & Statistics</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Physics</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Biotechnology</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Microbiology</a></li>
                      </ul>
                    </div>
                  </div>

                  <!-- Faculty 5: Horticulture -->
                  <div class="mega-menu-col">
                    <div class="faculty-group">
                      <h6 class="faculty-title"><i class="fas fa-tree"></i> Faculty of Horticulture</h6>
                      <ul class="dept-list">
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Fruit Science</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Vegetable Science</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Floriculture</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Landscape Architecture</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Spices & Plantation Crops</a></li>
                      </ul>
                    </div>
                  </div>

                  <!-- Faculty 6: Fisheries Science -->
                  <div class="mega-menu-col">
                    <div class="faculty-group">
                      <h6 class="faculty-title"><i class="fas fa-fish"></i> Faculty of Fisheries Science</h6>
                      <ul class="dept-list">
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Aquaculture</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Fisheries Resources</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Fish Processing</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Fisheries Biology</a></li>
                      </ul>
                    </div>
                  </div>

                  <!-- Faculty 7: Home Science -->
                  <div class="mega-menu-col">
                    <div class="faculty-group">
                      <h6 class="faculty-title"><i class="fas fa-home"></i> Faculty of Home Science</h6>
                      <ul class="dept-list">
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Food & Nutrition</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Human Development</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Textile & Apparel</a></li>
                        <li><a href="#"><i class="fas fa-circle"></i> Dept. of Family Resource Mgmt.</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
                <div class="mega-menu-footer">
                  <a href="#programs" class="btn-view-all"><i class="fas fa-th-list me-2"></i>View All Programs & Courses</a>
                  <a href="#" class="btn-view-all btn-view-all-secondary"><i class="fas fa-download me-2"></i>Download Prospectus</a>
                </div>
              </div>
            </div>
          </li>

          <!-- Student Corner Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">Student Corner</a>
            <ul class="dropdown-menu agri-dropdown">
              <li><a class="dropdown-item" href="#"><i class="fas fa-id-card me-2"></i>Student Portal</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-book me-2"></i>Syllabus</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-calendar-alt me-2"></i>Academic Calendar</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-clipboard-list me-2"></i>Exam Notifications</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-poll me-2"></i>Results</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-file-alt me-2"></i>Old Question Papers</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-money-bill-wave me-2"></i>Fee Structure</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-medal me-2"></i>Scholarships</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-bed me-2"></i>Hostel</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-book-reader me-2"></i>Library</a></li>
            </ul>
          </li>

          <!-- Admissions Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">Admissions</a>
            <ul class="dropdown-menu agri-dropdown">
              <li><a class="dropdown-item" href="#"><i class="fas fa-user-plus me-2"></i>Apply Online</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf me-2"></i>Admission Prospectus</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-list-ol me-2"></i>Eligibility Criteria</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-rupee-sign me-2"></i>Fee Structure</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-phone-alt me-2"></i>Admission Helpline</a></li>
            </ul>
          </li>

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

  {{-- ===== HERO BANNER =====
      Switch between single or multi banner by commenting/un-commenting:
      - Single static banner:  @include('content.front-pages.partials.hero-single-banner')
      - Multi slider banner:   @include('content.front-pages.partials.hero-multi-banner')
  --}}
  @include('content.front-pages.partials.hero-multi-banner')
  {{-- @include('content.front-pages.partials.hero-single-banner') --}}

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

    // Smooth scroll for nav links (skip dropdown toggles)
    document.querySelectorAll('.agri-navbar .nav-link[href^="#"]').forEach(link => {
      link.addEventListener('click', function(e) {
        // Skip if this is a dropdown toggle
        if (this.classList.contains('dropdown-toggle')) return;

        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          // Close any open dropdowns first
          closeAllDropdowns();
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
      const spacer = document.createElement('div');
      spacer.style.height = navbarHeight + 'px';
      navbar.parentNode.insertBefore(spacer, navbar.nextSibling);
      document.body.prepend(navbar);
      navbar.style.position = 'fixed';
      navbar.style.top = '0';
      navbar.style.left = '0';
      navbar.style.right = '0';
      navbar.style.width = '100%';
      navbar.style.zIndex = '1050';
    }

    // ============================================================
    // ===== HOVER DROPDOWN SYSTEM (Desktop) + Click (Mobile) =====
    // ============================================================
    const HOVER_DELAY = 150; // ms delay before closing
    let closeTimer = null;
    let currentOpenDropdown = null;

    function openDropdown(navItem) {
      // Clear any pending close
      if (closeTimer) {
        clearTimeout(closeTimer);
        closeTimer = null;
      }

      // Close previously open dropdown if different
      if (currentOpenDropdown && currentOpenDropdown !== navItem) {
        closeDropdownImmediately(currentOpenDropdown);
      }

      const menu = navItem.querySelector('.dropdown-menu');
      const toggle = navItem.querySelector('.dropdown-toggle');
      if (menu && toggle) {
        navItem.classList.add('show');
        toggle.classList.add('show');
        toggle.setAttribute('aria-expanded', 'true');
        menu.classList.add('show');
        currentOpenDropdown = navItem;
      }
    }

    function closeDropdown(navItem) {
      // Delay closing so user can move mouse from toggle to menu
      closeTimer = setTimeout(() => {
        closeDropdownImmediately(navItem);
      }, HOVER_DELAY);
    }

    function closeDropdownImmediately(navItem) {
      const menu = navItem.querySelector('.dropdown-menu');
      const toggle = navItem.querySelector('.dropdown-toggle');
      if (menu && toggle) {
        navItem.classList.remove('show');
        toggle.classList.remove('show');
        toggle.setAttribute('aria-expanded', 'false');
        menu.classList.remove('show');
      }
      if (currentOpenDropdown === navItem) {
        currentOpenDropdown = null;
      }
    }

    function closeAllDropdowns() {
      document.querySelectorAll('.agri-navbar .nav-item.dropdown').forEach(item => {
        closeDropdownImmediately(item);
      });
      currentOpenDropdown = null;
    }

    function isDesktop() {
      return window.innerWidth >= 992;
    }

    // Attach hover events to each dropdown nav-item
    document.querySelectorAll('.agri-navbar .nav-item.dropdown').forEach(navItem => {
      const toggle = navItem.querySelector('.dropdown-toggle');
      const menu = navItem.querySelector('.dropdown-menu');

      // ---- DESKTOP: mouseenter / mouseleave ----
      navItem.addEventListener('mouseenter', function() {
        if (isDesktop()) {
          openDropdown(navItem);
        }
      });

      navItem.addEventListener('mouseleave', function() {
        if (isDesktop()) {
          closeDropdown(navItem);
        }
      });

      // Keep menu open while hovering over it
      if (menu) {
        menu.addEventListener('mouseenter', function() {
          if (isDesktop() && closeTimer) {
            clearTimeout(closeTimer);
            closeTimer = null;
          }
        });

        menu.addEventListener('mouseleave', function() {
          if (isDesktop()) {
            closeDropdown(navItem);
          }
        });
      }

      // ---- MOBILE: click toggle ----
      if (toggle) {
        toggle.addEventListener('click', function(e) {
          if (!isDesktop()) {
            e.preventDefault();
            e.stopPropagation();
            const isOpen = navItem.classList.contains('show');
            // Close all others
            document.querySelectorAll('.agri-navbar .nav-item.dropdown').forEach(other => {
              if (other !== navItem) closeDropdownImmediately(other);
            });
            // Toggle current
            if (isOpen) {
              closeDropdownImmediately(navItem);
            } else {
              openDropdown(navItem);
            }
          }
        });
      }
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(e) {
      if (!e.target.closest('.agri-navbar .nav-item.dropdown')) {
        closeAllDropdowns();
      }
    });

    // Close dropdowns on scroll (optional, smoother UX)
    window.addEventListener('scroll', function() {
      if (isDesktop() && currentOpenDropdown) {
        closeAllDropdowns();
      }
    }, { passive: true });

    // ============================================================
    // ===== HERO SLIDER ENGINE =====
    // Auto-detects: multi-banner (.hero-slide) or single bg slider (.hero-bg-slide)
    // ============================================================
    const heroSlides = document.querySelectorAll('.hero-slide');
    const bgSlides = document.querySelectorAll('.hero-bg-slide');
    // Use whichever set of slides exists (multi-banner takes priority)
    const slides = heroSlides.length > 0 ? heroSlides : bgSlides;
    const dots = document.querySelectorAll('.slider-dot');
    const prevBtn = document.getElementById('heroPrev');
    const nextBtn = document.getElementById('heroNext');
    let currentSlide = 0;
    let slideInterval = null;
    const SLIDE_DURATION = 6000; // 6 seconds per slide
    let isPaused = false;

    if (slides.length > 1) {
      function goToSlide(index) {
        // Remove active from all slides and dots
        slides.forEach(slide => {
          slide.classList.remove('active');
        });
        dots.forEach(dot => {
          dot.classList.remove('active');
          const progress = dot.querySelector('.dot-progress');
          if (progress) {
            progress.style.animation = 'none';
            progress.offsetHeight; // force reflow
            progress.style.animation = '';
          }
        });

        // Set new active
        currentSlide = index;
        if (slides[currentSlide]) {
          slides[currentSlide].classList.add('active');
        }
        if (dots[currentSlide]) {
          dots[currentSlide].classList.add('active');
        }
      }

      function nextSlide() {
        goToSlide((currentSlide + 1) % slides.length);
      }

      function prevSlide() {
        goToSlide((currentSlide - 1 + slides.length) % slides.length);
      }

      function startAutoplay() {
        stopAutoplay();
        slideInterval = setInterval(() => {
          if (!isPaused) nextSlide();
        }, SLIDE_DURATION);
      }

      function stopAutoplay() {
        if (slideInterval) {
          clearInterval(slideInterval);
          slideInterval = null;
        }
      }

      // Arrow click handlers
      if (nextBtn) {
        nextBtn.addEventListener('click', function() {
          nextSlide();
          startAutoplay();
        });
      }
      if (prevBtn) {
        prevBtn.addEventListener('click', function() {
          prevSlide();
          startAutoplay();
        });
      }

      // Dot click handlers
      dots.forEach(dot => {
        dot.addEventListener('click', function() {
          const slideIndex = parseInt(this.getAttribute('data-slide'));
          if (slideIndex !== currentSlide) {
            goToSlide(slideIndex);
            startAutoplay();
          }
        });
      });

      // Pause on hover
      const heroEl = document.querySelector('.agri-hero');
      if (heroEl) {
        heroEl.addEventListener('mouseenter', () => { isPaused = true; });
        heroEl.addEventListener('mouseleave', () => { isPaused = false; });
      }

      // Keyboard navigation
      document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowRight') { nextSlide(); startAutoplay(); }
        else if (e.key === 'ArrowLeft') { prevSlide(); startAutoplay(); }
      });

      // Touch swipe support
      let touchStartX = 0;
      if (heroEl) {
        heroEl.addEventListener('touchstart', function(e) {
          touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        heroEl.addEventListener('touchend', function(e) {
          const diff = touchStartX - e.changedTouches[0].screenX;
          if (Math.abs(diff) > 50) {
            diff > 0 ? nextSlide() : prevSlide();
            startAutoplay();
          }
        }, { passive: true });
      }

      // Start autoplay
      startAutoplay();
    }

  });
</script>
@endsection


