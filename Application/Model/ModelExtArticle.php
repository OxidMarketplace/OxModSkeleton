<?php
 # Example for module with own namespace

 namespace MyVendor\MyModuleNamespace\Application\Model;

 class MyModuleArticle extends MyModuleArticle_parent
 {
     public function getSize()
     {
         $originalSize = parent::getSize();

         //double the size
         $newSize = 2 * $originalSize;

         return $newSize;
     }
 }
