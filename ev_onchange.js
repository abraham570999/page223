function seleccionarTipo()
{
	let lsttiporeporte = document.getElementById('lsttiporeporte');
    let tiporeporte = lsttiporeporte.value;

    document.getElementById('tipo_seleccionado').innerText = '${tipo_reporte}';

}