<?php

namespace App\Services\Post;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class Service{
    public function store($data){
        try{
            Db::beginTransaction();
           
    
            $category = $data['category'];
            
      
            $data['category_id']= $this -> getCategoryId($category);
            unset($data['category']);
 
         
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
            
        unset($data['category']);
        
    
        $data['category_id']= $this-> getCategoryIdWithUpdate($category);
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);

    
        $post->update($data);
     
     

        DB::commit();
        }
     catch (\Exception $exception){
           
            DB::rollBack();
            return $exception->getMessage();
        }
      
        return $post->fresh();

    }

    private function getCategoryId($item){

        $category = !isset($item) ? Category::create($item) : Category::find($item);

        return $category -> id;
        
    }

   

    
    private function getCategoryIdWithUpdate($item)
    {
        
        if (!isset($item)) {
            
            $category = Category::create($item);
        } else {
            
            $category = Category::find($item);
            
            
            if ($category) {
               
                
                $category = $category->fresh();
                
            }
        }
    
        return $category->id;
    }
    

   

}

?>