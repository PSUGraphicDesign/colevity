<?php if(!defined('KIRBY')) exit ?>

title: Classes
pages:
  hide: true
  template: class
  num: date
files: true
fields:
  title:
    label: Title
    type:  text
  description:
    label: Classes Description
    type: textarea
    placeholder: A brief statement regarding classes at CoLevity.
  class_url:
    label: MindBody Link
    type: url
