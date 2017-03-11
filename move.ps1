
 Set-ExecutionPolicy -Scope "CurrentUser" -ExecutionPolicy "Unrestricted"
 
$src = "D:\SEM-1\Client side\ClientSide Project\Restaurant_Order\source"
$dst = "D:\SEM-1\Client side\ClientSide Project\Restaurant_Order\merge"

Get-ChildItem $src -Filter "*.xml" -Recurse | % {
    #Creates an empty file at the destination to make sure that subfolders exists
    #New-Item -Path $_.FullName.Replace($src,$dst) -ItemType File -Force
    Move-Item -Path $_.FullName -Destination $_.FullName.Replace($src,$dst) -Force}