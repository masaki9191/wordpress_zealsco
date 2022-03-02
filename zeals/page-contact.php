<?php
  if (page_is_ancestor_of('dx')) {
    // dxの下の時の処理
    // dx専用のお問い合わせページ
    include_once(get_template_directory().'/dx-contact.php');
  } else {
    // それ以外の処理
    // チャットコマースのお問い合わせページ
    ;include_once(get_template_directory().'/contact.php');
  }
?>
