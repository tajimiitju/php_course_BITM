<?php

interface BazarList{
    public function buy();
    public function haveMoney();

}

interface C {
    public function change();
}
interface D extends BazarList {

}





class Bazar2 implements BazarList, C {
    public function buy()
    {
        // TODO: Implement buy() method.
    }
    public function haveMoney()
    {
        // TODO: Implement haveMoney() method.
    }
    public function change()
    {
        // TODO: Implement change() method.
    }
}



class Bazar implements BazarList{
    public function buy()
    {
        // TODO: Implement buy() method.
    }
    public function haveMoney()
    {
        // TODO: Implement haveMoney() method.
    }



}