<?php
    /**
     * Author : Alexandre PERRIGAULT
     * Created date : 14/02/2020 14:42
     */

    namespace App\Animals;


    use App\Animal;

    class Zebra extends Animal
    {

        /**
         * @return String
         */
        protected function getNoise(): String
        {
            return "hiiiii";
        }

    }