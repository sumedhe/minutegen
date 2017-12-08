<?php
class PDF extends FPDF
{
    public $font = 'Times';
    public $size = 12;

    function __construct(){
        parent::__construct();
        $this->SetMargins(20,20,20);
        $this->SetAuthor('MinuteGen');
        $this->AddPage();
        $this->resetFont();
    }


    function makeTitle($title){
        $this->SetTitle($title);
        $this->SetFontSize(14);
        $this->setStyle('B');
        $this->MultiCell(170, 7, $title, 0, 'C');
        $this->Ln(10);
        $this->resetFont();
    }

    function resetFont(){
        $this->SetFont($this->font, '', $this->size);
    }

    function setStyle($style){
        $this->SetFont($this->font, $style);
    }

    // function Header()
    // {
    //     global $title;
    //
    //     // Arial bold 15
    //     $this->SetFont('Arial','B',15);
    //     // Calculate width of title and position
    //     $w = $this->GetStringWidth($title)+6;
    //     $this->SetX((210-$w)/2);
    //     // Colors of frame, background and text
    //     $this->SetDrawColor(0,80,180);
    //     // $this->SetFillColor(230,230,0);
    //     $this->SetTextColor(220,50,50);
    //     // Thickness of frame (1 mm)
    //     $this->SetLineWidth(1);
    //     // Title
    //     $this->Cell($w,9,$title,1,1,'C',true);
    //     // Line break
    //     $this->Ln(10);
    // }

    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Text color in gray
        $this->SetTextColor(128);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
    }

    function MainTitle($title){
        $this->SetFont('Arial','B',15);
        $this->Cell(0, 50, $title, 0, 0, 'C');
        $this->Ln(10);
    }

    function ChapterTitle($label)
    {
        // Arial 12
        // $this->SetFont('Arial','',12);
        // Background color
        $this->setStyle('B');
        $this->SetFillColor(200,220,255);
        // Title
        $this->Cell(0,6,"$label",0,1,'L',true);
        // Line break
        $this->Ln(4);
        $this->setStyle('');
    }

    function ChapterBody($txt)
    {
        // $this->SetFont('Times','',12);
        // Output justified text
        $this->MultiCell(0,5,$txt);
        // Line break
        $this->Ln(15);
        // Mention in italics
    }

    function AddMatter($index, $title, $content){
        $this->setStyle('B');
        $this->MultiCell(0,5, $index . '  ' . $title);
        $this->Ln(3);
        $this->setStyle('');
        $this->MultiCell(0,5, $content);
        $this->Ln(5);
    }

    function PrintChapter($num, $title, $file)
    {
        $this->AddPage();
        $this->ChapterTitle($num,$title);
        $this->ChapterBody($file);
    }
}
