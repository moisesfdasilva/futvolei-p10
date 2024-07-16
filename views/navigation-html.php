<?php
  $isMenuClicked = isset($_POST['menuOn']);
  if ($isMenuClicked) {
    $main = "
      <nav class='nav-menu'>
        <ul>
          <li>
            <form action=$_SERVER[PHP_SELF] method='post'>
              <input
                type='submit'
                name='menuOff'
                value='MENU'
              >
            </form>
          </li>
          <li><a>PÁGINA INICIAL</a></li>
          <li><a>AULAS</a></li>
          <li><a>TORNEIOS</a></li>
          <li><a>VENDA/ALUGUEL</a></li>
          <li><a>SUPORTE TÉCNICO</a></li>
          <li><a>INICIAR SESSÃO</a></li>
          <li><a>CADASTRAR</a></li>
          <li><a>CONTATO</a></li>
        </ul>
      </nav>";
  }
?>