<?php
/*Create a multidimensional array called
$studentGrades to store the grades of three students.
 Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades"
 as an argument to calculate and print the average grade for each student.*/



$studentGrades = array(
    array('Math' => 85, 'English' => 90, 'Science' => 78),
    array('Math' => 92, 'English' => 88, 'Science' => 95),
    array('Math' => 78, 'English' => 85, 'Science' => 92)
);


function calculateAverageGrades($grades)
{
    foreach ($grades as $student => $subjects) {
        $total = array_sum($subjects);
        $count = count($subjects);
        $average = $total / $count;
        echo "Student " . ($student + 1) . " - Average Grade: " . $average . PHP_EOL;
    }
}

// Call the function with the studentGrades array
calculateAverageGrades($studentGrades);

