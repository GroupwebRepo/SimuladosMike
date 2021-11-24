<?php include('../empresa/inc/head.php') ?>

<body>
	<div class="wrapper">

	<?php include('../empresa/inc/sidebar.php') ?>


		<div class="main">
		<?php include('../empresa/inc/nav-superior.php') ?>
		
        <main class="content">
            <section id="vaga-nova">
                <h1 class="h3 mb-3">Editar vaga</h1>
                <div class="row">
                    <form>
                        <div class="col-12 col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                                <div class="col-md-12 mb-3 px-2">
                                                    <label class="form-label">Título da vaga</label>
                                                    <input type="text" class="form-control" id="tituloVaga" name="tituloVaga">
                                                </div>
                                                <div class="col-md-12 mb-3 px-2">
                                                    <label class="form-label">Descrição</label>
                                                    <input type="text" class="form-control" id="descricaoVaga" name="descricaoVaga">
                                                </div>
                                            <div class="mb-3 d-flex justify-content-between align-items-end">
                                                <div class="col-md-4 px-2">
                                                    <label class="form-label">Localidade</label>
                                                    <select name="UF" id="UF">
                                                        <option value="escolha">UF</option>
                                                        <option value="AC">Acre</option>
                                                        <option value="AL">Alagoas</option>
                                                        <option value="AP">Amapá</option>
                                                        <option value="AM">Amazonas</option>
                                                        <option value="BA">Bahia</option>
                                                        <option value="CE">Ceará</option>
                                                        <option value="DF">Distrito Federal</option>
                                                        <option value="ES">Espírito Santo</option>
                                                        <option value="GO">Goiás</option>
                                                        <option value="MA">Maranhão</option>
                                                        <option value="MT">Mato Grosso</option>
                                                        <option value="MS">Mato Grosso do Sul</option>
                                                        <option value="MG">Minas Gerais</option>
                                                        <option value="PA">Pará</option>
                                                        <option value="PB">Paraíba</option>
                                                        <option value="PR">Paraná</option>
                                                        <option value="PE">Pernambuco</option>
                                                        <option value="PI">Piauí</option>
                                                        <option value="RJ">Rio de Janeiro</option>
                                                        <option value="RN">Rio Grande do Norte</option>
                                                        <option value="RS">Rio Grande do Sul</option>
                                                        <option value="RO">Rondônia</option>
                                                        <option value="RR">Roraima</option>
                                                        <option value="SC">Santa Catarina</option>
                                                        <option value="SP">São Paulo</option>
                                                        <option value="SE">Sergipe</option>
                                                        <option value="TO">Tocantins</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8 px-2">
                                                    <select name="cidade" id="cidade" >
                                                        <option value="escolha">Cidade...</option>
                                                        <option value="zonaNorte">Zona Norte</option>
                                                        <option value="zonaSul">Zona Sul</option>
                                                        <option value="zonaLeste">Zona Leste</option>
                                                        <option value="zonaOeste">Zona Oeste</option>
                                                        <option value="centro">Centro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3">
                                                <div class="col-md-4 px-2">
                                                    <label class="form-label">Cargo</label>
                                                    <input type="text" class="form-control" id="cargo" name="cargo">
                                                </div>
                                                <div class="col-md-4 px-2">
                                                    <label class="form-label " for="nivelHierarquico">Nível Hierárquico</label>
                                                    <select id="nivelHierarquico" class="js-example-basic-single js-states form-control" name="nivelHierarquico">
                                                        <option selected> Nível Hierárquico...</option>
                                                        <option value="estagiario">Estagiário (a)</option>
                                                        <option value="operacional">Operacional</option>
                                                        <option value="auxiliar">Auxiliar</option>
                                                        <option value="assistente">Assistente</option>
                                                        <option value="trainee">Trainee</option>
                                                        <option value="analista">Analista</option>
                                                        <option value="encarregado">Encarregado (a)</option>
                                                        <option value="supervisor">Supervisor (a)</option>
                                                        <option value="consultor">Consultor (a)</option>
                                                        <option value="especialista">Especialista</option>
                                                        <option value="coordenador">Coordenador (a)</option>
                                                        <option value="gerente">Gerente</option>
                                                        <option value="diretor">Diretora</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 px-2">
                                                <label class="form-label" for="pretSalarial">Pretensão Salarial</label>
                                                <select name="pretensaoSal1" id="pretensaoSal1" >
                                                    <option value="escolha"> Pretensão Salarial...</option>
                                                    <option value="1000reais">Até R$1000,00</option>
                                                    <option value="2000reais">de R$1000,01 a R$2000,00</option>
                                                    <option value="4000reais">de R$2000,01 a R$4000,00</option>
                                                    <option value="7000reais">de R$4000,01 a R$7000,00</option>
                                                    <option value="10000reais">de R$7000,01 a R$10000,00</option>
                                                    <option value="15000reais">de R$10000,01 a R$15000,00</option>
                                                    <option value="maxreais">Mais que  R$15000,01 </option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 px-2">
                                                <label class="form-label" >Áreas de interesse</label>
                                                <select  name="interesses" class="form-control js-example-basic-multiple js-states form-label" id="interesses" multiple="multiple">
                                                    <option selected> Áreas de interesse...</option>
                                                    <option value="1">Área 1</option>
                                                    <option value="2">Área 2</option>
                                                    <option value="3">Área 3</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-check mt-3 ml-2">
                                                    <input type="checkbox" class="form-check-input" id="vagaConfidencial" name="vagaConfidencial">
                                                    <span class="form-check-label">Vaga Confidencial</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-padrao">Enviar</button>
                        <a href="<?php echo VIEW_URL ?>/empresa/vagas.php" class="btn btn-padrao">Voltar</a>
                    </form>
                </div>
            </section>
        </main>

<?php include('../empresa/inc/footer.php') ?>

</div>
</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?php echo VIEW_URL ?>/assets/js/app.js"></script>
<script src="<?php echo VIEW_URL ?>/assets/js/custom.js"></script>

</html>
