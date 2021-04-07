<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposta de Serviço</title>

    <link rel="stylesheet" type="text/css" href="css/pdf.css">
</head>
<body>

    <div class="main">
        <div class="container" style="margin: 2rem 2rem 0 2rem;">
        <div></div>
            <div class="row bordaRow1">

            <div class="col-sm-4">
                <img src="img/leao-preto.png" class="imgLion" alt="Lions" width="100">
            </div>

            <div class="col-sm-4">
                <h2 class="nameGrup">GRUPO</h2>
            </div>

            <div class="col-sm-4">
                <h1 class="nameLions">Lions</h1>
            </div>

            <div class="col-sm-4">
                <img src="img/whatsapp.png" class="imgW" alt="Lions" width="40">
            </div>

            <div class="col-sm-4">
                <h2 class="nam62">62</h2>
            </div>

            <div class="col-sm-4">
                <h1 class="nmTel">99176-2204</h1>
            </div>

            <div class="bordaRow2">

            <div class="col-lg-4">
                <h3 class="nameProp">PROPOSTA DE SERVIÇO</h3>
            </div>

            <div class="col-sm-4">
                <p class="nameSer1"><strong>Serviço 1 - </strong>
                Designamos para cada setor 2 guardas motorizados e
                uniformizados com Colete e Logomarca da empresa <strong>"O GRUPO LIONS"</strong>,
                portanto um aparelho celular para melhor contato entre o guarda e a base central."</p>
            </div>

            <div class="col-sm-4">
                <p class="nameSer2"><strong>Serviço 2 - </strong>
                O guarda fará rondas ostensivas e preventivas intercaladas no
                período de <strong>40 a 40</strong> minutos, passando <strong>7</strong>
                vezes na noite em sua residência ou comércio.</p>
            </div>

            <div class="col-sm-4">
                <p class="nameSer3"><strong>Serviço 3 - </strong>
                O nosso serviço será prestado das <strong>21h:00 às 05h:00</strong>da manhã
                de Segunda a Sábado. </p>
            </div>

            <div class="col-sm-4">
                <p class="nameSer4"><strong>Serviço 4 - </strong>
                O guarda fará observações em portões ou veículos estacionados na porta da
                residência ou comércio. Fará acompanhamento do cliente ao entrar ou sair de
                sua residência ou comércio, sendo solicitado previamente pelo telefone da base
                central com <strong>15 minutos de antecedência.</strong></p>
            </div>

            <div class="col-sm-4">
                <p class="nameSer5"><strong>Serviço 5 - </strong>
                Ao solicitar cobertura ou acompanhamento enviaremos 1(um) Carro ou 1(Uma)
                Motocicleta para o local.</p>
            </div>

            <div class="col-sm-4">
                <p class="nameSer6"><strong>Serviço 6 - </strong>
                Em caso de veículos ou pessoas em atitudes suspeitas o guarda comunicará a
                base central e acionaremos a polícia.</p>
            </div>

            <div class="col-sm-4">
                <p class="nameSer7"><strong>Serviço 7 - </strong>
                Chamar a Polícia ou Bombeiro se for necessário.</p>
            </div>

            <div class="col-sm-4">
                <p class="nameSer8"><strong>Serviço 8 - </strong>
                A empresa <strong>"O GRUPO LIONS"</strong> isenta todos os contratantes dos
                nossos serviços de qualquer encargo trabalhista, não existindo assim vínculo
                empregatício entre o contratante em caso de acidente de trabalho ou até mesmo
                em caso de morte ou indenizações.</p>
            </div>

            @foreach($cliente as $clientes)

            <div class="col-sm-4">
                <p class="nameRespo"><strong>Responsável pelo contrato</strong></p>
            </div>

            <div class="col-sm-4">
                <p class="nmRespo"><strong>Carlos</strong></p>
            </div>

            <div class="col-sm-4">
                <p class="nameV"><strong>Valor da mensalidade</strong></p>
            </div>

            <div class="col-sm-4">
                <h4 class="nameRS"><strong>R$ </strong></h4>
            </div>

            <div class="col-sm-4">
                <h4 class="nmRS"><strong>{{$clientes->value}}</strong></h4>
            </div>

            <div class="col-sm-4">
                <p class="nameLine1"> </p>
            </div>

            <div class="col-sm-4">
                <p class="nameR">Responsável</strong></p>
            </div>

            <div class="col-sm-4">
                <p class="nameCarlos">Carlos</strong></p>
            </div>

            <div class="col-sm-4">
                <img src="img/whatsapp.png" class="imgWhat" alt="Lions" width="30">
            </div>

            <div class="col-sm-4">
                <p class="nm62">62</p>
            </div>

            <div class="col-sm-4">
                <h1 class="namTel">99176-2204</h1>
            </div>

            <div class="col-sm-4">
                <p class="nmOBS">OBS.: O PAGAMENTO MEDIANTE EMISSÃO DE RECIBO</p>
            </div>

            <div class="col-sm-4">
                <p class="nmOpt">Opção de pagamento dia</p>
            </div>

            <div class="col-sm-4">
                <p class="nameOpt">{{$clientes->day}}</p>
            </div>

            <div class="col-sm-4">
                <p class="nmMes">de cada mês</p>
            </div>

            </div>

            <div class="bordaRow3">

            <div class="col-sm-4">
                <p class="nmNomeR">Nome/Razão Social:</p>
            </div>

            <div class="col-xl-2">
                <p class="borda6"> </p>
            </div>

            <div class="col-sm-4">
                <p class="nmRN">{{$clientes->name}}</p>
            </div>

            <div class="col-sm-4">
                <p class="nmCPFCN">CPF/CNPJ:</p>
            </div>

            <div class="col-xl-2">
                <p class="borda7"> </p>
            </div>

            <div class="col-sm-4">
                <p class="nmRC">{{$clientes->cpf_cnpj}}</p>
            </div>

            <div class="col-sm-4">
                <p class="nmEnd">Endereço:</p>
            </div>

            <div class="col-sm-4">
                <p class="nmREnd">{{$clientes->street}}</p>
            </div>

            <div class="col-xl-2">
                <p class="borda8"> </p>
            </div>

            <div class="col-sm-4">
                <p class="nmQd">Qd.:</p>
            </div>

            <div class="col-sm-4">
                <p class="nmRQd">{{$clientes->court}}</p>
            </div>

            <div class="col-xl-2">
                <p class="borda9"> </p>
            </div>

            <div class="col-sm-4">
                <p class="nmLt">Lt.:</p>
            </div>

            <div class="col-sm-4">
                <p class="nmRLt">{{$clientes->lot}}</p>
            </div>

            <div class="col-xl-2">
                <p class="borda10"> </p>
            </div>

            <div class="col-sm-4">
                <p class="nmN">N°:</p>
            </div>

            <div class="col-sm-4">
                <p class="nmRNu">{{$clientes->number}}</p>
            </div>

            <div class="col-xl-2">
                <p class="borda11"> </p>
            </div>

            <div class="col-sm-4">
                <p class="nmSector">Setor:</p>
            </div>

            <div class="col-sm-4">
                <p class="nmRSector">{{$clientes->sector}}</p>
            </div>

            <div class="col-xl-2">
                <p class="borda12"> </p>
            </div>

            <div class="col-sm-4">
                <p class="nmFone">Fone:</p>
            </div>

            <div class="col-sm-4">
                <p class="nmRFone">{{$clientes->tel}}</p>
            </div>

            <div class="col-xl-2">
                <p class="borda13"> </p>
            </div>

            <div class="col-sm-4">
                <p class="nmOpti">Opção de data p/ pagamento dia</p>
            </div>

            <div class="col-sm-4">
                <p class="nmRO">{{$clientes->day}} </p>
            </div>

            <div class="col-xl-2">
                <p class="borda14"> </p>
            </div>

            <div class="col-sm-4">
                <p class="nmdeC">de cada mês.</p>
            </div>

            <div class="col-sm-4">
                <p class="nmVM">VALOR MENSAL: R$</p>
            </div>

            <div class="col-xl-2">
                <p class="nmRVM">{{$clientes->value}}</p>
            </div>

            <div class="col-sm-4">
                <p class="nmDT">DATA:</p>
            </div>

            <div class="col-xl-2">
                <p class="nmRDT">{{ \Carbon\Carbon::parse($clientes->newdate)->format('d/m/Y') }}</p>
            </div>

            <div class="col-sm-4">
                <p class="nmDecl">Declaro para os devidos fins que estou ciente e
                de pleno acordo com as condições da proposta pelo Grupo Lions
                </p>
            </div>

            <div class="col-sm-4">
                <p class="nmDTV">Data de vencimento</p>
            </div>

            <div class="col-sm-4">
                <p class="nmRDTV">{{ \Carbon\Carbon::parse($clientes->date)->format('d/m/Y') }}</p>
            </div>

            <div class="col-sm-4">
                <p class="nmClient">CLIENTE</p>
            </div>

            <div class="col-xl-2">
                <p class="borda15"> </p>
            </div>

            @endforeach

            </div>

            </div>
        </div>
    </div>

</body>
</html>
