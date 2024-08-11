<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class userResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name' => $this->name,
            'email'=> $this->email,
            'phone'=> $this->phone,
            'country'=> $this->country,
            'image' => ($this->image)?"https://sgeo.mimusoft.com/images/user_image/$this->image":null,






        ];
    }
}
