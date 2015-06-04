<?php if(!defined('KIRBY')) exit ?>

title: About
pages:
  hide: true
files: images

fields:
  title:
    label: Title
    type: text
  hero_background:
    label: About Section Background
    type: select
    options: images
    help: >
      Upload a JPEG (no PNG, please!) 1400px or wider
  tagline:
    label: Tagline
    type: textarea
    buttons: false
  history:
    label: History
    type: textarea
