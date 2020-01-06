<aside>
<?php if ( is_active_sidebar( 'main_sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'main_sidebar' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</aside>