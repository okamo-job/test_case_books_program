<?php

use App\FirstChapter;

class MyTestCest
{
    public function test_some_feature(\UnitTester $I)
    {
        $I->assertSame((new FirstChapter())->test(), 1);
    }
}