<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $min;
    public $max;
    public $placeholder;
    public $readonly;
    public $required;
    public $disabled;
    public $value;

    public function render()
    {
        return view('livewire.input', [
            'type' => $this->type,
            'name' => $this->name,
            'min' => $this->min,
            'max' => $this->max,
            'placeholder' => $this->placeholder,
            'readonly' => $this->readonly,
            'required' => $this->required,
            'disabled' => $this->disabled,
            'value' => $this->value,
        ]);
    }
}
