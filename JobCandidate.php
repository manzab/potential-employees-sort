<?php
declare(strict_types = 1);

class JobCandidate {
    private $name;
    private $isExperienced;

    public function __construct(string $n, bool $e) {
        $this->name = $n;
        $this->isExperienced = $e;
    }

    public function isExperienced(): bool {
       return $this->isExperienced;
    } 
    public function getName(): string {
        return $this->name;
     } 

}
?>