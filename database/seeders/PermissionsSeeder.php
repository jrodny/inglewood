<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'ModuleEgg',
            'ModuleRecvEgg',
            'ModuleHatchery',
            'ModuleShed',
            'ModuleReports',
            'ModuleAdmin',
            'Shed-Mortality',
            'Shed-Climate',
            'Shed-Feed',
            'Shed-History',
            'ModuleSheds',
            'ModuleUser',
            'ModuleAudit',
            'FarmGrowingCosts',
            'ReportsHatchery',
            'ReportsFarm',
            'ReportsPlant',
            'ReportsSales',
            'Admin-ShowPasswords',
            'Report-Batches',
            'LDDediting',
            'ACC-ShowBigCust',
            'ACC-ShowACConSalesOrder',
            'CreditCard',
            'ModuleScanOutdated',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
