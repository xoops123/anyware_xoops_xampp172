Option Explicit
' XAMPP Lite Uninstaller
'
' author     Carsten Wiedmann <carsten_sttgt@gmx.de>
' author     Kay Vogelgesang <kvo@apachefriends.org>
' copyright  2009 Carsten Wiedmann
' license    http://www.freebsd.org/copyright/freebsd-license.html FreeBSD License
' version    1.0


Private objFSO, objWshShell, objWshShellEnv
Private strCommand, strInput, strXAMPPLocation, strUninstallTempLoc, strUninstallBatchFile, strMySQLDataLoc, strApacheHtdocsLoc, strTomcatWebappsLoc
Private boolApacheHtdocs, boolMySQLData, boolAutoUninstall, boolAddOnTomcat, boolTomcatWebapps

Set objWshShell = WScript.CreateObject("WScript.Shell")
Set objFSO = Createobject("Scripting.FileSystemObject")

Set objWshShellEnv = objWshShell.Environment("SYSTEM")
strCommand = objWshShellEnv("COMSPEC")
Set objWshShellEnv = Nothing

strXAMPPLocation = objFSO.GetParentFolderName(objFSO.GetParentFolderName(WScript.ScriptFullName))
strUninstallTempLoc = objFSO.BuildPath(strXAMPPLocation, "uninst.temp")
strUninstallBatchFile = objFSO.BuildPath(strXAMPPLocation, "uninstall_xampp.bat")
strMySQLDataLoc = objFSO.BuildPath(objFSO.BuildPath(strXAMPPLocation, "mysql"), "data")
strApacheHtdocsLoc = objFSO.BuildPath(strXAMPPLocation, "htdocs")
strTomcatWebappsLoc = objFSO.BuildPath(objFSO.BuildPath(strXAMPPLocation, "tomcat"), "webapps")
objWshShell.CurrentDirectory = strXAMPPLocation

If (WScript.Arguments.Unnamed.Count) Then
    If (LCase(WScript.Arguments.Unnamed.Item(0)) = "auto") Then
        boolAutoUninstall = True
    Else
        boolAutoUninstall = False
    End If
Else
    boolAutoUninstall = False
End If

If objFSO.FolderExists(objFSO.BuildPath(objFSO.BuildPath(strXAMPPLocation, "tomcat"), "webapps")) Then
    boolAddOnTomcat = True
Else
    boolAddOnTomcat = False
End If


Private Sub TestWScript()
    If "wscript.exe" = LCase(objFSO.GetFileName(WScript.FullName)) Then
        WScript.Echo "Please run this tool with ""Cscript.exe //Nologo xampp_uninstall.vbs""."

        Set objFSO = Nothing
        Set objWshShell = Nothing
        WScript.Quit(1)
    End If
End Sub

Private Sub TestLocation()
    If objFSO.GetParentFolderName(WScript.ScriptFullName) <> strUninstallTempLoc Then
        WScript.Echo "Please run this tool with the batchfile ""uninstall_xampp.bat""."

        Set objFSO = Nothing
        Set objWshShell = Nothing
        WScript.Quit(1)
    End If
End Sub

Private Sub PrintTitle()
    Dim intI

    For intI = 1 To 24
        WScript.Echo VbCrLf
    Next
    WScript.Echo "#######################################################################"
    WScript.Echo "# xampp_uninstall v1.0 by (c) 2009 Carsten Wiedmann (FreeBSD License) #"
    WScript.Echo "# Send bug reports to the author at <carsten_sttgt@gmx.de>.           #"
    WScript.Echo "#---------------------------------------------------------------------#"
    WScript.Echo "# This Script will uninstall your XAMPP installation.                 #"
    WScript.Echo "#######################################################################"
    WScript.Echo VbCrLf
End Sub

