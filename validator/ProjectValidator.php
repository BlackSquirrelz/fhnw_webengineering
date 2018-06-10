<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 11.10.2017
 * Time: 11:21
 */
/**
 * Updated by PhpStorm.
 * User: blacksquirrelz
 * Date: 2018.05.01
 * Time: 14:45
 */

namespace validator;

use domain\Project;

class projectValidator
{
    private $valid = true;
    private $nameError = null;
    private $descriptionError = null;
    private $startDateError = null;
    private $endDateError = null;

    public function __construct(Project $project = null)
    {
        if (!is_null($project)) {
            $this->validate($project);
        }
    }

    public function validate(Project $project)
    {
        if (!is_null($project)) {
            if (empty($project->getName())) {
                $this->nameError = 'Please enter a valid project name';
                $this->valid = false;
            }

            if (empty($project->getDesc())) {
                $this->descriptionError = 'Please enter an description';
                $this->valid = false;
            }

            if (empty($project->getStartDate())) {
                $this->startDateError = 'Please enter a valid start date';
                $this->valid = false;
            }
            if (empty($project->getEndDate())) {
                $this->endDateError = 'Please enter a valid end date';
                $this->valid = false;
            } else if($project->getEndDate() < $project->getStartDate()) {
                $this->endDateError = 'The end date must not be before the start date';
                $this->valid = false;

            }
        } else {
            $this->valid = false;
        }
        return $this->valid;

    }

    public function isValid()
    {
        return $this->valid;
    }

    public function isNameError()
    {
        return isset($this->nameError);
    }

    public function getNameError()
    {
        return $this->nameError;
    }

    public function isDescriptionError()
    {
        return isset($this->descriptionError);
    }

    public function getDescriptionError()
    {
        return $this->descriptionError;
    }

    public function isStartDateError()
    {
        return isset($this->startDateError);
    }

    public function getStartDateError()
    {
        return $this->startDateError;
    }
    public function isEndDateError()
    {
        return isset($this->endDateError);
    }

    public function getEndDateError()
    {
        return $this->endDateError;
    }
}