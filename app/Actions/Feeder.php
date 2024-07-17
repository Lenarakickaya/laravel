<?php


namespace App\Actions;

use App\Models\Feed;

class Feeder
{
     public function save($obj, $model_name, $type){
         $feed = new Feed;
         if(optional($obj)->user_id !== null){
             $feed->user_id = optional($obj)->user_id;
         }
         
         
         $feed->model_name = $model_name;
         $feed->model_id = $obj->id;
         $feed->type = $type;
         $feed->save();
     }
}