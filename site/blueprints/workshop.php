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
    type: text
    icon: calendar
    width: 1/2
  spaces:
    label: Spaces Available
    type: toggle
  location:
    label: Location
    type: place
  instructor:
    label: Instructor
    type: text
    icon: user
  description:
    label: Description
    type: textarea
  level:
    label: Ability Level
    type: select
    options:
      Beginner: Beginner
      Intermediate: Intermediate
      Advanced: Advanced
    width: 1/2
  age:
    label: Age Range
    type: checkboxes
    options: 
      Youth: Youth
      Teen: Teen
      Adult: Adult
    width: 1/2
    columns: 1
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

