<?php

declare(strict_types=1);

require_once('JobCandidate.php');
require_once('Storage.php');

class Employer
{
    private $candidate;

    public function __construct(JobCandidate $c)
    {
        $this->candidate = $c;
    }

    public function getCandidate()
    {
        return $this->candidate;
    }


    public function signEmployee(JobCandidate $currentCandidate): void
    {
        if ($currentCandidate->isExperienced() == true) {
            $storageClass = new Storage();
            $storageClass->insert($currentCandidate->getName());
        } elseif (strpos(file_get_contents("deniedCandidates.txt"), $currentCandidate->getName()) == false) {
            file_put_contents("deniedCandidates.txt", "{$currentCandidate->getName()},\n", FILE_APPEND);
            echo "Candidate data sent to storage";
        }
        else echo "Such name already exists in storage";
    }
}

$firstCandidate = new Employer(new JobCandidate("John", true));
$firstCandidate->signEmployee($ex->getCandidate());







