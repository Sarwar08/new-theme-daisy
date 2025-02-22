<aside class="w-full md:w-64 lg:w-80 p-4 bg-base-200 sticky top-0">
    <div class="space-y-6">
        <!-- Search Form -->
        <div>
            <h3 class="text-lg font-bold mb-2">Search</h3>
            <form role="search" method="get" action="<?php echo home_url('/'); ?>" class="flex">
                <input
                    type="text"
                    name="s"
                    placeholder="Search..."
                    class="input input-bordered w-full"
                    value="<?php echo get_search_query(); ?>"
                />
                <button type="submit" class="btn btn-primary ml-2">Go</button>
            </form>
        </div>

        <!-- Recent Posts -->
        <div>
            <h3 class="text-lg font-bold mb-2">Recent Posts</h3>
            <ul class="space-y-2">
                <?php
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 5,
                    'post_status' => 'publish',
                ));
                foreach ($recent_posts as $post) : ?>
                    <li>
                        <a href="<?php echo get_permalink($post['ID']); ?>" class="hover:text-blue-500">
                            <?php echo $post['post_title']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Categories -->
        <div>
            <h3 class="text-lg font-bold mb-2">Categories</h3>
            <ul class="space-y-2">
                <?php
                $categories = get_categories();
                foreach ($categories as $category) : ?>
                    <li>
                        <a href="<?php echo get_category_link($category->term_id); ?>" class="hover:text-blue-500">
                            <?php echo $category->name; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Tag Cloud -->
        <div>
            <h3 class="text-lg font-bold mb-2">Tags</h3>
            <div class="flex flex-wrap gap-2">
                <?php
                $tags = get_tags();
                foreach ($tags as $tag) : ?>
                    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge badge-outline hover:badge-primary">
                        <?php echo $tag->name; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Widget Area -->
        <?php if (is_active_sidebar('sidebar-1')) : ?>
            <div>
                <?php dynamic_sidebar('sidebar-1'); ?>
            </div>
        <?php endif; ?>
    </div>
</aside>