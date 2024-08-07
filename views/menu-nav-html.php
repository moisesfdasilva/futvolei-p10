<?php
  $isMenuClicked = isset($_POST['menuOn']);
  $main = '';

  if ($isMenuClicked) {
    $main = "
      <nav class='nav-menu'>
        <ul>
          <li class='nav-menu-li'>
            <form action=index.php?page=$controller method='post'>
              <button type='submit' name='menuOff'>
                <span>✕</span>
                <p>FECHAR MENU</p>
              </button>
            </form>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php?page=home'>
              <p>PÁGINA INICIAL</p>
            </a>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php?page=class'>
              <p>AULAS</p>
            </a>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php?page=tournament'>
              <p>TORNEIOS</p>
            </a>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php?page=rent-sell'>
              <p>VENDA/ALUGUEL</p>
            </a>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php?page=support'>
              <p>SUPORTE TÉCNICO</p>
            </a>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php?page=login'>
              <p>INICIAR SESSÃO</p>
            </a>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php?page=register'>
              <p>CADASTRAR</p>
            </a>
          </li>
          <li class='nav-menu-li'>
            <a href='index.php?page=contact'>
              <p>CONTATOS</p>
            </a>
          </li>
        </ul>
      </nav>";
  }
?>