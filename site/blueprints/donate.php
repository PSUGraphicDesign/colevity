<?php if(!defined('KIRBY')) exit ?>

title: Donate
pages:
  hide: true
files: images

fields:
  title:
    label: Title
    type: text
  hero_background:
    label: Donate Section Background
    type: select
    options: images
    help: >
      Upload a JPEG (no PNG, please!) 1400px or wider
  ask:
    label: Donation Plea
    type: textarea
    required: true
