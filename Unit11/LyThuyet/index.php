<?php
class name{
     private  $name, $old;
     public function __construct($name , $old)
     {
         $this->name = $name;
     }

    /**
     * @return mixed
     */
    public function getOld()
    {
        return $this->old;
    }

    /**
     * @param mixed $old
     */
    public function setOld($old)
    {
        $this->old = $old;
    }
}