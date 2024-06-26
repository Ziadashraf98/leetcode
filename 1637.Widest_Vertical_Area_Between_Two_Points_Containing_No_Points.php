<?php

/*

Given n points on a 2D plane where points[i] = [xi, yi], Return the widest vertical area between two points such that no points are inside the area.

A vertical area is an area of fixed-width extending infinitely along the y-axis (i.e., infinite height). The widest vertical area is the one with the maximum width.

Note that points on the edge of a vertical area are not considered included in the area.

 

Example 1:

Input: points = [[8,7],[9,9],[7,4],[9,7]]

[[7,4],[8,7],[9,7],[9,9]] => max([0,1]) = 1

Output: 1
Explanation: Both the red and the blue area are optimal.

Example 2:

Input: points = [[3,1],[9,0],[1,0],[1,4],[5,3],[8,8]]

[[1,0],[1,4],[3,1],[5,3],[8,8],[9,0]] => max([1,3,2,2,0]) = 3

Output: 3

*/

  
function maxWidthOfVerticalArea($points) // $points : Multidimensional Arrays.
{
    sort($points);
    
    for($i = 1; $i < count($points); $i++)
    {
        $result[] = $points[$i][0] - $points[$i - 1][0];
    }
    
    echo max($result);
}
        
maxWidthOfVerticalArea([[3,1],[9,0],[1,0],[1,4],[5,3],[8,8]]);