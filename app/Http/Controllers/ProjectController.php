<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Services\GitHubService;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        
        $githubService = new GitHubService();
        $repos = $githubService->getRepositories(6);
        $githubRepos = $githubService->formatRepos($repos);

        return view('projects.index', compact('projects', 'githubRepos'));
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
}
