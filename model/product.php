<?php
class Product {
    private int $id = 0;
    private ?Category $category = null;
    private string $code = '';
    private string $name = '';
    private float $price = 0.0;

    public function __construct(

    ) { }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $value): void
    {
        $this->category = $value;
    }

    public function getID(): int
    {
        return $this->id;
    }

    public function setID(int $value): void
    {
        $this->id = $value;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $value): void
    {
        $this->code = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $value): void
    {
        $this->name = $value;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getPriceFormatted(): string
    {
        $formatted_price = number_format($this->price, 2);
        return $formatted_price;
    }

    public function setPrice(float $value): void
    {
        $this->price = $value;
    }

    public function getDiscountPercent(): int
    {
        $discount_percent = 30;
        return $discount_percent;
    }

    public function getDiscountAmount(): string
    {
        $discount_percent = $this->getDiscountPercent() / 100;
        $discount_amount = $this->price * $discount_percent;
        $discount_amount_r = round($discount_amount, 2);
        $discount_amount_f = number_format($discount_amount_r, 2);
        return $discount_amount_f;
    }

    public function getDiscountPrice(): string
    {
        $discount_price = $this->price - $this->getDiscountAmount();
        $discount_price_f = number_format($discount_price, 2);
        return $discount_price_f;
    }

    public function getImageFilename(): string
    {
        $image_filename = $this->code . '.png';
        return $image_filename;
    }

    public function getImagePath(): string
    {
        $image_path = '../images/' . $this->getImageFilename();
        return $image_path;
    }

    public function getImageAltText(): string
    {
        $image_alt = 'Image: ' . $this->getImageFilename();
        return $image_alt;
    }
}
?>