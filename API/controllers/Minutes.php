<?php
class Minutes extends Controller {

    // Constructor
    public function __construct($request) {
        parent::__construct($request);
    }

    // Main method
    public function main(){
        $this->setModel('Minute');
        $this->default();
    }

    // Download minute as pdf
    public function download(){
        // Load minute
        $minuteModel = Model::getModel('Minute', $this->request);
        $minute = $minuteModel->select();
        if (!count($minute)){
            respond('NOT_FOUND', null, 'Minute not found!');
        }
        $minute = $minute[0];

        // Load matters by given conditions
        $matterModel = Model::getModel('Matter', $this->request);
        $matters = $matterModel->select();

        // $xml = new XMLMinute($minute, $matters);

        $index = $minute['minute_index'];
        $pdf = new PDF();
        // Create Title
        $pdf->makeTitle('MINUTES OF THE MEETING ' . $index . ' OF ' . strtoupper($GLOBALS['config']['board_name']) . ' HELD ON ' . $minute['start_time'] . ' AT ' . $minute['venue']);
        // Create section
        $pdf->ChapterTitle($index . '.1  Preliminaries');
        $pdf->ChapterBody($minute['preliminary']);
        // var_dump($minute);
        $pdf->ChapterTitle($index . '.2  Confirmation of Minutes');
        $date = $minute['start_time'];
        $pdf->ChapterBody("Minutes of the $index meeting held on $date were confirmed subjects to the following amendments.");
        ////////////////////
        // !!! ADMENDMENTS
        ////////////////////
        $pdf->ChapterTitle($index . '.3  Matters Arising from Minutes');
        ////////////////////
        // !!! MATTERS ARISING
        ////////////////////
        $pdf->ChapterTitle($index . '.4  Any Other Business I');
        $matters1 = $matterModel->select(); // TMP: Section 4
        foreach ($matters1 as $item){
            $pdf->AddMatter($item['matter_index'], $item['title'], $item['content']);
        }

        // $pdf->Write(5,"To find out what's new in this tutorial, click ");

        $title = '20000 Leagues Under the Seas';
        $pdf->SetTitle("Minute");

        $pdf->PrintChapter(1,'A RUNAWAY REEF','20k_c1.txt');
        $pdf->PrintChapter(2,'THE PROS AND CONS','20k_c2.txt');
        $pdf->Output();
    }

}
