<?php
    $course = [
        's1' => 'course1',
        's2' => 'course2',
        's3' => 'course3'
    ];
    // Model
    function get_courses(){
        global $course;
        return array_values($course);
    }

    function find_by_semester($semester){
        global $course;
        return (array_key_exists($semester,$course) ? $course[$semester]:'Invalid course');
    }

    // Controller
    $list_of_courses = get_courses();
?>