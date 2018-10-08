<?php
function base64_file($path, $type = 'ttf') {
  $data = file_get_contents($path);
  return 'data:font/' . $type . ';charset=utf-8;base64,' . base64_encode($data);
}
?>
@font-face {
  font-family: 'icons-minelli';
  src: url(<?= base64_file('common/fonts/icons-minelli.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'Didot LT Std';
  src: url(<?= base64_file('common/fonts/DidotLTStd-Roman.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'Didot LT Std';
  src: url(<?= base64_file('common/fonts/DidotLTStd-Bold.ttf') ?>) format('truetype');
  font-weight: bold;
  font-style: normal;
}

@font-face {
  font-family: 'Didot LT Std';
  src: url(<?= base64_file('common/fonts/DidotLTStd-Italic.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: italic;
}

@font-face {
  font-family: 'Brandon Text';
  src: url(<?= base64_file('common/fonts/BrandonText-Regular.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'Brandon Text';
  src: url(<?= base64_file('common/fonts/BrandonText-Light.ttf') ?>) format('truetype');
  font-weight: 300;
  font-style: normal;
}

@font-face {
  font-family: 'Brandon Text';
  src: url(<?= base64_file('common/fonts/BrandonText-Thin.ttf') ?>) format('truetype');
  font-weight: 200;
  font-style: normal;
}

@font-face {
  font-family: 'Brandon Text';
  src: url(<?= base64_file('common/fonts/BrandonText-RegularItalic.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: italic;
}

@font-face {
  font-family: 'Brandon Text';
  src: url(<?= base64_file('common/fonts/BrandonText-Medium.ttf') ?>) format('truetype');
  font-weight: bold;
  font-style: normal;
}

@font-face {
  font-family: 'Brandon Text';
  src: url(<?= base64_file('common/fonts/BrandonText-Bold.ttf') ?>) format('truetype');
  font-weight: 900;
  font-style: normal;
}

@font-face {
  font-family: 'agBook';
  src: url(<?= base64_file('common/fonts/itc_avant_garde_gothic_book-webfont.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'avantgardeMed';
  src: url(<?= base64_file('common/fonts/itc_avant_garde_gothic_condensed_medium-webfont.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'agDemi';
  src: url(<?= base64_file('common/fonts/itc_avant_garde_gothic_demi-webfont.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'agMedium';
  src: url(<?= base64_file('common/fonts/itc_avant_garde_gothic_medium-webfont.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'avGothicbook';
  src: url(<?= base64_file('common/fonts/itc_avant_garde_gothic_book-webfont.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}
