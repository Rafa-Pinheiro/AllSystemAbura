/* window.onload = function () {
	setTimeout(function () {
		document.querySelector('.splash').style.display = 'none';
	}, 4000);
} */

function limpaDados() {
	document.getElementById('desc').value = "";
	document.getElementById('numerores').value = "";
	document.getElementById('distancia').value = '';
	document.getElementById('distancia2').value = '';
	document.getElementById('faixa_etaria').value = '';
	document.getElementById('sim').checked = false;
	document.getElementById('nao').checked = false;
	document.getElementById('rua').value = '';
	document.getElementById('bairro').value = '';
	document.getElementById('cidade').value = '';
}