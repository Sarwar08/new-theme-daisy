<?php get_header(); ?>

<main class="container mx-auto px-4 py-8">
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
                        <div class="mt-8">
                            <p class="text-sm text-gray-500">
                                Posted on <?php the_date(); ?> by <?php the_author(); ?>
                            </p>
                            <div class="mt-4">
                                <?php the_tags('<span class="text-sm text-gray-500">Tags: ', ', ', '</span>'); ?>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p class="text-gray-700">No post found.</p>
            <?php endif; ?>
        </div>

        <!-- Sidebar -->
        <div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>