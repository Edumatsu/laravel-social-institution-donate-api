<?php

namespace App\Http\Controllers\v1\Backoffice;

use App\Services\Backoffice\DashboardService;
use Illuminate\Http\Request;

/**
 * @group Backoffice / Dashboard
 * APIs for view dashboard data
 * @authenticated
 *
 * Class DashboardController
 * @package App\Http\Controllers\v1
 */
class DashboardController
{
    private $service;

    public function __construct(DashboardService $service)
    {
        $this->service = $service;
    }
    /**
     * List
     * Fetch all settings
     *
     * @response {
     * }
     *
     */
    public function index(Request $request)
    {
        return $this->service->index($request->all());
    }
}
