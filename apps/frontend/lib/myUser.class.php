<?php

class myUser extends sfGuardSecurityUser
{
    public function getCurrentNumberOfEvent()
    {
    	$count = 0;
        if (!is_null($this->getGuardUser()->getConsultant())) {
        	$count = EventTable::getInstance()->countCurrentEventByConsultantId($this->getGuardUser()->getConsultant()->getId());
        }
        return $count;
    }

}
