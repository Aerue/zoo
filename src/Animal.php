<?php
    /**
     * Author : Alexandre PERRIGAULT
     * Created date : 14/02/2020 14:36
     */

    namespace App;


    abstract class Animal
    {

        /**
         * @var String $name
         */
        private $name;

        /**
         * Animal constructor.
         *
         * @param String $name
         */
        public function __construct(String $name)
        {
            $this->name = $name;
        }

        /**
         * @return String
         */
        abstract protected function getNoise() : String;

        /**
         * @return String
         */
        public function noise()
        {
            return $this->getNoise();
        }

        /**
         * @return String
         */
        public function getName(): String
        {
            return $this->name;
        }

    }