<?php

/*



*/

// PageGen instantiation
require_once($_SERVER['DOCUMENT_ROOT'] . "/Phplib/PageGen/Bootstrap4/Superhero.php");

$page = new Superhero(array(
  "title" => 'Shrug',
  "favicon" => file_get_contents('favicon/favicon.include'),
  "css" => array(
    'assets/jquery.toast.css',
    'assets/shrug.css',
  ),
  "js" => array(
    'assets/jquery.toast.js',
    'assets/shrug.js',
  ),

));

$characters = array(
  '¯\_(ツ)_/¯',

  'The More You Know ♒♒★',
  '( ͡° ͜ʖ ͡°)',
  '( ͡~ ͜ʖ ͡°)',
  's( ^ ‿ ^)-b',
  '(⸟෴⸟)',
  '( ͡° _ʖ ͡°)',
  '(╯=▃=)╯︵┻━┻',

  '🎶',
  '♫',
  '♬',
  '⛟',

  '☠️',
  '☠',
  '💀',
  '☛',
  '☢',
  '😕✋',
  '🙂👉',
  '🚽',
  '🚑',
  '🥇',
  '⛺',
  '⭐',
  '🌟',
  '🔮',
  '&dagger;',
  '🖖',
  '✍',
  '🤦‍♂',
  '🤦',
  '🤦‍♂️',
  '🧜‍♂️',
  '🧟',
  '👨‍👩‍👧‍👧',
  '🙈🙉🙊',
  '🐳',
  '🌶️',
  '💵'
);

// At this point, anything that comes out is wrapped as template content :)

?>

<div class="container">
  <div class="jumbotron">
    <h1>Shrug</h1>
    <p>Click an item below to copy the emoticon/donger into your clipboard for paste-fu.</p>
  </div>

  <?php
  foreach ($characters as $character) {
    print("<button type='button' class='btn btn-dark'>$character</button>");
  }
  ?>

  🕊︎🕊️
  <p>This mess can be forked <a href="https://github.com/wmpollock/shrug">at github!</a></p>
  <!--⛟⚰☃☄☮☯☭	 ⛔ 🕊︎🕊️🦨⚔-->
</div>
