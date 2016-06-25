<?php

function formatCurrency($number)
{
    return "₡ " . money_format('%i', $number);
}
