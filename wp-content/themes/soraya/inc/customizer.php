
<?php
// SECTION DEBUT CUSTOMIZE
function soraya_customize_register($wp_customize) {

  $wp_customize -> add_section(
    'banner',
    array(
      'title'         => 'Bannière',
      'description'   => 'Image de fond pour la page de blog'
    )
);

  // NOUVEAU PARAMETRE
  $wp_customize->add_setting(
    'banner_image',
    array(
      'default'     => get_template_directory() .'/assets/images/joey-thompson-unsplash.jpg',
      'type'        => 'theme_mod' // valeur par défaut
    )
  );

// AJOUTER NOUVEAU CONTROL CUSTOMIZER
  // $wp_customize->add_control(
  //
  //   new WP_Customize_Image_control(
  //   $wp_customize,
  //   'banner_image',
  //   array (
  //     'label' => 'Image de fond',
  //     'section' => 'banner',
  //     'setting' => 'banner_image'
  //   )
  //   )
  // );
  // TODO - En autonomie - Ajouter un nouveau panel (add_panel) au Customizer
  // identifiant : 'front_page'
  // titre : 'Page d\'accueil principale'
  // appel de fonction/prototype similaire à add_section() !
  // IMPORTANT : la seule différence entre un panel est une section est que le panel
  // est fait pour contenir des sections (affichées comme sous-sections donc).
  // C'est bien utile pour ranger les options du Customizer par zone/ objectif/ similitude...
  // À vous de décider !
  $wp_customize -> add_panel(
    'front_page',
    array(
      'title'         => 'Page d\'accueil principale' // On ne détermine que le titre,
      // la description n'est pas prise en charge pour le panel (ne s'affichera pas)
    )
  );

  // TODO - En autonomie - Ajouter une nouvelle section au Customizer
  // titre : 'Conteneur',
  // identifiant : 'fp_container'
  // description : 'Réglages du conteneur de la page d\'accueil principale'
  // Cette nouvelle section est une sous-section de 'front_page' (clé 'panel')
  $wp_customize -> add_section(
    'fp_container',
    array(
      'title'         => 'Conteneur',
      'description'   => 'Réglages du conteneur de la page d\'accueil principale',
      'panel'         => 'front_page'
    )
  );

  // TODO - En autonomie - Ajouter un nouveau paramètre au Customizer
  // identifiant : 'fp_container_image'
  // valeur par défaut : chemin vers l'image '/assets/images/louvre-amy-leigh-barnard-unsplash.jpg'
  // - utiliser la fonction get_template_directory()
  // type : 'theme_mod'
  $wp_customize->add_setting(
    'fp_container_image',
    array(
    'default'   => get_template_directory() . '/assets/images/alex-bracken-unsplash.jpg',
    'type'      => 'theme_mod'
    )
  );

  $wp_customize->add_setting(
    'fp_container_image2',
    array(
    'default'   => get_template_directory() . '/assets/images/yannis-papanastasopoulos-unsplash.jpg',
    'type'      => 'theme_mod'
    )
  );

  $wp_customize->add_setting(
    'fp_container_image_small1',
    array(
    'default'   => get_template_directory() . '/assets/images/bougie.png',
    'type'      => 'theme_mod'
    )
  );

  $wp_customize->add_setting(
    'fp_container_image_small2',
    array(
    'default'   => get_template_directory() . '/assets/images/son.png',
    'type'      => 'theme_mod'
    )
  );

  $wp_customize->add_setting(
    'fp_container_image_small3',
    array(
    'default'   => get_template_directory() . '/assets/images/ticket.png',
    'type'      => 'theme_mod'
    )
  );

  // TODO - En autonomie - Ajouter un contrôleur associé au paramètre 'fp_container_image'
  // et permettant de sélectionner une image depuis la bibliothèque de médias WP
  // libellé : 'Image de fond'
  // description : 'Image de fond du conteneur de la page d\'accueil'
  // section : 'fp_container'
  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'fp_container_image',
      array(
        'label'   => 'Image de fond',
        'description'   => 'Image de fond du conteneur de la page d\'accueil',
        'section' => 'fp_container',
        'setting'  => 'fp_container_image'
      )
    )
  );


  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'fp_container_image2',
      array(
        'label'   => 'Image de présentation',
        'description'   => 'Image du conteneur de la page d\'accueil',
        'section' => 'fp_container',
        'setting'  => 'fp_container_image'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'fp_container_image_mini',
      array(
        'label'   => 'small picture',
        'description'   => 'small conteneur de la page d\'accueil',
        'section' => 'fp_container',
        'setting'  => 'fp_container_image'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'fp_container_image_mini2',
      array(
        'label'   => 'small picture',
        'description'   => 'small conteneur de la page d\'accueil',
        'section' => 'fp_container',
        'setting'  => 'fp_container_image'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'fp_container_image_mini3',
      array(
        'label'   => 'small picture',
        'description'   => 'small conteneur de la page d\'accueil',
        'section' => 'fp_container',
        'setting'  => 'fp_container_image'
      )
    )
  );

  // TODO - En autonomie - Ajouter un nouveau paramètre au Customizer
  // identifiant : 'fp_container_boxy'
  // valeur par défaut : false (booléen)
  // type : 'theme_mod'
  $wp_customize->add_setting(
    'fp_container_boxy',
    array(
    'default'     => false,
    'type'        => 'theme_mod'
    )
  );



  $wp_customize->add_section(
    'Checkbox',
    array(
      'title'         => 'Zone de widgets latérale',
      'description'   => 'Masquer la zone de widgets',
      'panel'         => 'option-widget-sidebar'
    )

  );

  $wp_customize->add_setting(
    'widgets-sidebar',
    array(
    'default'     => false,
    'type'        => 'theme_mod'
    )
  );
  $wp_customize->add_control(
    'widgets-sidebar',
    array(
      'label'          => 'Zone de widgets latérale',
      'description'    => 'Masquer la zone de widgets',
      'section'        => 'Checkbox',
      'setting'        => 'widgets-sidebar',
      'type'           => 'checkbox'
    )
  );

  $wp_customize->add_control(
    'fp_container_boxy',
    array(
      'label'          => 'Affichage avec effet boxy',
      'description'    => 'Style du conteneur de la page d\'accueil.',
      'section'        => 'fp_container',
      'setting'        => 'fp_container_boxy',
      'type'           => 'checkbox'
    )
  );

  // TODO - En autonomie - Ajouter une nouvelle section au Customizer
  // titre : 'Textes et styles',
  // identifiant : 'fp_texts'
  // description : 'Réglages pour les textes de la page d\'accueil principale.'
  // Cette nouvelle section est une sous-section de 'front_page' (clé 'panel')
  $wp_customize -> add_section(
    'fp_texts',
    array(
      'title'         => 'Textes et styles',
      'description'   => 'Réglages pour les textes de la page d\'accueil principale.',
      'panel'         => 'front_page'
    )
  );

  // TODO - En autonomie - Ajouter un nouveau paramètre au Customizer
  // identifiant : 'fp_texts_title'
  // valeur par défaut : 'Bienvenue !'
  // type : 'theme_mod'
  $wp_customize->add_setting(
    'fp_texts_title',
    array(
    'default'     => 'Bienvenue !',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_title_extra',
    array(
    'default'     => 'big title',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_title2',
    array(
    'default'     => '2eme titre',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_title3',
    array(
    'default'     => '3eme titre',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_title4',
    array(
    'default'     => '3eme titre',
    'type'        => 'theme_mod'
    )
  );

  // TODO - En autonomie - Ajouter un contrôleur associé au paramètre 'fp_texts_title'
  // libellé : 'Titre principal'
  // description : 'Texte du titre principal'
  // section : 'fp_texts'
  // type : texte - Voir doc pour connaître la valeur à passer :
  // https://developer.wordpress.org/reference/classes/wp_customize_control/__construct/
  $wp_customize->add_control(
    'fp_texts_title',
    array(
      'label'          => 'Titre principal',
      'description'    => 'Texte du titre principal',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_title',
      'type'           => 'text'
    )
  );



  $wp_customize->add_control(
    'fp_texts_title2',
    array(
      'label'          => '2eme titre ',
      'description'    => 'Texte du 2eme titre',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_title',
      'type'           => 'text'
    )
  );

  $wp_customize->add_control(
    'fp_texts_title3',
    array(
      'label'          => '3eme titre ',
      'description'    => 'Texte du 3eme titre',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_title',
      'type'           => 'text'
    )
  );

  $wp_customize->add_control(
    'fp_texts_title4',
    array(
      'label'          => '4eme titre ',
      'description'    => 'Texte du 4eme titre',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_title',
      'type'           => 'text'
    )
  );



  // TODO - En autonomie - Ajouter un nouveau paramètre au Customizer
  // identifiant : 'fp_texts_title_size'
  // valeur par défaut : 90
  // type : 'theme_mod'
  $wp_customize->add_setting(
    'fp_texts_title_size',
    array(
    'default'     => 90,
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_title_size2',
    array(
    'default'     => 40,
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_title_size3',
    array(
    'default'     => 40,
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_title_size4',
    array(
    'default'     => 40,
    'type'        => 'theme_mod'
    )
  );

  // TODO - En autonomie - Ajouter un contrôleur associé au paramètre 'fp_texts_title_size'
  // libellé : 'Taille du titre'
  // description : 'Taille du texte du titre principal'
  // section : 'fp_texts'
  // type : nombre - Voir doc pour connaître la valeur à passer :
  // https://developer.wordpress.org/reference/classes/wp_customize_control/__construct/
  $wp_customize->add_control(
    'fp_texts_title_size',
    array(
      'label'          => 'Taille du titre',
      'description'    => 'Taille du texte du titre principal',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_title_size',
      'type'           => 'number'
    )
  );

  $wp_customize->add_control(
    'fp_texts_title_size2',
    array(
      'label'          => 'Taille du titre',
      'description'    => 'Taille du texte du petit titre 1',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_title_size',
      'type'           => 'number'
    )
  );

  $wp_customize->add_control(
    'fp_texts_title_size3',
    array(
      'label'          => 'Taille du titre',
      'description'    => 'Taille du texte titre 2',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_title_size',
      'type'           => 'number'
    )
  );

  $wp_customize->add_control(
    'fp_texts_title_size4',
    array(
      'label'          => 'Taille du titre',
      'description'    => 'Taille du texte du titre 3',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_title_size',
      'type'           => 'number'
    )
  );


  // TODO - En autonomie - Ajouter un nouveau paramètre au Customizer
  // identifiant : 'fp_texts_description'
  // valeur par défaut : 'Un message d\'accueil personnalisé.'
  // type : 'theme_mod'
  $wp_customize->add_setting(
    'fp_texts_description',
    array(
    'default'     => 'Un message d\'accueil personnalisé.',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_description',
    array(
    'default'     => 'Un message personnalisé.',
    'type'        => 'theme_mod'
    )
  );



  // TODO - En autonomie - Ajouter un contrôleur associé au paramètre 'fp_texts_description'
  // libellé : 'Description'
  // description : 'Texte d\'introduction'
  // section : 'fp_texts'
  // type : zone de texte - Voir doc pour connaître la valeur à passer :
  // https://developer.wordpress.org/reference/classes/wp_customize_control/__construct/
  $wp_customize->add_control(
    'fp_texts_description',
    array(
      'label'          => 'Description',
      'description'    => 'Texte d\'introduction',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_description',
      'type'           => 'textarea'
    )
  );

  $wp_customize->add_control(
    'fp_texts_description',
    array(
      'label'          => 'Description',
      'description'    => 'Texte',
      'section'        => 'fp_texts',
      'setting'        => 'fp_texts_description',
      'type'           => 'textarea'
    )
  );

  // TODO - En autonomie - Ajouter une nouvelle section au Customizer
  // titre : 'Bouton',
  // identifiant : 'fp_button'
  // description : 'Réglages pour le bouton de la page d\'accueil principale'
  // Cette nouvelle section est une sous-section de 'front_page' (clé 'panel')
  $wp_customize -> add_section(
    'fp_button',
    array(
      'title'         => 'Bouton',
      'description'   => 'Réglages du bouton de la page d\'accueil principale',
      'panel'         => 'front_page'
    )
  );

  $wp_customize -> add_section(
    'fp_button_bis',
    array(
      'title'         => 'Bouton',
      'description'   => 'Réglages bouton 2 de la page d\'accueil principale',
      'panel'         => 'front_page'
    )
  );

  // TODO - En autonomie - Ajouter un nouveau paramètre au Customizer
  // identifiant : 'fp_button_text'
  // valeur par défaut : 'Un appel à l\'action'
  // type : 'theme_mod'
  $wp_customize->add_setting(
    'fp_button_text',
    array(
    'default'     => 'Un appel à l\'action',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_setting(
    'fp_button_text_bis',
    array(
    'default'     => 'Un appel à l\'action',
    'type'        => 'theme_mod'
    )
  );

  // TODO - En autonomie - Ajouter un contrôleur associé au paramètre 'fp_button_text'
  // libellé : 'Bouton'
  // description : 'Texte du bouton'
  // section : 'fp_button'
  // type : texte - Voir doc pour connaître la valeur à passer :
  // https://developer.wordpress.org/reference/classes/wp_customize_control/__construct/
  $wp_customize->add_control(
    'fp_button_text',
    array(
      'label'          => 'Bouton',
      'description'    => 'Texte du bouton',
      'section'        => 'fp_button',
      'setting'        => 'fp_button_text',
      'type'           => 'text'
    )
  );

  $wp_customize->add_control(
    'fp_button_text_bis',
    array(
      'label'          => 'Bouton',
      'description'    => 'Texte du 2eme bouton',
      'section'        => 'fp_button',
      'setting'        => 'fp_button_text',
      'type'           => 'text'
    )
  );

  // TODO - En autonomie - Ajouter un nouveau paramètre au Customizer
  // identifiant : 'fp_button_url'
  // valeur par défaut : ''
  // type : 'theme_mod'
  $wp_customize->add_setting(
    'fp_button_url',
    array(
    'default'     => '',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_setting(
    'fp_button_url_bis',
    array(
    'default'     => '',
    'type'        => 'theme_mod'
    )
  );

  // TODO - En autonomie - Ajouter un contrôleur associé au paramètre 'fp_button_url'
  // libellé : 'Lien'
  // description : 'Adresse URL du bouton'
  // section : 'fp_button'
  // type : adresse URL - Voir doc pour connaître la valeur à passer :
  // https://developer.wordpress.org/reference/classes/wp_customize_control/__construct/
  $wp_customize->add_control(
    'fp_button_url',
    array(
      'label'          => 'Lien',
      'description'    => 'Adresse URL du bouton',
      'section'        => 'fp_button',
      'setting'        => 'fp_button_url',
      'type'           => 'url'
    )
  );

  $wp_customize->add_control(
    'fp_button_url_bis',
    array(
      'label'          => 'Lien bis',
      'description'    => 'Adresse URL du 2eme bouton',
      'section'        => 'fp_button',
      'setting'        => 'fp_button_url',
      'type'           => 'dropdown-pages'
    )
  );

  // TODO - En autonomie - Ajouter un nouveau paramètre au Customizer
  // identifiant : 'fp_button_style'
  // valeur par défaut : 'btn-style-1'
  // type : 'theme_mod'
  $wp_customize->add_setting(
    'fp_button_style',
    array(
    'default'     => 'btn-style-1',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_setting(
    'fp_button_style_bis',
    array(
    'default'     => 'btn-style-1',
    'type'        => 'theme_mod'
    )
  );

  // TODO - En autonomie - Ajouter un contrôleur associé au paramètre 'fp_button_style'
  // libellé : 'Style'
  // description : 'Style du bouton'
  // section : 'fp_button'
  // type : bouton radio - Voir doc pour connaître la valeur à passer :
  // https://developer.wordpress.org/reference/classes/wp_customize_control/__construct/
  // choix :
  // 'btn-style-1' => 'Style 1'
  // 'btn-style-2' => 'Style 2'
  // 'btn-style-3' => 'Style 3'
  $wp_customize->add_control(
    'fp_button_style',
    array(
      'label'          => 'Style',
      'description'    => 'Style du bouton',
      'section'        => 'fp_button',
      'setting'        => 'fp_button_style',
      'type'           => 'radio',
      'choices'        => array(
                            'btn-style-1' => 'Style 1',
                            'btn-style-2' => 'Style 2',
                            'btn-style-3' => 'Style 3'
                          )
    )
  );

  $wp_customize->add_control(
    'fp_button_style_bis',
    array(
      'label'          => 'Style',
      'description'    => 'Style du 2eme bouton',
      'section'        => 'fp_button',
      'setting'        => 'fp_button_style',
      'type'           => 'radio',
      'choices'        => array(
                            'custom-quote-style-1' => 'Style 1',
                            'custom-quote-style-2' => 'Style 2',
                            'custom-quote-style-3' => 'Style 3'
                          )
    )
  );
  // TODO - En autonomie - Ajouter une nouvelle section au Customizer
  // titre : 'Citation',
  // identifiant : 'fp_quote'
  // description : 'Réglages pour la citation de la page d\'accueil principale'
  // Cette nouvelle section est une sous-section de 'front_page' (clé 'panel')
  $wp_customize -> add_section(
    'fp_quote',
    array(
      'title'         => 'Citation',
      'description'   => 'Réglages pour la citation de la page d\'accueil principale',
      'panel'         => 'front_page'
    )
  );

  // TODO - En autonomie - Ajouter un nouveau paramètre au Customizer
  // identifiant : 'fp_quote_text'
  // valeur par défaut : 'Ceci est une belle citation.'
  // type : 'theme_mod'
  $wp_customize->add_setting(
    'fp_quote_text',
    array(
    'default'     => 'Ceci est une belle citation.',
    'type'        => 'theme_mod'
    )
  );

  // TODO - En autonomie - Ajouter un contrôleur associé au paramètre 'fp_quote_text'
  // libellé : 'Citation'
  // description : 'Texte de la citation'
  // section : 'fp_quote'
  // type : zone de texte - Voir doc pour connaître la valeur à passer :
  // https://developer.wordpress.org/reference/classes/wp_customize_control/__construct/
  $wp_customize->add_control(
    'fp_quote_text',
    array(
      'label'          => 'Citation',
      'description'    => 'Texte de la citation',
      'section'        => 'fp_quote',
      'setting'        => 'fp_quote_text',
      'type'           => 'textarea'
    )
  );

  // TODO - En autonomie - Ajouter un nouveau paramètre au Customizer
  // identifiant : 'fp_quote_source'
  // valeur par défaut : 'Ceci est une belle citation.'
  // type : 'theme_mod'
  $wp_customize->add_setting(
    'fp_quote_source',
    array(
    'default'     => 'Ada Lovelace',
    'type'        => 'theme_mod'
    )
  );

  // TODO - En autonomie - Ajouter un contrôleur associé au paramètre 'fp_quote_source'
  // libellé : 'Source'
  // description : 'Nom de l\'auteur de la citation'
  // section : 'fp_quote'
  // type : texte - Voir doc pour connaître la valeur à passer :
  // https://developer.wordpress.org/reference/classes/wp_customize_control/__construct/
  $wp_customize->add_control(
    'fp_quote_source',
    array(
      'label'          => 'Source',
      'description'    => 'Nom de l\'auteur de la citation',
      'section'        => 'fp_quote',
      'setting'        => 'fp_quote_source',
      'type'           => 'text'
    )
  );

  // TODO - En autonomie - Ajouter un nouveau paramètre au Customizer
  // identifiant : 'fp_quote_background'
  // valeur par défaut : 'custom-quote'
  // type : 'theme_mod'
  $wp_customize->add_setting(
    'fp_quote_background',
    array(
    'default'     => 'custom-quote',
    'type'        => 'theme_mod'
    )
  );

  // TODO - En autonomie - Ajouter un contrôleur associé au paramètre 'fp_quote_background'
  // libellé : 'Couleur'
  // description : 'Couleur de fond du bloc de citation'
  // section : 'fp_quote'
  // type : sélecteur - Voir doc pour connaître la valeur à passer :
  // https://developer.wordpress.org/reference/classes/wp_customize_control/__construct/
  // choix :
  // 'custom-quote' => 'Par défaut'
  // 'custom-quote-red' => 'Rouge'
  // 'custom-quote-green' => 'Vert'
  // 'custom-quote-blue' => 'Bleu'
  $wp_customize->add_control(
    'fp_quote_background',
    array(
      'label'          => 'Couleur',
      'description'    => 'Couleur de fond du bloc de citation',
      'section'        => 'fp_quote',
      'setting'        => 'fp_quote_background',
      'type'           => 'select',
      'choices'        => array(
                            'custom-quote' => 'Par défaut',
                            'custom-quote-red' => 'Rouge',
                            'custom-quote-green' => 'Vert',
                            'custom-quote-blue' => 'Bleu'
                          )
    )
  );

  $wp_customize->add_section(
    'footer',
    array(
      'title' => 'Footer',
      'description' => 'Personnalisation'
    )
  );

  $wp_customize -> add_setting(
    'copyright_text',
    array(
      'default' => 'Tous droits réservés',
      'type' => 'theme_mod'
    )
  );

  $wp_customize -> add_control(
    'copyright_text',
    array(
      'label' => 'Texte copyright',
      'description' => 'Texte du champ copyright',
      'section' => 'footer',
      'setting' => 'copyright_text',
      'type' => 'text'
    )
  );



}

add_action('customize_register', 'soraya_customize_register');

?>
