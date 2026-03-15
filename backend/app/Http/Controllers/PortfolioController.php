<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                "title" => "Laravel Blog",
                "description" => "Simple blog built with Laravel",
                "link" => "https://github.com/"
            ],
            [
                "title" => "React Dashboard",
                "description" => "Admin dashboard with React",
                "link" => "https://github.com/"
            ],
            [
                "title" => "Docker Setup",
                "description" => "Laravel + Docker environment",
                "link" => "https://github.com/"
            ]
        ];

        return view('portfolio', compact('projects'));
    }
}
