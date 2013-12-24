<?php

namespace Spartak\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SpartakUserBundle extends Bundle
{

	public function getParent()
	{
  		return 'FOSUserBundle';
	}

}

