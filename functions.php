<?php
function wd_finals2_widgets_init() {
    register_sidebar (
        array(
            'name'           => esc_html__('Sidebar', 'wd_finals2'),
            'id'             => 'sidebar-1',
            'description'    => esc_html__( 'Add sidebar widgets here.', 'wd_finals2' ),
            'before_widget'  => '<section id="%1$s" class="widget %2$s">' ,
            'after_widget'   => '</section>',
            'before_title'   =>  '<h2 class="widget-title">' ,
            'after_title'    => '</h2>' 

        )
    );
    
}
add_action('widgets_init','wd_finals2_widgets_init');
    ?>