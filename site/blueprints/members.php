<?php if(!defined('KIRBY')) exit ?>

title: Troupe Members
pages: member
files: image

fields:
  info:
    label: Information
    type: info
    help: >
      This is a place to add CoLevity performers. Please do not delete or rename this page! Add a new performer by clicking “Add,” to the left.
  title:
    label: Title
    type: text
  default_profile_image:
    label: Default Profile Image
    type: select
    options: query
    query:
      fetch: images
      value: '{{filename}}'
      text: '{{filename}}'
