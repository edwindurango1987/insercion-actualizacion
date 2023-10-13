<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //student::create(
            //[
                //'document_number' => ['1234567890', '1234567891', '1234567892', '1234567893', '1234567894', '1234567895', '1234567896', '1234567897', '1234567898', '1234567899'],
                //'name' => ['Joaquin','ruben','edwin','jose','maria','luis','julian','juliana','julio','juliana'],
                //'sex' => ['M','M','M','M','F','M','M','F','M','F'],
                //'marital_status' => ['S','C','V','D','U','S','C','V','D','U'],
                //'date_of_birth' => ['1999-01-01','1999-01-02','1999-01-03','1999-01-04','1999-01-05','1999-01-06','1999-01-07','1999-01-08','1999-01-09','1999-01-10'],
                //'residence_address' => ['Calle 1 # 1-1','Calle 1 # 1-2','Calle 1 # 1-3','Calle 1 # 1-4','Calle 1 # 1-5','Calle 1 # 1-6','Calle 1 # 1-7','Calle 1 # 1-8','Calle 1 # 1-9','Calle 1 # 1-10'],
                //'stratum' => ['1','2','3','4','5','6','1','2','3','4'],
                //'residence_type' => ['URBANA','RURAL','URBANA','RURAL','URBANA','RURAL','URBANA','RURAL','URBANA','RURAL'],
                //'height' => ['170','170','170','170','170','170','170','170','170','170'],
                //'institutional_email' => ['joaquin@','ruben@','edwin@','jose@','maria@','luis@','julian@','juliana@','julio@','juliana@'],
                //'cell_phone_number' => ['1234567890','1234567891','1234567892','1234567893','1234567894','1234567895','1234567896','1234567897','1234567898','1234567899']



            //]

        //);

        DB::table('students')-> insert (
            [
                'name' => STR::random(10),
                'document_number' => STR :: random(10),
                'sex' => STR :: random(3),
                'marital_status' => STR :: random(5),
                'date_of_birth' => STR :: random(10),
                'residence_address' => STR :: random(10),
                'stratum' => STR :: random(10),
                'residence_type' => STR :: random(10),
                'height' => INT :: random(10),
                'institutional_email' => STR :: random(10),
                'cell_phone_number' => INT :: random(10),
            ]);


    }
}
