<?php

namespace App\Services\Post;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class Service{
    public function store($data){
        try{
            Db::beginTransaction();

            $category = $data['category'];

            $data['category_id']= $this-> getCategoryId($category);

            

            $post = Post::create($data);
            
            DB::commit();

        } catch(\Exception $exception){
            DB::rollBack();
            return $exception->getMessage();
        }
        

        return $post;

    }
    public function update($post, $data){
        try{
            Db::beginTransaction();
        $category = $data['category'];
            
        
        $data['category_id']= $this-> getCategoryIdWithUpdate($category);

        $post->update($data);
        } catch (\Exception $exception){
            DB::rollBack();
            return $exception->getMessage();
        }
        return $post->fresh();

    }

    private function getCategoryId($item){

        $category = !isset($item['id']) ? Category::creat($item) : Category::find($item['id']);
        return $category -> id;
        
    }


    
    private function getCategoryIdWithUpdate($item){
        if (!isset($item['id'])){
            $category = Category::create($item);
        } else {
            $category = Category::find($item['id']);
            $category -> update($item);
            $category = $category->fresh();
        }
        return $category -> id;
            
        
    }

    

}

?>