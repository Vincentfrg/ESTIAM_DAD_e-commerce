<?php
namespace App\Enums;

/**
 * Class AddressType
 *
 * @author @FireFox-d3vFR
 * @package App\Enum
 */
enum AddressType: string
{
    case Shipping = 'livraison';
    case Billing = 'facturation';
}
