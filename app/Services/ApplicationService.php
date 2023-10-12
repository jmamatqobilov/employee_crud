<?php
namespace App\Services;

use App\Models\Application;


class ApplicationService extends BaseService
{
    public function __construct(Application $model)
    {
        $this->model = $model;
    }
}