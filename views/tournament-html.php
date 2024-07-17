<?php
  $main .= "<main>";

  $main .= "
    <section class='tourn-main'>
      <h1>Torneios</h1>
      <div>
        <img class='main-card-img' src='statics/img/tourn-1.png'>
      <div>
      <div>
        <img class='main-card-img' src='statics/img/tourn-2.png'>
      <div>
      <div>
        <img class='main-card-img' src='statics/img/tourn-3.png'>
      <div>
      <div>
        <img class='main-card-img' src='statics/img/tourn-4.png'>
      <div>
    </section>

    <form class='tourn-form'>
      <div>
        <label for='name'>Nome:</label>
        <input type='text' name='name'>
      </div>
      <div>
        <label for='pair'>Dupla:</label>
        <input type='text' name='pair'>
      </div>
      <div>
        <label for='type'>Tipo:</label>
        <select name='type'>
          <option value='female'>Feminino</option>
          <option value='male'>Masculino</option>
          <option value='both'>Misto</option>
        </select>
      </div>
      <div>
        <label for='contact'>Contato:</label>
        <input type='text' name='contact'>
      </div>
      <input type='submit' name='tourn-form' value='Confirmar'>
    </form>
    <article>
      <h1>Regras do futevôlei:</h1>
      <div>
        <h2>Quadra</h2>
        <p>
          A quadra de futevôlei é de areia e mede 18x9 metros. 
          Há linhas laterais e de fundo, mas não há linhas de centro.
        </p>
        <p>
          A zona de saque fica atrás da linha de fundo.
        </p>
      </div>
      <div>
        <h2>Rede</h2>
        <p>
          A rede de futevôlei mede 9,5 metros de comprimento por 1 metro 
          de largura. Ela é colocada com as seguintes alturas: 2,20 
          metros (nos jogos masculinos) e 2,10 metros (nos jogos femininos).
        </p>
      </div>
      <div>
        <h2>Bola</h2>
        <p>
          Em um jogo, todas as bolas usadas devem ter as mesmas 
          características quanto ao tamanho, a pressão e o tipo.
        </p>
        <p>
          A bola de futevôlei mede entre 68 e 70 centímetros e a 
          sua pressão deve ter 0,56/0,63 Kg/cm.
        </p>
      </div>
      <div>
        <h2>Jogadores</h2>
        <p>
          A equipe de futevôlei pode ser formada por 2 jogadores, jogando-se 
          em duplas (no caso dos campeonatos oficiais), ou por 4 jogadores 
          em cada equipe, sendo um deles o capitão.
        </p>
      </div>
      <div>
        <h2>Uniforme e acessórios</h2>
        <p>
          O uniforme do futevôlei é short, ou calção, e camisa de malha, ou 
          camiseta.
        </p>
      </div>
    </article>";

  $main .= "</main>";
?>