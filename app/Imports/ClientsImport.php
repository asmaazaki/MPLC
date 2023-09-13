<?php

namespace App\Imports;

use Modules\Client\Entities\Client;
use Modules\Client\Entities\Classes;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ClientsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
    //    dd([$row['client_name'],$row['phone_number'],$row['level']]);
       $class=Classes::where('name',$row['level'])->first();
       if($class){
            return new Client([
                'name'  => $row['client_name'],
                'phone1' => $row['phone_number']??00000000000,
                'class_id'=> $class->id,
                'father_name'=>$row['father_name']?? null ,
                'father_phone'=>$row['father_phone']?? null ,
                'father_job'=>$row['father_job']?? null ,
                'mother_name'=>$row['mother_name']?? null ,
                'mother_phone'=>$row['mother_phone']?? null ,
                'mother_job'=>$row['mother_job']?? null ,
                'branch_id'=>$class->branch_id,
            ]);
       }

    }
}