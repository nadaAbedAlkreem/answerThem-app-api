<?php

namespace App\Repositories;

interface ICategoryRepositories
{
    public function getPrimaryCategories();

    public function getSubcategories($primaryCategoryId);

    public function searchCategories($request);

    public function searchSubcategories($request);
    public function getCategoryById($CategoryId);
    public function getCategoriesDetails();



}
