{{print_r($resultsEsc[0])}}
<h3 class="abelFont">Dados Pessoais</h3>
<hr>
<form id="formCurriculo" method="post" class="form-horizontal abelFont" style="font-size: 1.1em;"
      action="{{route('trabalhe.cadastrar')}}" enctype="multipart/form-data">
    <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
    <div class="form-group" id="vnome">
        <label class="col-md-4 control-label" for="Nome:">Nome:</label>
        <div class="col-md-6">
            <input id="nome" name="nome" value="{{$resultsD[0]->nome}}" min="3" type="text"
                   placeholder="Seu nome completo"
                   class="form-control input-md">
        </div>
    </div>

    <div class="form-group" id="vnascimento">
        <label class="col-md-4 control-label" for="Nascimento:">Nascimento:</label>
        <div class="col-md-6">
            <input id="nascimento" name="nascimento" value="{{old('nascimento')}}" min="3" type="text"
                   placeholder="Sua Data de Nascimento"
                   class="form-control input-md">
        </div>
    </div>

    <div class="form-group" id="vcep">
        <label class="col-md-4 control-label" for="CEP:">CEP:</label>
        <div class="col-md-6">
            <input id="cep" name="cep" value="{{$resultsD[0]->cep}}" min="3" type="text"
                   placeholder="Informe o CEP"
                   class="form-control input-md">
        </div>
    </div>

    <div class="form-group" id="vlogradouro">
        <label class="col-md-4 control-label" for="Logradouro:">Logradouro:</label>
        <div class="col-md-6">
            <input id="logradouro" name="logradouro" value="{{$resultsD[0]->logradouro}}" min="3" type="text"
                   placeholder="Informe seu Logradouro"
                   class="form-control input-md">
        </div>
    </div>

    <div class="form-group" id="vcidade">
        <label class="col-md-4 control-label" for="Cidade:">Cidade:</label>
        <div class="col-md-6">
            <input id="cidade" name="cidade" value="{{$resultsD[0]->cidade}}" min="3" type="text"
                   placeholder="Informe sua Cidade/UF"
                   class="form-control input-md">
        </div>
    </div>

    <div class="form-group" id="vtel">
        <label class="col-md-4 control-label" for="Telefone:">Telefone:</label>
        <div class="col-md-6">
            <input id="tel" name="tel" value="{{$resultsD[0]->telefone}}" min="13" type="text" placeholder="Telefone"
                   class="form-control input-md">
        </div>
    </div>

    <div class="form-group" id="vcel">
        <label class="col-md-4 control-label" for="Celular:">Celular:</label>
        <div class="col-md-6">
            <input id="cel" name="cel" value="{{$resultsD[0]->celular}}" min="14" type="text" placeholder="Celular"
                   class="form-control input-md">
        </div>
    </div>

    <div class="form-group" id="vemail">
        <label class="col-md-4 control-label" for="E-mail:">E-mail:</label>
        <div class="col-md-6">
            <input id="email" name="email" value="{{$resultsD[0]->celular}}" min="1" type="text"
                   placeholder="Seu E-mail"
                   class="form-control input-md">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="foto">Foto</label>
        <div class="col-md-4">
            <input id="foto" name="foto" class="input-file" type="file"
                   accept="image/jpeg, image/png, image/bmp">
        </div>
    </div>

    <h3 class="abelFont ">Formação</h3>
    <hr>

    <div class="form-group" id="vescolaridade">
        <label class="col-md-4 control-label" for="Cidade:">Formação:</label>
        <div class="col-md-6">
            <select name="escolaridade" class="form-control input-md" id="escolaridade">
                <option value="{{($resultsEsc[0]->escolaridade =='FI' ? $resultsEsc[0]->escolaridade : 'FI')}}" {{($resultsEsc[0]->escolaridade=='FI' ? 'selected' : '')}}>{{($resultsEsc[0]->escolaridade=='FI' ? 'Fundamental Incompleto' :'Fundamental Incompleto')}}</option>
                <option value="{{($resultsEsc[0]->escolaridade =='FC' ? $resultsEsc[0]->escolaridade : 'FC')}}" {{($resultsEsc[0]->escolaridade=='FC' ? 'selected' : '')}}>{{($resultsEsc[0]->escolaridade=='FC' ? 'Fundamental completo' :'Fundamental completo')}}</option>
                <option value="{{($resultsEsc[0]->escolaridade =='EM' ? $resultsEsc[0]->escolaridade : 'EM')}}" {{($resultsEsc[0]->escolaridade=='EM' ? 'selected' : '')}}>{{($resultsEsc[0]->escolaridade=='EM' ? 'Ensino Médio completo' :'Ensino Médio completo')}}</option>
                <option value="{{($resultsEsc[0]->escolaridade =='EI' ? $resultsEsc[0]->escolaridade : 'EI')}}" {{($resultsEsc[0]->escolaridade=='EI' ? 'selected' : '')}}>{{($resultsEsc[0]->escolaridade=='EI' ? 'Ensino Médio incompleto' :'Ensino Médio incompleto')}}</option>
                <option value="{{($resultsEsc[0]->escolaridade =='SI' ? $resultsEsc[0]->escolaridade : 'SI')}}" {{($resultsEsc[0]->escolaridade=='SI' ? 'selected' : '')}}>{{($resultsEsc[0]->escolaridade=='SI' ? 'Superior incompleto' :'Superior incompleto')}}</option>
                <option value="{{($resultsEsc[0]->escolaridade =='S' ? $resultsEsc[0]->escolaridade: 'S')}}" {{($resultsEsc[0]->escolaridade=='S' ? 'selected' : '')}}>{{($resultsEsc[0]->escolaridade=='S' ? 'Superior completo' :'Superior completo')}}</option>
            </select>
        </div>
    </div>

    <h3 class="abelFont ">Cursos de Aperfeiçoamentos</h3>
    <hr>

    <div class="form-group" id="vcurso">
        <label class="col-md-4 control-label" for="Curso:">Curso:</label>
        <div class="col-md-6">
            <input id="curso" name="curso" value="{{$resultsF[0]->curso}}" min="1" type="text"
                   placeholder="Informe Curso"
                   class="form-control input-md">
        </div>
    </div>

    <div class="form-group" id="vempresa">
        <label class="col-md-4 control-label" for="Empresa:">Empresa:</label>
        <div class="col-md-6">
            <input id="empresa" name="empresa" value="{{$resultsF[0]->empresa}}" min="1" type="text"
                   placeholder="Informe empresa"
                   class="form-control input-md">
        </div>
    </div>

    <div class="form-group" id="vinicio">
        <label class="col-md-4 control-label" for="Inicio:">Inicio:</label>
        <div class="col-md-6">
            <input id="inicio" name="inicio" value="{{$resultsF[0]->inicio}}" min="1" type="text"
                   placeholder="Periodo Inicio"
                   class="form-control input-md">
        </div>
    </div>

    <div class="form-group" id="vfim">
        <label class="col-md-4 control-label" for="Fim:">Fim:</label>
        <div class="col-md-6">
            <input id="fim" name="fim" value="{{$resultsF[0]->termino}}" min="1" type="text" placeholder="Periodo FIM"
                   class="form-control input-md">
        </div>
    </div>

    <h3 class="abelFont ">Experiências Profissionais</h3>
    <hr>


    <div class="form-group" id="vcargo">
        <label class="col-md-4 control-label" for="Cargo:">Cargo:</label>
        <div class="col-md-6">
            <input id="cargo" name="cargo" value="{{$resultsExp[0]->cargo}}" min="1" type="text"
                   placeholder="Informe Cargo"
                   class="form-control input-md">
        </div>
    </div>

    <div class="form-group" id="vempresaexp">
        <label class="col-md-4 control-label" for="Empresa:">Empresa:</label>
        <div class="col-md-6">
            <input id="empresaexp" name="empresaexp" value="{{$resultsExp[0]->empresa}}" min="1" type="text"
                   placeholder="Informe empresa"
                   class="form-control input-md">
        </div>
    </div>

    <div class="form-group" id="vinicioexp">
        <label class="col-md-4 control-label" for="Inicio:">Inicio:</label>
        <div class="col-md-6">
            <input id="inicioexp" name="inicioexp" value="{{$resultsExp[0]->inicio}}" min="1" type="text"
                   placeholder="Periodo Inicio"
                   class="form-control input-md">
        </div>
    </div>

    <div class="form-group" id="vfimexp">
        <label class="col-md-4 control-label" for="Fim:">Fim:</label>
        <div class="col-md-6">
            <input id="fimexp" name="fimexp" value="{{$resultsExp[0]->fim}}" min="1" type="text"
                   placeholder="Periodo FIM"
                   class="form-control input-md">
        </div>
    </div>

    <h3 class="abelFont ">Outras Informações</h3>
    <hr>


    <div class="form-group" id="edeficiente">
        <label for="happy" class="col-sm-4 col-md-4 control-label text-right">Possui Deficiência?</label>
        <div class="col-sm-7 col-md-7">
            <select name="deficiente" class="form-control input-md" id="deficiente">
                <option value="{{($resultsD[0]->deficiente =='Sim' ? $resultsD[0]->deficiente  : 'Sim')}}" {{($resultsD[0]->deficiente == 'Sim' ? 'selected' : '')}}>{{($resultsD[0]->deficiente == 'Sim'  ? $resultsD[0]->deficiente : 'Sim')}}</option>
                <option value="{{($resultsD[0]->deficiente =='Não' ? $resultsD[0]->deficiente  : 'Não')}}" {{($resultsD[0]->deficiente == 'Não' ? 'selected' : '')}}>{{($resultsD[0]->deficiente == 'Não'? $resultsD[0]->deficiente: 'Não')}}</option>
            </select>
        </div>
    </div>
    <div class="form-group" id="eviajar">
        <label for="happy" class="col-sm-4 col-md-4 control-label text-right">Disponibilidade para
            viagens?</label>
        <div class="col-sm-7 col-md-7">
            <div class="input-group">
                <div id="radioBtn" class="btn-group viajar">
                    <a class="btn btn-info btn-sm notActive" data-toggle="viajar" data-title="sim">Sim</a><a
                            class="btn btn-info btn-sm notActive" data-toggle="viajar"
                            data-title="nao">Não</a>
                </div>
                <input type="hidden" value="{{old('viajar')}}" name="viajar" id="viajar">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="curriculo">Anexe seu currículo aqui</label>
        <div class="col-md-4">
            <input id="curriculo" name="curriculo" class="input-file" type="file"
                   accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
        </div>
    </div>


    <button class="btn btn-info col-lg-offset-4" style="margin-bottom: 1.3em">Enviar Currículo</button>
</form>