<?php
class WordCount
{

    public function countWords($sentence)
    {
        return count(explode("", $sentence)); 
        //explode berfungsi Mengembalikan array string, yang masing-masing merupakan substring dari string yang dibentuk dengan membaginya pada batas yang dibentuk oleh pemisah string.
    }
}
