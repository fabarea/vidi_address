<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

$tca = array(
	'ctrl' => array(
		'default_sortby' => 'ORDER BY name ASC',
	),
	'grid' => array(
		'facets' => array(
			'uid',
			'name',
		),
		'columns' => array(
			'__checkbox' => array(
				'width' => '5px',
				'sortable' => FALSE,
				'html' => '<input type="checkbox" class="checkbox-row-top"/>',
			),
			'uid' => array(
				'visible' => FALSE,
				'label' => 'LLL:EXT:vidi_address/Resources/Private/Language/tt_address.xlf:uid',
				'width' => '5px',
			),
			'name' => array(
				'editable' => TRUE,
				'label' => 'LLL:EXT:vidi_address/Resources/Private/Language/tt_address.xlf:name',
			),
			'email' => array(
				'editable' => TRUE,
				'label' => 'LLL:EXT:vidi_address/Resources/Private/Language/tt_address.xlf:email',
			),
			'__buttons' => array(
				'sortable' => FALSE,
				'width' => '70px',
			),
		)
	)
);

$result = NULL;
if (!empty($GLOBALS['TCA']['tt_address'])) {
	$result = \TYPO3\CMS\Core\Utility\GeneralUtility::array_merge_recursive_overrule($GLOBALS['TCA']['tt_address'], $tca);
}
return $result;
?>