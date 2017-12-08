<?php
class XMLMinute {
    protected $minute;
    protected $matters;
    protected $xml;

    // Constructor
    public function __construct($minute, $matters){
        $this->minute = $minute;
        $this->matters = $matters;
        $this->generate();
    }

    // Generate XML
    public function generate(){
        $minute = $this->minute;
        $matters = $this->matters;
        $this->xml = "You can now<np> easily print text mixing different styles: <b>bold</b>, <i>italic</i>,
        <u>underlined</u>, or <b><i><u>all at once</u></i></b>!<br><br>You can also insert links on
        text, such as <a href='http://www.fpdf.org'>www.fpdf.org</a>, or on an image: click on the logo.";
    }

    // Parse to string
    public function __toString(){
        return $this->xml;
    }
}
