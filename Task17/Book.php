<?php 

class Book extends Product
{   
    private $publisher = [];
    public $writer;
    public $color;
    public $supplier;

    public function show_all_publishers()
    {
        return $this->publisher;
    }

    public function add_publisher($publisher)
    {
        $this->publisher[] = $publisher;
        return $this->publisher;
    }

    public function show_publishers_range($start, $end)
    {
        return array_slice($this->publisher, $start, $end - $start + 1);
    }
}
