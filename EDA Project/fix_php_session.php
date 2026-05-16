<?php
$files = ['login.php', 'signup.php', 'create-account.php'];

foreach ($files as $file) {
    $lines = file($file);
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
        $php_lines = array_slice($lines, $start_idx, $end_idx - $start_idx + 1);
        array_splice($lines, $start_idx, $end_idx - $start_idx + 1);
        
        $new_lines = array_merge($php_lines, ["\n"], $lines);
        file_put_contents($file, implode("", $new_lines));
        echo "Fixed $file\n";
    }
}
