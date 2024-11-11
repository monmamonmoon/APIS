<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function callExternalApi()
    {
        $client = new Client();

        // Make an API request to OpenWeatherMap (replace with your API key)
        $response = $client->request('GET', 'https://api.openweathermap.org/data/2.5/weather', [
            'query' => [
                'q' => 'London',
                'appid' => 'bd5e378503939ddaee76f12ad7a97608' // Replace with your OpenWeatherMap API key
            ]
        ]);

        // Get the response body
        $body = $response->getBody();
        $weatherData = json_decode($body, true);

        // Return the data as JSON
        // return response()->json($weatherData);
        return view('weather', ['weatherData' => $weatherData]);

    }
}
