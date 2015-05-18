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
  phone:
    label: Phone Number
    type: tel
  hours_opening:
    label: Opening Time
    type: text
    icon: clock-o
    help:>
      Enter the start of the hours of operation.
    width: 1/2
  hours_closing:
    label: Closing Time
    type: text
    icon: clock-o
    help:>
      Enter the time that operations close.
    width: 1/2
  email:
    label: Primary Contact Email
    type: email
