<?php
use Cake\Core\Configure;

if(empty(Configure::read('Postfinance'))) throw new \Exception('Wgr\Postfinance: Missing Postfinance app settings');
