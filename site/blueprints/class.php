<?php if(!defined('KIRBY')) exit ?>

title: Class
pages:
  hide: true
files: false
fields:
  title:
    label: Title
    type:  text
  time:
    label: Time
    type: time
    interval: 15
    width: 1/2
  day:
    label: Day
    type: checkboxes
    options: 
      Sunday: Sunday
      Monday: Monday
      Tuesday: Tuesday
      Wednesday: Wednesday
      Thursday: Thursday
      Friday: Friday
      Saturday: Saturday
  
  level:
    label: Level
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
  instructor:
    label: Instructor
    type: text
  description:
    label: Description
    type: textarea
  price:
    label: Price
    type: text
    help: >
      Enter the class price, including the dollar sign, if necessary. Use "Free" if the class is open at no cost!
  class_url:
    label: Class Registration URL
    type: url


