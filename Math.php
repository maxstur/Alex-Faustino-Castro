<?php
/**
* 
*/
class Math
{
	
	public function getHipotenusa($catetoAdj,$catetoOp)
	{
		return sqrt(($catetoAdj * $catetoAdj)+($catetoOp * $catetoOp));
	}
}