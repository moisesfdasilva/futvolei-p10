<?php
  $main .= "
    <main>
      <section class='tourn-main'>
        <h1>Torneios</h1>
        <div class='tourn-divimg'>
          <img class='tourn-img' src='statics/img/tourn-1.png'>
          <img class='tourn-img' src='statics/img/tourn-2.png'>
        <div>
        <div class='tourn-divimg'>
          <img class='tourn-img' src='statics/img/tourn-3.png'>
          <img class='tourn-img' src='statics/img/tourn-4.png'>
        <div>
      </section>
      </br></br>
      <form action=index.php?page=$controller method='post' class='tourn-form'>
        <div class='tourn-form-input'>
          <label for='name'>Nome:</label>
          <input type='text' name='name'>
        </div>
        <div class='tourn-form-input'>
          <label for='pair'>Dupla:</label>
          <input type='text' name='pair'>
        </div>
        <div class='tourn-form-radio'>
          <label for='type'>Tipo:</label>
          <input type='radio' name='type' value='female'>
          <label for='type'>Feminino</label>
          <input type='radio' name='type' value='male'>
          <label for='type'>Masculino</label>
          <input type='radio' name='type' value='mixed'>
          <label for='type'>Misto</label>
        </div>
        <div class='tourn-form-input'>
          <label for='contact'>Contato:</label>
          <input type='text' name='contact'>
        </div>
        <input type='submit' name='tourn-form' value='Confirmar'>
      </form>
      <article class='tourn-article'>
        <p>Regras do futevôlei:</p>
        <p>Quadra</p>
        <p>
          A quadra de futevôlei é de areia e mede 18x9 metros. 
          Há linhas laterais e de fundo, mas não há linhas de centro.
        </p>
        <p>
          A zona de saque fica atrás da linha de fundo.
        </p>
        <p>Rede</p>
        <p>
          A rede de futevôlei mede 9,5 metros de comprimento por 1 metro 
          de largura. Ela é colocada com as seguintes alturas: 2,20 
          metros (nos jogos masculinos) e 2,10 metros (nos jogos femininos).
        </p>
        <p>Bola</p>
        <p>
          Em um jogo, todas as bolas usadas devem ter as mesmas 
          características quanto ao tamanho, a pressão e o tipo.
        </p>
        <p>
          A bola de futevôlei mede entre 68 e 70 centímetros e a 
          sua pressão deve ter 0,56/0,63 Kg/cm.
        </p>
        <p>Jogadores</p>
        <p>
          A equipe de futevôlei pode ser formada por 2 jogadores, jogando-se 
          em duplas (no caso dos campeonatos oficiais), ou por 4 jogadores 
          em cada equipe, sendo um deles o capitão.
        </p>
        <p>Uniforme e acessórios</p>
        <p>
          O uniforme do futevôlei é short, ou calção, e camisa de malha, ou 
          camiseta.
        </p>
      </article>
    </main>";
?>