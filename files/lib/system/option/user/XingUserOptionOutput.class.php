<?php
namespace wcf\system\option\user;
use wcf\data\user\option\UserOption;
use wcf\data\user\User;
use wcf\util\StringUtil;

/**
* @author		Niklas Schmitt
* @copyright 	2020 Niklas Schmitt <www.niklas-schmitt.de>
* @package		de.niklas-schmitt.wsc.xing_profile
*/
class XingUserOptionOutput implements IUserOptionOutput {
/**
 * @see wcf\system\option\user\IUserOptionOutput::getOutput()
 */
public function getOutput(User $user, UserOption $option, $value) {
		if (empty($value)) return '';

		$value = trim($value);
		$link = 'https://www.xing.com/profile/'.$value;

		$link = StringUtil::encodeHTML($link);
		$value = StringUtil::encodeHTML($value);

		return '<a href="'.$link.'" class="externalURL"'.(EXTERNAL_LINK_REL_NOFOLLOW ? ' rel="nofollow"' : '').(EXTERNAL_LINK_TARGET_BLANK ? ' target="_blank"' : '').'>'.$value.'</a>';
	}
}
