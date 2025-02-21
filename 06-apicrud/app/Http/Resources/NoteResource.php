<?php

namespace App\Http\Resources;

use App\Models\Note;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{


    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

         return [
         'id' => $this->id,
         'title' => 'Title: '. $this->title,
         'content' => $this->content,
             'example' => 'THis is example'
         ];

        //return parent::toArray($request);
    }
}
