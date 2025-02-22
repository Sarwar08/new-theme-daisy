<?php get_header(); ?>

<main class="container mx-auto px-8 py-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="col-span-2 ml-auto">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="prose max-w-none mb-8">
                        <h2 class="text-2xl font-bold mb-4"><?php the_title(); ?></h2>
                        <div class="text-gray-700"><?php the_content(); ?></div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p class="text-gray-700">No posts found.</p>
            <?php endif; ?>
        </div>
        <div class="flex justify-center">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>