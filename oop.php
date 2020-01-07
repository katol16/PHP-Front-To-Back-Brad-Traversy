<?php
    class Person {
        // access modifiers:
        // "public", mozemy używać tej wałściwosoci lub metody poza nasza klasą i oczywisice w naszej klasie
        // "private" only in class
        // "protected" in this class and classes that extended that class

        //  public $name;
        //  public $email;

        private $name;
        private $email;
        // Dodatkowa rzecz
        public static $ageLimit = 40;

        // Do statycznych funkcji
        private static $ageForFunction = 18;

    // Konstruktor konstruuje obiekt naszej klasy.
    // Wykona się jako peirwszy przy każdym tworzeniu obiektów za pomocą "new ClassName"
        public function __construct($name, $email) {
            // tutaj w zasadzie zrobimy to co w setName i setEmail, tak zeby nie trzeba bylo za kazdym razem odpalać te "sety"
            $this->name = $name;
            $this->email = $email;
            // echo 'Person Created<br>';
            // TO powyżej możemy też zrobić tak:
            echo __CLASS__.' Created<br>';
            // __CLASS__ da nam nazwę klasy
        }

    // Mamy również dekonstrukcję klasy, która wykona się na koniec jej działania
        public function __destruct() {
            echo __CLASS__.' Destroyed<br>';
        }


    // poniższe metody nazywane są jak "getters" i "setters"
        public function setName($name) {
            return $this-> name = $name;
        }


        public function getName() {
            // $this, wskazuje tutaj na naszą klasę
            return $this->name.'<br>';
        }

        public function setEmail($email) {
            return $this-> email = $email;
        }


        public function getEmail() {
            // $this, wskazuje tutaj na naszą klasę
            return $this->email;
        }

        public static function getAgeLimit() {
            // dla statycznych emtod używmay "self" zamiast "this"
            return self::$ageForFunction;
    }
    };

    $person1 = new Person;
    // Często nie chcemy wywoływać za każdym razem rzy Tqorzeniu obiektu setName itd.
    // wtedy mozmey stowrzyć konstruktor, który wykona się zawsze kiedy będziemy inicjalizować naszą klasę (new ClassName)
    $person1->setName('John Doe');
    echo $person1->getName();

    // Ostatecznie będiemy mieć:
        //    Person Created
        //    John Doe
        //    Person Destroyed


    // UWAGA! To poniżej zadziałą tylko jak $name i $email będą "public"
    //    $person1 = new Person;
    //    print_r($person1); // wyświetli pusty obiekt: Person Object ( [name] => [email] => )
    //
    //    // Jeśli w obiekcie chcesz użyc jakiejś właściwosci to używasz strzełaki (w JS jest kropka, czyli person.name)
    //    $person1->name = 'John Doe';
    //    echo $person1->name;

    // STATIC PROPS AND METHOD
    // UWAGA!
    // Nawet jeśli nigdzie nie stworzymy obiektu za pomocą Person, to wciąż możmey uzyć tego $ageLimit w taki sposób:
    echo Person::$ageLimit;
    // Możemy użyć $ageLimit, bo jest "public static"

    // Tak samo dla metod
    echo Person::getAgeLimit();

    class Customer extends Person {
        private $balance;

        public function __construct($name, $email, $balance) {
            // Musimy wywołać constuctor rodzica czyli Person
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new '.__CLASS__.' has been created<br>';
        }

        public function setBalance($balance) {
            $this->balance = $balance;
        }

        public function getBalance() {
            return $this->balance.'<br>';
        }
    }

    // jeśli tutaj chcemy jako 3 parametr przekazać balance (to nasze 100), to musimy też dodać konstruktor w klasie Customer
    $customer1 = new Customer("Brad Traversy", "Brad@op.pl", 100);
    echo $customer1->getBalance();

?>