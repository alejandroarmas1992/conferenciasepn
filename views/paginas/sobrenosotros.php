<main class="sobre">
    <h2 class="sobre__heading"><?php echo $titulo; ?></h2>
    <p class="sobre__descripcion">Conoce las nuevas tecnologías del mercado</p>

    <div class="sobre__grid">
        <div <?php aos_animacion(); ?> class="sobre__imagen">
            <picture>
                <source srcset="build/img/sobre_nosotros.avif" type="image/avif">
                <source srcset="build/img/sobre_nosotros.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_nosotros.jpg" alt="Imagen DevWebcamp">
            </picture>
        </div>

        <div  class="sobre__contenido">
            <p <?php aos_animacion(); ?> class="sobre__texto">Aliquam est elit, condimentum a justo vitae, fringilla dignissim tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis lorem eget felis dignissim dignissim. Praesent ac lorem convallis, ultrices neque quis, cursus lorem.</p>
            
            <p <?php aos_animacion(); ?> class="sobre__texto">Aliquam est elit, condimentum a justo vitae, fringilla dignissim tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis lorem eget felis dignissim dignissim. Praesent ac lorem convallis, ultrices neque quis, cursus lorem.</p>
        </div>
    </div>
</main>