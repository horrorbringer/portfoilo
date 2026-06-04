<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GitHubService
{
    private string $username = 'horrorbringer';
    private string $baseUrl = 'https://api.github.com';

    public function getRepositories(int $limit = 6)
    {
        try {
            $response = Http::get("{$this->baseUrl}/users/{$this->username}/repos", [
                'sort' => 'updated',
                'per_page' => $limit,
            ]);

            if ($response->successful()) {
                return $response->json();
            }
        } catch (\Exception $e) {
            return [];
        }

        return [];
    }

    public function formatRepos($repos)
    {
        return collect($repos)->map(function ($repo) {
            return [
                'name' => $repo['name'],
                'description' => $repo['description'] ?? 'No description',
                'url' => $repo['html_url'],
                'language' => $repo['language'] ?? 'N/A',
                'stars' => $repo['stargazers_count'] ?? 0,
                'forks' => $repo['forks_count'] ?? 0,
                'updated_at' => $repo['updated_at'],
            ];
        });
    }
}
