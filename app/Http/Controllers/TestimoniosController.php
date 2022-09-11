<?php

namespace App\Http\Controllers;
use App\Models\Testimonios;
use Illuminate\Http\Request;

class TestimoniosController extends Controller
{
    public function index() {
        return view('pagina-principal', [
            'testimonios' => Testimonios::all()
        ]);
    }
}
