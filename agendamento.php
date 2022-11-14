<div class="container">
    <h2>AGENDE AGORA</h2>
    <form id="agendamento" action="?pg=agendamentodb" method="post">

        <label>Nome:</label> <input placeholder="Insira seu nome" type="text" class="form-control" name="nome" required="" data-validation-required-message="Please enter your name.">
        <label>Telefone: </label><input type="tel" class="form-control" name="telefone" />
        <label>Data de Agendamento:</label> <input type="date" class="form-control" name="data" />
        <label for="">Informe o horário que deseja cortar:</label>
        <select class="form-control" name="horario">
            <option value="10:30">10:30</option>
            <option value="12:30">12:30</option>
            <option value="13:00">13:00</option>
            <option value="Custom">Customizável</option>
        </select>
        <div id="custom">

        </div>
        <label for="">Selecione o barbeiro</label>
        <select class="form-control" name="barbeiro" id="">
            <option value="Wesley">Barbeiro Wesley</option>
            <option value="Wagner">Barbeiro Wagner</option>
            <option value="Junior">Barbeiro Junior</option>
            <option value="Fabricio">Barbeiro Fabricio</option>
        </select>

        <label for="">Selecione o tipo de corte</label>
        <select class="form-control" name="tipCorte" id="">
            <option value="Degradê">Corte Degradê</option>
            <option value="Militar">Corte Militar</option>
            <option value="Social">Corte Social</option>
            <option value="Barba">Barba</option>
        </select>
        <br>
        <button type="submit" class="btn btn-outline-dark">Registrar Agendamento</button>
    </form>
</div>

<script>
    const custom = document.getElementById('custom')
    
    function toggleElements(){
        const input = document.createElement('input')
        input.innerText('teste')
        custom.appendChild(input)
    }
</script>