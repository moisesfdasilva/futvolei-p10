<?php
  $main .= "
    <main>
      <section class='rent-main'>
        <h1>Vendas e Aluguel</h1>";

  for ($i = 1; $i <= 8; $i++) {
    $main .= "
      <section class='rent-card'>
        <div> 
          <img class='main-card-img' src='statics/img/product-01.png'>
        </div>
        <div> 
          <p>Rede de Vôlei Gismar</p>
          <p>compra: R$ 499,00 (-)_____(+)</p>
          <p>aluguel: R$ 59,00 (-)_____(+)</p>
        </div>
      </section>";
  }

  $main .= "
    </section>
      <section>
        <ul>
          <li>Rede de Vôlei Gismar ________ R$ 499,00</li>
        </ul>
        <p>Total a pagar ________ R$ 499,00</p>
      </section>
      <form>
        <p>Pagamento:</p>
        <select name='payment'>
          <option value='credit'>Crédito</option>
          <option value='debit'>Débito</option>
          <option value='pix'>Pix</option>
          <option value='ticket'>Boleto</option>
        </select>
      </form>
    </main>";
?>