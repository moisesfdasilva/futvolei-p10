<?php
  $main .= "
    <main>
      <section class='class-main'>
        <h1>Aulas</h1>
        <div class='class-card'>
          <img class='class-img' src='statics/img/class-female.png'>
          <p>Feminino</p>
        </div>
        <div class='class-card'>
          <img class='class-img' src='statics/img/class-male.png'>
          <p>Masculino</p>
        </div>
        <div class='class-card'>
          <img class='class-img' src='statics/img/class-both.png'>
          <p>Misto</p>
        </div>
      </section>
      <form action=index.php?page=$controller method='post' class='class-form'>
        <div class='class-form-input'>
          <label for='name'>Nome:</label>
          <input type='text' name='name'>
        </div>
        <div class='class-form-radio'>
          <label for='type'>Tipo:</label>
          <input type='radio' name='type' value='female'>
          <label for='type'>Feminino</label>
          <input type='radio' name='type' value='male'>
          <label for='type'>Masculino</label>
          <input type='radio' name='type' value='mixed'>
          <label for='type'>Misto</label>
        </div>
        <div class='class-form-input'>
          <label for='class'>Turma:</label>
          <input type='text' name='class'>
        </div>
        <div class='class-form-input'>
          <label for='contact'>Contato:</label>
          <input type='text' name='contact'>
        </div>
        <div class='class-form-radio'>
          <label for='payment'>Forma de Pagamento:</label>
          <input type='radio' name='payment' value='credit'>
          <label for='type'>Crédito</label>
          <input type='radio' name='payment' value='debit'>
          <label for='type'>Débito</label>
          <input type='radio' name='payment' value='pix'>
          <label for='type'>Pix</label>
          <input type='radio' name='payment' value='ticket'>
          <label for='type'>Boleto</label>
        </div>
        <input type='submit' name='class-form' value='Confirmar'>
      <form>
    </main>";
?>