{{-- ===== MULTI-IMAGE SLIDER HERO BANNER ===== --}}
{{-- Each slide has its own background image + unique hero content --}}
{{-- Includes: arrow navigation, dot progress, autoplay, Ken Burns effect --}}

<header class="agri-hero agri-hero--multi" id="home">

  <!-- Dark Overlay -->
  <div class="hero-overlay"></div>

  <!-- ===== SLIDES (background + content change together) ===== -->
  <div class="hero-slides-wrapper">

    <!-- Slide 1 -->
    <div class="hero-slide active" data-slide="0">
      <div class="hero-slide-bg" style="background-image: url('{{ asset('assets/img/hero/slide-1.png') }}')"></div>
      <div class="container hero-slide-content">
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
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="hero-slide" data-slide="1">
      <div class="hero-slide-bg" style="background-image: url('{{ asset('assets/img/hero/slide-2.png') }}')"></div>
      <div class="container hero-slide-content">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="hero-badge">
              <span class="badge-dot"></span>
              Learn by Doing
            </div>
            <h1 class="hero-title">
              Hands-On <span class="highlight">Field Training</span> & Research
            </h1>
            <p class="hero-subtitle">
              Experience practical learning on 500+ acres of experimental farms, advanced greenhouses, and real-world agricultural projects.
            </p>
            <div class="hero-buttons">
              <a href="#about" class="btn-hero-primary">
                <i class="fas fa-leaf"></i> Our Campus
              </a>
              <a href="#programs" class="btn-hero-secondary">
                <i class="fas fa-microscope"></i> Research Labs
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="hero-slide" data-slide="2">
      <div class="hero-slide-bg" style="background-image: url('{{ asset('assets/img/hero/slide-3.png') }}')"></div>
      <div class="container hero-slide-content">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="hero-badge">
              <span class="badge-dot"></span>
              Innovation Hub
            </div>
            <h1 class="hero-title">
              Cutting-Edge <span class="highlight">Research</span> & Innovation
            </h1>
            <p class="hero-subtitle">
              Our state-of-the-art laboratories drive breakthroughs in biotechnology, crop genetics, and sustainable farming technologies.
            </p>
            <div class="hero-buttons">
              <a href="#programs" class="btn-hero-primary">
                <i class="fas fa-flask"></i> Explore Research
              </a>
              <a href="#news" class="btn-hero-secondary">
                <i class="fas fa-newspaper"></i> Latest News
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="hero-slide" data-slide="3">
      <div class="hero-slide-bg" style="background-image: url('{{ asset('assets/img/hero/slide-4.png') }}')"></div>
      <div class="container hero-slide-content">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="hero-badge">
              <span class="badge-dot"></span>
              NAAC A+ Accredited
            </div>
            <h1 class="hero-title">
              A Legacy of <span class="highlight">65+ Years</span> of Excellence
            </h1>
            <p class="hero-subtitle">
              Ranked among India's top agricultural universities with world-class faculty, international collaborations, and a vibrant campus life.
            </p>
            <div class="hero-buttons">
              <a href="{{ Route::has('register') ? route('register') : '#' }}" class="btn-hero-primary">
                <i class="fas fa-paper-plane"></i> Apply Now
              </a>
              <a href="#contact" class="btn-hero-secondary">
                <i class="fas fa-phone-alt"></i> Contact Us
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Stats Card (always visible, floats on right) -->
  <div class="hero-stats-overlay">
    <div class="hero-stats-card">
      <div class="stat-item">
        <span class="stat-number">50+</span>
        <span class="stat-label">Academic Programs</span>
      </div>
      <div class="stat-item">
        <span class="stat-number">12:1</span>
        <span class="stat-label">Student-Faculty Ratio</span>
      </div>
      <div class="stat-item">
        <span class="stat-number">95%</span>
        <span class="stat-label">Placement Rate</span>
      </div>
    </div>
  </div>

  <!-- Slider Controls -->
  <div class="slider-controls">
    <button class="slider-arrow slider-prev" id="heroPrev" aria-label="Previous slide">
      <i class="fas fa-chevron-left"></i>
    </button>
    <button class="slider-arrow slider-next" id="heroNext" aria-label="Next slide">
      <i class="fas fa-chevron-right"></i>
    </button>
  </div>

  <!-- Dot Navigation -->
  <div class="slider-dots" id="heroSliderDots">
    <button class="slider-dot active" data-slide="0" aria-label="Go to slide 1">
      <span class="dot-progress"></span>
    </button>
    <button class="slider-dot" data-slide="1" aria-label="Go to slide 2">
      <span class="dot-progress"></span>
    </button>
    <button class="slider-dot" data-slide="2" aria-label="Go to slide 3">
      <span class="dot-progress"></span>
    </button>
    <button class="slider-dot" data-slide="3" aria-label="Go to slide 4">
      <span class="dot-progress"></span>
    </button>
  </div>

  <!-- Bottom Wave -->
  <div class="hero-wave"></div>
</header>
