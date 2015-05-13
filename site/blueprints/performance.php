<?php if(!defined('KIRBY')) exit ?>

title: Performance
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
  date:
    label: Date
    type: date
    width: 1/2
  location:
    label: Location
    type: place
  description:
    label: Description
    type: textarea
  price:
    label: Ticket Price
    type: text
    help: >
      Enter the ticket price, including the dollar sign, if necessary. Use "Free" if the event is open at no cost!
  ticket_url:
    label: Event Tickets URL
    type: url


