<?php
/*
 * Created on 2007/10/11 by nao-pon http://hypweb.net/
 * $Id: Conf_UTF-8.php,v 1.2 2011/07/29 01:37:52 nao-pon Exp $
 */

// Encoding hint
$_LANG['encode_hint'] = 'ぷ';

// Accept language
$const['ACCEPT_UILANG'] = 'all';

// Array for normalization of page name. Characters that cannot be used.  [ ] < > # & " :
$root->pagename_illegality = array('[',  ']',  '<',  '>',  '#',  '&',  '"',  ':');
$root->pagename_normalizer = array('［', '］', '＜', '＞', '＃', '＆', '”', '：');
