<?php

class DecimalToBinary {
    public int $result;

    public function __construct(int $decimal) {
        $this->setResult(decbin($decimal));
    }

    public function getResult(): int {
        return $this->result;
    }

    public function setResult(int $newResult): void {
        $this->result = $newResult;
    }
}
