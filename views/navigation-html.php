<?php
  $isMenuClicked = isset($_POST['menuOn']);
  if ($isMenuClicked) {
    $main = "
      <nav class='nav-menu'>
        <ul>
          <li class='nav-menu-li'>
            <form action=$_SERVER[PHP_SELF] method='post'>
              <button type='submit' name='menuOff'>
                <img class='logo' src='statics/img/icon-close.png'>
                <p>FECHAR MENU</p>
              </button>
            </form>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php'>
              <p>PÁGINA INICIAL</p>
            </a>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php'>
              <p>AULAS</p>
            </a>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php'>
              <p>TORNEIOS</p>
            </a>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php'>
              <p>VENDA/ALUGUEL</p>
            </a>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php'>
              <p>SUPORTE TÉCNICO</p>
            </a>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php'>
              <p>INICIAR SESSÃO</p>
            </a>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php'>
              <p>CADASTRAR</p>
            </a>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php'>
              <p>CONTATOS</p>
            </a>
          </li>
        </ul>
      </nav>";
  }
?>