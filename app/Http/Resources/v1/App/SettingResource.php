<?php

namespace App\Http\Resources\v1\App;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'causasDonateValue' => (double) $this->resource['causas_donate_value'],
            'version' => new VersionResource($this->resource['version']),
        ];
    }
}
