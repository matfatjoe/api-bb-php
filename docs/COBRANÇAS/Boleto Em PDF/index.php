<?php
require_once 'vendor/autoload.php';//domPDF
require_once 'bb/PDFBoleto/BBBoletoPDF.php';


//EXEMPLO DE PDF COM DADOS MANUAIS
$boletoPDF = new BBBoletoPDF($dadosBoleto);
$dadosBoleto = new stdClass();
$dadosBoleto->nossoNumero = '0000011';
$dadosBoleto->agencia = '0000011';
$dadosBoleto->codigoCedente = '0000011';
$dadosBoleto->gerarDuasVias = true;

$dadosBoleto->codigoLinhaDigitavel = '00190000090312855700000006000178793870000001000';
$dadosBoleto->textoEmailPagador = '';
$dadosBoleto->textoMensagemBloquetoTitulo = '';
$dadosBoleto->codigoTipoMulta = '0';
$dadosBoleto->codigoCanalPagamento = '0';
$dadosBoleto->numeroContratoCobranca = '19581316';
$dadosBoleto->codigoTipoInscricaoSacado = '1';
$dadosBoleto->numeroInscricaoSacadoCobranca = '2327558174';
$dadosBoleto->codigoEstadoTituloCobranca = '1';
$dadosBoleto->codigoTipoTituloCobranca = '2';
$dadosBoleto->codigoModalidadeTitulo = '1';
$dadosBoleto->codigoAceiteTituloCobranca = 'A';
$dadosBoleto->codigoPrefixoDependenciaCobrador = '3477';
$dadosBoleto->codigoIndicadorEconomico = '9';
$dadosBoleto->numeroTituloCedenteCobranca = '1702';
$dadosBoleto->codigoTipoJuroMora = '0';
$dadosBoleto->dataEmissaoTituloCobranca = '11.03.2023';
$dadosBoleto->dataRegistroTituloCobranca = '11.03.2023';
$dadosBoleto->dataVencimentoTituloCobranca = '20.06.2023';
$dadosBoleto->valorOriginalTituloCobranca = '10';
$dadosBoleto->valorAtualTituloCobranca = '10';
$dadosBoleto->valorPagamentoParcialTitulo = '0';
$dadosBoleto->valorAbatimentoTituloCobranca = '0';
$dadosBoleto->percentualImpostoSobreOprFinanceirasTituloCobranca = '0';
$dadosBoleto->valorImpostoSobreOprFinanceirasTituloCobranca = '0';
$dadosBoleto->valorMoedaTituloCobranca = '0';
$dadosBoleto->percentualJuroMoraTitulo = '0';
$dadosBoleto->valorJuroMoraTitulo = '0';
$dadosBoleto->percentualMultaTitulo = '0';
$dadosBoleto->valorMultaTituloCobranca = '0';
$dadosBoleto->quantidadeParcelaTituloCobranca = '0';
$dadosBoleto->dataBaixaAutomaticoTitulo = '23.09.2023';
$dadosBoleto->textoCampoUtilizacaoCedente = '';
$dadosBoleto->indicadorCobrancaPartilhadoTitulo = 'N';
$dadosBoleto->nomeSacadoCobranca = 'Igor Lisboa Monteiro';
$dadosBoleto->textoEnderecoSacadoCobranca = 'RUA TESTE COM COMPLEMENTO E NUMERO';
$dadosBoleto->nomeBairroSacadoCobranca = 'Taguatinga';
$dadosBoleto->nomeMunicipioSacadoCobranca = 'Brasilia';
$dadosBoleto->siglaUnidadeFederacaoSacadoCobranca = 'DF';
$dadosBoleto->numeroCepSacadoCobranca = '72001620';
$dadosBoleto->valorMoedaAbatimentoTitulo = '0';
$dadosBoleto->dataProtestoTituloCobranca = '';
$dadosBoleto->codigoTipoInscricaoSacador = '2';
$dadosBoleto->numeroInscricaoSacadorAvalista = '74910037000193';
$dadosBoleto->nomeSacadorAvalistaTitulo = 'REDE DE OTICAS MALU LTDA ME';
$dadosBoleto->percentualDescontoTitulo = '0';
$dadosBoleto->dataDescontoTitulo = '';
$dadosBoleto->valorDescontoTitulo = '0';
$dadosBoleto->codigoDescontoTitulo = '0';
$dadosBoleto->percentualSegundoDescontoTitulo = '0';
$dadosBoleto->dataSegundoDescontoTitulo = '';
$dadosBoleto->valorSegundoDescontoTitulo = '0';
$dadosBoleto->codigoSegundoDescontoTitulo = '0';
$dadosBoleto->percentualTerceiroDescontoTitulo = '0';
$dadosBoleto->dataTerceiroDescontoTitulo = '';
$dadosBoleto->valorTerceiroDescontoTitulo = '0';
$dadosBoleto->codigoTerceiroDescontoTitulo = '0';
$dadosBoleto->dataMultaTitulo = '';
$dadosBoleto->numeroCarteiraCobranca = '17';
$dadosBoleto->numeroVariacaoCarteiraCobranca = '35';
$dadosBoleto->quantidadeDiaProtesto = '0';
$dadosBoleto->quantidadeDiaPrazoLimiteRecebimento = '90';
$dadosBoleto->dataLimiteRecebimentoTitulo = '18.09.2023';
$dadosBoleto->indicadorPermissaoRecebimentoParcial = 'N';
$dadosBoleto->textoCodigoBarrasTituloCobranca = '00197938700000010000000003128557000000600017';
$dadosBoleto->codigoOcorrenciaCartorio = '0';
$dadosBoleto->valorImpostoSobreOprFinanceirasRecebidoTitulo = '0';
$dadosBoleto->valorAbatimentoTotal = '0';
$dadosBoleto->valorJuroMoraRecebido = '0';
$dadosBoleto->valorDescontoUtilizado = '0';
$dadosBoleto->valorPagoSacado = '0';
$dadosBoleto->valorCreditoCedente = '0';
$dadosBoleto->codigoTipoLiquidacao = '0';
$dadosBoleto->dataCreditoLiquidacao = '';
$dadosBoleto->dataRecebimentoTitulo = '';
$dadosBoleto->codigoPrefixoDependenciaRecebedor = '0';
$dadosBoleto->codigoNaturezaRecebimento = '0';
$dadosBoleto->numeroIdentidadeSacadoTituloCobranca = '';
$dadosBoleto->codigoResponsavelAtualizacao = '';
$dadosBoleto->codigoTipoBaixaTitulo = '0';
$dadosBoleto->valorMultaRecebido = '0';
$dadosBoleto->valorReajuste = '0';
$dadosBoleto->valorOutroRecebido = '0';
$dadosBoleto->codigoIndicadorEconomicoUtilizadoInadimplencia = '0';

