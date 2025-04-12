<?php

namespace App\Enums;

enum PermissionsEnum: string
{
    case ApproveVendors = 'ApproveVendors';
    case SellProducts = 'ApproveProducts';
    case BuyProducts = 'BuyProducts';
}
