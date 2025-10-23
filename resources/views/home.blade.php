@extends('layouts.main')
@section('content')
    <section class="hero">
    <div class="wrap hero-grid">
      <aside class="flyer-box">
        <div class="flyer-head">
          <h3>Cronograma</h3>
          <div class="rail-nav">
            <button type="button" onclick="JMM.railScroll(-1)">‹</button>
            <button type="button" onclick="JMM.railScroll(1)">›</button>
          </div>
        </div>
        <div id="rail" class="rail">
          <?php foreach($flyers as $f): ?>
            <a class="card-f" href="<?= $f['link'] ?>">
              <img src="<?= $f['img'] ?>" alt="<?= htmlspecialchars($f['t']) ?>">
              <div class="cap"><?= htmlspecialchars($f['t']) ?></div>
            </a>
          <?php endforeach; ?>
        </div>
      </aside>

      <section class="slider" aria-roledescription="carrusel">
        <?php foreach($slides as $k=>$s): ?>
          <article class="slide" data-slide="<?= $k ?>" style="display:<?= $k===0?'block':'none' ?>;background-image:url('<?= $s['img'] ?>')">
            <div class="txt">
              <h2><?= htmlspecialchars($s['h2']) ?></h2>
              <p><?= htmlspecialchars($s['p']) ?></p>
              <a class="btn" href="<?= $s['link'] ?>"><?= htmlspecialchars($s['cta']) ?></a>
            </div>
            <div class="slider-nav">
              <button type="button" onclick="JMM.prevSlide()">‹</button>
              <button type="button" onclick="JMM.nextSlide()">›</button>
            </div>
          </article>
        <?php endforeach; ?>
      </section>
    </div>
  </section>
@endsection