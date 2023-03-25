<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return explode('<br/>', str_replace("\r\n", "", $this['description']));
        return [
            "name" => $this["name"],
            "url" => $this["product_url"],
            "description" => explode('<br/>', str_replace("\r\n", "", $this['description'])),
            "paytype" => $this["paytype"],
            "pricing" => $this["pricing"],
        ];
    }
}
