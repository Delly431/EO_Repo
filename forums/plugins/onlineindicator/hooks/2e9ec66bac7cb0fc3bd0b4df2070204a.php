//<?php

class hook10 extends _HOOK_CLASS_
{

    protected $danielSon_memberIsOnline= NULL;
  
  public function isOnline()
	{
		try
		{
	  	 if ( !$this->danielSon_memberIsOnline )
	     {
	       $this->danielSon_memberIsOnline = parent::isOnline();
	     }
	    return $this->danielSon_memberIsOnline;
	}
	catch ( \RuntimeException $e )
	{
		return call_user_func_array( 'parent::' . __FUNCTION__, func_get_args() );
	}
  }
}