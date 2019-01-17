<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class GroupResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'coach_name'=>$this->coach_name,
            'photo'=>$this->photo,
            'phone_no'=>$this->phone_no,
            'email'=>$this->email
        ];
    }
}
