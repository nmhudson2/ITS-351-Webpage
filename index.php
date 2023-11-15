<?php
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
        $map = array();
        $s_arr = explode(" ", $s);
        for ($i = 0; $i < count($s_arr); $i++) {
            $map[$i] = $s_arr[$i];
        }
    }
}

$n = new Solution();
echo $n->lengthOfLongestSubstring("abcabca");