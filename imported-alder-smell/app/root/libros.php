
<article class="libro <?= $x -> categoria ?>">
  <h2>
    <?= $x -> titulo_producto  ?>
  </h2>
  
    <a
      class="libro3d-container"
      href="https://picsum.photos/600/400"
      target="_blank"
      rel="noreferrer noopener"
    >
      <div class="libro3d">
        <img
          src="<?= $x -> imagen  ?>"
          />
      </div>
    </a>

  <p descripcion>
      <?= $x->descripcion ?>
  </p>
  <p precio>
    <?= $x->precio ?>
  </p>
</article>