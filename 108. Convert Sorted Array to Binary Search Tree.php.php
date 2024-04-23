<?php

/*

Given an integer array nums where the elements are sorted in ascending order, convert it to a height-balanced binary search tree.

Example 1:

Input: nums = [-10,-3,0,5,9]
Output: [0,-3,9,-10,null,5]
Explanation: [0,-10,5,null,-3,null,9] is also accepted:

Example 2:

Input: nums = [1,3]
Output: [3,1]
Explanation: [1,null,3] and [3,1] are both height-balanced BSTs.

*/

class TreeNode
{

    public $val = null;
    public $left = null;
    public $right = null;

    function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}


$nums = [-10, -3, 0, 5, 9];


if($nums)
{
    $mid=floor(count($nums) / 2);
    $root=new TreeNode($nums[$mid]);
    $root->left=$this->sortedArrayToBST(array_slice($nums,0,$mid));
    $root->right=$this->sortedArrayToBST(array_slice($nums,$mid+1));
    return $root;
}