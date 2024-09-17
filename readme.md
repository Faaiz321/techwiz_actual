<!-- to convert file from html to php run this command -->

Get-ChildItem -Filter *.html | ForEach-Object {
    $newName = $_.Name -replace '\.html$', '.php'
    Rename-Item -Path $_.FullName -NewName $newName
}