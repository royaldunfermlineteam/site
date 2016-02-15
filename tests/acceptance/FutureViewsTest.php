<?php

class FutureViewsTest extends TestCase
{

    public function see_the_root_view()
    {
        $this->view('future/')
             ->see('future');
    }

}
