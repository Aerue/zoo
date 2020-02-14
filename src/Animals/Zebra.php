<?php
    /**
     * Author : Alexandre PERRIGAULT
     * Created date : 14/02/2020 14:42
     */

    namespace App\Animals;


    use App\Animal;
    use App\Interfaces\CanWalk;

    class Zebra extends Animal implements CanWalk
    {

        /**
         * @return String
         */
        protected function getNoise(): String
        {
            return "hiiiii";
        }

    }