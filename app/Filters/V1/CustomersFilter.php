<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CustomersFilter extends ApiFilter
{
    protected $allowedParams = [
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'zip' => ['eq','gt','lt']
    ];

    protected $columnMap = [
        'zip' => 'postal_code'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];


}