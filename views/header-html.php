<?php
  $header = "
    <header class='header'>
      <img class='logo' src='statics/img/logo.png'>
      <nav class='nav-top'>
        <form action=$_SERVER[PHP_SELF] method='post'>
          <input
            type='submit'
            name='menuOn'
            value='MENU'
          >
        </form>
      </nav>
    </header>";
?>