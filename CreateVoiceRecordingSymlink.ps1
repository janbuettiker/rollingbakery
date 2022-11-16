<#
.Synopsis
   Creates a symlink from Sound Recordings to Downloads for Kiosk Devices

.DESCRIPTION
    When configuring a kiosk, most of the times local folder access is disabled. The Sound recording app
    only saves files to the documents folder which cannot be altered by the app or registry itself.
    Therefore, this remediation script will create the necessary symlink

.EXAMPLE
   powershell.exe -executionpolicy Bypass -file .\Remediate-VoiceRecordingSymlink.ps1

.NOTES
  Version:        1.0
  Author:         Jan Büttiker / baseVISION
  Creation Date:  16.11.2022
  Purpose/Change: Initial script development
#>

$usernameFull = (Get-CimInstance -ClassName Win32_ComputerSystem).UserName
$username = $usernameFull.Split("\")[1]
if (Test-Path -Path "C:\Users\$($username)\Documents\Sound Recordings") {
    New-Item -ItemType Junction -Path  "C:\Users\$($username)\Downloads\Sound Recordings" -Value "C:\Users\$($username)\Documents\Sound Recordings"  
} else {
    New-Item -ItemType Directory -Path "C:\Users\$($username)\Documents\Sound Recordings"
    New-Item -ItemType Junction -Path  "C:\Users\$($username)\Downloads\Sound Recordings" -Value "C:\Users\$($username)\Documents\Sound Recordings"  
}
