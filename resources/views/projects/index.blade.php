@extends('layouts.app')

@section('content')
<div class="mb-4" data-aos="fade-up">
  <h1 class="mb-2"><i class="fas fa-project-diagram"></i> Projects</h1>
  <p class="text-muted">A selection of projects showcasing backend development, full-stack architecture, and cloud deployment expertise.</p>
</div>

<!-- Featured Projects -->
<div class="mb-5">
  <h4 class="mb-3"><i class="fas fa-star"></i> Featured Projects</h4>
  <div class="row g-4">
    @forelse($projects as $project)
      <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
        <div class="card shadow-sm card-lg h-100 transition-all hover-lift">
          <div class="card-body d-flex flex-column">
            <div class="mb-3">
              <h5 class="card-title mb-1">{{ $project->title }}</h5>
              <span class="badge bg-info text-dark"><i class="fas fa-calendar-alt"></i> {{ $project->year ?? 'N/A' }}</span>
            </div>
            
            <p class="card-text text-muted flex-grow-1">{{ Str::limit($project->description, 160) }}</p>
            
            <div class="mb-3">
              <p class="mb-2"><strong><i class="fas fa-hammer"></i> Tech Stack:</strong></p>
              <div>
                @foreach(explode(',', $project->tech_stack ?? '') as $tech)
                  <span class="badge bg-secondary text-white">{{ trim($tech) }}</span>
                @endforeach
              </div>
            </div>
            
            <div class="d-flex gap-2 pt-2">
              <a href="{{ route('projects.show', $project) }}" class="btn btn-sm btn-primary flex-grow-1">
                <i class="fas fa-eye"></i> View Details
              </a>
              @if($project->link)
                <a href="{{ $project->link }}" target="_blank" class="btn btn-sm btn-outline-primary">
                  <i class="fas fa-external-link-alt"></i>
                </a>
              @endif
            </div>
          </div>
        </div>
      </div>
    @empty
      <div class="col-12">
        <div class="alert alert-info text-center" role="alert">
          <i class="fas fa-inbox"></i> No featured projects yet.
        </div>
      </div>
    @endforelse
  </div>
</div>

<!-- GitHub Repositories -->
<div>
  <h4 class="mb-3"><i class="fab fa-github"></i> Recent GitHub Repositories</h4>
  <div class="row g-4">
    @forelse($githubRepos as $repo)
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ ($loop->index + count($projects)) * 100 }}">
        <a href="{{ $repo['url'] }}" target="_blank" class="text-decoration-none">
          <div class="card shadow-sm card-lg h-100 transition-all hover-lift text-dark">
            <div class="card-body d-flex flex-column">
              <div class="mb-3">
                <h6 class="card-title mb-1">
                  <i class="fab fa-github"></i> {{ $repo['name'] }}
                </h6>
                <small class="text-muted">Updated {{ \Carbon\Carbon::parse($repo['updated_at'])->diffForHumans() }}</small>
              </div>
              
              <p class="card-text text-muted flex-grow-1 small">
                {{ Str::limit($repo['description'], 120) }}
              </p>
              
              <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                <span class="badge bg-dark">
                  <i class="fas fa-code"></i> {{ $repo['language'] }}
                </span>
                <div class="small text-muted">
                  <i class="fas fa-star text-warning"></i> {{ $repo['stars'] }}
                  <i class="fas fa-code-branch"></i> {{ $repo['forks'] }}
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    @empty
      <div class="col-12">
        <div class="alert alert-info text-center" role="alert">
          <i class="fas fa-github"></i> GitHub repositories could not be loaded.
        </div>
      </div>
    @endforelse
  </div>
</div>

<style>
.hover-lift{transition:transform 0.3s ease,box-shadow 0.3s ease}
.hover-lift:hover{transform:translateY(-8px);box-shadow:0 12px 24px rgba(0,0,0,0.15)}
</style>
@endsection
