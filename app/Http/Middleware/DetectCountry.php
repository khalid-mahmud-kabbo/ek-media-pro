<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class DetectCountry
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('detected_country')) {
            try {
                // Get real IP address from headers or fallback
                $forwarded = $request->header('X-Forwarded-For');
                $ip = $forwarded ? trim(explode(',', $forwarded)[0]) : $request->ip();

                // Optional fallback for localhost testing
                if ($ip === '127.0.0.1' || $ip === '::1') {
                    $ip = '103.231.161.154'; // Example Bangladesh IP
                }

                // Use ip-api.com to detect country
                $response = Http::get("http://ip-api.com/json/{$ip}?fields=status,country,countryCode");

                if ($response->successful() && $response['status'] === 'success') {
                    session([
                        'detected_country' => $response['country'],
                        'detected_country_code' => strtolower($response['countryCode']),
                    ]);
                } else {
                    session([
                        'detected_country' => null,
                        'detected_country_code' => null,
                    ]);
                }
            } catch (\Exception $e) {
                session([
                    'detected_country' => null,
                    'detected_country_code' => null,
                ]);
            }
        }

        // Share with all views
        View::share('detectedCountry', session('detected_country'));
        View::share('detectedCountryCode', session('detected_country_code'));

        return $next($request);
    }
}
