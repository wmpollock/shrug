<?php


// PageGen instantiation
require_once ($_SERVER['DOCUMENT_ROOT'] . "/Phplib/PageGen/Bootstrap4/Superhero.php");

$page = new Superhero(array(
    title => 'Shrug',
    favicon => file_get_contents('favicon/favicon.include'),
    css => array(
      'assets/jquery.toast.css',
      'assets/shrug.css',
    ), 
    js => array(
        'assets/jquery.toast.js',
        'assets/shrug.js',
    ),

));

// At this point, anything that comes out is wrapped as template content :)
?>

<div class="container">
  <div class="jumbotron">
    <h1>Shrug</h1>
    <p>Click an item below to copy the emoticon/donger into your clipboard for paste-fu.</p>
  </div>

  <button id="shrug-og" type="button" class="btn btn-dark">¯\_(ツ)_/¯</button>
  <button id="shrug-og" type="button" class="btn btn-dark">¯\(°_o)/¯</button>

  <button type="button" class="btn btn-dark">The More You Know ♒♒★</button>
  <button type="button" class="btn btn-dark">( ͡° ͜ʖ ͡°)</button>
  <button type="button" class="btn btn-dark">( ͡~ ͜ʖ ͡°)</button>
  <button type="button" class="btn btn-dark">s( ^ ‿ ^)-b</button>
  <button type="button" class="btn btn-dark">(⸟෴⸟)</button>
  <button type="button" class="btn btn-dark">( ͡° _ʖ ͡°)</button>
  <button type="button" class="btn btn-dark">(╯=▃=)╯︵┻━┻</button>

  <button type="button" class="btn btn-dark">🎶</button>
  <button type="button" class="btn btn-dark">♫</button>
  <button type="button" class="btn btn-dark">♬</button>
  <!--
  <button type="button" class="btn btn-dark"></button>
  -->
  <button type="button" class="btn btn-dark">⛟</button>
  <button type="button" class="btn btn-dark">🦨</button>

  <button type="button" class="btn btn-dark">☠️</button>
  <button type="button" class="btn btn-dark">☠</button>
  <button type="button" class="btn btn-dark">💀</button>
  <button type="button" class="btn btn-dark">☛</button>
  <button type="button" class="btn btn-dark">☢</button>
  <!--⛟⚰🥇☃☄☢☮☯☭ 🚽	🚑 ⛔ ⛺🕊︎🕊️🦨⚔-->
</div>




