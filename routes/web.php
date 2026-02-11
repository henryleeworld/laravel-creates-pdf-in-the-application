<?php

use Illuminate\Support\Facades\Route;
use Spatie\LaravelPdf\Facades\Pdf;

Pdf::view('welcome')->save(storage_path('pdfs/welcome.pdf'));
