<?php
class register__xampp
{
    public static $name     = 'XAMPP Lite base package';
    public static $relocate = true;
    public static $setup    = true;
};

if (!class_exists('relocate_XAMPP')) {
    class relocate_XAMPP {}
}
class relocate__xampp extends relocate_XAMPP
{
    private static $relocfiles = array();

    private static function relocateShortcut()
    {
        $WshShell   = new COM('WScript.Shell');
        $desktop    = $WshShell->SpecialFolders('Desktop');
        $startmenu  = $WshShell->SpecialFolders('Programs');
        $startmenu .= DIRECTORY_SEPARATOR.'XAMPP Lite for Windows';

        $links = array();
        $links[realpath($desktop.DIRECTORY_SEPARATOR.'XAMPP Control Panel.lnk')] = array(
            'TargetPath'       => self::$xampppath.DIRECTORY_SEPARATOR.'xampp-control.exe',
            'WorkingDirectory' => self::$xampppath,
            'WindowStyle'      => 1,
            'IconLocation'     => self::$xampppath.DIRECTORY_SEPARATOR.'xampp-control.exe',
            'Description'      => 'XAMPP Control Panel'
        );
        $links[realpath($startmenu.DIRECTORY_SEPARATOR.'XAMPP Control Panel.lnk')] = array(
            'TargetPath'       => self::$xampppath.DIRECTORY_SEPARATOR.'xampp-control.exe',
            'WorkingDirectory' => self::$xampppath,
            'WindowStyle'      => 1,
            'IconLocation'     => self::$xampppath.DIRECTORY_SEPARATOR.'xampp-control.exe',
            'Description'      => 'XAMPP Control Panel'
        );
        $links[realpath($startmenu.DIRECTORY_SEPARATOR.'XAMPP Setup.lnk')] = array(
            'TargetPath'       => self::$xampppath.DIRECTORY_SEPARATOR.'xampp_setup.bat',
            'WorkingDirectory' => self::$xampppath,
            'WindowStyle'      => 1,
            'IconLocation'     => self::$xampppath.DIRECTORY_SEPARATOR.'xampp_cli.exe',
            'Description'      => 'XAMPP Setup'
        );
        $links[realpath($startmenu.DIRECTORY_SEPARATOR.'XAMPP Shell.lnk')] = array(
            'TargetPath'       => self::$xampppath.DIRECTORY_SEPARATOR.'xampp_shell.bat',
            'WorkingDirectory' => self::$xampppath,
            'WindowStyle'      => 1,
            'IconLocation'     => self::$xampppath.DIRECTORY_SEPARATOR.'xampp_cli.exe',
            'Description'      => 'XAMPP Shell'
        );
        $links[realpath($startmenu.DIRECTORY_SEPARATOR.'XAMPP Uninstall.lnk')] = array(
            'TargetPath'       => self::$xampppath.DIRECTORY_SEPARATOR.'uninstall_xampp.bat',
            'WorkingDirectory' => self::$xampppath,
            'WindowStyle'      => 1,
            'IconLocation'     => self::$xampppath.DIRECTORY_SEPARATOR.'xampp_cli.exe',
            'Description'      => 'XAMPP Uninstall'
        );

        foreach ($links as $shortcut => $value) {
            if (is_int($shortcut)) {
                continue;
            }

            $oldfileperm = fileperms($shortcut);
            if (!chmod($shortcut, 0666) && !is_writable($shortcut)) {
                throw new XAMPPException('File \''.$shortcut.'\' is not writable.');
            }

            $ShellLink                   = $WshShell->CreateShortcut($shortcut);
            $ShellLink->TargetPath       = $value['TargetPath'];
            $ShellLink->WorkingDirectory = $value['WorkingDirectory'];
            $ShellLink->WindowStyle      = $value['WindowStyle'];
            $ShellLink->IconLocation     = $value['IconLocation'];
            $ShellLink->Description      = $value['Description'];
            $ShellLink->Save();
            $ShellLink = null;

            chmod($shortcut, $oldfileperm);

        }
        $WshShell = null;

        return;
    }

    public static function Run()
    {
        echo 'relocate '.register__xampp::$name.PHP_EOL;
        fflush(STDOUT);

        self::relocateShortcut();

        return;
    }
}

if (!class_exists('setup_XAMPP')) {
    class setup_XAMPP {}
}
class setup__xampp extends setup_XAMPP
{
    private static $functions = array(
        'control_panel'  => array(
            'name'  => 'start XAMPP Control Panel',
            'value' => ''
        ),
        'relocate'  => array(
            'name'  => 'relocate XAMPP',
            'value' => 'all'
        )
    );

    private static $currlocation = 'C:\xampplite';

    public static function Init()
    {
        self::checkLocation(self::$currlocation);
        self::$functions['relocate']['name'] = 'relocate XAMPP'.PHP_EOL.'     (current path: '.self::$currlocation.')';

        return self::$functions;
    }

    public static function control_panel($switch)
    {
        $descriptorspec = array(
           0 => array('pipe', 'r'),
           1 => array('pipe', 'w'),
           2 => array('pipe', 'w')
        );
        $pipes = array();

        $process = proc_open('START "" "'.self::$xampppath.DIRECTORY_SEPARATOR.'xampp-control.exe"', $descriptorspec, $pipes);
        if (is_resource($process)) {
            fclose($pipes[0]);
            fclose($pipes[1]);
            fclose($pipes[2]);

            $result = proc_close($process);
            if (0 != $result) {
                throw new XAMPPException('Can\'t start process \'xampp-control.exe\'.');
            }
        } else {
            throw new XAMPPException('Can\'t start process \'xampp-control.exe\'.');
        }

        return;
    }

    public static function relocate($switch)
    {
        self::relocateXAMPP($switch);

        return;
    }
}
?>
