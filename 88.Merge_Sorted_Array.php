<?php


class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    
    function merge(&$nums1, $m, $nums2, $n)
    {
        array_push($nums1 , 2,5,6);
        
        sort($nums1);
        
        if(in_array(0 , $nums1))
        {
            unset($nums1[0] , $nums1[1] , $nums1[2]);
        }
    }   
}