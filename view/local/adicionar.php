<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
    <div class="box-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <form action="<?php echo URL; ?>/local/inserirDados" method="post" class="form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="estado">Estado <span style="color:red;">*</span></label>
                                <select id="estado" required name="estado" class="form-control estados">
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
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
                                <input id="bairro" type="text" class="form-control" name="bairro" placeholder="Bairro" required/>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right" style="margin-top: 25px;">
                            <a href="#" class="btn btn-warning">Voltar</a>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>