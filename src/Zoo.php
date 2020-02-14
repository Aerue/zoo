<?php
    /**
     * Author : Alexandre PERRIGAULT
     * Created date : 14/02/2020 15:09
     */

    namespace App;


    use App\Interfaces\CanSwim;
    use App\Interfaces\CanWalk;

    class Zoo
    {

        /**
         * @var Enclosure|null $aquarium
         */
        private static $aquarium = null;

        /**
         * @var Enclosure|null $fence
         */
        private static $fence = null;

        /**
         * @return Enclosure|null
         */
        public static function getAquarium()
        {
            return self::$aquarium;
        }

        /**
         * @return Enclosure|null
         */
        public static function getFence()
        {
            return self::$fence;
        }

        /**
         * @param Animal $animal
         */
        public static function addAnimal(Animal $animal) : void
        {
            if (self::getAquarium() === null) {
                self::$aquarium = new Enclosure();
            }

            if (self::getFence() === null) {
                self::$fence = new Enclosure();
            }

            if ($animal instanceof CanSwim) {
                self::$aquarium->addAnimal($animal);
            }

            if ($animal instanceof CanWalk) {
                self::$fence->addAnimal($animal);
            }
        }

    }