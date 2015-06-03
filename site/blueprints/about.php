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
  tagline:
    label: Tagline
    type: textarea
    buttons: false
  mission:
    label: Mission
    type: textarea
  history:
    label: History
    type: textarea
