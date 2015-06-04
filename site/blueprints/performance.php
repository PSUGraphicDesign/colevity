<?php if(!defined('KIRBY')) exit ?>

title: Performance
pages:
  hide: true
files:
  type:
    - image
  sortable: true
fields:
  title:
    label: Title
    type:  text
  time:
    label: Time
    type: text
    icon: clock-o
    width: 1/2
  opening_date:
    label: Opening Date
    type: date
    width: 1/2
  shows:
    label: Show Schedule
    help: >
      Use this area to include a date range, if applicable. The first date must be at the top and the last date must be at the bottom. Drag and drop to rearrange the entries. 
    type: structure
    entry: >
      {{date}} @ {{time}}
    fields:
      date:
        label: Show Date
        type: date
        required: true
      time:
        label: Show Time
        type: text
        icon: clock-o
        required: true
  location:
    label: Location
    type: place
  description:
    label: Description
    type: textarea
  price:
    label: Ticket Price
    type: text
    icon: money
    help: >
      Enter the ticket price, including the dollar sign, if necessary. Use "Free" if the event is open at no cost!
    width: 1/2
  ticket_url:
    label: Event Ticketing URL
    type: url
    width: 1/2


