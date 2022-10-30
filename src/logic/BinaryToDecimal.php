<?php

class BinaryToDecimal {
    public int $result;

    public function __construct(int $binary) {
        $this->setResult(bindec($binary));
    }

    public function getResult(): int {
        return $this->result;
    }

    public function setResult(int $newResult): void {
        $this->result = $newResult;
    }
}
