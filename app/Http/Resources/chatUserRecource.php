<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\message;
class chatUserRecource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $lastMessage=message::where('user_id',$this->id)->latest()->first();
        return [
            'id'=>$this->id,
            'name' => $this->name,
            'image' => ($this->image)?"https://sgeo.mimusoft.com/images/user_image/$this->image":null,
            'last message'=>$lastMessage->message,
            'created_at'=>$lastMessage->created_at,



            //'receiver' => $this->receiver,
            // 'projects' => $this->projects->map(function($project) {
            //     return [
            //         'id' => $project->id,
            //         'name' => $project->name,
            //         'description' => $project->description,
            //         'image1' => ($project->image1)?asset('project_image/').'/'.$project->image1:null,
            //     ];}),

        ];
    }
}
