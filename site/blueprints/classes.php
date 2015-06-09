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
  tagline:
    label: Tagline
    type: text
  description:
    label: Classes Description
    type: textarea
    placeholder: A brief statement regarding classes at CoLevity.
    help: >
      Drag and drop the .pdf into the text box to add. Follow this format: (file: yourpdf.pdf text: *What you want it to say* popup:yes)
  class_url:
    label: MindBody Link
    type: url
