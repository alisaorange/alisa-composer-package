<?php


namespace Alisakolosova\Hw3;


class TranslateProcessor
{
    public function getNumWord(int $s): string {
        if($s == 1){
            $result = "Один";
        }elseif ($s == 2){
            $result = "Два";
        }elseif ($s == 3){
            $result = "Три";
        }else{
            $result = "Такую цифру я пока не знаю... Попробуй 1,2 или 3.";
        }
        return $result;
    }

}