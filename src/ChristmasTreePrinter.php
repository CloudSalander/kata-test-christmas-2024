<?php

class ChristmasTreePrinter {
    const  LEAF = "*";
    const  BLANK_LEAF = " ";
    const TRUNK = "|||";
    const TRUNK_LENGTH = 3;

    public function print() {
        $height = $this->getTreeHeight();
        $this->printTree($height);
    }

    private function getTreeHeight(): int {
        return intval(readline());    
    }

    private function printTree(int $treeHeight): void {
        $treeLength = $treeHeight*2-1;
        $rowLength = 1;
        for($i = 0; $i < $treeHeight; ++$i) { 
            $this->printLeafsRow($rowLength,$treeLength);
            $rowLength += 2;
        }
        $this->printTrunk($treeLength);
    }

    private function printTrunk(int $treeLength): void {
        if($treeLength == 1) echo TRUNK;
        else {
            $padding = intdiv($treeLength-TRUNK_LENGTH,2);
            echo str_repeat(BLANK_LEAF,$padding);
            echo TRUNK;
        }
        echo PHP_EOL;
    }

    private function printLeafsRow(int $rowLength, int $treeLength): void {
        if($treeLength == 1) echo BLANK_LEAF.LEAF.BLANK_LEAF;   
        else  {
            $padding = intdiv(($treeLength-$rowLength),2);
            if($padding > 0) echo str_repeat(BLANK_LEAF,$padding);
            echo str_repeat(LEAF,$rowLength);
        }
        echo PHP_EOL;
    }
}

?>