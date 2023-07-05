<?php
class Category {
    private int $id = 0;
    private string $name = '';
    public function __construct() { }

    public function getID(): int
    {
        return $this->id;
    }

    public function setID(int $value): void
    {
        $this->id = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $value): void
    {
        $this->name = $value;
    }
}
?>