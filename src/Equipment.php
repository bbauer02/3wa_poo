<?php 

namespace App;

class Equipment {

    private array $items = [];
    public function __construct(array $items = []) {
        foreach($items as $item) {
            if($this->isItem($item)) {
                $this->items[] = $item;
            }
        }
    }


    private function isItem ( $item ) {
        return $item instanceof Item;
    }


    public function getItems(): array {
        return $this->items;
    }

    public function setItems(array $items = []): self {
        $this->items = [];
        foreach($items as $item) {
            if($this->isItem($item)) {
                $this->items[] = $item;
            }
        }
        return $this;
    }

    public function addItem(Item $item): self {
        $this->items[] = $item;
        return $this;
    }

    public function removeItem(Item $item): self {
        $index = array_search($item, $this->items);
        if($index !== false) {
            unset($this->items[$index]);
        }
        return $this;
    }

}