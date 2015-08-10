<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        //Captialize first letter of one word titles
        //input -> beowulf
        //output -> Beowulf
        function test_makeTitleCase_oneWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }

        //tests for capitalization in multiple word titles
        //input -> the little mermaid
        //output -> The Little Mermaid
        function test_makeTitleCase_multipleWords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);
        }

        //Does not capitalize common conjuctions
        //input -> harry potter and the sorcerers stone
        //output -> Harry Potter and the Sorcerers Stone
        function test_makeTitleCase_conjunctions()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "harry potter and the sorcerers stone";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Harry Potter and the Sorcerers Stone", $result);
        }
    }
?>
