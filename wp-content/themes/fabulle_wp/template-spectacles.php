<?php
  /**
   * template name: show
   * Template Post Type:  spectacles, post
   */



//OBLIGATOIRE : Récupère les variables globales de Wordpress
  $context = Timber::get_context();

// on récupère le contenu du post actuel grâce à TimberPost
  $post = new TimberPost();

// on ajoute la variable post (qui contient le post) à la variable
// qu'on enverra à la vue twig
  $context['post'] = $post;



// tableau d'arguments pour modifier la requête en base
// de données, et venir récupérer uniquement les trois
// derniers articles
  $args_shows = [
    'post_type' => 'spectacles',
  ];
  $args_dates = [
    'post_type' => 'dates',
    'order'=>'DESC',
    'meta_key' => 'date_show',
    'orderby' => 'date_show',

  ];
  $args_places =[
    'post_type' => 'places'
  ];
  $args_contacts = [
    'post_type' => 'contacts'
  ];
  $args_searchs = [
    'post_type' => 'searchs'

  ];

// récupère les articles en fonction du tableau d'argument $args_posts
// en utilisant la méthode de Timber get_posts
// puis on les enregistre dans l'array $context sous la clé "posts"
  $context['searchs'] = Timber::get_posts($args_searchs);
  $context['shows'] = Timber::get_posts($args_shows);
  $context['events'] = Timber::get_posts($args_dates);
  $context['places'] = Timber::get_posts($args_places);
  $context['contacts'] = Timber::get_posts($args_contacts);

  $context['url'] = $_SERVER["REQUEST_URI"];

// appelle la vue twig "template-spectacles.twig" située dans le dossier views
// en lui passant la variable $context qui contient notamment ici les articles
  Timber::render('template-spectacles.twig', $context);