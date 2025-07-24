<?php

namespace App\Models;
use Illuminate\Support\Arr;


class Job {

    public static function all(): array {

           return [
             [
                'id' => 1,
                'title' => 'Director',
                'salary' => "$10,000"
            ],

             [
                'id' => 2,
                'title' => 'Digital Marketer',
                'salary' => '$6,000'
            ],

             [
                'id' => 3,
                'title' => 'Content creator',
                'salary' => '$3,000'
             ]
             ];

    }

    public static function find(int $id) {

        return Arr::first(static::all(), fn($job) => $job['id'] == $id);

    }

};
