# Update all dropdown menus to add "Previous Semesters" link
# Read bytes to preserve encoding

$folder = 'e:\Books'
$files = Get-ChildItem -Path $folder -Include '*.php','*.html' -File | Where-Object { $_.DirectoryName -eq $folder }

# The link to add (no emoji to avoid encoding issues - will use HTML entity)
$prevLink = '<a href="previous-semesters.php">&#128194; Previous Semesters</a>'

foreach ($file in $files) {
    # Skip the previous-semesters.php itself and the update script
    if ($file.Name -eq 'update_dropdowns.ps1') { continue }
    
    $bytes = [System.IO.File]::ReadAllBytes($file.FullName)
    $content = [System.Text.Encoding]::UTF8.GetString($bytes)
    $original = $content
    
    # Skip if already has previous-semesters link
    if ($content.Contains('previous-semesters.php')) {
        Write-Host "Skipped (already done): $($file.Name)"
        continue
    }
    
    # Skip if file doesn't have any dropdown
    if (-not $content.Contains('dropdown-menu')) {
        Write-Host "Skipped (no dropdown): $($file.Name)"
        continue
    }
    
    $changed = $false
    
    # ===== NAVBAR DROPDOWN =====
    # Pattern A: Multi-line with proper indentation (most files)
    # Looking for: <a href="second.php">Second Year</a>\r\n                    </div>
    $navPatterns = @(
        # 20 spaces before </div>
        @('<a href="second.php">Second Year</a>' + "`r`n" + '                    </div>' + "`r`n" + '                </li>',
          '<a href="second.php">Second Year</a>' + "`r`n" + ('                        ' + $prevLink) + "`r`n" + '                    </div>' + "`r`n" + '                </li>'),
        # 24 spaces before </div> (some files)
        @('<a href="second.php">Second Year</a>' + "`r`n" + '                        </div>' + "`r`n" + '                    </li>',
          '<a href="second.php">Second Year</a>' + "`r`n" + ('                            ' + $prevLink) + "`r`n" + '                        </div>' + "`r`n" + '                    </li>'),
        # Single-line inline pattern
        @('<a href="second.php">Second Year</a></div></li>',
          '<a href="second.php">Second Year</a>' + $prevLink + '</div></li>')
    )
    
    foreach ($pair in $navPatterns) {
        if ($content.Contains($pair[0])) {
            $content = $content.Replace($pair[0], $pair[1])
            $changed = $true
            break
        }
    }
    
    # ===== FOOTER DROPDOWN =====
    $footerPatterns = @(
        # 24 spaces before </div>
        @('<a href="second.php">Second Year</a>' + "`r`n" + '                        </div>' + "`r`n" + '                    </div>',
          '<a href="second.php">Second Year</a>' + "`r`n" + ('                            ' + $prevLink) + "`r`n" + '                        </div>' + "`r`n" + '                    </div>'),
        # 28 spaces 
        @('<a href="second.php">Second Year</a>' + "`r`n" + '                            </div>' + "`r`n" + '                        </div>',
          '<a href="second.php">Second Year</a>' + "`r`n" + ('                                ' + $prevLink) + "`r`n" + '                            </div>' + "`r`n" + '                        </div>')
    )
    
    foreach ($pair in $footerPatterns) {
        if ($content.Contains($pair[0])) {
            $content = $content.Replace($pair[0], $pair[1])
            $changed = $true
            break
        }
    }
    
    if ($changed) {
        $utf8NoBom = New-Object System.Text.UTF8Encoding $false
        [System.IO.File]::WriteAllText($file.FullName, $content, $utf8NoBom)
        Write-Host "Updated: $($file.Name)"
    } else {
        Write-Host "No match found: $($file.Name)"
    }
}
Write-Host "`nDone!"
