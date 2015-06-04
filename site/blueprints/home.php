<?php if(!defined('KIRBY')) exit ?>

title: Home
pages:
  hide: true
files: images
fields:
  title:
    label: Title
    type:  text
  featured_performance:
    label: Featured Performance
    type: select
    options: query
    query:
      page: performances
    width: 1/2
    help: >
      If there are no upcoming performances, select the blank area at the top.
  hero_background:
    label: Hero Background
    type: select
    options: images
    width: 1/2
    help: >
      Upload a JPEG (no PNG, please!) 1400px or wider
