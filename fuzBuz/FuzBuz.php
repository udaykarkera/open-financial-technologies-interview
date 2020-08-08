<?php

/**
 * Class FuzBuz
 */
class FuzBuz
{
    public function startGame()
    {
        do {
            $rerun = $this->process($this->takeNumber());
        } while ($rerun);
    }

    public function exitGame() {
        General::printLines(['You have stopped the game. Goodbye!']);
        exit;
    }

    /**
     * @return mixed
     */
    private function takeNumber()
    {
        General::printLines([
            "Please enter a number"
        ]);

        // Allow Player to enter a number
        return $this->checkInput(General::takeInput());
    }

    /**
     * @param string $input
     * @return string
     */
    private function checkInput(string $input): string
    {
        if (trim($input) == 'exit') $this->exitGame();
        return $input;
    }

    /**
     * @param $number
     * @return bool
     */
    private function process($number): bool
    {
        General::printLines([
            "Value entered is $number"
        ]);
        $output = '';
        if ($this->numberDivisibleByThree($number)) {
            $output .= "Fuz";
        }
        if ($this->numberDivisibleByTwo($number)) {
            $output .= "Buz";
        }
        $output = ($output) ? $output : 'No Fuz or Buz';
        General::printLines([$output]);
        return true;
    }

    /**
     * @param $number
     * @return bool
     */
    private function numberDivisibleByThree($number): bool
    {
        return is_numeric($number) && $number % 3 == 0;
    }

    /**
     * @param $number
     * @return bool
     */
    private function numberDivisibleByTwo($number): bool
    {
        return is_numeric($number) && $number % 2 == 0;
    }
}