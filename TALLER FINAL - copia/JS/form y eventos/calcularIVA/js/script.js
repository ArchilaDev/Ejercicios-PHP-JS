/*

function calcularIVA() {
    const precioBase = parseFloat(document.getElementById("txtBase").value || 0);
    //const valorBase = parseFloat(precioBase.value) || 0; // si no hay nada ahi agregle un cerp automaticamente
    const porcentaje = parseFloat(document.getElementById("selTipoIVA").value || 0);
    const precioFinal = document.getElementById("txtPrecioFinal");
    const total = precioBase + (precioBase*(porcentaje/100));

    precioFinal.textContent = total.toFixed(2);

}

//como Archila nos cambio el cuento
precioBase.addEventListener('input', calcularIVA());

*/
const precioBase = document.getElementById("txtBase");
const tipoIva = document.getElementById("selTipoIVA");
const precioFinal = document.getElementById("txtPrecioFinal");
function calcularIva() {
    const valorBase = parseFloat(precioBase.value || 0);
    const porcentaje = parseFloat(tipoIva.value);
    const total = valorBase + (valorBase*(porcentaje/100));
    precioFinal.textContent = total.toFixed(2);
}

precioBase.addEventListener('input', calcularIva);

tipoIva.addEventListener('change', calcularIva);