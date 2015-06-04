<?php if(!defined('KIRBY')) exit ?>

title: Workshop
pages:
  hide: true
files: true
fields:
  title:
    label: Title
    type: text
  time:
    label: Time
    type: text
    icon: clock-o
    width: 1/2
  date:
    label: Date
    type: date
    icon: calendar
    width: 1/2
  location:
    label: Location
    type: place
  description:
    label: Description
    type: textarea
  price:
    label: Price
    type: text
    icon: money
    width: 1/2
    help: >
      Enter the workshop fee, including the dollar sign, if necessary. Use "Free" if it’s is open at no cost!
  workshop_url:
    label: Workshop Registration URL
    type: url
    width: 1/2

