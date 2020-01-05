<footer class="container-fluid py-4 mt-4 text-center text-light bg-dark">
        <h5> EAGJ <?php echo date('Y')?></h5>
        <?php 
        wp_nav_menu( array(
            'theme_location'    => 'menu-social',
            'container'         => 'nav',
            'container_class'   => '',
            'container_id'      => '',
            'menu_class'        => 'nav navbar-nav ml-auto ',            
        ) );
        ?>
    </footer>


    <!-- Optional JavaScript -->  
    <!-- Cargamos los archivos (pooper) que hay en functions.php y añade la barra de wordpress en el top -->
        <?php wp_footer()?>
</body>

</html>