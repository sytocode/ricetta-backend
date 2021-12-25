<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class RecipeStepsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                        => $this->id,
            'recipe_id'                 => $this->recipe_id,
            'description'               => $this->description,
            'recipe_step_image'          => getSingleMedia($this, 'recipe_step_image',null),
            'ingredient_used_id'        => $this->ingredient_used_id,
            'utensil'                    => $this->utensil,
        ];
    }
}
