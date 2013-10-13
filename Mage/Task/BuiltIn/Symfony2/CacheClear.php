<?php
class Mage_Task_BuiltIn_Symfony2_CacheClear
    extends Mage_Task_TaskAbstract
{
    public function getName()
    {
        return 'Symfony v2 - Cache Clear [built-in]';
    }

    public function run()
    {
    	// Options
    	$env = $this->getParameter('env', 'dev');

        $command = 'app/console cache:clear --env=' . $env;
        $result = $this->_runLocalCommand($command);

        return $result;
    }
}