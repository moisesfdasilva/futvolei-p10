<?php
  $main .= "<main>";

  $main .= "
    <section class='class-main'>
      <h1>Aulas</h1>
      <div>
        <img class='main-card-img' src='statics/img/class-female.png'>
        <p>Feminino</p>
      <div>
      <div>
        <img class='main-card-img' src='statics/img/class-male.png'>
        <p>Masculino</p>
      <div>
      <div>
        <img class='main-card-img' src='statics/img/class-both.png'>
        <p>Misto</p>
      <div>
    </section>
    <form class='class-form'>
      <div>
        <label for='name'>Nome:</label>
        <input type='text' name='name'>
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
        <label for='class'>Turma:</label>
        <input type='text' name='class'>
      </div>
      <div>
        <label for='contact'>Contato:</label>
        <input type='text' name='contact'>
      </div>
      <div>
        <label for='payment'>Forma de Pagamento:</label>
        <select name='payment'>
          <option value='credit'>Crédito</option>
          <option value='debit'>Débito</option>
          <option value='pix'>Pix</option>
          <option value='ticket'>Boleto</option>
        </select>
      </div>
      <input type='submit' name='class-form' value='Confirmar'>
    <form>";

  $main .= "</main>";
?>