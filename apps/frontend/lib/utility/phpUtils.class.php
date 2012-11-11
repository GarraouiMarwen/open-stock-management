<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of phpUtils
 *
 * @author jaykrish
 */
class phpUtils {
    //put your code here
           /**
         * Function to set id as selected 
         * css then set  the main menu item as active
         * 
         * @param type $expected: expected url 
         * @param type $current : current page url
         * @return String id="selected" if current value is equal to expected value
          * @author JayKrish
         */
        public static function setID_IfActive($expected, $current) {

            if ($expected== $current) {
                return"id=\"selected\"";
            }
        }
}

?>
