<div class="container text-right">    
  <div class="row">
    <div class="col-sm-12">
    <table class="table">
    <thead>
      <tr>
        <th>Local</th>
        <th>Sensor </th>
        <th>Leitura</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>Local 1</td>
        <td>Temperatura_sala</td>
        <td id="temp1"></td>
      </tr>      
      <tr class="danger">
        <td>Local 1</td>
        <td>Temperatura_quarto1</td>
        <td id="temp2"></td>
      </tr> 
      <tr class="warning">
        <td>Local 2</td>
        <td>Varanda</td>
        <td id="temp3"></td>
      </tr> 
    </tbody>
  </table>
      
      <div class="well">
      	<h3> Item 2. Valor de leitura aleatorio do sensor (intervalo 3 segundos):  
      	<span id="aleatorio">Lendo sensor...</span></h3> 
      </div>
      <div class="well">
      	<h3> Item 3. Ligar / Desligar atuador com dois botoes. Status:<span id="status1">Desligado</span></h3> 
        <button id="botao_liga" type="button" class="btn btn-success" onclick="ligaatuador()">Liga</button>
		<button id="botao_desliga" type="button" class="btn btn-danger disabled" onclick="desligaatuador()">Desliga</button>
      </div>
      <div class="well">
      	<h3> Item 3. Ligar / Desligar atuador com um botao. Status: <span id="status2">Desligado</span></h3> 
		<button id="botao_atua" type="button" class="btn btn-success" onclick="atua()">Liga</button>
      </div>
    </div>
  </div>
</div><br>