<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Client extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'avatar'=>$this->avatar,
            'age'=>$this->age,
            'email'=>$this->email,
            'number'=>$this->number,
            'address'=>$this->address,
            'country'=>$this->country,
            'notes'=>$this->notes,
        ];
    }
    public function with($request){
        return [
            'Author'=>"Mohamed Aitmiloud",
            'Version'=>"1.0.0"
        ];
    }
}
