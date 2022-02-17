<?php

namespace App\Http\Controllers;

class CourseController extends Controller
{
    /**
     * @OA\Get(
     *     tags={"course"},
     *     summary="Returns a list of courses",
     *     description="Returns a object of courses",
     *     path="/V1/course",
     *     @OA\Response(response="200", description="A list with courses"),
     * ),
     *
     */
    public function index() {
        $course = (new CourseFilter(Course::class))->apply();
        return new CourseCollectionResource($course);
    }

}
