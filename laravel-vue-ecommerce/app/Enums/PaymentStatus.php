<?php
namespace App\Enums;

/**
 * Class PaymentStatus
 *
 * @author @FireFox-d3vFR
 * @package App\Enum
 */
enum PaymentStatus: string
{
    case Pending = 'attente';
    case Paid = 'payé';
    case Failed = 'échoué';
}
