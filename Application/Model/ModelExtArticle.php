<?php
 # Example for module with own namespace

 namespace oxidmarketplace\oxmodskeleton\Application\Model;

 class ModelExtArticle extends ModelExtArticle_parent
 {
     public function getSize()
     {
         $originalSize = parent::getSize();

         //double the size
         $newSize = 2 * $originalSize;

         return $newSize;
     }
 }
