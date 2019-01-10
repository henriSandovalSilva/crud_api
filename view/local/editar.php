<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
    <div class="box-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="retorno_sucesso" style="display: none;" class="alert alert-success">
                    <strong>Sucesso!</strong> Ação realizada com sucesso.
                </div>
                <div id="retorno_erro" style="display: none;" class="alert alert-danger">
                    <strong>Ops!</strong> Ocorreu um erro nesta ação.
                </div>
                <form action="<?php echo URL; ?>/local/editarDados/<?php echo $local['id']; ?>" method="post"
                      class="form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <!--primeiro input usado para plugin detectar o estado e cidade selecionados-->
                                <input type="hidden" class="estado-select"
                                       value="<?php echo $local['estado']; ?>">
                                <label for="estado">Estado <span style="color:red;">*</span></label>
                                <select id="estado" required name="estado" class="form-control estados">
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <!--primeiro input usado para plugin detectar o estado e cidade selecionados-->
                                <input type="hidden" class="cidade-select"
                                       value="<?php echo $local['cidade']; ?>">
                                <label for="cidade">Cidade <span style="color:red;">*</span></label>
                                <select id="cidade" required name="cidade" class="form-control cidades">
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="bairro">Bairro <span style="color:red;">*</span></label>
                                <input id="bairro" type="text" class="form-control" name="bairro"
                                       value="<?php echo $local['bairro']; ?>" placeholder="Bairro" required/>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right" style="margin-top: 25px;">
                            <a href="<?php echo URL; ?>/local" class="btn btn-warning">Voltar</a>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>