<?php


return [
    /*
    |--------------------------------------------------------------------------
    | Open Payroll Seeder Data
    |--------------------------------------------------------------------------
    |
    | These values is the default for the references data which refer to
    | deduction types, earning types, payroll and payslip statuses.
    | You may add / remove as necessary for your needs.
    |
    */

    'seeds' => [
        'deduction_types' => [
            'Unpaid Leave',
            'TDS',
            'ESIC',
            'PF (Provident Fund)',
            'PT (Professional Tax)',
        ],
        'earning_types' => [
            'Basic',
            'Overtime',
            'Allowance',
            'Bonus',
            'Claim',
            'Other',
        ],
        'payroll_statuses' => [
            'Active', 'Inactive', 'Locked',
        ],
        'payslip_statuses' => [
            'Active', 'Inactive', 'Locked',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Open Payroll Models
    |--------------------------------------------------------------------------
    |
    | These values is the default for the models used in Open Payroll.
    | You may extend / replace the following models as necessary.
    |
    */

    'models' => [
        'user'             => \App\Models\User::class,
        'employee'         => \App\Models\Employee::class,
        'payroll'          => \ErbiumTech\OpenPayroll\Models\Payroll\Payroll::class,
        'payroll_statuses' => \ErbiumTech\OpenPayroll\Models\Payroll\Status::class,
        'payslip'          => \ErbiumTech\OpenPayroll\Models\Payslip\Payslip::class,
        'payslip_statuses' => \ErbiumTech\OpenPayroll\Models\Payslip\Status::class,
        'deduction'        => \ErbiumTech\OpenPayroll\Models\Deduction\Deduction::class,
        'deduction_types'  => \ErbiumTech\OpenPayroll\Models\Deduction\Type::class,
        'earning'          => \ErbiumTech\OpenPayroll\Models\Earning\Earning::class,
        'earning_types'    => \ErbiumTech\OpenPayroll\Models\Earning\Type::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Open Payroll Tables
    |--------------------------------------------------------------------------
    |
    | These values is the tables used in Open Payroll. Changing these values
    | require additional setup on seeders and models.
    |
    */

    'tables' => [
        'names' => [
            'earnings',
            'deductions',
            'payslips',
            'payrolls',
            'payroll_statuses',
            'earning_types',
            'deduction_types',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Open Payroll Codes
    |--------------------------------------------------------------------------
    |
    | These codes are used in the calculation of the deduction
    |
    */

    'codes' => [
        'unpaid_leave' => 'unpaid-leave', // Employee unpaid leave code
        'TDS' => 't-d-s', // Employee TDS
        'ESIC' => 'e-s-i-c', // Employee ESIC
        'PF' => 'p-f(-provident-fund)', // Employee PF (Provident Fund)
        'PT' => 'p-t(-professional-tax)', // Professional Tax
    ],

    /*
    |--------------------------------------------------------------------------
    | Open Payroll Deduction Calculation
    |--------------------------------------------------------------------------
    |
    | Based on the below deduction, we calculate the employees final salary
    |
    */

    'calculation' => [
        'pf_payable_salary_is_greater_than' => 15000, // Cut the pf amount if the total payable amount is grater than this
        'pt_payable_salary_is_greater_than' => 12000, // Cut the pt amount if the total payable amount is grater than this
        'tds' => 0.10, // 10%
        'employeer_esic' => 0.0325, // 3.25%
        'employee_esic' => 0.0075, // 0.75%
        'employeer_pf' => 0.125, // 12.50%
        'employee_pf' => 0.12, // 12.00%
        'pt' => 200, // Professional Tax. Fixed 200 rupees
    ],

    /*
    |--------------------------------------------------------------------------
    | Open Payroll Payslip Processors
    |--------------------------------------------------------------------------
    |
    | These values is the default processors for earnings and deductions.
    | By default, no processors required for each earning and deductions.
    |
    */

   'processors' => [
        'default_earning'   => \App\Http\Controllers\OpenPayroll\Setting\BaseEarningController::class,
        'default_deduction' => \App\Http\Controllers\OpenPayroll\Setting\BaseDeductionController::class,
        'earnings'          => [
            // 'Basic'     => \ErbiumTech\OpenPayroll\Processors\Earning\BasicEarningProcessor::class,
            // 'Overtime'  => \ErbiumTech\OpenPayroll\Processors\Earning\OvertimeEarningProcessor::class,
            // 'Allowance' => \ErbiumTech\OpenPayroll\Processors\Earning\AllowanceEarningProcessor::class,
            // 'Bonus'     => \ErbiumTech\OpenPayroll\Processors\Earning\BonusEarningProcessor::class,
            // 'Claim'     => \ErbiumTech\OpenPayroll\Processors\Earning\ClaimEarningProcessor::class,
            // 'Other'     => \ErbiumTech\OpenPayroll\Processors\Earning\OtherEarningProcessor::class,
        ],
        'deductions' => [
            // 'Loan'      => \ErbiumTech\OpenPayroll\Processors\Deduction\LoanProcessor::class,
            // 'IncomeTax' => \ErbiumTech\OpenPayroll\Processors\Deduction\IncomeTaxProcessor::class,
        ],
   ],
];
