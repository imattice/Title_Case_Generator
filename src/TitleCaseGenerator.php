<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_array_of_words = explode(' ', $input_title);
            $output_titlecased = array();
            foreach ($input_array_of_words as $word)
            {
                $conjunction = array('a', 'an', 'the', 'and', 'of', 'but', 'or', 'for', 'nor', 'with', 'on', 'at', 'to', 'from', 'by');
                
                if(in_array($word, $conjunction))
                {
                    //add lower case function here before the $word
                    array_push($output_titlecased, $word);
                } else {
                    array_push($output_titlecased, ucfirst($word));
                }

            }
            return implode (' ', $output_titlecased);

        }
    }
?>
