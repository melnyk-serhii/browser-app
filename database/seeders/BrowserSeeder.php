<?php

namespace Database\Seeders;

use App\Models\Browser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrowserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $browsers = [
            [
                'name' => 'Chrome',
                'photo' => 'chrome.jpg',
                'information' => 'Chrome is a fast and secure web browser developed by Google.',
                'initial_release' => 'September 2, 2008',
                'standard' => 'HTML5',
                'repository' => 'https://github.com/googlechrome',
                'website' => 'https://www.google.com/chrome/',
            ],
            [
                'name' => 'Firefox',
                'photo' => 'firefox.jpg',
                'information' => 'Firefox is a popular open-source web browser known for its privacy and customization options.',
                'initial_release' => 'November 9, 2004',
                'standard' => 'HTML5',
                'repository' => 'https://github.com/mozilla',
                'website' => 'https://www.mozilla.org/en-US/firefox/',
            ],
            [
                'name' => 'Safari',
                'photo' => 'safari.jpg',
                'information' => 'Safari is the default web browser for Apple devices and offers a seamless browsing experience.',
                'initial_release' => 'January 7, 2003',
                'standard' => 'HTML5',
                'repository' => 'https://developer.apple.com/safari/',
                'website' => 'https://www.apple.com/safari/',
            ],
            [
                'name' => 'Edge',
                'photo' => 'edge.jpg',
                'information' => 'Edge is a web browser developed by Microsoft that provides fast and secure browsing.',
                'initial_release' => 'July 29, 2015',
                'standard' => 'HTML5',
                'repository' => 'https://github.com/MicrosoftEdge',
                'website' => 'https://www.microsoft.com/edge',
            ],
            [
                'name' => 'Opera',
                'photo' => 'opera.jpg',
                'information' => 'Opera is a feature-rich web browser known for its built-in ad blocker and VPN.',
                'initial_release' => 'April 16, 1995',
                'standard' => 'HTML5',
                'repository' => 'https://github.com/operasoftware',
                'website' => 'https://www.opera.com/',
            ],
            [
                'name' => 'Brave',
                'photo' => 'brave.jpg',
                'information' => 'Brave is a privacy-focused web browser that blocks ads and trackers by default.',
                'initial_release' => 'January 20, 2016',
                'standard' => 'HTML5',
                'repository' => 'https://github.com/brave',
                'website' => 'https://brave.com/',
            ],
        ];
        

        foreach ($browsers as $browserData) {
            Browser::create($browserData);
        }
    }
}


