<?php


namespace App\Dto;


abstract class AbstractDto
{
    public function __construct(array $data = [])
    {
        foreach (get_object_vars($this) as $key => $value) {
            if (isset($data[$key])) {
                $this->$key = $data[$key];
            }
        }
    }
}