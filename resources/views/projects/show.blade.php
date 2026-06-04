@extends('layouts.app')

@section('content')
<div class="mb-4" data-aos="fade-up">
  <a href="/" class="btn btn-outline-secondary btn-sm mb-3">
    <i class="fas fa-arrow-left"></i> Back
  </a>
  <h1 class="mb-2"><i class="fas fa-folder-open"></i> {{ $project->title }}</h1>
  <p class="text-muted">{{ $project->year ?? 'N/A' }} • Full-Stack Development</p>
</div>

<div class="row gy-4">
  <div class="col-lg-8">
    <div class="card shadow-sm card-lg" data-aos="fade-right">
      <div class="card-body">
        <h5 class="mb-3"><i class="fas fa-file-alt"></i> Description</h5>
        <p class="lead">{{ $project->description }}</p>
        
        <hr>
        
        <h5 class="mb-3"><i class="fas fa-hammer"></i> Technology Stack</h5>
        <div class="mb-3">
          @foreach(explode(',', $project->tech_stack ?? '') as $tech)
            <span class="badge bg-primary">{{ trim($tech) }}</span>
          @endforeach
        </div>

        <hr>

        <h5 class="mb-3"><i class="fas fa-link"></i> Links</h5>
        <div class="d-flex gap-2 flex-wrap">
          @if($project->link)
            <a href="{{ $project->link }}" target="_blank" class="btn btn-primary">
              <i class="fas fa-globe"></i> View Project
            </a>
          @endif
          <a href="https://github.com/horrorbringer" target="_blank" class="btn btn-outline-secondary">
            <i class="fab fa-github"></i> GitHub Profile
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="card shadow-sm card-lg" data-aos="fade-left">
      <div class="card-body">
        <h5 class="mb-3"><i class="fas fa-info-circle"></i> Project Info</h5>
        <dl class="row">
          <dt class="col-sm-5">Completed:</dt>
          <dd class="col-sm-7">{{ $project->year ?? 'N/A' }}</dd>
          
          <dt class="col-sm-5">Status:</dt>
          <dd class="col-sm-7"><span class="badge bg-success">Completed</span></dd>
          
          <dt class="col-sm-5">Type:</dt>
          <dd class="col-sm-7">Full-Stack</dd>
        </dl>

        <hr>

        <h6 class="mb-2"><i class="fas fa-tags"></i> Skills Demonstrated</h6>
        <div class="small">
          @foreach(explode(',', $project->tech_stack ?? '') as $tech)
            <span class="d-inline-block mb-2">
              <i class="fas fa-check-circle text-success"></i> {{ trim($tech) }}
            </span><br>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
