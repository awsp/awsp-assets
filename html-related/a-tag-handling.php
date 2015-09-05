<?php

function aTagHandling($html) {
  $a = preg_replace('/<a\s*((?:(?!\/a).)*)href=[\"|\'](?!mailto:|tel:)((?:(?!<\/a>|").)+)[\"|\']\s*((?:(?!\/a).)*)>((?:(?!\/a).)+)<\/a>/i', $html, $a);
  return $a;
}
