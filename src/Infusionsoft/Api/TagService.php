<?php
namespace Infusionsoft\Api;

class TagService extends AbstractApi {
	/**
	 * @param string $contactId
	 * @param array $selectedFields
	 * @return array
	 */
	public function findByContactId($contactId, $selectedFields)
	{
		return $this->client->request('DataService.query', 'ContactGroupAssign', 1000, 0, array('ContactId' => $contactId), $selectedFields);
	}

}