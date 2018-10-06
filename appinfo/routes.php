<?php
/**
 * @author Piotr Mrowczynski <piotr.mrowczynski@yahoo.com>
 *
 * @copyright Copyright (c) 2017, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OCA\Files_PaperHive\AppInfo;

$app = new Application();

$app->registerRoutes($this, array('routes' => array(

	[
		'name' => 'PaperHive#loadMetadata',
		'url' => '/ajax/loadmetadata',
		'verb' => 'GET'
	],
	[
		'name' => 'PaperHive#getPaperHiveDetails',
		'url' => '/ajax/getpaperhivedetails',
		'verb' => 'GET'
	],
	[
		'name' => 'PaperHive#generatePaperHiveDocument',
		'url' => '/ajax/generatePaperHiveDocument',
		'verb' => 'GET'
	]
)));