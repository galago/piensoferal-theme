<?php get_header(); ?>

<section id="primary">
    <main id="main-front" class="font-sans">

        <!-- HERO -->
        <section class="relative w-full h-screen min-h-[680px] overflow-hidden">
            <img
                src="https://nutricion.kasaludintegral.com/wp-content/uploads/2026/03/imagen-fondo-inicio-consultorio-Editada.png"
                alt="Perro y gato"
                class="absolute inset-0 object-cover object-center w-full h-full">

            <div class="relative z-10 flex flex-col items-center justify-between h-full px-4 pt-24 pb-10 md:px-8 md:pt-28 lg:pb-12">

                <!-- Title -->
                <div class="mt-4 font-bold leading-tight text-center text-white">
                    <p class="text-4xl md:text-6xl">Nutrición consciente</p>
                    <p class="text-3xl md:text-5xl">para una</p>
                    <p class="text-4xl md:text-6xl">vida saludable</p>
                </div>

                <!-- Buttons -->
                <div class="grid w-full max-w-6xl grid-cols-1 gap-4 md:grid-cols-2 md:gap-x-16 md:gap-y-8 lg:gap-x-24">
                    <a href="/consultorio-nutricion-animal/" class="homepage-button">CONSULTA AL NUTRICIONISTA</a>
                    <a href="/pide-tu-cita" class="homepage-button">PIDE CITA AL NUTRICIONISTA</a>
                    <a href="/guia-salud-animal/" class="homepage-button">GUIA DE SALUD ANIMAL</a>
                    <a href="/formacion-nutricion-animal/" class="homepage-button">FORMACIÓN NUTRICIONAL ANIMAL</a>
                </div>

            </div>
        </section>

        <section class="px-4 py-12 text-white bg-homepage-bg md:px-8 lg:py-16">
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