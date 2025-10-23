@extends('layouts.main')
@section('content')
    <section class="page alt">
        <div class="wrap">
            <h1 class="hx">
                Matrículas
            </h1>
        </div>
        <div class="adm-hero">
          <div class="adm-opts">
            <!-- Opción 1: Educación Inicial -->
            <article class="adm-opt">
              <div class="adm-icon">👨‍👩‍👧‍👦</div>
              <div style="text-align:center">
                <div style="font-weight:700">Educación Inicial</div>
                <div style="opacity:.85">3, 4 y 5 años</div>
              </div>
              <!-- En MISMA pestaña: quita target. En NUEVA pestaña: deja target="_blank" -->
              <a class="btn-pill" href="{{ route('home.matriculas.inicial') }}">
                INGRESA AQUÍ <span>➜</span>
              </a>
            </article>

            <!-- Opción 2: Educación Primaria -->
            <article class="adm-opt">
              <div class="adm-icon">📚</div>
              <div style="text-align:center">
                <div style="font-weight:700">Educación Primaria</div>
                <div style="opacity:.85">1.º a 6.º grado</div>
              </div>
              <a class="btn-pill" href="?p=matriculas&nivel=primaria#proceso-primaria">
                INGRESA AQUÍ <span>➜</span>
              </a>
            </article>
          </div>
        </div>
    </section>
@endsection