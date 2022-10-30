<?php

include("./src/logic/BinaryToDecimal.php");
include("./src/logic/DecimalToBinary.php");

class App {
    private bool $executionState = true;
    
    public function __construct() {}

    private function getExecutionState(): bool {
        return $this->executionState;
    }

    private function setExecutionState(bool $newState): void {
        $this->executionState = $newState;
    }

    private function avaliateExecution(): void {
        $prompt = readline("Have you want execute again? (y/n) ");

        if(strtolower(trim($prompt)) != 'y') {
            echo "See you soon!\n";
            $this->setExecutionState(false);
        }
    }

    private function interface(): void {
        echo "What you want to do?\n";
        echo "1 - Convert binary to decimal\n";
        echo "2 - Convert decimal to binary\n";

        $option = readline("R: ");
        $value = readline("Enter the value: ");

        switch($option) {
            case 1:
                $this->binaryToDecimal($value);
                break;
            case 2:
                $this->decimalToBinary($value);
                break;
            default:
                echo "It seems that you haven't entered a valid value. Please try again.";
        }
    }

    private function binaryToDecimal($value): void {
        $b2d = new BinaryToDecimal($value);

        echo "Input: " . $value . "\n";
        echo "Output: " . $b2d->getResult() . "\n";
    }

    private function decimalToBinary($value): void {
        $d2b = new DecimalToBinary($value);
    
        echo "Input: " . $value . "\n";
        echo "Output: " . $d2b->getResult() . "\n";
    }

    public function run(): void {
        while($this->getExecutionState()) {            
            $this->interface();
            $this->avaliateExecution();
        }
    }
}
