<?php get_header(); ?>

<main class="container mx-auto px-8 py-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Main Content -->
        <div class="col-span-2">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="prose max-w-none">
                        <h1 class="text-4xl font-bold mb-4"><?php the_title(); ?></h1>
                        <div class="text-gray-700">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p class="text-gray-700">No page found.</p>
            <?php endif; ?>
        </div>

        <!-- Sidebar -->
        <div class="flex justify-center jjustify-self-end w-64">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>