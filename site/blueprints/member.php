<?php if(!defined('KIRBY')) exit ?>

title: Troupe Member
pages:
  hide: true
files: images

fields:
  title:
    label: Member Name
    type: text
  role:
    label: Role
    type: text
    help: >
      Member's title or role in CoLevity, such as dancer or choreographer.
  bio:
    label: Member Biographical Information
    type: textarea