$boleto = new BBBoletoPDF($dadosBoleto);

$pdf = $boleto->getPDF();

header("Content-type:application/pdf");
echo $pdf;

//EXEMPLO DE PDF COM DADOS RETORNADOS DA API

/*

$dadosRetorno = $resp['response'];

$dadosBoleto = new stdClass();
$dadosBoleto->nossoNumero = '000000000';
$dadosBoleto->agencia = '000000000';
$dadosBoleto->codigoCedente = '000000000';
$dadosBoleto->gerarDuasVias = true;
//---
$dadosBoleto->codigoLinhaDigitavel = $dadosRetorno->codigoLinhaDigitavel;
$dadosBoleto->textoEmailPagador = '';
$dadosBoleto->textoMensagemBloquetoTitulo = $dadosRetorno->textoMensagemBloquetoTitulo;
$dadosBoleto->codigoTipoMulta = $dadosRetorno->codigoTipoMulta;
$dadosBoleto->codigoCanalPagamento = $dadosRetorno->codigoCanalPagamento;
$dadosBoleto->numeroContratoCobranca = $dadosRetorno->numeroContratoCobranca;
$dadosBoleto->codigoTipoInscricaoSacado = $dadosRetorno->codigoTipoInscricaoSacado;
$dadosBoleto->numeroInscricaoSacadoCobranca = $dadosRetorno->numeroInscricaoSacadoCobranca;
$dadosBoleto->codigoEstadoTituloCobranca = $dadosRetorno->codigoEstadoTituloCobranca;
$dadosBoleto->codigoTipoTituloCobranca = $dadosRetorno->codigoTipoTituloCobranca;
$dadosBoleto->codigoModalidadeTitulo = $dadosRetorno->codigoModalidadeTitulo;
$dadosBoleto->codigoAceiteTituloCobranca = $dadosRetorno->codigoAceiteTituloCobranca;
$dadosBoleto->codigoPrefixoDependenciaCobrador = $dadosRetorno->codigoPrefixoDependenciaCobrador;
$dadosBoleto->codigoIndicadorEconomico = $dadosRetorno->codigoIndicadorEconomico;
$dadosBoleto->numeroTituloCedenteCobranca = $dadosRetorno->numeroTituloCedenteCobranca;
$dadosBoleto->codigoTipoJuroMora = $dadosRetorno->codigoTipoJuroMora;
$dadosBoleto->dataEmissaoTituloCobranca = str_replace('.', '/', $dadosRetorno->dataEmissaoTituloCobranca);
$dadosBoleto->dataRegistroTituloCobranca = str_replace('.', '/', $dadosRetorno->dataRegistroTituloCobranca);
$dadosBoleto->dataVencimentoTituloCobranca = str_replace('.', '/', $dadosRetorno->dataVencimentoTituloCobranca);
$dadosBoleto->valorOriginalTituloCobranca = $dadosRetorno->valorOriginalTituloCobranca;
$dadosBoleto->valorAtualTituloCobranca = $dadosRetorno->valorAtualTituloCobranca;
$dadosBoleto->valorPagamentoParcialTitulo = $dadosRetorno->valorPagamentoParcialTitulo;
$dadosBoleto->valorAbatimentoTituloCobranca = $dadosRetorno->valorAbatimentoTituloCobranca;
$dadosBoleto->percentualImpostoSobreOprFinanceirasTituloCobranca = $dadosRetorno->percentualImpostoSobreOprFinanceirasTituloCobranca;
$dadosBoleto->valorImpostoSobreOprFinanceirasTituloCobranca = $dadosRetorno->valorImpostoSobreOprFinanceirasTituloCobranca;
$dadosBoleto->valorMoedaTituloCobranca = $dadosRetorno->valorMoedaTituloCobranca;
$dadosBoleto->percentualJuroMoraTitulo = $dadosRetorno->percentualJuroMoraTitulo;
$dadosBoleto->valorJuroMoraTitulo = $dadosRetorno->valorJuroMoraTitulo;
$dadosBoleto->percentualMultaTitulo = $dadosRetorno->percentualMultaTitulo;
$dadosBoleto->valorMultaTituloCobranca = $dadosRetorno->valorMultaTituloCobranca;
$dadosBoleto->quantidadeParcelaTituloCobranca = $dadosRetorno->quantidadeParcelaTituloCobranca;
$dadosBoleto->dataBaixaAutomaticoTitulo = str_replace('.', '/', $dadosRetorno->dataBaixaAutomaticoTitulo);
$dadosBoleto->textoCampoUtilizacaoCedente = $dadosRetorno->textoCampoUtilizacaoCedente;
$dadosBoleto->indicadorCobrancaPartilhadoTitulo = $dadosRetorno->indicadorCobrancaPartilhadoTitulo;
$dadosBoleto->nomeSacadoCobranca = $dadosRetorno->nomeSacadoCobranca;
$dadosBoleto->textoEnderecoSacadoCobranca = $dadosRetorno->textoEnderecoSacadoCobranca;
$dadosBoleto->nomeBairroSacadoCobranca = $dadosRetorno->nomeBairroSacadoCobranca;
$dadosBoleto->nomeMunicipioSacadoCobranca = $dadosRetorno->nomeMunicipioSacadoCobranca;
$dadosBoleto->siglaUnidadeFederacaoSacadoCobranca = $dadosRetorno->siglaUnidadeFederacaoSacadoCobranca;
$dadosBoleto->numeroCepSacadoCobranca = $dadosRetorno->numeroCepSacadoCobranca;
$dadosBoleto->valorMoedaAbatimentoTitulo = $dadosRetorno->valorMoedaAbatimentoTitulo;
$dadosBoleto->dataProtestoTituloCobranca = $dadosRetorno->dataProtestoTituloCobranca;
$dadosBoleto->codigoTipoInscricaoSacador = $dadosRetorno->codigoTipoInscricaoSacador;
$dadosBoleto->numeroInscricaoSacadorAvalista = $dadosRetorno->numeroInscricaoSacadorAvalista;
$dadosBoleto->nomeSacadorAvalistaTitulo = $dadosRetorno->nomeSacadorAvalistaTitulo;
$dadosBoleto->percentualDescontoTitulo = $dadosRetorno->percentualDescontoTitulo;
$dadosBoleto->dataDescontoTitulo = $dadosRetorno->dataDescontoTitulo;
$dadosBoleto->valorDescontoTitulo = $dadosRetorno->valorDescontoTitulo;
$dadosBoleto->codigoDescontoTitulo = $dadosRetorno->codigoDescontoTitulo;
$dadosBoleto->percentualSegundoDescontoTitulo = $dadosRetorno->percentualSegundoDescontoTitulo;
$dadosBoleto->dataSegundoDescontoTitulo = $dadosRetorno->dataSegundoDescontoTitulo;
$dadosBoleto->valorSegundoDescontoTitulo = $dadosRetorno->valorSegundoDescontoTitulo;
$dadosBoleto->codigoSegundoDescontoTitulo = $dadosRetorno->codigoSegundoDescontoTitulo;
$dadosBoleto->percentualTerceiroDescontoTitulo = $dadosRetorno->percentualTerceiroDescontoTitulo;
$dadosBoleto->dataTerceiroDescontoTitulo = $dadosRetorno->dataTerceiroDescontoTitulo;
$dadosBoleto->valorTerceiroDescontoTitulo = $dadosRetorno->valorTerceiroDescontoTitulo;
$dadosBoleto->codigoTerceiroDescontoTitulo = $dadosRetorno->codigoTerceiroDescontoTitulo;
$dadosBoleto->dataMultaTitulo = $dadosRetorno->dataMultaTitulo;
$dadosBoleto->numeroCarteiraCobranca = $dadosRetorno->numeroCarteiraCobranca;
$dadosBoleto->numeroVariacaoCarteiraCobranca = $dadosRetorno->numeroVariacaoCarteiraCobranca;
$dadosBoleto->quantidadeDiaProtesto = $dadosRetorno->quantidadeDiaProtesto;
$dadosBoleto->quantidadeDiaPrazoLimiteRecebimento = $dadosRetorno->quantidadeDiaPrazoLimiteRecebimento;
$dadosBoleto->dataLimiteRecebimentoTitulo = str_replace('.', '/', $dadosRetorno->dataLimiteRecebimentoTitulo);
$dadosBoleto->indicadorPermissaoRecebimentoParcial = $dadosRetorno->indicadorPermissaoRecebimentoParcial;
$dadosBoleto->textoCodigoBarrasTituloCobranca = $dadosRetorno->textoCodigoBarrasTituloCobranca;
$dadosBoleto->codigoOcorrenciaCartorio = $dadosRetorno->codigoOcorrenciaCartorio;
$dadosBoleto->valorImpostoSobreOprFinanceirasRecebidoTitulo = $dadosRetorno->valorImpostoSobreOprFinanceirasRecebidoTitulo;
$dadosBoleto->valorAbatimentoTotal = $dadosRetorno->valorAbatimentoTotal;
$dadosBoleto->valorJuroMoraRecebido = $dadosRetorno->valorJuroMoraRecebido;
$dadosBoleto->valorDescontoUtilizado = $dadosRetorno->valorDescontoUtilizado;
$dadosBoleto->valorPagoSacado = $dadosRetorno->valorPagoSacado;
$dadosBoleto->valorCreditoCedente = $dadosRetorno->valorCreditoCedente;
$dadosBoleto->codigoTipoLiquidacao = $dadosRetorno->codigoTipoLiquidacao;
$dadosBoleto->dataCreditoLiquidacao = $dadosRetorno->dataCreditoLiquidacao;
$dadosBoleto->dataRecebimentoTitulo = $dadosRetorno->dataRecebimentoTitulo;
$dadosBoleto->codigoPrefixoDependenciaRecebedor = $dadosRetorno->codigoPrefixoDependenciaRecebedor;
$dadosBoleto->codigoNaturezaRecebimento = $dadosRetorno->codigoNaturezaRecebimento;
$dadosBoleto->numeroIdentidadeSacadoTituloCobranca = $dadosRetorno->numeroIdentidadeSacadoTituloCobranca;
$dadosBoleto->codigoResponsavelAtualizacao = $dadosRetorno->codigoResponsavelAtualizacao;
$dadosBoleto->codigoTipoBaixaTitulo = $dadosRetorno->codigoTipoBaixaTitulo;
$dadosBoleto->valorMultaRecebido = $dadosRetorno->valorMultaRecebido;
$dadosBoleto->valorReajuste = $dadosRetorno->valorReajuste;
$dadosBoleto->valorOutroRecebido = $dadosRetorno->valorOutroRecebido;
$dadosBoleto->codigoIndicadorEconomicoUtilizadoInadimplencia = $dadosRetorno->codigoIndicadorEconomicoUtilizadoInadimplencia;
*/