Private Sub GetNotDelete()
    If (boolAutoUninstall = True) Then
        boolApacheHtdocs = False
        boolMySQLData = False

        WScript.Echo "I will not delete """ & strApacheHtdocsLoc & """."
        WScript.Echo "I will not delete """ & strMySQLDataLoc & """."
        If boolAddOnTomcat = True Then
            WScript.Echo "I will not delete """ & strTomcatWebappsLoc & """."
        End If
        WScript.Echo VbCrLf
        Exit Sub
    End If

    Do
        WScript.StdOut.Write "                                                    n" & Chr(13) & "Should I delete your Apache htdocs directory? (y/n) "
        strInput = LCase(WScript.StdIn.ReadLine)
    Loop Until ((strInput = "y") Or (strInput = "") Or (strInput = "n"))
    If (strInput = "y") Then
        boolApacheHtdocs = True
    Else
        boolApacheHtdocs = False
    End If

    Do
        WScript.StdOut.Write "                                                 n" & Chr(13) & "Should I delete your MySQL data directory? (y/n) "
        strInput = LCase(WScript.StdIn.ReadLine)
    Loop Until ((strInput = "y") Or (strInput = "") Or (strInput = "n"))
    If (strInput = "y") Then
        boolMySQLData = True
    Else
        boolMySQLData = False
    End If

    If boolAddOnTomcat = True Then
        Do
            WScript.StdOut.Write "                                                     n" & Chr(13) & "Should I delete your Tomcat webapps directory? (y/n) "
            strInput = LCase(WScript.StdIn.ReadLine)
        Loop Until ((strInput = "y") Or (strInput = "") Or (strInput = "n"))
        If (strInput = "y") Then
            boolTomcatWebapps = True
        Else
            boolTomcatWebapps = False
        End If
    End If

    WScript.Echo VbCrLf
    If boolApacheHtdocs = False Then
        WScript.Echo "I will not delete """ & strApacheHtdocsLoc & """."
    End If
    If boolMySQLData = False Then
        WScript.Echo "I will not delete """ & strMySQLDataLoc & """."
    End If
    If boolAddOnTomcat = True Then
        If boolTomcatWebapps = False Then
            WScript.Echo "I will not delete """ & strTomcatWebappsLoc & """."
        End If
    End If
    WScript.Echo VbCrLf
End Sub

Private Function ServiceStatus(strServiceName)
    Dim colServiceList, colItems
    Dim objItem

    Set colServiceList = GetObject("winmgmts:{impersonationLevel=Impersonate,(debug)}!\\.\root\cimv2")
    Set colItems = colServiceList.ExecQuery("SELECT * FROM Win32_Service WHERE name = '" & strServiceName & "'", , 48)

    ServiceStatus = -1
    For Each objItem in colItems
        If objItem.State  = "Stopped" Then
            ServiceStatus = 1
        Else
            ServiceStatus = 0
        End If
    Next
    If ServiceStatus = -1 Then
        ServiceStatus = 2
    End If

    Set colItems = Nothing
    Set colServiceList = Nothing
End Function

Private Sub StopDeinstallServers()
    Dim intServiceStatus, intResult, intI
    Dim strXAMPPCliExec
    Dim arrServers(4, 1)

    arrServers(0, 0) = "apache"
    arrServers(0, 1) = "Apache2.2"
    arrServers(1, 0) = "mysql"
    arrServers(1, 1) = "MySQL"
    arrServers(2, 0) = "filezilla"
    arrServers(2, 1) = "FileZilla Server"
    arrServers(3, 0) = "mercury"
    arrServers(3, 1) = "Mercury"
    arrServers(4, 0) = "tomcat"
    arrServers(4, 1) = "Tomcat6"

    strXAMPPCliExec = objFSO.BuildPath(strXAMPPLocation, "xampp_cli.exe")

    WScript.Echo "Stopping and deinstalling the services, if necessary..."

    For intI = 0 To 4
        intServiceStatus = ServiceStatus(arrServers(intI, 1))
        If intServiceStatus < 2 Then
            If intServiceStatus = 0 Then
                intResult = objWshShell.Run("""" & strCommand & """ /C """"" & strXAMPPCliExec & """ stopservice " & arrServers(intI, 0) & """""", 0, True)
            End If
            intResult = objWshShell.Run("""" & strCommand & """ /C """"" & strXAMPPCliExec & """ deinstallservice " & arrServers(intI, 0) & """""", 0, True)
        End If
        intResult = objWshShell.Run("""" & strCommand & """ /C """"" & strXAMPPCliExec & """ stop " & arrServers(intI, 0) & """""", 0, True)
    Next
End Sub

Private Sub StopCP()
    Dim colProcessList, colItems
    Dim objItem

    WScript.Echo "Stopping the XAMPP Control Panel, if necessary..."

    Set colProcessList = GetObject("winmgmts:{impersonationLevel=Impersonate,(debug)}!\\.\root\cimv2")
    Set colItems = colProcessList.ExecQuery("SELECT * FROM Win32_Process WHERE name = 'xampp-control.exe'")

    For Each objItem in colItems
        objItem.Terminate()
    Next

    Set colItems = Nothing
    Set colProcessList = Nothing
End Sub

Private Sub BackupDataDirs()
    WScript.Echo "Moving data directories to a save location, if necessary..."

    If boolApacheHtdocs = False Then
        If (objFSO.FolderExists(strApacheHtdocsLoc)) Then
            objFSO.MoveFolder strApacheHtdocsLoc, strUninstallTempLoc & "\"
        End If
    End If
    If boolMySQLData = False Then
        If (objFSO.FolderExists(strMySQLDataLoc)) Then
            objFSO.MoveFolder strMySQLDataLoc, strUninstallTempLoc & "\"
        End If
    End If
    If boolAddOnTomcat = True Then
        If boolTomcatWebapps = False Then
            If (objFSO.FolderExists(strTomcatWebappsLoc)) Then
                objFSO.MoveFolder strTomcatWebappsLoc, strUninstallTempLoc & "\"
            End If
        End If
    End If
End Sub

Private Sub RestoreDataDirs()
    Dim strUninstallApacheTempLoc, strMySQLDataTempLoc, strTomcatWebappsTempLoc

    strUninstallApacheTempLoc = objFSO.BuildPath(strUninstallTempLoc, objFSO.GetFileName(strApacheHtdocsLoc))
    strMySQLDataTempLoc = objFSO.BuildPath(strUninstallTempLoc, objFSO.GetFileName(strMySQLDataLoc))
    strTomcatWebappsTempLoc = objFSO.BuildPath(strUninstallTempLoc, objFSO.GetFileName(strTomcatWebappsLoc))

    WScript.Echo "Moving data directories back, if necessary..."

    If boolApacheHtdocs = False Then
        If (objFSO.FolderExists(strUninstallApacheTempLoc)) Then
            If Not (objFSO.FolderExists(objFSO.GetParentFolderName(strApacheHtdocsLoc))) Then
                objFSO.CreateFolder objFSO.GetParentFolderName(strApacheHtdocsLoc)
            End If
            objFSO.MoveFolder strUninstallApacheTempLoc, strApacheHtdocsLoc
        End If
    End If
    If boolMySQLData = False Then
        If (objFSO.FolderExists(strMySQLDataTempLoc)) Then
            If Not (objFSO.FolderExists(objFSO.GetParentFolderName(strMySQLDataLoc))) Then
                objFSO.CreateFolder objFSO.GetParentFolderName(strMySQLDataLoc)
            End If
            objFSO.MoveFolder strMySQLDataTempLoc, strMySQLDataLoc
        End If
    End If
    If boolAddOnTomcat = True Then
        If boolTomcatWebapps = False Then
            If (objFSO.FolderExists(strTomcatWebappsTempLoc)) Then
                If Not (objFSO.FolderExists(objFSO.GetParentFolderName(strTomcatWebappsLoc))) Then
                    objFSO.CreateFolder objFSO.GetParentFolderName(strTomcatWebappsLoc)
                End If
                objFSO.MoveFolder strTomcatWebappsTempLoc, strTomcatWebappsLoc
            End If
        End If
    End If
End Sub

Private Sub DeleteIcons()
    Dim strDesktop, strStartmenu

    strDesktop = objFSO.BuildPath(objWshShell.SpecialFolders("Desktop"), "XAMPP Control Panel.lnk")
    strStartmenu = objFSO.BuildPath(objWshShell.SpecialFolders("Programs"), "XAMPP Lite for Windows")

    WScript.Echo "Deleting startmenu/dektop icons..."

    If (objFSO.FileExists(strDesktop)) Then
        objFSO.DeleteFile strDesktop, True
    End If
    If (objFSO.FolderExists(strStartmenu)) Then
        objFSO.DeleteFolder strStartmenu, True
    End If
End Sub

Private Sub DeleteFiles()
    Dim colFoldersList, colItems
    Dim objItem

    Set colFoldersList = objFSO.GetFolder(strXAMPPLocation)
    Set colItems = colFoldersList.SubFolders

    WScript.Echo "Deleting files and folders..."

    For Each objItem in colItems
        If (objItem.name <> objFSO.GetFileName(strUninstallTempLoc)) Then
'            WScript.Echo objItem.name
            objFSO.DeleteFolder objItem.name, True
        End If
    Next

    Set colItems = colFoldersList.Files
    For Each objItem in colItems
        If (objItem.name <> objFSO.GetFileName(strUninstallBatchFile)) Then
'            WScript.Echo objItem.name
            objFSO.DeleteFile objItem.name, True
        End If
    Next

    Set colItems = Nothing
    Set colFoldersList = Nothing
End Sub

Sub AskSure()
    If (boolAutoUninstall = True) Then
        Exit Sub
    End If

    Wscript.Echo VbCrLf
    Wscript.Echo Chr(7)
    Wscript.Echo "Last change to stop the uninstall process!"
    Wscript.Echo "The services and programs are now stopped and removed."
    Wscript.Echo "Now I will start deleting files..."
    Wscript.Echo VbCrLf
    Do
        WScript.StdOut.Write "                         n" & Chr(13) & "Should I continue? (y/n) "
        strInput = LCase(WScript.StdIn.ReadLine)
    Loop Until ((strInput = "y") Or (strInput = "") Or (strInput = "n"))
    If ((strInput = "n") Or (strInput = "")) Then
        Set objWshShellEnv = Nothing
        Set objFSO = Nothing
        WScript.Quit(1)
    End If
    Wscript.Echo VbCrLf

End Sub

Sub Main()
    TestWScript
    TestLocation
    PrintTitle
    GetNotDelete
    StopDeinstallServers
    StopCP
    AskSure
    DeleteIcons
    BackupDataDirs
    DeleteFiles
    RestoreDataDirs
End Sub

Main
Set objWshShellEnv = Nothing
Set objFSO = Nothing
WScript.Quit(0)
