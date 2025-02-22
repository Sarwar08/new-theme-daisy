<?php get_header(); ?>

<main class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Main Content -->
        <div class="col-span-2">
            <h1 class="text-4xl font-bold mb-8">
                <?php
                if (is_category()) {
                    single_cat_title('Category: ');
                } elseif (is_tag()) {
                    single_tag_title('Tag: ');
                } elseif (is_author()) {
                    the_author();
                } elseif (is_date()) {
                    the_time('F Y');
                } else {
                    echo 'Archives';
                }
                ?>
            </h1>

            <?php if (have_posts()) : ?>
                <div class="grid gap-8">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="prose max-w-none">
                            <h2 class="text-2xl font-bold mb-2">
                                <a href="<?php the_permalink(); ?>" class="hover:text-blue-500">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="text-gray-700">
                                <?php the_excerpt(); ?>
                            </div>
                            <p class="text-sm text-gray-500 mt-2">
                                Posted on <?php the_date(); ?> in <?php the_category(', '); ?>
                            </p>
                        </article>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <p class="text-gray-700">No posts found.</p>
            <?php endif; ?>
        </div>

        <!-- Sidebar -->
        <div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>