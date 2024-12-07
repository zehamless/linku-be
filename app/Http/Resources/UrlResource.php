<?php

namespace App\Http\Resources;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Url */
class UrlResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'url' => $this->url,
            'shortCode' => $this->shorten,
//            'timeout' => $this->timeout,
            'accessCount' => $this->whenHas('accessCount'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
