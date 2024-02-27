<?php
/** @var CUpdater $updater */
/** @var CDatabase $DB */

if (IsModuleInstalled('fileman') && $updater->CanUpdateKernel())
{
	$updater->CopyFiles('install/js', 'js');
	$updater->CopyFiles('install/components', 'components');
}

if ($updater->canUpdateKernel())
{
	$filesToDelete = [
		'modules/fileman/install/tasks/install.php',
		'modules/fileman/install/tasks/uninstall.php',
	];
	foreach ($filesToDelete as $fileName)
	{
		CUpdateSystem::deleteDirFilesEx($_SERVER['DOCUMENT_ROOT'] . $updater->kernelPath . '/' . $fileName);
	}
}
