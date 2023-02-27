<?php
namespace App;

class DogsEmotion{
    public function getEmotionOnTemperatures($temperatures){
        if ($temperatures >= 26.0) {
            return "暑い";
        }
        if ($temperatures >= 24.0) {
            return "適切";
        }
        return "寒い";
    }
}