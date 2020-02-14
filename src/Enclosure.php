<?php
    /**
     * Author : Alexandre PERRIGAULT
     * Created date : 14/02/2020 15:05
     */

    namespace App;


    class Enclosure
    {

        /**
         * @var Animal[] $animals
         */
        public $animals;

        /**
         * @param Animal $animal
         */
        public function addAnimal(Animal $animal) : void
        {
            $this->animals[] = $animal;
        }

        /**
         * @return String
         */
        public function __toString() : String
        {
            foreach ($this->animals as $animal) {
                echo $animal->getName() . ' ' . $animal->noise();
            }

            return '';
        }

    }