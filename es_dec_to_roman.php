<?php
//ESERCIZIO
//scrivere una funzione php che converta un numero tradizionale
//minore di 3999 maggiore di 0
//in numero romano

// Ⅰ = 1
// IV = 4
// V = 5
// IX = 9
// X = 10
// XL = 40
// L = 50
// XC = 90
// C = 100
// CD = 400
// D = 500
// CM = 900
// M = 1 000

//https://it.wikipedia.org/wiki/Sistema_di_numerazione_romano#Regole
//rappresentare la serie di regole che fanno corrispondere delle
//scritte a dei numeri
//creo una lista di regole

function DecToRoman($num)
{
    if ($num <= 3999 && $num > 0) {
        if ($num >= 1000) {
            return 'M' . DecToRoman($num - 1000);
        } else if ($num >= 900) {
            return 'CM' . DecToRoman($num - 900);
        } else if ($num >= 500) {
            return 'D' . DecToRoman($num - 500);
        } else if ($num >= 400) {
            return 'CD' . DecToRoman($num - 400);
        } else if ($num >= 100) {
            return 'C' . DecToRoman($num - 100);
        } else if ($num >= 90) {
            return 'XC' . DecToRoman($num - 90);
        } else if ($num >= 50) {
            return 'L' . DecToRoman($num - 50);
        } else if ($num >= 40) {
            return 'XL' . DecToRoman($num - 40);
        } else if ($num >= 10) {
            return 'X' . DecToRoman($num - 10);
        } else if ($num == 9) {
            return 'IX' . DecToRoman($num - 9);
        } else if ($num >= 5) {
            return 'V' . DecToRoman($num - 5);
        } else if ($num == 4) {
            return 'IV' . DecToRoman($num - 4);
        } else if ($num >= 1) {
            return 'I' . DecToRoman($num - 1);
        }
    } else {
        return '';
    }
}

echo DecToRoman(1987);
