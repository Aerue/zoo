<?php
    /**
     * Author : Alexandre PERRIGAULT
     * Created date : 14/02/2020 14:40
     */

    namespace App\Animals;


    use App\Animal;
    use App\Interfaces\CanSwim;

    class Fish extends Animal implements CanSwim
    {

        /**
         * @return String
         */
        protected function getNoise(): String
        {
            return "bloubloublou";
        }

    }