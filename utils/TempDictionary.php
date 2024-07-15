<?php
 interface TempDictionary{
   public  function dictionary(): array;
   public function saveToDB();
}