<?php
function studentMaker($name, $GPA) {
    return [
        'name' => $name,
        'GPA' => $GPA,
        'calculateHonors' => function() use ($GPA) {
            if ($GPA < 3.5) {
                return "no honors";
            } elseif ($GPA >= 3.5 && $GPA < 3.8) {
                return "cum laude";
            } elseif ($GPA >= 3.8 && $GPA < 4.0) {
                return "magna cum laude";
            } elseif ($GPA >= 4.0) {
                return "summa cum laude";
            }
        }
    ];
}

// Example usage:
$student = studentMaker("John", 3.7);

// Log Name
echo "Name: " . $student['name'] . "\n";

// Log GPA
echo "GPA: " . $student['GPA'] . "\n";

// Log honors result
echo "Honors: " . $student['calculateHonors']() . "\n";
?>