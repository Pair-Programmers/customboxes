<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPagesController extends Controller
{
    public function showAboutUsPage()
    {
        return view('pages.about-us');
    }

    public function showPrivacyPolicyPage()
    {
        return view('pages.contact-us');
    }

    public function showTermAndConditionsPage()
    {
        return view('pages.contact-us');
    }

    public function showFAQSPage()
    {
        return view('pages.contact-us');
    }

}
