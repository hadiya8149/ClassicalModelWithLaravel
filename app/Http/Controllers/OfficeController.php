<?php

namespace App\Http\Controllers;
use App\Models\Offices;
use Illuminate\Http\Request;
use App\Http\Requests\OfficesRequest;
use App\Services\OfficeService;
use App\Helpers\Helpers;
class OfficeController extends Controller
{
    private $officeService;
    public function __construct(OfficeService $officeService)
    {
        $this->officeService = $officeService;
    }

    public function index()
    {
        $data = $this->officeService->showAllOffices();
        return Helpers::sendJsonResponse(200, 'All offices', $data);

    }
/**
 * show offices that are in particular state
 */
    public function showOfficesByState(OfficesReqeust $request)
    {
        $state = $request->state;
        $data  = $this->officeService->showOfficesByState($state);
        return Helpers::sendJsonResponse(200, 'Offices list', $data);
    }

    
}
