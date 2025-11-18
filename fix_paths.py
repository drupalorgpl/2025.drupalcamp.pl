#!/usr/bin/env python3
"""
Script to fix paths in HTML files for GitHub Pages deployment.
Replaces localhost URLs and fixes HTTP/HTTPS issues.
"""

import os
import re
from pathlib import Path

def fix_html_file(file_path):
    """Fix paths in a single HTML file."""
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    original_content = content
    
    # Fix Google Fonts HTTP to HTTPS
    content = content.replace('http://fonts.googleapis.com', 'https://fonts.googleapis.com')
    
    # Fix localhost URLs - need to determine relative path depth
    # Count directory depth from root
    relative_path = Path(file_path).relative_to(Path.cwd())
    depth = len(relative_path.parents) - 1
    
    # Create appropriate relative path prefix
    if depth == 0:
        rel_prefix = '.'
    else:
        rel_prefix = '/'.join(['..'] * depth)
    
    # Replace localhost URLs
    content = re.sub(
        r'href="http://droopler\.localhost/pl"',
        f'href="{rel_prefix}/pl"',
        content
    )
    content = re.sub(
        r'href="http://droopler\.localhost/en"',
        f'href="{rel_prefix}/en"',
        content
    )
    content = re.sub(
        r'href="http://droopler\.localhost/"',
        f'href="{rel_prefix}/"',
        content
    )
    content = re.sub(
        r'href="http://droopler\.localhost"',
        f'href="{rel_prefix}"',
        content
    )
    
    # Fix absolute paths that start with / to be relative
    # This is trickier - only fix paths to our local resources
    if depth > 0:
        # Fix paths like /core/, /sites/, /modules/, /profiles/, /themes/
        for resource_dir in ['core', 'sites', 'modules', 'profiles', 'themes']:
            pattern = f'(href|src)="/{resource_dir}/'
            replacement = f'\\1="{rel_prefix}/{resource_dir}/'
            content = re.sub(pattern, replacement, content)
    
    # Only write if content changed
    if content != original_content:
        with open(file_path, 'w', encoding='utf-8') as f:
            f.write(content)
        return True
    return False

def main():
    """Process all HTML files in the current directory and subdirectories."""
    cwd = Path.cwd()
    html_files = list(cwd.rglob('*.html'))
    
    print(f"Found {len(html_files)} HTML files")
    fixed_count = 0
    
    for html_file in html_files:
        try:
            if fix_html_file(html_file):
                fixed_count += 1
                print(f"Fixed: {html_file.relative_to(cwd)}")
        except Exception as e:
            print(f"Error processing {html_file}: {e}")
    
    print(f"\nProcessed {len(html_files)} files, fixed {fixed_count} files")

if __name__ == '__main__':
    main()

