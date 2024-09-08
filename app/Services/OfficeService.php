<?php 
namespace App\Services;
use App\Models\Offices;
class OfficeService
{
    public function showAllOffices(){
        $offices = Offices::query()->paginate(10);
        return $offices;
    }
    public function showOfficesByState($state)
    {
        $offices = Offices::where('state','=',$state)->paginate(10);
        return $offices;
    }
}