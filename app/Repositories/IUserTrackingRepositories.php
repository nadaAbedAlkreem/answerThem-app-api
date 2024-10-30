<?php

namespace App\Repositories;

interface IUserTrackingRepositories
{

    public  function  incrementAppEntries($userId) ;
    public function logGameResult($userId, $result) ;
    public function getLastGame($request);
    public function getTrafficForCurrentUser($userId);





}
