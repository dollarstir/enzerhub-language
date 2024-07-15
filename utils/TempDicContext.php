<?php
class TempDicContext  extends Database {
    private TempDictionary $dictionary;


    public function setDictionary(TempDictionary $dictionary){
        $this->dictionary = $dictionary;
    }

    public  function getDictionary (): TempDictionary{
        return $this->dictionary;
    }
    
    
        
    
}