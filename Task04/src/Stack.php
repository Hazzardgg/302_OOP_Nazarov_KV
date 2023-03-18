<?php

namespace App;
class Stack implements StackInterface
{
    private $stack;

    public function __construct(mixed ...$elems)
    {

    }

    public function push(mixed ...$elems)
    {
        foreach ($elems as $index => $elem) {
            $this->stack[] = $elem;
        }
    }

    public function pop()
    {
        $elem = $this->stack[count($this->stack) - 1];
        $this->stack = array_slice($this->stack, 0, -1);
        return $elem;
    }

    public function top()
    {
        return $this->stack[count($this->stack) - 1];
    }

    public function isEmpty()
    {
        if (count($this->stack) == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function copy()
    {
        $temp_stack = new Stack();
        foreach ($this->stack as $index => $elem) {
            $temp_stack->push($elem);
        }
        return $temp_stack;
    }

    public function __toString()
    {
        $temp = "[";
        foreach ($this->stack as $index => $elem)
        {
            $temp = $temp . $elem . "->";
        }
        return substr($temp, 0, -2) . "]";
    }
}
