<?php
    /**
     * Author : Alexandre PERRIGAULT
     * Created date : 14/02/2020 14:40
     */

    namespace App\Animals;


    use App\Animal;

    class Fish extends Animal
    {

        /**
         * @return String
         */
        protected function getNoise(): String
        {
            return "bloubloublou";
        }

    }