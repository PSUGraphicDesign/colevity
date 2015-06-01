<?php if(!defined('KIRBY')) exit ?>

title: Contact
pages:
  hide: true
files: false
fields:
  title:
    label: Title
    type: text
  outreach:
    label: Outreach Information
    type: textarea
  newsletter_cta:
    label: Newsletter Signup Message
    type: textarea
    buttons: false
  address:
    label: Address
    type: textarea
    buttons: false
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
    help: >
      Enter the time that operations close.
    width: 1/2
  email:
    label: Primary Contact Email
    type: email

  social_media:
    label: Social Media
    type: structure
    entry: >
      <a href="{{url}}">{{network}}</a>
    fields:
      network:
        label: Network Name
        type: text
        required: true
      url:
        label: Link
        type: url
        required: true
      icon:
        label: Icon
        type: select
        required: true
        default: icon-facebook
        options:
          facebook-official: FaceBook
          flickr: Flickr
          instagram: Instagram
          pinterest-square: Pinterest
          tumblr-square: Tumblr
          twitter-square: Twitter
          vimeo-square: Vimeo
          vine: Vine
          wordpress: Wordpress
          youtube: Youtube
