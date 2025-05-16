<?php
/**
*Esta funcion devuelve el precio mas los impuestos para la compra de un piso.
*
*Tomara el valor inicial del piso y lo aumenta en un 10%
*por impuestos y gastos de compra.
*
*
*
*@author Juan Ayuso Jimenez
*@version 1
*@param int $valorPiso Precio de venta del piso que se desea comprar.
*@return int $valorTotalCompra Precio total que debemos pagar, incluidos los impuestos
*/
function compraPiso ($valorPiso){
    $valorTotalCompra = $valorPiso * 1.1;
    return $valorTotalCompra;
}

/**
*Esta funcion devuelve los ahorros necesarios para la compra de un piso.
*
*Devolvera la diferencia entre el precio de compra mas los impuestos
*y el importe maximo estandar de una hipoteca que suele ser el 80%
*
*
*
*@author Juan Ayuso Jimenez
*@version 1
*@param int $valorPiso Precio de venta del piso que se desea comprar.
*@return int $ahorrosNecesarios Ahorros minimos necesarios para adquirir la vivienda.
*/
function hipotecaPiso ($valorPiso){
    $ahorrosNecesarios = ($valorPiso * 1.1) - ($valorPiso * .8);
    return $ahorrosNecesarios;
}
?>

/**
*@internal Son necesarias nuevas funciones para conocer la viabilidad de la hipoteca segun los ingresos.
*/
