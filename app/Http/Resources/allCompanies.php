<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class allCompanies extends JsonResource
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
            'name'=>$this->name,
            'email'=>$this->email,
//            'password'=>$this->password,
            'location'=>$this->location,
            'overview'=>$this->overview,
            'logo'=>($this->logo)? "https://sgeo.mimusoft.com/images/company_image/$this->logo":null,
            'specilaization_name'=>$this->specialization->name,
            'specilaization_id'=>$this->specialization->id,
            'social' => $this->social->map(function($social) {
                return [
                    'whatsapp'=>$social->whatsapp,
                    'facebook'=> $social->facebook,
                    'linkedin'=> $social->linkedin,

                ];
            })->first(),





        ];
    }
}
