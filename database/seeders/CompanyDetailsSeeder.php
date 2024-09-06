<?php

namespace Database\Seeders;

use App\Models\CompanyDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = CompanyDetail::where('name', 'Felak Concept Group')->first();

        if(!$company){
            DB::table('company_details')->insert([
                'id' => 1,
                'name' => 'Felak Concept Group',
                'description' => 'Felak Concept Group',
                'excerpt' => 'Felak Concept Group',
                'slogan' => 'Knowledge and Hardwork',
                'logo' => '/assets/images/felakgroup.png',
                'address' => '6c Rudolf Close, Maitama, Abuja',
                'created_at' => now(),
                'updated_at' => now(),
                'email' => 'info@felakgroup.net',
                'phone' => '07036996299',
            ]);
        }
    }
}
