<?php get_header(); ?>

<section id="primary">
    <main id="main-front" class="font-sans">

        <!-- HERO -->
        <section class="relative w-full">
            <img
                src="https://consultas-piensoferal-es-2.local/wp-content/uploads/2026/03/imagen-fondo-inicio-consultorio-Editada-1.png"
                alt="Perro y gato"
                class="w-full object-cover">

            <div class="absolute inset-0 flex flex-col items-center justify-between py-10 px-4">

                <!-- Title -->
                <div class="text-center text-white font-bold mt-6">
                    <p class="text-5xl">Nutrición consciente</p>
                    <p class="text-4xl">para una</p>
                    <p class="text-5xl">vida saludable</p>
                </div>

                <!-- Buttons -->
                <div class="grid grid-cols-2 gap-4 gap-x-10 mb-6 w-full max-w-5xl">
                    <a href="/consultorio" class="homepage-button">CONSULTA AL NUTRICIONISTA</a>
                    <a href="/pide-tu-cita" class="homepage-button">PIDE CITA AL NUTRICIONISTA</a>
                    <a href="/guia-de-salud-animal/" class="homepage-button">GUIA DE SALUD ANIMAL</a>
                    <a href="/formacion" class="homepage-button">FORMACIÓN NUTRICIONAL ANIMAL</a>
                </div>

            </div>
        </section>

        <section class="bg-homepage-bg text-white">
            <?php
            while (have_posts()) :
                the_post(); ?>

                <div class="homepage-description">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
        </section>

    </main>
</section>

<?php get_footer(); ?>