function makeAnagram($str1, $str2) {

    $arr1 = str_split($str1);
    $arr2 = str_split($str2);
    sort($arr1);
    sort($arr2);
    $count = 0;
    for($i=0; $i<sizeof($arr1); $i++) {
        $a = array_intersect($arr2,[$arr1[$i]]);
        if(sizeof($a)==0){
            $count++;
        }
        $key = array_search($arr1[$i], $arr2);
        if (false !== $key) {
            unset($arr2[$key]);
        } 
    }
    $count = $count + sizeof($arr2);
    return $count;
}
