@extends('layouts.app')

@section('content')
<div class="row gy-4">
  <div class="col-lg-8">
    <section class="hero p-4 rounded card-lg shadow-sm" data-aos="fade-up">
      <div class="status-badge" data-aos="fade-down" data-aos-delay="100">
        <span class="status-dot"></span>
        Ready for a Challenge
      </div>

      <div class="d-flex align-items-start gap-4">
        <img src="https://avatars.githubusercontent.com/u/180524003?v=4" alt="Profile" class="profile-img">
        <div class="flex-grow-1">
          <h1 class="mb-1">Software Engineer Student</h1>
          <p class="typing-text" style="font-size:1.1rem"></p>
          <p class="text-muted mb-3">Year 4 • Backend & Full-Stack Development</p>

          <div class="social-icons mb-3">
            <a href="https://github.com/horrorbringer" target="_blank" title="GitHub">
              <i class="fab fa-github"></i>
            </a>
            <a href="mailto:vannysmilekh@gmail.com" title="Email">
              <i class="fas fa-envelope"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" title="LinkedIn">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>

          <div class="d-flex gap-2 flex-wrap">
            <a href="/projects" class="btn btn-primary scroll-to-projects">
              <i class="fas fa-project-diagram"></i> View Projects
            </a>
            <a href="#contact" class="btn btn-outline-secondary">
              <i class="fas fa-envelope"></i> Contact Me
            </a>
          </div>
        </div>
      </div>

      <div class="scroll-indicator">
        <i class="fas fa-chevron-down"></i>
      </div>
    </section>

    <!-- Statistics Row -->
    <div class="row g-3 mt-2">
      <div class="col-4" data-aos="fade-up" data-aos-delay="200">
        <div class="stats-counter">
          <div class="stats-number">6+</div>
          <div class="stats-label">Projects Built</div>
        </div>
      </div>
      <div class="col-4" data-aos="fade-up" data-aos-delay="300">
        <div class="stats-counter">
          <div class="stats-number">18</div>
          <div class="stats-label">Tech Skills</div>
        </div>
      </div>
      <div class="col-4" data-aos="fade-up" data-aos-delay="400">
        <div class="stats-counter">
          <div class="stats-number">4</div>
          <div class="stats-label">Year Experience</div>
        </div>
      </div>
    </div>

    <div id="projects"></div>
  </div>

  <div class="col-lg-4">
    <div class="card shadow-sm card-lg" data-aos="fade-up" data-aos-delay="200">
      <div class="card-body">
        <h5 id="contact"><i class="fas fa-envelope"></i> Contact</h5>
        <p>GitHub: <a href="https://github.com/horrorbringer" target="_blank">@horrorbringer</a></p>
        <p>Email: <a href="mailto:vannysmilekh@gmail.com">vannysmilekh@gmail.com</a></p>
        <hr>
        <h6><i class="fas fa-graduation-cap"></i> Education</h6>
        <p>B.Sc. in Computer Science (expected) — Year 4</p>
        <hr>
        <h6><i class="fas fa-check-circle"></i> Availability</h6>
        <p class="small text-muted">Open to internships and entry-level software engineering roles.</p>
      </div>
    </div>
  </div>
</div>

<!-- Skills Section -->
<section class="mt-5" data-aos="fade-up">
  <h5 class="mb-3">Technical Skills</h5>

  <div class="row">
    <div class="col-sm-6" data-aos="fade-right" data-aos-delay="100">
      <h6 class="mb-2"><i class="fas fa-code"></i> Languages & Frameworks</h6>
      <div>
        <span class="skill-chip"><i class="fab fa-java"></i>Java</span>
        <span class="skill-chip"><i class="fab fa-cuttlefish"></i>C#</span>
        <span class="skill-chip"><i class="fab fa-laravel"></i>Laravel</span>
        <span class="skill-chip"><i class="fab fa-python"></i>Django</span>
        <span class="skill-chip"><i class="fab fa-python"></i>FastAPI</span>
        <span class="skill-chip"><i class="fab fa-react"></i>React.js</span>
        <span class="skill-chip"><i class="fas fa-cube"></i>Next.js</span>
        <span class="skill-chip"><i class="fab fa-node-js"></i>Node.js</span>
        <span class="skill-chip"><i class="fab fa-flutter"></i>Flutter</span>
      </div>
    </div>

    <div class="col-sm-6" data-aos="fade-left" data-aos-delay="100">
      <h6 class="mb-2"><i class="fas fa-database"></i> Databases & DevOps</h6>
      <div>
        <span class="skill-chip"><i class="fas fa-database"></i>Oracle</span>
        <span class="skill-chip"><i class="fas fa-database"></i>MySQL</span>
        <span class="skill-chip"><i class="fas fa-database"></i>PostgreSQL</span>
        <span class="skill-chip"><i class="fas fa-database"></i>SQL Server</span>
        <span class="skill-chip"><i class="fab fa-docker"></i>Docker</span>
        <span class="skill-chip"><i class="fas fa-cogs"></i>DevOps</span>
        <span class="skill-chip"><i class="fas fa-cloud"></i>Cloud Computing</span>
        <span class="skill-chip"><i class="fas fa-server"></i>VPS Deploy</span>
        <span class="skill-chip"><i class="fas fa-globe"></i>Shared Hosting</span>
      </div>
    </div>
  </div>
</section>
@endsection
