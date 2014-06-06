<?php
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014  Yuri Kuznetsov, Taras Machyshyn, Oleksiy Avramenko
 * Website: http://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 ************************************************************************/ 

namespace Espo\Core\Utils\Database\Orm\Relations;

class NoteAttachments extends \Espo\Core\Utils\Database\Orm\Relations\HasChildren
{
	public function load($params, $foreignParams)
	{
		$parentRelation = parent::load($params, $foreignParams);
		$relation = array(
			$params['entityName'] => array (				
				'fields' => array(
					$params['link']['name'].'Types' => array(
						'type' => 'varchar',
						'notStorable' => true,
					),
				),
			),
		);		
		$relation = \Espo\Core\Utils\Util::merge($parentRelation, $relation);
		return $relation;
	}
}

