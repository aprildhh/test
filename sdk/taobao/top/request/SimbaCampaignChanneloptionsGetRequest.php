<?php
/**
 * TOP API: taobao.simba.campaign.channeloptions.get request
 * 
 * @author auto create
 * @since 1.0, 2013-11-04 12:54:06
 */
class SimbaCampaignChanneloptionsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.simba.campaign.channeloptions.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
