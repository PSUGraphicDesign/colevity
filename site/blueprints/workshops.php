<?php if(!defined('KIRBY')) exit ?>

title: Workshops
pages:
  template:
  num: date
files: false
fields:
  title:
    label: Title
    type: text
  time:
    label: Time
    type: text
    icon: clock-o
    width: 1/2
  day:
    label: Day
    type: checkboxes
    options:
      Sunday: Sunday
      Monday: Monday
      Tuesday: Tuesday
      Wednesday: Wednesday
      Thursday: Thursday:
      Friday: Friday
      Saturday: Saturday
    spaces:
      label: Spaces Available
      type: text
    location:
      label: Location
      type: text
    instructor:
      label: Instructor
      type: text
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
    price
      label: Price
      type: text
      icon: usd
      width: 1/2
      help: >
        Enter the class price, including the dollar sign, if necessary. Use "Free" if the class is open at no cost!
    link
      label: Workshop Registration URL
      type: url
      width: 1/2



