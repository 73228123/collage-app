<?php

namespace App\Http\Controllers;

use App\Models\Seccione;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $marca = $this->getMarca();
        
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

        return view('home', compact('marca', 'slides', 'flyers', 'programas'));
    }

    public function matriculas(){
        $marca = $this->getMarca();
        return view('matriculas',compact('marca'));
    }

    public function matriculas_inicial(){
      $marca = $this->getMarca();
      $secciones = Seccione::where('nivel','Inicial')->get();
      //return $secciones;
      return view('matriculas_inicial',compact('marca','secciones'));
    }

    public function getMarca(){
        return [
            'nombre'  => 'I.E. 379 Mundo Mágico',
            'logo'    => 'recursos/I.E.I 004.png', // logo en /recursos
            'eslogan' => 'Descubre un mundo de crecimiento y diversión',
          ];
    }

}
