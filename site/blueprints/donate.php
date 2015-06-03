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
    label: About Section Background
    type: select
    options: images
  ask:
    label: Donation Plea
    type: textarea
    required: true
  donation_cta:
    label: Donation Action
    type: text
    required: true
  volunteering:
    label: Volunteering Information
    type: textarea
    required: true
  sponsors:
    label: Sponsors
    type: structure
    entry: >
      <p>
        <strong><a href="{{url}}">{{name}}</a></strong> (<code>{{logo}}</code>)
      </p>
    fields:
      name:
        label: Sponsor Name
        type: text
        required: true
      url:
        label: Link
        type: url
      logo:
        label: Logo
        type: select
        options: images
        require: true
  tax_id:
    label: Tax ID Number
    type: text
    icon: barcode
    required: true
