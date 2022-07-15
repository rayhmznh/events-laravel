<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Faculty;


class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faculty::create([
           'name' => 'FIKTI' 
        ]);
        
        Faculty::create([
           'name' => 'FE' 
        ]);
        
        Faculty::create([
           'name' => 'FTSP' 
        ]);
        
        Faculty::create([
           'name' => 'FPSI' 
        ]);
        
        Faculty::create([
           'name' => 'FSB' 
        ]);
        
        Faculty::create([
           'name' => 'FIKOM' 
        ]);
        
        Faculty::create([
           'name' => 'D3BK' 
        ]);
        
        Faculty::create([
           'name' => 'General' 
        ]);
        
    }
}