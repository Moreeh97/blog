<?php

namespace App\Models;

use App\Core\App;

class Post{

    function all(){
        
        $stm=App::db()->prepare("SELECT * FROM posts");
        
        $stm->execute();
        
       return $stm->fetchAll();
    }

    function find($id){
        $stm=App::db()->prepare("SELECT * FROM posts WHERE id=:id");
        $stm->execute(['id'=>$id]);
        $stm->fetchAll();
    }

    function create($title,$body){
        
        $stm=App::db()->prepare("INSERT INTO posts(title,body) VALUES (:title,:body)");
        $stm->execute(['title'=>$title,'body'=>$body]);
    }

    function update(){
        $stm= App::db()->prepare("UPDATE posts SET title='new title', body='this is new body'");
        $stm->execute();
    }

    function delete($id){
        $stm= App::db()->prepare("DELETE FROM posts WHERE id=:id");
        $stm->execute(['id'=>$id]);
    }
}