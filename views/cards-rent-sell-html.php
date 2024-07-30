<?php
  $main .= "
    <main>
      <section class='rent-main'>
        <h1>Vendas e Aluguel</h1>";

  for ($i = 1; $i <= 8; $i++) {
    $main .= "
      <section class='rent-card'>
        <div> 
          <img class='rent-card-img' src='statics/img/product-01.png'>
        </div>
        <div> 
          <div class='rent-div-input'>
            <p>Rede de Vôlei Gismar</p>
          </div>
          <div class='rent-div-input'>
            <p>Compra: &nbsp</p>
            <p>R$ 499,00 ___&nbsp</p>
            <button type='button' onclick=alert('SUBTRACT!')>
              <p>-</p>
            </button>
            <p>&nbsp<span>0</span>&nbsp</p>
            <button type='button' onclick=alert('SUM!')>
              <p>+</p>
            </button>
          </div>
          <div class='rent-div-input'>
            <p>Aluguel: &nbsp</p>
            <p>R$ 59,00 ___&nbsp</p>
            <button type='button' onclick=alert('SUBTRACT!')>
              <p>-</p>
            </button>
            <p>&nbsp<span>0</span>&nbsp</p>
            <button type='button' onclick=alert('SUM!')>
              <p>+</p>
            </button>
          </div>
        </div>
      </section>";
  }

  $main .= "
      </section>
      <section class='rent-brief'>
        <div>
          <p>Rede de Vôlei Gismar ___ R$ 499,00</p>
        </div>
        <div>
          <p>Total a pagar ___ R$ 499,00</p>
        </div>
      </section>

      <form action=index.php?page=$controller method='post' class='rent-form'>
        <div class='rent-form-radio'>
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
        <input type='submit' name='rent-form' value='Confirmar'>
      <form>
    </main>";
?>