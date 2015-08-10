<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            //seperates the input into seperate words by looking for empty spaces
            $user_input = strtolower($input_title);
            $input_array_of_words = explode(' ', $user_input);
            $output_titlecased = array();
            foreach ($input_array_of_words as $word)
            {
                /*function checkForMcChicken(
                    $count = 0;
                    foreach (
                ) */
                $conjunction = array('a', 'an', 'the', 'and', 'of', 'but', 'or', 'for', 'nor', 'with', 'on', 'at', 'to', 'from', 'by');

                if(in_array($word, $conjunction))
                {
                    //checks if $conjunction is at the beginning and capitalizes it
                    if ($word == $input_array_of_words[0]) {
                        array_push($output_titlecased, ucfirst($word));
                    //if $conjuction is not at the beginning, it is not capitalized
                    } else {
                        array_push($output_titlecased, lcfirst($word));
                    }

                } elseif (strpos($word, "'")) {
                    /* if ($word[strlen($word)-1]) {
                        array_push($output_titlecased, lcfirst($word));
                    } else {*/
                    array_push($output_titlecased, ucwords($word, "'"));
                    //}
                } else {
                    //any word not in $conjunction is capitalized
                    array_push($output_titlecased, ucfirst($word));
                }

            }
            return implode (' ', $output_titlecased);
        }
    }
?>
