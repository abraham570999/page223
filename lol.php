
<select id="combo" onchange="mostrar()" />
<option value="0">Seleccione Item</option>
<option value="1">Valor 1</option>
<option value="2">Valor 2</option>
<option value="3">Valor 3</option>
</select>

<div style="display: none;" id="contenido">
<input type="text" id="caja" size="30" />
</div>

<script language="javascript">
function mostrar()
{
if(document.getElementById('combo').value!=0)
{
document.getElementById('contenido').style.display ='block';
}
}
</script>



