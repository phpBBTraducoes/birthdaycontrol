<?php
/**
*
* Birthday Control extension for the phpBB Forum Software package.
* Brazilian Portuguese  translation by eunaumtenhoid [2017][ver 1.0.2] (https://github.com/phpBBTraducoes)
* @copyright (c) 2014 Lucifer <http://www.anavaro.com>
* @license GNU General Public License, version 2 (GPL-2.0)

*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BIRTH_DATE'	=> 'Data de nascimento',
	'BDAY_NO_DATE'	=> 'Por favor selecione a data de nascimento. Não será possível registrar-se neste forum se você não inserir sua data de nascimento.',
	'BDAY_TO_YOUNG'	=> 'Você não tem a idade mínima para registrar-se neste forum. <br /> Este forum exige a idade mínima de %1$d anos.',
	'BC_SHOW_BDAY'	=> 'Mostrar idade',
	'BDAY_NA'	=> 'n/a',

));
