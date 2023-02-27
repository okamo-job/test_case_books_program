<?php

use App\DogsEmotion;

class MyTestCest
{
    public function test_some_feature(\UnitTester $I)
    {
        $de = new DogsEmotion();
        $I->assertSame($de->getEmotionOnTemperatures(20.0), '寒い');
        $I->assertSame($de->getEmotionOnTemperatures(23.9), '寒い');

        $I->assertSame($de->getEmotionOnTemperatures(24.0), '適切');
        $I->assertSame($de->getEmotionOnTemperatures(25.0), '適切');
        $I->assertSame($de->getEmotionOnTemperatures(25.9), '適切');

        $I->assertSame($de->getEmotionOnTemperatures(26.0), '暑い');
        $I->assertSame($de->getEmotionOnTemperatures(30.0), '暑い');
    }
}