<?php
 
 function calculateResult($mark){
    $totalMarks= 0;
    $subjectCount= count($mark);

    foreach($mark as $mark){
        if($mark<0 || $mark>100){
            echo "Mark range is invalid. \n";
            return;
        }elseif($mark < 33){
            echo "You are failed in one or more subjects. \n";
            return;
        }
        $totalMarks += $mark;
    }
    $averageMarks = $totalMarks / $subjectCount;

    $grade = '';
    switch(true){

        case ($averageMarks <= 100 && $averageMarks >= 80):
            $grade= "A+";
        break;    
    
        case ($averageMarks < 80 && $averageMarks>= 70):
            $grade= "A";
        break;    
    
        case ($averageMarks < 70 && $averageMarks >= 60):
            $grade= "A-";
        break;  
    
        case ($averageMarks< 60 && $averageMarks >= 50):
            $grade= "B";
        break;
    
        case ($averageMarks < 50 && $averageMarks >= 40):
            $grade= "C";
        break; 
    
        case ($averageMarks < 40 && $averageMarks >= 33):
            $grade= "D";
        break;   
    
        default:
            $grade= "F";;
        break;     
            
    }

    echo "Total Marks: $totalMarks \n";
    echo "Average Marks: $averageMarks  \n";
    echo "Grade: $grade \n";
 }

 echo "----------------\n";

 $marks = array(50,65,70,75,90);

 calculateResult($marks);

echo "----------------";



   







