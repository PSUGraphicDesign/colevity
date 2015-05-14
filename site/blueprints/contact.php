<?php if(!defined('KIRBY')) exit ?>

title: Contact
pages:
  hide: true
files: false
fields:
  title:
    label: Title
    type: text
  location:
    label: Location
    type: place
  number:
    label: Phone Number
    type: number
  hours_opening:
    label: Opening Time
    type: time
    interval: 15
    help:>
      Enter the start of the hours of operation.
    width: 1/2
  hours_closing:
    label: Closing Time
    type: time
    interval: 15
    help:>
      Enter the time that operations close.
    width: 1/2
  email:
    label: Email
    type: email
