<?php
copy('dir1/text.txt', 'dir2/text.txt');
unlink ('dir1/text.txt');
echo "файл перемещен";