<?php
namespace App\Enums;

/**
 * Class OrderStatus
 *
 * @author @FireFox-d3vFR
 * @package App\Enum
 */
enum OrderStatus: string
{
    case Unpaid = 'impayé';
    case Paid = 'payé';
    case Completed = 'terminé';
}
