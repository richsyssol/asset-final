<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsuranceTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $insuranceTypes = [
            [
                'title' => 'Fire and Burglary Insurance',
                'slug' => 'fire-burglary-insurance',
                'content' => '<p>Comprehensive protection against fire damage and theft. Our Fire and Burglary Insurance covers...</p>',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Workmen Compensation Insurance',
                'slug' => 'workmen-compensation-insurance',
                'content' => '<p>Protect your employees and your business with our Workmen Compensation Insurance...</p>',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Group Health and Group Personal Accident Insurance',
                'slug' => 'group-health-personal-accident',
                'content' => '<p>Provide health coverage for your employees with our comprehensive group plans...</p>',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Marine Insurance',
                'slug' => 'marine-insurance',
                'content' => '<p>Coverage for ships, cargo, terminals, and any transport by which property is transferred...</p>',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Contractor All Risk Insurance',
                'slug' => 'contractor-all-risk',
                'content' => '<p>Protection for contractors against risks associated with construction projects...</p>',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Professional Indemnity Insurance',
                'slug' => 'professional-indemnity',
                'content' => '<p>Coverage for professionals against claims of negligence or breach of duty...</p>',
                'order' => 6,
                'is_active' => true,
            ],
        ];

          
          foreach ($insuranceTypes as $type) {
            InsuranceType::create($type);
        }
        
    }
}
