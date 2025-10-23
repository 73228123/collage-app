<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])
->name('home.index');

Route::get('/matriculas',[HomeController::class,'matriculas'])
->name('home.matriculas');

Route::get('/matriculas/inicial',[HomeController::class,'matriculas_inicial'])
->name('home.matriculas.inicial');



Route::get('/test', function () {
  $marca = [
    'nombre'  => 'I.E. 379 Mundo Mágico',
    'logo'    => 'recursos/logo-mundom.png', // logo en /recursos
    'eslogan' => 'Descubre un mundo de crecimiento y diversión',
  ];

  $slides = [
    ['img' => 'recursos/hero-1.jpg', 'h2' => 'Aprender jugando', 'p' => 'Ambientes seguros y afectivos.', 'cta' => 'Conoce los programas', 'link' => '?p=programas'],
    ['img' => 'recursos/hero-2.jpg', 'h2' => 'Familias + Escuela', 'p' => 'Desarrollo integral y acompañamiento.', 'cta' => 'Matrículas abiertas', 'link' => '?p=matriculas'],
    ['img' => 'recursos/hero-3.jpg', 'h2' => 'Arte y movimiento', 'p' => 'Exploración, creatividad y psicomotricidad.', 'cta' => 'Ver talleres', 'link' => '?p=programas#talleres'],
  ];

  $flyers = [
    ['img' => 'recursos/flyer-inicio.jpg', 't' => 'Inicio de clases', 'link' => '?p=matriculas'],
    ['img' => 'recursos/flyer-verano.jpg', 't' => 'Verano divertido', 'link' => '?p=programas'],
    ['img' => 'recursos/flyer-qaliwarma.jpg', 't' => 'Qaliwarma', 'link' => '?p=qaliwarma'],
    ['img' => 'recursos/flyer-taller.jpg', 't' => 'Talleres creativos', 'link' => '?p=programas#talleres'],
  ];

  $programas = [
    ['icono' => '🎒', 'slug' => 'inicial', 'titulo' => 'Educación Inicial', 'desc' => 'Formación integral para 3, 4 y 5 años.'],
    ['icono' => '⏰', 'slug' => 'temprana', 'titulo' => 'Estimulación Temprana', 'desc' => '0–3 años con enfoque sensorial y motriz.'],
    ['icono' => '🎨', 'slug' => 'talleres', 'titulo' => 'Talleres Creativos', 'desc' => 'Música, arte, cuentacuentos, psicomotricidad.'],
  ];

  $convenios = [
    ['logo' => 'recursos/logo-qaliwarma.png', 'slug' => 'qaliwarma', 'titulo' => 'Qaliwarma', 'desc' => 'Alimentación saludable para nuestros niños.'],
    ['logo' => 'recursos/logo-beca18.png', 'slug' => 'beca18', 'titulo' => 'Beca 18 (orientación)', 'desc' => 'Asesoría a familias sobre programas estatales.'],
  ];

  return view('index', compact('marca', 'slides', 'flyers', 'programas', 'convenios'));
});
