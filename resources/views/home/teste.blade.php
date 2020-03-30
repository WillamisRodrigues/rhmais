
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

Subtrção da segunda pela primeira data:
<hr>
<label value="Primeira data: "><input id="datainicio" type="text">
<label value="Segunda data: "><input id="datafim" type="text">
<input id="calc" type="button" value="Calcule">
<hr>
<label value="Resultado em dias:"><span id="result"></span>

<script>

  var dataExclusao = $('#datainicio');
  var dataExclusaoFim = $('#datafim');

  var arrDataExclusao = dataExclusao.split('/');
  var arrDataExclusaoFim = dataExclusaoFim.split('/');

  var stringFormatada = arrDataExclusao[1] + '-' + arrDataExclusao[0] + '-' +
  arrDataExclusao[2];

  var stringFormatada2 = arrDataExclusaoFim[1] + '-' + arrDataExclusaoFim[0] + '-' +
  arrDataExclusaoFim[2];

$('#calc').click(function(){
  var dt1 = stringFormatada;
  var dt2 =stringFormatada2;

  $('#result').text(calcula(dt1,dt2))

});

function calcula(data1, data2){
  data1 = new Date(data1);
  data2 = new Date(data2);
  return (data2 - data1)/(1000*3600*24);
}
</script>

