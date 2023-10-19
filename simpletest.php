<?php
use PHPUnit\Framework\TestCase;

require_once "wordcount.php";

class simpletest extends TestCase{

    public function testcountwords(){
        $wc = new WordCount();

        $testSentence = "My Name Is Adi";
        $WordCount = $wc->countWords($testSentence);

        
        $this->assertEquals(4, $WordCount);
        // assert equals untuk menegaskan apakah nilai sebenarnya yang diperoleh sama dengan nilai yang diharapkan atau tidak. Pernyataan ini akan menghasilkan nilai benar jika nilai yang diharapkan sama dengan nilai sebenarnya, jika tidak maka akan menghasilkan nilai salah. Jika benar, kasus uji yang ditegaskan akan lulus, jika tidak, kasus uji akan gagal.
    }

}
