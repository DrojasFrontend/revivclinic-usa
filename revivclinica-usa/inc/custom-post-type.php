<?php

// Agregar el tipo de entrada personalizado
function crear_tipo_paciente_feliz() {
  $labels = array(
      'name'               => 'Pacientes Felices',
      'singular_name'      => 'Paciente Feliz',
      'menu_name'          => 'Pacientes Felices',
      'name_admin_bar'     => 'Paciente Feliz',
      'add_new'            => 'Agregar Nuevo',
      'add_new_item'       => 'Agregar Nuevo Paciente Feliz',
      'new_item'           => 'Nuevo Paciente Feliz',
      'edit_item'          => 'Editar Paciente Feliz',
      'view_item'          => 'Ver Paciente Feliz',
      'all_items'          => 'Todos los Pacientes Felices',
      'search_items'       => 'Buscar Pacientes Felices',
      'parent_item_colon'  => 'Paciente Feliz Padre:',
      'not_found'          => 'No se encontraron pacientes felices.',
      'not_found_in_trash' => 'No se encontraron pacientes felices en la papelera.'
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'happy-patients' ), // Cambia 'happy-patients' por el slug que desees en inglés
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array( 'title', 'editor', 'thumbnail' ),
      'taxonomies'         => array( 'category' ), 
  );

  register_post_type( 'paciente_feliz', $args );
}

// Engancha la función a la acción 'init'
add_action( 'init', 'crear_tipo_paciente_feliz' );
