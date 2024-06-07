<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vegetableCategories = array(
            "Accounting" => array("Bookkeeping", "Financial Statements", "Tax Filing"),
            "Audit" => array("Internal Audits", "External Audits", "Financial Audits"),
            "Taxation" => array("Income Tax", "Corporate Tax", "Tax Planning"),
            "Debt Planning" => array("Debt Consolidation", "Repayment Strategies"),
            "Retirement Planning" => array("401(k) Planning", "IRA Planning", "Pension Guidance"),
            "Taxation" => array("Income Tax", "Corporate Tax", "Tax Planning"),
            "Debt Planning" => array("Debt Consolidation", "Repayment Strategies"),
            "Retirement Planning" => array("401(k) Planning", "IRA Planning", "Pension Guidance"),
            "Taxation" => array("Income Tax", "Corporate Tax", "Tax Planning"),
            "Debt Planning" => array("Debt Consolidation", "Repayment Strategies"),
            "Retirement Planning" => array("401(k) Planning", "IRA Planning", "Pension Guidance"),
            "Taxation" => array("Income Tax", "Corporate Tax", "Tax Planning"),
            "Debt Planning" => array("Debt Consolidation", "Repayment Strategies"),
            "Retirement Planning" => array("401(k) Planning", "IRA Planning", "Pension Guidance"),
            "Taxation" => array("Income Tax", "Corporate Tax", "Tax Planning"),
            "Debt Planning" => array("Debt Consolidation", "Repayment Strategies"),
            "Retirement Planning" => array("401(k) Planning", "IRA Planning", "Pension Guidance"),
        );
        

        foreach ($vegetableCategories as $categoryName => $vegetables) {
            $category = \App\Models\ProductCategory::create([
                'name' => $categoryName,
                'slug' => \Illuminate\Support\Str::slug($categoryName),
            ]);

            foreach ($vegetables as $vegetableName) {
                \App\Models\ProductCategory::create([
                    'name' => $vegetableName,
                    'slug' => \Illuminate\Support\Str::slug($vegetableName),
                    'parent_id' => $category->id,
                ]);
            }
        }

    }
}