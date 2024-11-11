<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiApiController extends Controller
{
    public function fetchGithubRepos()
{
    try {
        // Create a new Guzzle HTTP client
        $client = new \GuzzleHttp\Client();

        // Send a GET request to GitHub API to fetch repositories for the user 'octocat'
        $response = $client->request('GET', 'https://api.github.com/users/octocat/repos', [
            'headers' => [
                'Accept' => 'application/vnd.github.v3+json', // Set appropriate GitHub API version header
                'User-Agent' => 'YourAppName', // GitHub requires a User-Agent header, set your app's name here
            ]
        ]);

        // Decode the JSON response body into a PHP array
        $repos = json_decode($response->getBody(), true);

        // Return the data as a JSON response to the client
        return response()->json($repos);

    } catch (\GuzzleHttp\Exception\RequestException $e) {
        // Handle any errors that occur during the request (e.g., network errors, invalid API call)
        return response()->json(['error' => 'Unable to fetch repositories: ' . $e->getMessage()], 500);
    }
}

    public function fetchAstronomyPicture()
    {
        try {
            // Create a new Guzzle HTTP client
            $client = new \GuzzleHttp\Client();

            // Send a GET request to NASA's APOD API endpoint
            $response = $client->request('GET', 'https://api.nasa.gov/planetary/apod', [
                'query' => [
                    'api_key' => env('WgmmVYvZG4cPG0SmrtD5u1JgC6gO77wykVWrr3D0'), // Use environment variable for API key
                ]
            ]);

            // Decode the JSON response into a PHP array
            $pictureData = json_decode($response->getBody(), true);

            // Return the picture data as a JSON response
            return response()->json($pictureData);

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Handle any errors that occur during the request (e.g., network issues, invalid API call)
            return response()->json(['error' => 'Unable to fetch the Astronomy Picture of the Day: ' . $e->getMessage()], 500);
        }
    }

}
