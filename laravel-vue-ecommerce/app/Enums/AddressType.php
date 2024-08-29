<?php
namespace App\Enums;

/**
 * Class AdressType
 *
 * @author @FireFox-d3vFR
 * @package App\Enum
 */
enum AddressType: string
{
    case Shipping = 'livraison';
    case Billing = 'facturation';
}
