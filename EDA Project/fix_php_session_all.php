<?php
$dir = new RecursiveDirectoryIterator('.');
$ite = new RecursiveIteratorIterator($dir);
$files = new RegexIterator($ite, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);

foreach($files as $file) {
    $filePath = $file[0];
    if (strpos($filePath, 'fix_php_session') !== false) continue;
    
    $lines = file($filePath);
    if ($lines === false || empty($lines)) continue;
    
    // Check if file starts with <?php
    if (strpos(trim($lines[0]), '<?php') === 0) {
        continue; // Already at the top
    }
    
    $start_idx = -1;
    $end_idx = -1;
    
    foreach ($lines as $i => $line) {
        if (strpos($line, '<?php') !== false && $start_idx == -1) {
            $start_idx = $i;
        }
        if (strpos($line, '?>') !== false && $start_idx != -1 && $end_idx == -1) {
            $end_idx = $i;
            break;
        }
    }
    
    if ($start_idx != -1 && $end_idx != -1) {
        // Double check if session_start or header is in this block to ensure we are moving the right block
        $block = implode("", array_slice($lines, $start_idx, $end_idx - $start_idx + 1));
        if (strpos($block, 'session_start') !== false || strpos($block, 'header(') !== false) {
            $php_lines = array_slice($lines, $start_idx, $end_idx - $start_idx + 1);
            array_splice($lines, $start_idx, $end_idx - $start_idx + 1);
            
            // Clean up leading spaces on <?php
            $php_lines[0] = "<?php\n";
            
            $new_lines = array_merge($php_lines, ["\n"], $lines);
            file_put_contents($filePath, implode("", $new_lines));
            echo "Fixed $filePath\n";
        }
    }
}
