import os

files = ['login.php', 'signup.php', 'create-account.php']

for file in files:
    with open(file, 'r', encoding='utf-8') as f:
        lines = f.readlines()
        
    start_idx = -1
    end_idx = -1
    for i, line in enumerate(lines):
        if '<?php' in line and start_idx == -1:
            start_idx = i
        if '?>' in line and start_idx != -1 and end_idx == -1:
            end_idx = i
            break
            
    if start_idx != -1 and end_idx != -1:
        php_lines = lines[start_idx:end_idx+1]
        del lines[start_idx:end_idx+1]
        new_lines = php_lines + ['\n'] + lines
        
        with open(file, 'w', encoding='utf-8') as f:
            f.writelines(new_lines)
        print(f"Fixed {file}")
