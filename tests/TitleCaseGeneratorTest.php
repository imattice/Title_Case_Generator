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
        //input -> little mermaid
        //output -> Little Mermaid
        function test_makeTitleCase_multipleWords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "little mermaid";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Little Mermaid", $result);
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

        //Capitalizes conjunction if it is the first word
        //input -> of mice and men
        //output -> Of Mice and Men
        function test_makeTitleCase_firstConjunction()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "of mice and men";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Of Mice and Men", $result);
        }

        //Uncapitalizes conjunctions in middle of title if input has capitalized conjunction
        //input -> Lord Of The Rings
        //output -> Lord of the Rings
        function test_makeTitleCase_ucConjunctionInput()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "Lord Of The Rings";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Lord of the Rings", $result);
        }
        //Ignores numbers and other charactors inputs
        //input -> fahrenheit 451!
        //output -> Fahrenheit 451!
        function test_makeTitleCase_ignoreNumbers()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "fahrenheit 451!";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Fahrenheit 451!", $result);
        }

        //Ignores numbers and other charactors in the beginning of title
        //input -> 12 angry men
        //output -> 12 Angry Men
        function test_makeTitleCase_ignoreFirstNumber()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "12 angry men";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("12 Angry Men", $result);
        }
    }
?>
