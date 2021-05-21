function calcular(){
    let cantidad = parseInt($('#cantidad').val());
    if (cantidad < 1) {
        swal("La cantidad debe ser mayor a cero");
        return false;
    }

    let moneda = $('input:radio[name=moneda]:checked').val();
    if (moneda == undefined) {
        swal("Debes seleccionar la criptomoneda!");
        return false;
    }

    obtenerResultado = calcularPrecio(cantidad, moneda);
    $('#cantidadPagar').val("Cantidad de Criptomonedas compradas: " + obtenerResultado );
    return false;
}


function calcularPrecio(cantidad, moneda) {
    let resultado = 0;
    let tipo = "";
    
        switch (moneda) {
            case "bitcoin":
                resultado = cantidad / 800000;
                resultado = resultado.toFixed(3);
                resultado = resultado + " bitcoin ";
                break;
            case "etherium":
                resultado = cantidad / 70000;
                resultado = resultado.toFixed(3);
                resultado = resultado + " etherium ";
                break;
            case "mana":
                resultado = cantidad / 24;
                resultado = resultado.toFixed(3);
                resultado = resultado + " mana ";
                break;
            case "xrp":
                resultado = cantidad / 30;
                resultado = resultado.toFixed(3);
                resultado = resultado + " xrp ";
                break;
            case "bat":
                resultado = cantidad / 21;
                resultado = resultado.toFixed(3);
                resultado = resultado + " bat ";
                break;
        }

    return resultado;
}

function limpiarFormulario(){
    $('#frmFotos')[0].reset();
}